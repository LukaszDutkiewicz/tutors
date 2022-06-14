<?php

namespace App\Services\Tutors;

use App\Models\Tutors\Tutor;

use Illuminate\Support\Facades\DB;

class TutorsService
{

    public Tutor $tutorModel;

    public function __construct(Tutor $tutorModel)
    {
        $this->tutorModel = $tutorModel;
    }
    public function list($firstName, $lastName, $subjectId)
    {
        if ($subjectId) {
            return $this->tutorModel->filterByFirstName($firstName)->filterByLastName($lastName)->filterBySubject($subjectId)->get();
        } else {
            return $this->tutorModel->filterByFirstName($firstName)->filterByLastName($lastName)->get();
        }
    }
}
