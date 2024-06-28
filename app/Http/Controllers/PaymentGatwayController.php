<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subcategory;
use App\Models\Album;
use App\Models\Gallery;
use App\Models\Contact;
use App\Models\Testimonial;
use App\Models\FAQDetail;
use App\Models\Impact;
use App\Models\DocumentDetail;
use App\Models\CampaignDetail;
use App\Models\Donation;
use App\Http\Controllers\EmailController;


class PaymentGatwayController extends Controller{

    public function phonepePaymentInit(Request $request){

        $donation = new Donation;
        $transId = rand(111111,999999);
        $donation->campaign_id = $request->campaign_id;
        $donation->donation_type = $request->donation_type;
        $donation->donation_amount = $request->donationAmount;
        $donation->full_name = $request->donor_name;
        $donation->pancard = $request->donor_pancard;
        $donation->email = $request->donor_email;
        $donation->mobile = $request->donor_phone;
        $donation->address = $request->donor_address;
        $donation->city = $request->donor_city;
        $donation->state = $request->donor_state;
        $donation->country = $request->country;
        $donation->order_id = $transId;
        $donation->status = "pending";
        $donation->save();

        \Session::put("phonepesession", $donation);
        return self::phonepePaymentProcees($donation, $transId);
        echo "success";
    }

    public static function phonepePaymentProcees($request, $transId){
        
        $jayParsedAry = [
            "merchantId"            =>  'AKINOONLINE',
            "merchantTransactionId" =>  $transId,//rand(111111,999999),
            "merchantUserId"        =>  'MUID' . time(),
            "amount"                =>  ($request->donation_amount * 100),
            "redirectUrl"           =>  'https://akinofoundation.org/redirect-url',
            "redirectMode"          =>  "POST",
            "callbackUrl"           =>  'https://akinofoundation.org/callback-url',
            "mobileNumber"          =>  $request->mobile,
            "paymentInstrument"     =>  [   "type" => "PAY_PAGE"    ]
        ];
        $encode = json_encode($jayParsedAry);
        $encoded = base64_encode($encode);
        $key = '3d7b9d51-9275-4cc2-9065-b39819b17570'; // KEY
        $key_index = 1; // KEY_INDEX
        $string = $encoded . "/pg/v1/pay".$key;
        $sha256 = hash("sha256", $string);
        $final_x_header = $sha256 . '###'.$key_index;
        $url = "https://api.phonepe.com/apis/hermes/pg/v1/pay";
        $headers = array(
            "Content-Type: application/json",
            "accept: application/json",
            "X-VERIFY: " . $final_x_header,
        );
        $data = json_encode(['request' => $encoded]);
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        $resp = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($resp);
        
        if($response->success == false){
            self::paymentFailedMailFromPhonePe($response);
            return back()->with("msg", "Something went wrong. Please try after some time");
        }

       $newUrl = $response->data->instrumentResponse->redirectInfo->url;
       header("Location: ".$newUrl);

        return redirect($response->data->instrumentResponse->redirectInfo->url);

    }

    public function redirectUrlPhonepe(Request $request){
        
        $key = '3d7b9d51-9275-4cc2-9065-b39819b17570'; // KEY
        $key_index = 1; 
        $response = $_POST; 
        $final_x_header = hash("sha256", "/pg/v1/status/" . $response['merchantId'] . "/" . $response['transactionId'] . $key) . "###" . $key_index;
        $url = "https://api.phonepe.com/apis/hermes/pg/v1/status/".$response['merchantId']."/".$response['transactionId']; 
        $headers = array(
            "Content-Type: application/json",
            "accept: application/json",
            "X-VERIFY: " . $final_x_header,
            "X-MERCHANT-ID:". "AKINOONLINE"
        );
        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        $resp = curl_exec($curl);
        curl_close($curl);
       
       $responsePayment = json_decode($resp, true);

       $dnt = Donation::where('order_id', $responsePayment['data']['merchantTransactionId'])->first();
       $dnt->status = "Success";
       $dnt->transaction_id = $responsePayment['data']['transactionId'];
       $dnt->transaction_status = $responsePayment['data']['responseCode'];
       $dnt->save();
       $status = "success";
       if($responsePayment['data']['responseCode'] == "SUCCESS"){
        self::paymentSuccessMail($dnt);
        $status = "success";
       }else{
        $status = "falied";
       }

       return redirect('/')->with(['status'=>$status]);
        
    }

    public function campaign($id){
        $campaigns = CampaignDetail::find(decrypt($id));
        if($campaigns){
            $campaigns->category_detail = Subcategory::find($campaigns->campiagn_type);
            $payments = DB::select("SELECT * FROM donation where campaign_id = ".$campaigns->id);
            $raise_fund=0;$fundcomplete=false;
            $count=0;$fund_percentage=0;
            if($payments){
                foreach ($payments as $key => $value) {
                    # code...
                    $count = $count + 1;
                    if(strtolower($value->transaction_status) == "success"){
                        $raise_fund = $raise_fund + $value->donation_amount;
                    }
                }
                $fund_percentage = ($raise_fund/$campaigns->fund_amount)*100;
            }
            if($campaigns->fund_amount <= $raise_fund){
                $fundcomplete = true;
            }
            $campaigns->raise_fund = $raise_fund;
            $campaigns->count_total = $count;
            $campaigns->fund_percentage = $fund_percentage;

        }
        $campaigns->documents = DocumentDetail::where('campaign_id', $campaigns->id)->where('is_active', 'active')->get();
        return view('campaign', ["campaign"=>$campaigns, "fundcomplete"=>$fundcomplete]);
    }

    public function contactusForm(Request $request){
        // return $request;

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->name;
        $contact->phone = $request->phone;
        $contact->location = $request->location;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        $to = "no_reply@akinofoundation.org";
        $subject = "New Enquiry from website";

        $message = "
        <html>
        <head>
        <title>New Enquiry from website</title>
        </head>
        <body>
        <p>New Enquiry from website. Date: ".date('d M Y')."</p>
        <table>
        <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Location</th>
        <th>Subject</th>
        <th>Message</th>
        </tr>
        <tr>
        <td>".$contact->name."</td>
        <td>".$contact->email."</td>
        <td>".$contact->phone."</td>
        <td>".$contact->location."</td>
        <td>".$contact->subject."</td>
        <td>".$contact->message."</td>
        </tr>
        </table>
        </body>
        </html>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <info@akinofoundation.org>' . "\r\n";
        // $headers .= 'Cc: myboss@example.com' . "\r\n";

        mail($to,$subject,$message,$headers);

        return back()->with("msg", "Thank you! one of my team will back to you.");
    }

    public function createDonation(Request $request){
        // return $request->data['campaign_id'];
        $donation = new Donation;
        $donation->campaign_id = $request->data['campaign_id'];
        $donation->donation_type = $request->data['donation_type'];
        $donation->donation_amount = $request->data['donation_amount'];
        $donation->full_name = $request->data['full_name'];
        $donation->pancard = $request->data['pancard'];
        $donation->email = $request->data['email'];
        $donation->mobile = $request->data['mobile'];
        $donation->address = $request->data['address'];
        $donation->city = $request->data['city'];
        $donation->state = $request->data['state'];
        $donation->country = $request->data['country'];
        $donation->status = $request->data['status'];
        $donation->save();

        return ["status"=>"success", "donation_id"=>$donation->id];
    }

    public static function paymentSuccess($payment_id, $donation_id, $status){
        $donation = Donation::find($donation_id);
        $donation->transaction_id = $payment_id;
        if($status == "success"){
            $donation->transaction_status = "Success";
            $donation->status = "Success";
        }else{
            $donation->transaction_status = "Failed";
            $donation->status = "Pending";
        }
        $donation->save();
        if($status == "success"){
            self::paymentSuccessMail($donation);
        }
        return back();
    }

    public static function paymentSuccessMail($donation){
        $email_data =[
            'doner' => $donation->full_name,
            'amount' => $donation->donation_amount."/-",
            'owner_email' => $donation->email,
            "to" => $donation->email,
            "subject" => "Thank you for donation to Akino Foundation",
            "cc" => "",
            "bcc" => "",
            "attachment_file" => ""
        ];
        EmailController::donationSuccessMail($email_data);
        
    }
      
    public static function paymentFailedMailFromPhonePe($response){
        
        $subject = "There are some problem to create payment from phonepe for Akino";
        $to = "info@akinofoundation.org";
        $message = "
        <html>
        <head>
        <title>There are some problem to create payment from phonepe for Akino</title>
        </head>
        <body>
        <p>Dear Akino</p><br>
        <p>There are some problem to create payment from phonepe for Akino</p>
        <p>".$response->code." - ".$response->message."</p>
        </body>
        </html>";
        
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
        // More headers
        $headers .= 'From: <no_reply@akinofoundation.org>' . "\r\n";
        $headers .= 'Cc: durgeshpandey1310@gmail.com' . "\r\n";
        
        mail($to,$subject,$message,$headers);
        
    }

    public function sendMail(){
        $email_data =
            [
                'doner' => "Durgesh Pandey",
                'amount' => "1500/-",
                'owner_email' => "durgeshpandey1310@gmail.com",
                "from" => "durgesh@whizzact.com", 
                "to" => "durgeshpandey1310@gmail.com",
                "subject" => "Testing Mail From Akino Foundation",
                "cc" => "durgeshpandey215@gmail.com",
                "bcc" => "whizzactsolution@gmail.com",
                "attachment_file" => ""
            ];
        return EmailController::donationSuccessMail($email_data);

    }

   
}
