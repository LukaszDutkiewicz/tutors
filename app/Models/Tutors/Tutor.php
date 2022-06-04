<?php

namespace App\Models\Tutors;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'subject', 'rate', 'phone', 'email',];

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
        return $query->where('subject', 'like', '%' . $subject . '%');
    }
}
