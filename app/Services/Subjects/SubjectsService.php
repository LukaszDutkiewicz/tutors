<?php

namespace App\Services\Subjects;

use App\Models\Tutors\Subject;

use Illuminate\Support\Facades\DB;

class SubjectsService
{

    public Subject $subjectModel;

    public function __construct(Subject $subjectModel)
    {
        $this->subjectModel = $subjectModel;
    }
    public function list()
    {
        return $this->subjectModel->get();
    }
}
