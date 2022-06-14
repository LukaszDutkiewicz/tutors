<?php

namespace App\Http\Controllers\Tutors;

use App\Http\Controllers\Controller;
use App\Services\Tutors\TutorService;
use App\Services\Subjects\SubjectsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TutorController extends Controller
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
        return view('tutors.show', ['tutor' => $tutor]);
    }

    public function getCreateView()
    {
        $subjects = $this->subjectsService->list();
        return view('tutors.create', ['subjects' => $subjects]);
    }

    public function create(Request $request)
    {
        $tutor = $request->all();
        $this->tutorService->create($tutor);
        return redirect()->route('tutors.list');
    }
    public function destroy($id)
    {
        $this->tutorService->destroy($id);
        return redirect()->route('tutors.list');
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
        return redirect()->route('tutors.list');
    }
}
