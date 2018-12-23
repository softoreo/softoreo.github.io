<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendMail(Request $request){
        $request->validate([
            'name'=> 'required|regex:/[a-zA-Z\s]+/',
            'email'=> 'required|email',
            'phone' => 'required|digits:10',
            'message' => 'required'
        ]);

        $mail = (object)['name' => $request->name, 'email'=>$request->email, 'phone'=>$request->phone, 'body'=>$request->message];
        Mail::to('mail.softoreo@gmail.com')->send(new ContactMail($mail));
        echo "Basic Email Sent. Check your inbox.";
    }
}
