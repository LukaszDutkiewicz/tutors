<?php

namespace App\Services\Tutors;

use App\Models\Tutors\Tutor;

use Illuminate\Support\Facades\DB;

class TutorService
{

    public Tutor $tutorModel;

    public function __construct(Tutor $tutorModel)
    {
        $this->tutorModel = $tutorModel;
    }
    public function show($id)
    {
        return $this->tutorModel->find($id);
    }
    public function create($tutor)
    {
        $this->tutorModel::create($tutor);
    }
}
