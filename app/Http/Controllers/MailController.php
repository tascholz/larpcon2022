<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail($email_adress)
    {
        $details = [
            'title' => 'Mail from Larpcons',
            'body' => 'This is the message of the email'
        ];

        Mail::to($email_adress)->send(new Testmail($details));
        return "Email sent";
    }
}
