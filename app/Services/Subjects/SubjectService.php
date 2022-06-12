<?php

namespace App\Services\Subjects;

use App\Models\Tutors\Subject;

use Illuminate\Support\Facades\DB;

class SubjectService
{

    public Subject $subjectModel;

    public function __construct(Subject $subjectModel)
    {
        $this->subjectModel = $subjectModel;
    }
    public function create($subject)
    {
        $this->subjectModel::create($subject);
    }
    public function destroy($id)
    {
        $this->subjectModel->destroy($id);
    }
}
