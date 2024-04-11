<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Student;
use App\Models\Subject;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'subject_id',
        'weekDay',
        'hour',
    ];

    public function students(): HasMany
    {
        return $this->hasMany('Student'::class);
    }

    public function subjects(): HasMany
    {
        return $this->hasMany('Subject'::class);
    }
}
