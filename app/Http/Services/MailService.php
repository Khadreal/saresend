<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Mail;

class MailService
{

	/**
     * @param $data
     */
    public function sendEmail($data)
    {
        Mail::send('emails.email', ['data' => $data], function ($message) use ($data) {
            $message->from($data['reply']);
            $message->to($data['recipient'])->subject($data['subject']);
        });
    }

}