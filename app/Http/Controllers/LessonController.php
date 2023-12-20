<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /** 
     * Display a listing of the resource.
     */
    public function index()
    {
        $lesson = Lesson::paginate(10);
        return view('backend.course.lesson.index', compact('lesson'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $course = Course::get();
        return view('backend.course.lesson.create', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $lesson = new Lesson;
            $lesson->title = $request->lessonTitle;
            $lesson->course_id = $request->courseId;
            $lesson->description = $request->lessonDescription;
            $lesson->notes = $request->lessonNotes;

            if ($lesson->save()) {
                $this->notice::success('Data Saved');
                return redirect()->route('lesson.index');
            } else {
                $this->notice::error('Please try again');
                return redirect()->back()->withInput();
            }
        } catch (Exception $e) {
            // dd($e);
            $this->notice::error('Please try again');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Lesson $lesson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $course = Course::get();
        $lesson = Lesson::findOrFail(encryptor('decrypt', $id));
        return view('backend.course.lesson.edit', compact('course', 'lesson'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $lesson = Lesson::findOrFail(encryptor('decrypt', $id));
            $lesson->title = $request->lessonTitle;
            $lesson->course_id = $request->courseId;
            $lesson->description = $request->lessonDescription;
            $lesson->notes = $request->lessonNotes;

            if ($lesson->save()) {
                $this->notice::success('Data Saved');
                return redirect()->route('lesson.index');
            } else {
                $this->notice::error('Please try again');
                return redirect()->back()->withInput();
            }
        } catch (Exception $e) {
            // dd($e);
            $this->notice::error('Please try again');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Lesson::findOrFail(encryptor('decrypt', $id));
        if ($data->delete()) {
            $this->notice::error('Data Deleted!');
            return redirect()->back();
        }
    }
}
