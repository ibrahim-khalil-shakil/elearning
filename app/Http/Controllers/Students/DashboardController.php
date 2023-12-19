<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Enrollment;
use App\Models\Course;
use App\Models\Checkout;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $student_info = Student::find(currentUserId());
        $enrollment = Enrollment::where('student_id', currentUserId())->get();
        $course = Course::get();
        $checkout = Checkout::where('student_id', currentUserId())->get();
        // $purchaseHistory = Enrollment::with(['course', 'checkout'])->orderBy('enrollment_date', 'desc')->get();
        return view('students.dashboard', compact('student_info','enrollment', 'course','checkout'));
    }
}
