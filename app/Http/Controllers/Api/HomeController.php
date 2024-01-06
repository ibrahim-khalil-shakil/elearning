<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\CourseCategory;

class HomeController extends Controller
{
    public function index()
    {
        $category = CourseCategory::get();
        $data = array();
        if ($category) {
            foreach ($category as $cat) {
                $data[] = array(
                    'id' => $cat->id,
                    'title' => $cat->category_name,
                    'description' => $cat->category_status,
                    'image' => asset('public/uploads/courseCategories/' . $cat->image),
                );
            }
        }
        return response($data, 200);
    }
}
