<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\MailService;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{	
	private $validate;
	private $mailService;


	 public function __construct(
	 	FormsValidation $validate, 
	 	MailService $mailService
	 	)
	 {
	 	$this->validate = $validate;
	 	$this->mailService = $mailService;
	 }
    //
    public function index()
    {
    	return view('pages.index');
    }

    public function send(Request $request)
    {	
    	$this->validate->sendEmailValidation($request);

    	$this->mailService->sendEmail($request->all());
        session()->flash('form-submit', 'alert');
        return back();

    }

   
}
