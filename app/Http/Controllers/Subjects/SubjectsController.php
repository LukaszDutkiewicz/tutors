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

    public function list()
    {
        $subjects = $this->subjectsService->list();
        return view('subjects.list', ['subjects' => $subjects]);
    }
}
