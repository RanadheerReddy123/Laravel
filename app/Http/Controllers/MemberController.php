<?php

namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    function addData(Request $req){
		$member= new Member;
		$member->name=$req->name;
		$member->email=$req->email;
		$member->mobile=$req->mobile;
		$member->subject=$req->subject;
		$member->message=$req->message;
		$member->save();
		return redirect('add');
	}
}
