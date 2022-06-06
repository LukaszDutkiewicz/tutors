<?php

namespace App\Http\Controllers\Tutors;

use App\Http\Controllers\Controller;
use App\Services\Tutors\TutorsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $subject = $request->get('subject_id');
        $phone = $request->get('phone');
        $email = $request->get('email');
        $rate = $request->get('rate');
        $subjects = DB::table('subjects')->get();
        $tutors = $this->tutorsService->list($firstName, $lastName, $subject, $rate, $phone, $email);
        return view('tutors.list', ['tutors' => $tutors, 'subjects' => $subjects]);
    }
}
