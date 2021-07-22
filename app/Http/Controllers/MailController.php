<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\TestMail;
use Illuminate\Http\Request;

class MailController extends Controller
{
public function sendEmail(){
    $details=[
        'title'=>'Mail from Surfside media',
        'body'=>'This is for testing mail using gmail.'
        
    ];
    Mail::to('ranadheerreddy721@gmail.com')->send(new TestMail($details));
    return "Email sent";
}
}
