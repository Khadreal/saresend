<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsValidation extends Controller
{
    //

    public function sendEmailValidation($data)
    {
    	$this->validate($data, [
    		'recipient'		=>		'required|max:50|email',
    		'reply'			=>		'required|max:50|email',
    		'subject'		=>		'required|max:20',
            'upload'        =>      'mimes:jpeg,bmp,png|size:2000',
    		//'editor1'		=>		'required',
    		'recipient.email'=>		'Invalid email'
    	]);
    }
}
