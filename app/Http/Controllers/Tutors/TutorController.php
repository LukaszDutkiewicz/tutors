<?php

namespace App\Http\Controllers\Tutors;

use App\Http\Controllers\Controller;
use App\Services\Tutors\TutorService;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    public TutorService $tutorsService;

    public function __construct(TutorService $tutorService)
    {
        $this->tutorService = $tutorService;
    }

    public function show($id)
    {
        $tutor = $this->tutorService->show($id);
        return view('tutors.show', ['tutor' => $tutor]);
    }
}
