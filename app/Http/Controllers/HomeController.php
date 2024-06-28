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
use App\Models\CompaignCategory;
use App\Models\Donation;
use App\Models\Blog;
use App\Models\ActivityDetail;
use App\Models\OurWorkDetail;
use App\Models\Subsubcategory;
use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\CommonConstant\CommonConstant;


class HomeController extends Controller{


    public function index(Request $request){
        $activity =  ActivityDetail::where('is_active', 'active')->orderBy('created_at', 'desc')->limit(6)->get();
        $test = Testimonial::where('is_active', 'active')->get();
        $blog= Blog::where('is_active','active')->get();
        $faqs = FAQDetail::all();
        $impact = Impact::where('is_active', 'active')->get();
        $campaigns = CampaignDetail::where('is_active', 'active')->where('is_direct', '0')->orderBy("id", 'desc')->get();
        if($campaigns){
            foreach ($campaigns as $item) {
                $item->category_detail = Subcategory::find($item->campiagn_type);
                $payments = DB::select("SELECT * FROM donation where campaign_id = ".$item->id);
                $raise_fund=0;$fund_percentage=0;
                $count=0;$fundcomplete=false;
                if($payments){
                    foreach ($payments as $key => $value) {
                        # code...
                        $count = $count + 1;
                        if(strtolower($value->transaction_status) == "success"){
                            $raise_fund = $raise_fund + $value->donation_amount;
                        }
                    }
                }
                $fund_percentage = ($raise_fund/$item->fund_amount)*100;
                if($item->fund_amount <= $raise_fund){
                    $fundcomplete = true;
                }
                $item->raise_fund = $raise_fund;
                $item->count_total = $count;
                $item->fund_percentage = $fund_percentage;
                $item->fundcomplete = $fundcomplete;
            }
        }
        // return $campaigns;
        $directCampaigns = CampaignDetail::where('is_active', 'active')->where('is_direct', '1')->orderBy("id", 'desc')->get();
        // return $campaigns;
        return view('index', ["impact"=>$impact, "directCamp"=>$directCampaigns, "campaigns"=>$campaigns, "faqs" => $faqs, "test"=> $test,"blog"=>$blog ,"activity" => $activity]);
    }
    public function about(Request $request){
        
        return view('about');
    }
    public function privacy(Request $request){
        
        return view('privacy');
    }
    public function donateconform(){
        return view('donateconform');
    }
    public function founder(){
        return view('founder');
    }
    public function condition(Request $request){  
        return view('condition');
    }
    public function allcamp(Request $request,$id){
        $campaigns = CampaignDetail::where('is_active', 'active')->where('is_direct', '0')->orderBy("id", 'desc')->get();
        if($campaigns){
            foreach ($campaigns as $item) {
                $item->category_detail = Subcategory::find($item->campiagn_type);
                $payments = DB::select("SELECT * FROM donation where campaign_id = ".$item->id);
                $raise_fund=0;$fund_percentage=0;
                $count=0;$fundcomplete=false;
                if($payments){
                    foreach ($payments as $key => $value) {
                        # code...
                        $count = $count + 1;
                        if(strtolower($value->transaction_status) == "success"){
                            $raise_fund = $raise_fund + $value->donation_amount;
                        }
                    }
                }
                $fund_percentage = ($raise_fund/$item->fund_amount)*100;
                if($item->fund_amount <= $raise_fund){
                    $fundcomplete = true;
                }
                $item->raise_fund = $raise_fund;
                $item->count_total = $count;
                $item->fund_percentage = $fund_percentage;
                $item->fundcomplete = $fundcomplete;
            }
        }
        $id = Crypt::decrypt($id);
        $camp = CompaignCategory::find($id);
        // $gallery =  DB::select("SELECT * FROM gallery_details where is_active = 'active' and album_id = ".$id." and type='campaign' limit 8");
        // $directCampaigns = CampaignDetail::where('is_active', 'active')->where('is_direct', '1')->orderBy("id", 'desc')->get();
      
        return view('allcampaign', ["campaigns"=>$campaigns , "camp"=>$camp ] );
    }
    public function workdetail(Request $request,$subcategory_id){
        try {
            $SubcategoryId = Crypt::decrypt($subcategory_id);

            $work = OurWorkDetail::where('subcategory_id', $SubcategoryId)->first();
            $workId = $work->id;
       
            $testimonials = Testimonial::where('is_active', 'active')->get();
            $gallery =  DB::select("SELECT * FROM gallery_details where is_active = 'active' and album_id = ".$workId." and type='ourwork'");
         
      
                return view('workdetail', [
                    "testimonial" => $testimonials,
                    "work" => $work,
                    "gallery"=>  $gallery,
                ]);

            
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            abort(404); 
        }
       
    }
    public function worksubcat(Request $request,$id){
        try {
         
            $SubcategoryId = Crypt::decrypt($id);
            $work = Subsubcategory::where('id', $SubcategoryId)->first();
            $testimonials = Testimonial::where('is_active', 'active')->get();
            $gallery =  DB::select("SELECT * FROM gallery_details where is_active = 'active' and album_id = ".$SubcategoryId." and type='ourwork' limit 8");
            return view('workdetail', [
                "testimonial" => $testimonials,
                "work" => $work,
                "gallery"=>  $gallery,
            ]);
    

    } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
        abort(404); 
    }
}

    public function contact(Request $request){
        
        return view('contact');
    }
    public function volunteering(Request $request){
        
        return view('volunteerning');
    }

    public function activity(Request $request){
        $activity = ActivityDetail::where('is_active', 'active');

        if(isset($_GET['search'])){
            $activity = $activity->where("title", "like", "%".$_GET['search']."%");
        }
        
        $activity = $activity->orderBy("id", "desc")->get();
        return view('activity', ["activity" => $activity]);

    }

    public function filterByMonth(Request $request)
    {
        
        $request->validate([
            'selected_month' => 'required|date_format:Y-m',
        ]);
        $selectedMonth = $request->input('selected_month');
        $activity = ActivityDetail::whereRaw('MONTH(activity_date) = ?', [date('m', strtotime($selectedMonth))])
            ->get();
        return view('activity', compact('activity'));
    }
    public function blogdetail(Request $request, $id){
        
        $blog = Blog::find($id);
        // You can now use the $blog variable to pass data to the 'blogdetail' view
        return view('blogdetail', ['blog' => $blog]);
    }
    
    public function activitydetail(Request $request, $encryptedId)
    {
            $id = Crypt::decrypt($encryptedId);
            
            $activity = ActivityDetail::find($id);
            $gallery =  DB::select("SELECT * FROM gallery_details where is_active = 'active' and album_id = ".$id." and type='activity' limit 10");

            return view('activitydetail', ["activity" => $activity, "gallery"=>$gallery]);
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

    public function donate(Request $request){
        
        $test = Testimonial::where('is_active', 'active')->get();
        return view('donate', ["testimonial"=>$test]);
    }

    public function gallery(Request $request){
        
        $album = Album::where('is_active', 'active')->get();
        foreach($album as $al){
            $gallery_count = DB::select("SELECT count(*) as count FROM gallery_details where album_id = ".$al->id);
            $al->count = $gallery_count[0]->count;
            $al->gallery = DB::select("SELECT * FROM gallery_details where is_active = 'active' and album_id = ".$al->id." limit 4");
        }
        return  view('gallery', ["albums"=>$album]);
    }

    public function ngogalary($id, $type){
        if($type!=null || $type!=""){
            if($type=="activity"){
                $album = ActivityDetail::find(decrypt($id));
                $album->name = $album->title;
            }else{
                $album = Album::find(decrypt($id));
            }
        }else{
            $album = Album::find(decrypt($id));
        }
        $gallery_count = DB::select("SELECT count(*) as count_gallery FROM gallery_details where type='$type' and album_id = ".decrypt($id));
        $album->count = $gallery_count[0]->count_gallery;
        $album->gallery = DB::select("SELECT * FROM gallery_details where type='$type' and is_active = 'active' and album_id = ".decrypt($id));
        return view('ngogarlary', ["album"=>$album]);

    }

    public function contactusForm(Request $request){
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

    public function createDonation_old(Request $request){
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

    public static function createOrderOnRazorPay($apiParameter){
        $headers = [
            "Content-Type:application/json",
            "Authorization:Basic ".CommonConstant::msgKey()['RAZOR_AUTH_TOKEN'],
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, CommonConstant::msgKey()['RAZOR_CREATE_ORDER_ID']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_ENCODING, "");
        curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_HTTP_VERSION,CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        if ($apiParameter!='') {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $apiParameter);
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        
        curl_close($ch);
        return json_decode($result);
    
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

        $data = '{
            "amount": "'.$request->data['donation_amount'].'00",
            "currency": "INR",
            "receipt": "receipt#'.$donation->id.'",
            "notes": {
            "key1": "note",
            "key2": "note"
            }
        }';

        $order_id="";
        $order = self::createOrderOnRazorPay($data);
        if($order){
            $order_id = $order->id;
        }

        return ["status"=>"success", "donation_id"=>$donation->id, "order_id"=>$order_id];
    }
    public function paymentSuccess($payment_id, $donation_id, $status){
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
            $address = $donation->address . ' ' . $donation->city . ' ' . $donation->state . ' ' . $donation->country;
            // $file = PdfController::generate80GCertificate($donation->full_name, $donation->mobile, $donation->pancard, $address, $donation->id, $donation->created_at, $donation->donation_amount);
            self::paymentSuccessMail($donation, '');
            // self::paymentSuccessMail($donation);
            // unlink($file);
        }
        return ["status"=>"success", "donation"=>$donation];
    }

    public static function paymentSuccessMail($donation, $file){
        $email_data =
            [
                'doner_id' => $donation->id,
                'doner' => $donation->full_name,
                'amount' => $donation->donation_amount."/-",
                'owner_email' => $donation->email,
                "to" => $donation->email,
                "subject" => "Thank you for donation to Akino Foundation",
                "cc" => "",
                "bcc" => "",
                "attachment_file" => $file
            ];
        EmailController::donationSuccessMail($email_data);
        
    }

    public function confirmDonation($status, $razorpay_payment_id){
        $donation = Donation::where('transaction_id', $razorpay_payment_id)->first();
        return view('donation.donation_success', ["donation"=>$donation]);
    
    }



   
   
}
