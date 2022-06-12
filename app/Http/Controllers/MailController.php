<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => 'Test Mail From Laravel',
            'body' => 'Hello',
        ];
        Mail::to('l_dutkiewicz@o2.pl')->send(new TestMail($details));
        return "Emial sent";
    }
}
