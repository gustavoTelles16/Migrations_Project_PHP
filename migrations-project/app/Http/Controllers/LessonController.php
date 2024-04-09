<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lesson;

class LessonController extends Controller
{
    public function index()
    {
        $lessons = Lesson::all();

        foreach ($lessons as $lesson)
        {
            dd($lesson->students());
        }
    }
}
