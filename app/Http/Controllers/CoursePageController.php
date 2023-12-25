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
        $selectedCategories = $request->input('categories', []);

        $course = Course::when($selectedCategories, function ($query) use ($selectedCategories) {
                $query->whereIn('course_category_id', $selectedCategories);
            })->get();

        $allCourse = Course::get();

        return view('frontend.searchCourse', compact('course', 'category', 'selectedCategories', 'allCourse'));
    }
}
