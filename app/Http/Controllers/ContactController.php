<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
            $message->to('Mohammadhamam007@Gmail.com')
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
}
