<?php

namespace App\Http\Controllers\Tutors;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tutors\CreateTutorRequest;
use App\Services\Tutors\TutorService;
use App\Services\Subjects\SubjectsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiTutorController extends Controller
{
    public TutorService $tutorsService;

    public function __construct(TutorService $tutorService, SubjectsService $subjectsService)
    {
        $this->tutorService = $tutorService;
        $this->subjectsService = $subjectsService;
    }

    public function show($id)
    {
        $tutor = $this->tutorService->show($id);
        return response()->json(['tutor' => $tutor]);
    }

    public function getCreateView()
    {
        $subjects = $this->subjectsService->list();
        return view('tutors.create', ['subjects' => $subjects]);
    }

    public function create(CreateTutorRequest $request)
    {
        $tutor = $request->all();
        $this->tutorService->create($tutor);
        return response()->json(['message' => 'Prawidlowo dodano korepetytora']);
    }
    public function destroy($id)
    {
        $this->tutorService->destroy($id);
        return response()->json(['message' => 'usunieto']);
    }
    public function getUpdateView($id)
    {
        $tutor = $this->tutorService->show($id);
        $subjects = $this->subjectsService->list();
        return view('tutors.update', ['tutor' => $tutor, 'subjects' => $subjects]);
    }

    public function update(Request $request, $id)
    {
        $newTutor = $request->all();
        $this->tutorService->update($newTutor, $id);
        return response()->json(['message' => 'Prawidlowo zaktualizowano']);
    }
}
