<?php

namespace App\Http\Controllers\Backend\Courses; 

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\Course\Courses\AddNewRequest;
use App\Http\Requests\Backend\Course\Courses\UpdateRequest;
use App\Models\CourseCategory;
use App\Models\Instructor;
use App\Models\Lesson;
use App\Models\Material;
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
        return view('backend.course.courses.index', compact('course'));
    }

    public function indexForAdmin()
    {
        $course = Course::paginate(10);
        return view('backend.course.courses.indexForAdmin', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courseCategory = CourseCategory::get();
        $instructor = Instructor::get();
        return view('backend.course.courses.create', compact('courseCategory', 'instructor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddNewRequest $request)
    {
        try {
            $course = new Course;
            $course->title_en = $request->courseTitle_en;
            $course->title_bn = $request->courseTitle_bn;
            $course->description_en = $request->courseDescription_en; 
            $course->description_bn = $request->courseDescription_bn;
            $course->course_category_id = $request->categoryId;
            $course->instructor_id = $request->instructorId;
            $course->type = $request->courseType;
            $course->price = $request->coursePrice;
            $course->old_price = $request->courseOldPrice;
            $course->subscription_price = $request->subscriptionPrice;
            $course->start_from = $request->start_from;
            $course->duration = $request->duration;
            $course->lesson = $request->lesson;
            $course->difficulty = $request->courseDifficulty;
            $course->course_code = $request->course_code;
            $course->prerequisites_en = $request->prerequisites_en;
            $course->prerequisites_bn = $request->prerequisites_bn;
            $course->thumbnail_video = $request->thumbnail_video;
            $course->tag = $request->tag; 
            $course->language = 'en';

            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/courses'), $imageName);
                $course->image = $imageName;
            }
            if ($request->hasFile('thumbnail_image')) {
                $thumbnailImageName = rand(111, 999) . time() . '.' . $request->thumbnail_image->extension();
                $request->thumbnail_image->move(public_path('uploads/courses/thumbnails'), $thumbnailImageName);
                $course->thumbnail_image = $thumbnailImageName;
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
    public function show($id)
    {
        // 
    }

    public function frontShow($id)
    {
        $course = Course::findOrFail(encryptor('decrypt', $id));
        // dd($course); 
        return view('frontend.courseDetails', compact('course'));
    } 


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $courseCategory = CourseCategory::get();
        $instructor = Instructor::get();
        $course = Course::findOrFail(encryptor('decrypt', $id));
        return view('backend.course.courses.edit', compact('courseCategory', 'instructor', 'course'));
    }

    /** 
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, $id)
    {
        try {
            $course = Course::findOrFail(encryptor('decrypt', $id));
            $course->title_en = $request->courseTitle_en;
            $course->title_bn = $request->courseTitle_bn;
            $course->description_en = $request->courseDescription_en;
            $course->description_bn = $request->courseDescription_bn;
            $course->course_category_id = $request->categoryId;
            $course->instructor_id = $request->instructorId;
            $course->type = $request->courseType;
            $course->price = $request->coursePrice;
            $course->old_price = $request->courseOldPrice; 
            $course->subscription_price = $request->subscriptionPrice;
            $course->start_from = $request->start_from;
            $course->duration = $request->duration;
            $course->lesson = $request->lesson;
            $course->difficulty = $request->courseDifficulty;
            $course->course_code = $request->course_code;
            $course->prerequisites_en = $request->prerequisites_en;
            $course->prerequisites_bn = $request->prerequisites_bn;
            $course->thumbnail_video = $request->thumbnail_video;
            $course->tag = $request->tag;
            $course->language = 'en';

            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/courses'), $imageName);
                $course->image = $imageName;
            }
            if ($request->hasFile('thumbnail_image')) {
                $thumbnailImageName = rand(111, 999) . time() . '.' . $request->thumbnail_image->extension();
                $request->thumbnail_image->move(public_path('uploads/courses/thumbnails'), $thumbnailImageName);
                $course->thumbnail_image = $thumbnailImageName;
            }
            if ($course->save())
                return redirect()->route('course.index')->with('success', 'Data Saved');
            else
                return redirect()->back()->withInput()->with('error', 'Please try again');
        } catch (Exception $e) {
            // dd($e);
            return redirect()->back()->withInput()->with('error', 'Please try again');
        }
    }

    public function updateforAdmin(UpdateRequest $request, $id)
    {
        try {
            $course = Course::findOrFail(encryptor('decrypt', $id));
            $course->title_en = $request->courseTitle_en;
            $course->title_bn = $request->courseTitle_bn;
            $course->description_en = $request->courseDescription_en;
            $course->description_bn = $request->courseDescription_bn;
            $course->course_category_id = $request->categoryId;
            $course->instructor_id = $request->instructorId;
            $course->type = $request->courseType;
            $course->price = $request->coursePrice;
            $course->old_price = $request->courseOldPrice; 
            $course->subscription_price = $request->subscriptionPrice;
            $course->start_from = $request->start_from;
            $course->duration = $request->duration;
            $course->lesson = $request->lesson;
            $course->difficulty = $request->courseDifficulty;
            $course->course_code = $request->course_code;
            $course->prerequisites_en = $request->prerequisites_en;
            $course->prerequisites_bn = $request->prerequisites_bn;
            $course->thumbnail_video = $request->thumbnail_video;
            $course->tag = $request->tag;
            $course->status = $request->status;
            $course->language = 'en';

            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/courses'), $imageName);
                $course->image = $imageName;
            }
            if ($request->hasFile('thumbnail_image')) {
                $thumbnailImageName = rand(111, 999) . time() . '.' . $request->thumbnail_image->extension();
                $request->thumbnail_image->move(public_path('uploads/courses/thumbnails'), $thumbnailImageName);
                $course->thumbnail_image = $thumbnailImageName;
            }
            if ($course->save())
                return redirect()->route('courseList')->with('success', 'Data Saved');
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
        $data = Course::findOrFail(encryptor('decrypt', $id));
        $image_path = public_path('uploads/courses') . $data->image;

        if ($data->delete()) {
            if (File::exists($image_path))
                File::delete($image_path);

            return redirect()->back();
        }
    }
}
