<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\Enrollment;
use App\Models\Course;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $enrollment = Enrollment::get();
        $course = Course::get();
        return view('students.dashboard', compact('enrollment', 'course'));
    }
}
