<?php

namespace App\Http\Controllers;
use App\Http\Controllers\NewController;
use Illuminate\Http\Request;
class NewController extends Controller
{
   function index(){
    return view('login.index');
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $mailTo= "ranadheerreddykrr@gmail.com";//Your hosting mail
    $headers="From: ".$email;
    $txt="You have recieved an email from ".$name.".\n\n".$message;
    mail($mailTo,$subject,$txt,$headers);
    //header("Location:index.php?mailsend");
}
}
}
