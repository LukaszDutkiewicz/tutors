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
        $name = $request->get('name');
        $subject = $request->get('subject');
        $phone = $request->get('phone');
        $email = $request->get('email');
        $tutors = $this->tutorsService->list($name, $subject, $phone, $email);
        return view('tutors.list', ['tutors' => $tutors]);
    }
}
