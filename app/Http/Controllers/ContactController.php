<?php

namespace App\Http\Controllers;
use Mail;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('contactus');
    }
    public function contactSubmit(Request $request){
        Mail::send('emails.contactmail',[
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'subject'=>$request->subject,
            'msg'=>$request->message
        ],function($mail) use($request){
            $mail->from(env('MAIL_FROM_ADDRESS'),$request->name);
                       $mail->to("ranadheerreddy721@gmail.com")->subject('Contact us Message');   
        });
        return 'Message has been sent successfully!';
    }
}
