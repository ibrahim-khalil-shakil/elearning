<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Lesson;

class WatchCourseController extends Controller
{


    public function watchCourse($id)
    {
        $course = Course::findOrFail(encryptor('decrypt', $id));
        $lessons = Lesson::where('course_id', $course->id)->get();

        return view('frontend.watchCourse', compact('course', 'lessons'));
    }


}
