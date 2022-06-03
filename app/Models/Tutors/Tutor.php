<?php

namespace App\Models\Tutors;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'subject', 'phone', 'email'];

    public function scopeFilterByName($query, $name)
    {
        return $query->where('name', 'like', '%' . $name . '%');
    }
    public function scopeFilterBySubject($query, $subject)
    {
        return $query->where('subject', 'like', '%' . $subject . '%');
    }
}
