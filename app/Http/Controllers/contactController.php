<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class contactController extends Controller
{
    //
    public function contact()
    {
        return view('contact');
    }
    public function sendEmail(Request $request)
    {
        $details = [
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message
        ];

        Mail::to('emailid')->send(new ContactMail($details));
        return back()->with('message_sent','your message has been send successfully!');
    }
}
