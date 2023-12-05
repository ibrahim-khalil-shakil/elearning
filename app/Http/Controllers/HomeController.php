<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\CourseCategory;

class HomeController extends Controller
{
    public function index()
    {
        $course = Course::get();
        $instructor = Instructor::get();
        $category = CourseCategory::get();
        return view('frontend.home', compact('course', 'instructor', 'category'));
    }

}
