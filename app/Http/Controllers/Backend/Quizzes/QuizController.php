<?php

namespace App\Http\Controllers\Backend\Quizzes;

use App\Models\Quiz;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Exception;

class QuizController extends Controller
{
    /**  
     * Display a listing of the resource.
     */
    public function index()
    {
        $quiz = Quiz::paginate(10);
        return view('backend.quiz.quizzes.index', compact('quiz'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $course = Course::get();
        return view('backend.quiz.quizzes.create', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $quiz = new Quiz;
            $quiz->title = $request->quizTitle;
            $quiz->course_id = $request->courseId;

            if ($quiz->save()) {
                $this->notice::success('Data Saved');
                return redirect()->route('quiz.index');
            } else {
                $this->notice::error('Please try again');
                return redirect()->back()->withInput();
            }
        } catch (Exception $e) {
            dd($e);
            $this->notice::error('Please try again');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Quiz $quiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $course = Course::get();
        $quiz = Quiz::findOrFail(encryptor('decrypt', $id));
        return view('backend.quiz.quizzes.edit', compact('course', 'quiz'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $quiz = Quiz::findOrFail(encryptor('decrypt', $id));
            $quiz->title = $request->quizTitle;
            $quiz->course_id = $request->courseId;

            if ($quiz->save()) {
                $this->notice::success('Data Saved');
                return redirect()->route('quiz.index');
            } else {
                $this->notice::error('Please try again');
                return redirect()->back()->withInput();
            }
        } catch (Exception $e) {
            dd($e);
            $this->notice::error('Please try again');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Quiz::findOrFail(encryptor('decrypt', $id));
        if ($data->delete()) {
            $this->notice::error('Data Deleted!');
            return redirect()->back();
        }
    }
}
