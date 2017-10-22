<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\MailService;
use Illuminate\Support\Facades\Mail;
use App\File;

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

        //This is stopping the form froms sending
    	$this->validate->sendEmailValidation($request);

        if ($request->hasFile('upload')) {

            
        
            $image = $request->file('upload');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);

            $data = [
                'subject'   =>     $request['subject'],
                'filepath'  =>     $destinationPath,
                'fileurl'   =>     "helosiudhdj",
            ];

            File::create($data);  

            
        }

        

    	$this->mailService->sendEmail($request->all());
        session()->flash('form-submit', 'alert');
        return back();

    }

   
}
