<?php

namespace App\Http\Controllers\Backend\Courses;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\CourseCategory;
use App\Models\Instructor;
use Exception;
use File;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Course::paginate(10);
        return view('backend.course.index', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courseCategory = CourseCategory::get();
        $instructor = Instructor::get();
        return view('backend.course.create', compact('courseCategory', 'instructor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $course = new Course;
            $course->title_en = $request->courseTitle_en;
            $course->title_bn = $request->courseTitle_bn;
            $course->description_en = $request->courseDescription_en;
            $course->description_bn = $request->courseDescription_bn;
            $course->category_id = $request->categoryId;
            $course->instructor_id = $request->instructorId;
            $course->type = $request->courseType;
            $course->price = $request->coursePrice;
            $course->subscription_price = $request->subscriptionPrice;
            $course->difficulty = $request->courseDifficulty;
            $course->prerequisites_en = $request->prerequisites_en;
            $course->prerequisites_bn = $request->prerequisites_bn;
            $course->status = $request->status;
            $course->language = 'en';

            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/courses'), $imageName);
                $course->image = $imageName;
            }
            if ($course->save())
                return redirect()->route('course.index')->with('success', 'Data Saved');
            else
                return redirect()->back()->withInput()->with('error', 'Please try again');
        } catch (Exception $e) {
            dd($e);
            return redirect()->back()->withInput()->with('error', 'Please try again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $courseCategory = CourseCategory::get();
        $instructor = Instructor::get();
        $course = Course::findOrFail(encryptor('decrypt', $id));
        return view('backend.course.edit', compact('courseCategory', 'instructor', 'course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $course = Course::findOrFail(encryptor('decrypt', $id));
            $course->title_en = $request->courseTitle_en;
            $course->title_bn = $request->courseTitle_bn;
            $course->description_en = $request->courseDescription_en;
            $course->description_bn = $request->courseDescription_bn;
            $course->category_id = $request->categoryId;
            $course->instructor_id = $request->instructorId;
            $course->type = $request->courseType;
            $course->price = $request->coursePrice;
            $course->subscription_price = $request->subscriptionPrice;
            $course->difficulty = $request->courseDifficulty;
            $course->prerequisites = $request->prerequisites;
            $course->status = $request->status;
            $course->language = 'en';

            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/courses'), $imageName);
                $course->image = $imageName;
            }
            if ($course->save())
                return redirect()->route('course.index')->with('success', 'Data Saved');
            else
                return redirect()->back()->withInput()->with('error', 'Please try again');
        } catch (Exception $e) {
            dd($e);
            return redirect()->back()->withInput()->with('error', 'Please try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Course::findOrFail(encryptor('decrypt', $id));
        $image_path = public_path('uploads/courses') . $data->image;

        if ($data->delete()) {
            if (File::exists($image_path))
                File::delete($image_path);

            return redirect()->back();
        }
    }
}
