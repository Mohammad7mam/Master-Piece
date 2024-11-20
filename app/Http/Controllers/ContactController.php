<?php

namespace App\Http\Controllers;

/* use Illuminate\Http\Request;*/
use Illuminate\Support\Facades\Mail; 

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\MyTestEmail;
use App\Mail\Websitemail;
use App\Models\Admin;
use App\Models\PageContactItem;
use App\User;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        Mail::send([], [], function ($message) use ($data) {
            $message->to('sandbox.smtp.mailtrap.io')
                    ->subject('رسالة جديدة من الموقع')
                    ->setBody(
                        "<h3>الاسم:</h3> {$data['name']}<br>
                        <h3>البريد الالكتروني:</h3> {$data['email']}<br>
                        <h3>الرسالة:</h3> <p>{$data['message']}</p>", 
                        'text/html'
                    );
        });

        return back()->with('success', 'تم إرسال الرسالة بنجاح');
    }


    public function submit(Request $request)
    {
        // Fetch admin details from the database
        $admin_data = User::where('id', 1)->first();

        // Validate the form inputs to ensure that all necessary fields are provided and valid
        $request->validate([
            'person_name' => 'required',        
            'person_email' => 'required|email', 
            'person_message' => 'required'      
        ]);

        // Construct the email content using the visitor's information
        $subject = 'Contact Form Message'; 
        $message = 'Visitor Information: <br>';
        $message .= 'Name: ' . $request->person_name . '<br>';
        $message .= 'Email: ' . $request->person_email . '<br>';
        $message .= 'Message: ' . $request->person_message;

        // Send the email to the admin's email address using Laravel's Mail facade
        Mail::to($admin_data->email)->send(new Websitemail($subject, $message));

        // Redirect back to the contact page with a success message for the user
        return redirect()->back()->with('success', 'Email is sent successfully! We will contact you soon.');
    }

}
