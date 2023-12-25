<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseCategory;

class CoursePageController extends Controller
{
    public function index(Request $request)
    {
        
        $category = CourseCategory::get();
        $selectedCategoryId = $request->input('category');


        $course = Course::when($selectedCategoryId, function ($query) use ($selectedCategoryId) {
                $query->where('course_category_id', $selectedCategoryId);
            })->get();

        return view('frontend.searchCourse', compact('course', 'category', 'selectedCategoryId'));
    }
}
