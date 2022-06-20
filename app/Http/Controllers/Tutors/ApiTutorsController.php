<?php

namespace App\Http\Controllers\Tutors;

use App\Http\Controllers\Controller;
use App\Services\Tutors\TutorsService;
use App\Services\Subjects\SubjectsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiTutorsController extends Controller
{
    public TutorsService $tutorsService;
    public SubjectsService $subjectsService;

    public function __construct(TutorsService $tutorsService, SubjectsService $subjectsService)
    {
        $this->tutorsService = $tutorsService;
        $this->subjectsService = $subjectsService;
    }

    public function list(Request $request)
    {
        $firstName = $request->get('first_name');
        $lastName = $request->get('last_name');
        $subjectId = $request->get('subject_id');
        $subjects = $this->subjectsService->list();
        $tutors = $this->tutorsService->list($firstName, $lastName, $subjectId);
        return response()->json(['tutors' => $tutors]);
    }
}
