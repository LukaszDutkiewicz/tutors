<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index()
    {
        return view('Contacts/contact');
    }

    public function save(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();

        // Mail::send(
        //     'contactEmail',
        //     array(
        //         'name' => $request->get('name'),
        //         'email' => $request->get('email'),
        //         'subject' => $request->get('subject'),
        //         'phone' => $request->get('phone'),
        //         'message' => $request->get('message'),
        //     ),
        //     function ($message) {
        //         $message->from('l.z.dutkiewicz@gmail.com');
        //         $message->to('l_dutkiewicz@o2.pl');
        //     }
        // );

        $details = [
            'title' => $request->get('subject'),
            'body' => $request->get('message'),
        ];
        Mail::to('l_dutkiewicz@o2.pl')->send(new TestMail($details));
        return "Email sent";

        return back()->with('Dziękujemy');
    }
}
