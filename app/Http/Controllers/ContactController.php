<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string'
        ]);

        Mail::raw($request->message, function ($message) use ($request) {
            $message->to('support@defipulsex.org') // Change this to your email
                ->subject('New Contact Form Submission')
                ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME')) // Use a verified sender
                ->replyTo($request->email, $request->name); // Set the user’s email for replies
        });

        return back()->with('success', 'Message sent successfully!');
    }
}
