<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\msc_performance;
use Illuminate\Http\Request;
use App\Mail\TestMail;

class MailSend extends Controller
{
	public function testemail()
	{

		

		$details = [
			'title'=>'Title: Test Send Email',
			'body'=>'Body: This is a testing email using smtp'
		];
		\Mail::to('hothanhtungld@gmail.com')->send(new TestMail($details));
		return view('email.thanks');
	}   
}
