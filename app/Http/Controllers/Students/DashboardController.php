<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\Enrollment;
use App\Models\Course;
use App\Models\Checkout;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $enrollment = Enrollment::get();
        $course = Course::get();
        $checkout = Checkout::get();
        // $purchaseHistory = Enrollment::with(['course', 'checkout'])->orderBy('enrollment_date', 'desc')->get();
        return view('students.dashboard', compact('enrollment', 'course'));
    }
}
