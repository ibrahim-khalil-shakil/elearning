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
                    'category_name' => $cat->category_name,
                    'category_status' => $cat->category_status,
                    'category_image' => asset('public/uploads/courseCategories/' . $cat->category_image),
                );
            }
        }
        return response($data, 200);
    }
}
