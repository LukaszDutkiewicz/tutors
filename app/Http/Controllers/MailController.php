<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Services\Tutors\TutorService;

class MailController extends Controller
{
    public TutorService $tutorService;
    public function __construct(TutorService $tutorService)
    {
        $this->tutorService = $tutorService;
    }

    public function sendEmail(Request $request)
    {
        $tutorName = $request->get('name');
        $username = $request->get('username');
        $title = $request->get('title');
        $message = $request->get('message');
        $emailAdress = $request->get('email_adress');

        $details = [
            'title' => $title,
            'body' => $message,
            'username' => $username
        ];

        Mail::to($emailAdress)->send(new TestMail($details));
        return redirect()->route('tutors.list');
    }

    public function getSendEmailView($id)
    {
        $tutor = $this->tutorService->show($id);
        return view('Emails.createEmail', ['tutorName' => $tutor->name, 'emailAdress' => $tutor->emailAdress]);
    }
}
