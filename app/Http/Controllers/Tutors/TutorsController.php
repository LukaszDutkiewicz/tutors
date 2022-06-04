<?php

namespace App\Http\Controllers\Tutors;

use App\Http\Controllers\Controller;
use App\Services\Tutors\TutorsService;
use Illuminate\Http\Request;

class TutorsController extends Controller
{
    public TutorsService $tutorsService;

    public function __construct(TutorsService $tutorsService)
    {
        $this->tutorsService = $tutorsService;
    }

    public function list(Request $request)
    {
        $firstName = $request->get('first_name');
        $lastName = $request->get('last_name');
        $subject = $request->get('subject');
        $phone = $request->get('phone');
        $email = $request->get('email');
        $rate = $request->get('rate');
        $tutors = $this->tutorsService->list($firstName, $lastName, $subject, $rate, $phone, $email);
        return view('tutors.list', ['tutors' => $tutors]);
    }
}
