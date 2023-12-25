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
        $popularCourses = Course::where('tag', 'popular')->get();

        $designCategories = CourseCategory::whereIn('category_name', ['Graphics Desgin', 'Web Design', 'Video Editing'])->pluck('id')->toArray();
        $designCourses = Course::whereIn('course_category_id', $designCategories)->where('tag', 'popular')->get();

        $developmentCategories = CourseCategory::whereIn('category_name', ['Web Development', 'Mobile Development', 'Game Development', 'Database Design & Development', 'Data Science'])->pluck('id')->toArray();
        $developmentCourses = Course::whereIn('course_category_id', $developmentCategories)->where('tag', 'popular')->get();

        $businessCategories = CourseCategory::whereIn('category_name', ['Digital Marketing', 'Entrepreneurship'])->pluck('id')->toArray();
        $businessCourses = Course::whereIn('course_category_id', $businessCategories)->where('tag', 'popular')->get();

        $itCategories = CourseCategory::whereIn('category_name', ['Hardware', 'Network Technology', 'Software & Security', 'Operating System & Server', '2D Animation', '3D Animation'])->pluck('id')->toArray();
        $itCourses = Course::whereIn('course_category_id', $itCategories)->where('tag', 'popular')->get();

        return view(
            'frontend.home',
            compact('course', 'instructor', 'category', 'popularCourses', 'designCourses', 'developmentCourses', 'businessCourses', 'itCourses')
        );
    }
}
