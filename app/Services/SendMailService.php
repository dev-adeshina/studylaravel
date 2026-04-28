<?php 

namespace App\Services;


use App\Models\Contact;
use App\Models\Applicant;
use App\Models\Subscriber;
use App\Enums\SubscriberState;
use App\Enums\AdminInfo;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Helper\MessageConstruct;
use App\Models\SubscriberToken;
use Illuminate\Support\Carbon;

class SendMailService {

    function mailApplicantInformation (array $applicantInfo) 
    {
        $applicant = DB::transaction(function() use ($applicantInfo) {
            return Applicant::create($applicantInfo);
        });

        $this->sendToAdmin($applicant);
        $this->sendToApplicant($applicant);

        
    }


    function subscribeApplicant(array $data) {

        $result =  DB::transaction(function() use ($data) {
            // step one 
            $token = Str::random(64);
            
            // step two 

            $subscriber = Subscriber::create([
                'email' => $data['email'],
                'ip_address' => $data['ip_address'],
                'signup_source' => $data['signup_source'],
                'status'    => SubscriberState::PENDING
            ]);

            // step three

            $subscriber->token()->create([
                'token' => $token
            ]);

            return [
                'subscriber' => $subscriber,
                'token'      => $token
            ];

        });
        
        // send the automated email for token here
        $messageData = [
            'greetings'    => 'Hello!',
            'title'        => 'Confirm Your Subscription',
            'lead'         => 'You are one step away from joining our community.',
            'body'         => 'Please click the link below to verify your email address: :url',
            'placeholders' => ['url' => url('/verify/' . $result['token'])]
        ];

        $message = new MessageConstruct();
        $composedContent = $message->messageContent($messageData);

        Mail::to($data['email'])->send(new SendMail(['content' => $composedContent], 'Please Verify Your Subscription'));

        return $result['subscriber'];
    }

    public function verifySubscriberToken($token) {
        $result = DB::transaction(function() use($token) {

                $tokenRecord = SubscriberToken::with('subscriber')->where('token', $token)->first();

                if (!$tokenRecord || !$tokenRecord->subscriber) {
                    throw new \Exception("Invalid token or subscriber not found.");
                }

                // Logic: If already confirmed, you might want to stop here 
                // to prevent sending multiple "Welcome" emails.
                if ($tokenRecord->subscriber->confirmed_at !== null) {
                    throw new \Exception("This email is already verified.");
                }

                // Update Token status
                $tokenRecord->update([
                    'expires_at' => now()
                ]);

                // Update Subscriber status
                $tokenRecord->subscriber->update([
                    'confirmed_at' => now(),
                    'status' => 'active' // Optional: move from 'pending' to 'active'
                ]);

                return [
                    "email" => $tokenRecord->subscriber->email
                ];
        });

        // send the automated email for token here
        $messageData = [
            'greetings'    => 'Hello!',
            'title'        => 'Subscription Confirmed',
            'lead'         => 'Thank you for joining our community.',
            'body'         => 'From now you will receieve exclusive deals and offers from the best and latest study route visa',
        ];

        $message = new MessageConstruct();
        $composedContent = $message->messageContent($messageData);

        Mail::to($result['email'])->send(new SendMail(['content' => $composedContent], 'Successfully Subscribed'));
    }

    public function notifyAdmin(array $notification) {
        $notify = DB::transaction(function() use ($notification) {
            return Contact::create($notification);
        });


         // send the automated email for token here
        $messageData = [
            'greetings'    => 'Hello!',
            'title'        => 'Someone just contacted you',
            'lead'         => 'An Enquiry.',
            'body'         => $notify->message,
            
        ];

        $message = new MessageConstruct();
        $composedContent = $message->messageContent($messageData);

        Mail::to(AdminInfo::ADMIN_EMAIL->value)->send(new SendMail(['content' => $composedContent], 'An enquiry email'));
 
    }

    public function sendToAdmin(Applicant $applicant) {
        $table = "<table style='width:100%; border-collapse: collapse; border: 1px solid #ddd;'>";
        foreach ($applicant->getAttributes() as $key => $value) {
            if(in_array($key, ['id', 'updated_at', 'created_at'])) continue;
            $label = ucwords(str_replace('_', ' ', $key));
            $table .= "<tr>
                        <td style='padding: 8px; border: 1px solid #ddd; font-weight: bold;'>{$label}</td>
                        <td style='padding: 8px; border: 1px solid #ddd;'>{$value}</td>
                      </tr>";
        }
        $table .= "</table>";

        $messageData = [
            'greetings'    => 'Hello Admin,',
            'title'        => 'New Application Received',
            'lead'         => 'A new study application has been submitted. Details below:',
            'body'         => $table, // The helper wraps this in <p>, which is fine for HTML
            'placeholders' => []
        ];

        $message = new MessageConstruct();
        $composedContent = $message->messageContent($messageData);

        Mail::to(AdminInfo::ADMIN_EMAIL->value)
        ->send(new SendMail(['content' => $composedContent], 'New Applicant: ' . $applicant->full_name));
    }

    public function sendToApplicant(Applicant $applicant) {
        $message = new MessageConstruct();
        // send the automated email for token here
        $messageData = [
            'greetings'    => "Dear {$applicant->full_name},",
            'title'        => 'Application Submitted Successfully!',
            'lead'         => "Thank you for choosing us for your {$applicant->program_interested} journey.",
            'body'         => "We have received your application for the :destination :intake intake. Our team will review your qualifications (:qual) and contact you at :phone shortly.",
            'placeholders' => [
                'destination' => $applicant->preferred_study_destination,
                'intake'      => $applicant->intake_period,
                'qual'        => $applicant->highest_qualification,
                'phone'       => $applicant->phone_number
            ]
        ];

        
        $composedContent = $message->messageContent($messageData);

        Mail::to($applicant->email)
        ->send(new SendMail(['content' => $composedContent], 'Your Application Confirmation'));
    }


    

    
}