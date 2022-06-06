<?php

namespace App\Models\Tutors;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'rate', 'phone', 'email', 'subject_id',];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function scopeFilterByFirstName($query, $firstName)
    {
        return $query->where('first_name', 'like', '%' . $firstName . '%');
    }
    public function scopeFilterByLastName($query, $lastName)
    {
        return $query->where('last_name', 'like', '%' . $lastName . '%');
    }
    public function scopeFilterBySubject($query, $subject)
    {
        //return $query->where('subject_id->name', 'like', '%' . $subject . '%');
        return $query->join('subjects', 'subject_id', '=', 'subjects.id')->where('subjects.name', 'LIKE', '%' . $subject . '%');
    }
}
