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
    public function list($name, $subject)
    {
        return $this->tutor->filterByName($name)->filterBysubject($subject)->get();
    }
}
