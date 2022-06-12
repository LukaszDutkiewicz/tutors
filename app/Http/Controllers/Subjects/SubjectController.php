<?php

namespace App\Http\Controllers\Subjects;

use App\Http\Controllers\Controller;
use App\Services\Subjects\SubjectService;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public SubjectService $subjectsService;

    public function __construct(SubjectService $subjectService)
    {
        $this->subjectService = $subjectService;
    }
    public function getCreateView()
    {
        return view('subjects.create');
    }

    public function create(Request $request)
    {
        $subject = $request->all();
        $this->subjectService->create($subject);
        return redirect()->route('subjects.list');
    }
    public function destroy($id)
    {
        $this->subjectService->destroy($id);
        return redirect()->route('subject.list');
    }
}
