<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Album;
use App\Models\Impact;
use App\Models\Gallery;
use App\Models\Contact;
use App\Models\Donation;
use App\Models\FAQDetail;
use App\Mail\DonationMail;
use App\Models\Subcategory;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\DocumentDetail;
use App\Models\CampaignDetail;
use Illuminate\Support\Facades\DB;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\CommonConstant\CommonConstant;


class EmailController extends Controller{


    public static function donationSuccessMail($email_data){
        // \Log::info($email_data['to']);
        // self::sendSimpleMail($email_data);
        self::sendMailFromMsg91($email_data);
        // self::composeEmail($email_data);
        // try {
        //     config([
        //         'mail.driver' => 'smtp',
        //         'mail.host' => 'smtp.gmail.com',
        //         'mail.port' => 587,
        //         'mail.username' => CommonConstant::msgKey()['MAIL_GUSERNAME'],
        //         'mail.password' => CommonConstant::msgKey()['MAIL_GPASSWORD'],
        //         'mail.encryption' => 'tls',
        //         'mail.verify_peer' => false,
        //         'mail.verify_peer_name' => false,
        //         'mail.allow_self_signed' => true
        //     ]);
        //     Mail::send(new DonationMail($email_data));
        //     return true;
        // } catch (\Exception $e) {
        //     \Log::info($e);
        //     return false;
        // }
    }
    
    public static function composeEmail($data) {
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions
        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.mailer91.com';             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = CommonConstant::msgKey()['MAIL_USERNAME'];   //  sender username
            $mail->Password = CommonConstant::msgKey()['MAIL_PASSWORD'];       // sender password
            $mail->SMTPSecure = 'ssl';                  // encryption - ssl/tls
            $mail->Port = 465;                          // port - 587/465
            $mail->verify_peer = false;                
            $mail->verify_peer_name = false;           
            $mail->allow_self_signed = true;
 
            $mail->setFrom(CommonConstant::msgKey()['MAIL_USERNAME'], CommonConstant::msgKey()['MAIL_NAME']);
            $mail->addAddress($data['to']);
            
            if($data['attachment_file']){
                $mail->addAttachment($data['attachment_file']);
            }
 
            $mail->isHTML(true);                // Set email content format to HTML
 
            $mail->Subject = $data['subject'];

            $body = `<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Akino Foundation</title>
            </head>
            <body>
                
                <h4>Dear `.$data['doner'].`,</h4>
                <p>I hope you are doing well, On behalf of <strong>Akino Foundation</strong>; I extend our deepest gratitude for your incredibly generous donation of INR `.$data['amount'].` to support our Skill Development Project at our website.&nbsp;</p>
                <p>Your commitment to empowering individuals through skill development is truly commendable, and we are immensely grateful for your support. With your contribution, we can continue our efforts to create opportunities for growth and learning within our community for needy children and youth.</p>
                <p>Your belief in our mission fuels our determination to make a meaningful impact.</p>
                <p>&nbsp;This is an acknowledgment that we have received your support and we assure you that every penny will be utilized efficiently to maximize the positive outcomes of our Education &amp; Skill Development Project.</p>
                <p>Once again, thank you for being a vital part of our journey towards a more empowered and skilled society. We look forward to keeping you updated on the progress and outcomes made possible by your kindness.</p>
                <p>Please find your 80G Certificate in the attachment.</p>
                
                <p>We appreciate your support and patience.</p>
                <p><br></p>
                <p>Best Regards</p>
                <p>Team Akino Foundation</p>
                <p><img src="https://akinofoundation.org/assets/img/gallery/akino.webp" alt="Akino Foundation" style="width:150px"></p>
                
            </body>
            </html>`;
            $mail->isHTML(true);
            $mail->Body    = $body;
 
            if( !$mail->send() ) {
                \Log::info($mail->ErrorInfo);
                return false;
            }else {
                return true;
            }
 
        } catch (Exception $e) {
            \Log::info($e);
            return false;
        }
    }
    
    public static function sendSimpleMail($data){
        
        $to = $data['to'];
        $subject = $data['subject'];
        $doner_id = encrypt($data["doner_id"]);
        $download = '<a href="https://akinofoundation.org/pdf/80g/certificate/'.$doner_id.'">download</a>';
        $htmlContent = '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Akino Foundation</title>
            </head>
            <body>
                <h4>Dear '.$data["doner"].' ,</h4>
                <p>I hope you are doing well, On behalf of <strong>Akino Foundation</strong>; I extend our deepest gratitude for your incredibly generous donation of INR '.$data["amount"].' to support our Skill Development Project at our website.&nbsp;</p>
                <p>Your commitment to empowering individuals through skill development is truly commendable, and we are immensely grateful for your support. With your contribution, we can continue our efforts to create opportunities for growth and learning within our community for needy children and youth.</p>
                <p>Your belief in our mission fuels our determination to make a meaningful impact.</p>
                <p>&nbsp;This is an acknowledgment that we have received your support and we assure you that every penny will be utilized efficiently to maximize the positive outcomes of our Education &amp; Skill Development Project.</p>
                <p>Once again, thank you for being a vital part of our journey towards a more empowered and skilled society. We look forward to keeping you updated on the progress and outcomes made possible by your kindness.</p>
                <p>Please find your 80G Certificate click here to '.$download.'</p>
                <p>We appreciate your support and patience.</p>
                <p><br></p>
                <p>Best Regards</p>
                <p>Team Akino Foundation</p>
                <p><img src="https://akinofoundation.org/assets/img/gallery/akino.webp" alt="Akino Foundation" style="width:150px"></p>
            </body>
            </html>';
            
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <no-reply@akinofoundation.org>' . "\r\n";
        
        if(mail($to, $subject, $htmlContent, $headers)){ 
            // echo 'Email has sent successfully.'; 
        }else{ 
        //   echo 'Email sending failed.'; 
        }
         
         
    }
    
    public static function sendMailFromMsg91($data){
        $doner_id = encrypt($data["doner_id"]);
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://control.msg91.com/api/v5/email/send',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>json_encode([
                'recipients' => [
                    [
                    'to' => [
                            [ 'name' => $data["doner"], 'email' => $data["to"] ]
                        ],
                        
                        'variables' => ['VAR1'=>$data["doner"], 'VAR2'=>$data["amount"], 'var3'=>$doner_id]
                    ],
                ],
                'from' => [
                    'name' => 'Akino Foundation',
                    'email' => 'no_reply@akinofoundation.org'
                ],
                // 'attachments' => [
                //     ["filePath"=>$data['attachment_file'], "fileName"=>"Akino Foundation 80G Certificate"],
                //     ["file"=>"File in Data URI format data:content/type;base64,<data>.", "fileName"=>"Akino Foundation 80G Certificate"]
                // ],
                'domain' => 'akinofoundation.org',
                'reply_to' => [
                    [
                            'email' => 'info@akinofoundation.org'
                    ],
                    [
                            'email' => 'info@akinofoundation.org'
                    ]
                ],
                
                'template_id' => 'thank_you_for_donation_to_akino_foundation',
                
              ]),
          CURLOPT_HTTPHEADER => array(
            'authkey: 416950AIOIuF9my65dc52cdP1',
            'Accept: application/json',
            'Content-Type: application/json'
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        // echo $response;

    }
    

   
}
