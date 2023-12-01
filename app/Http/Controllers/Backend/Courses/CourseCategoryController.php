<?php

namespace App\Http\Controllers\Backend\Courses;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\Course\CourseCategory\AddNewRequest;
use App\Http\Requests\Backend\Course\CourseCategory\UpdateRequest;

use Exception;
use File;

class CourseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = CourseCategory::paginate(10);
        return view('backend.course.courseCategory.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.course.courseCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddNewRequest $request)
    {
        try {
            $data = new CourseCategory;
            $data->category_name = $request->category_name;
            $data->category_status = $request->category_status;

            if ($request->hasFile('category_image')) {
                $imageName = rand(111, 999) . time() . '.' . $request->category_image->extension();
                $request->category_image->move(public_path('uploads/courseCategories'), $imageName);
                $data->category_image = $imageName;
            }
            if ($data->save())
                return redirect()->route('courseCategory.index')->with('success', 'Data Saved');
            else
                return redirect()->back()->withInput()->with('error', 'Please try again');
        } catch (Exception $e) {
            // dd($e);
            return redirect()->back()->withInput()->with('error', 'Please try again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CourseCategory $courseCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = CourseCategory::findOrFail($id);
        return view('backend.course.courseCategory.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, $id)
    {
        try {
            $data = CourseCategory::findOrFail($id);
            $data->category_name = $request->category_name;
            $data->category_status = $request->category_status;

            if ($request->hasFile('category_image')) {
                $imageName = rand(111, 999) . time() . '.' . $request->category_image->extension();
                $request->category_image->move(public_path('uploads/courseCategories'), $imageName);
                $data->category_image = $imageName;
            }
            if ($data->save())
                return redirect()->route('courseCategory.index')->with('success', 'Data Saved');
            else
                return redirect()->back()->withInput()->with('error', 'Please try again');
        } catch (Exception $e) {
            // dd($e);
            return redirect()->back()->withInput()->with('error', 'Please try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = CourseCategory::findOrFail($id);
        $image_path = public_path('uploads/courseCategories/') . $data->category_image;

        if ($data->delete()) {
            if (File::exists($image_path))
                File::delete($image_path);

            return redirect()->back();
        }
    }
}
