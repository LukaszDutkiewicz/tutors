<?php

namespace App\Http\Controllers\Subjects;

use App\Http\Controllers\Controller;
use App\Services\Subjects\SubjectsService;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    public SubjectsService $subjectsService;

    public function __construct(SubjectsService $subjectsService)
    {
        $this->subjectsService = $subjectsService;
    }

    public function list(Request $request)
    {
        $name = $request->get('name');
        $subjects = $this->subjectsService->list($name);
        return view('subjects.list', ['subjects' => $subjects]);
    }
}
