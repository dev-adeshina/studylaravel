<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Services\SendMailService;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Enums\SubscriberState;



class MailController extends Controller
{
    protected $mailService;

    public function __construct(SendMailService $mailService) 
    {
        $this->mailService = $mailService;
    }

    function subscribeGuest(Request $request) 
    {
        $data = $request->validate([
            'email' => 'required|email|unique:subscribers,email'
                ], 
                [
            'email.email' => 'Oops! That doesn’t look like a real email address.',
            'email.required' => 'We need your email to send the confirmation!'
            ]);

        try {
            $this->mailService->subscribeApplicant([
                'email'         => $data['email'],
                'ip_address'    => $request->ip(),
                'signup_source' => SubscriberState::SIGNUP_FOOTER_SOURCE
            ]);
            return back()->with('success', 'Please check your email to verify your subscription!');
        }catch(Exception $e) {
            Log::error("Subscription Error: " . $e->getMessage());
            return back()->with('error', 'Something went wrong. Please try again.');
        }
    }


    function applicantForm(Request $request) {
        $data = $request->validate([
            'full_name'                   => 'required|string|max:255',
            'age'                         => 'required|integer|min:16',
            'phone_number'                => 'required|string',
            'email'                       => 'required|email|unique:applicants,email',
            'gender'                      => 'required|string|in:Male,Female,Other',
            'preferred_study_destination' => 'required|string',
            'other_countries_interested'  => 'nullable|string',
            'program_interested'          => 'required|string',
            'intake_period'               => 'required|string',
            'highest_qualification'       => 'required|string',
            'other_qualification'         => 'nullable|string',
            'previous_visa_refusal'       => 'required|string', 
            'referral_source'             => 'required|string',
        ]);

        try {
            Log::info('Processing application for: ' . $data['email']);
            $this->mailService->mailApplicantInformation($data);
            $this->mailService->subscribeApplicant([
                'email'         => $data['email'],
                'ip_address'    => $request->ip(),
                'signup_source' => 'Visa Application Form',
            ]);

            return redirect()->route('thanks')->with('name', $data['full_name']);
        } catch (\Exception $e) {
            Log::error("Applicant Form Error: " . $e->getMessage());
            return back()->withInput()->with('error', 'We could not process your application at this time.');
        }
        
    }

    public function contactNotify(Request $request) {
        $data = $request->validate([
            'first_name'                  => 'required|string',
            'last_name'                   => 'required|string',
            'phone_number'                => 'required|string',
            'email'                       => 'required|string',
            'message'                     => 'required|string'
        ]);

        try {
            Log::info('Processing application for: ' . $data['message']);

            $this->mailService->notifyAdmin($data);
            return redirect()->route('thanks')->with('name', $data['first_name']);
        } catch (\Exception $e) {
            Log::error("Applicant Form Error: " . $e->getMessage());
            return back()->withInput()->with('error', 'We could not process your application at this time.');
        }
    }


    public function verifySubscriber($token) {
       
        try {

            $validator = Validator::make(['token' => $token], [
                'token' => 'required|string|size:64|exists:subscriber_tokens,token',
            ]);

            $validatedData = $validator->validate();
            $this->mailService->verifySubscriberToken($validatedData['token']);
            
            return redirect()->route('thanks')->with('subscribe', 'Thank you for subscribing');

        } catch (\Illuminate\Validation\ValidationException $e) {
            return view('error')->with('error', 'Invalid or expired verification token.');
        } catch (\Exception $e) {
            Log::error("Subscriber Verification Error: " . $e->getMessage());
            return view('error')->with('error', 'Something went wrong on our end.');
        }
    }
}
