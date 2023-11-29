<?php

namespace App\Http\Controllers\Backend\Quizzes; 

use App\Models\Question;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quiz;
use Exception;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $question = Question::paginate(10);
        return view('backend.quiz.question.index', compact('question'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $quiz = Quiz::get();
        return view('backend.quiz.question.create', compact('quiz'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $question = new Question;
            $question->quiz_id = $request->quizId;
            $question->type = $request->questionType;
            $question->content = $request->questionContent;
            $question->option_a = $request->optionA;
            $question->option_b = $request->optionB;
            $question->option_c = $request->optionC;
            $question->option_d = $request->optionD;
            $question->correct_answer = $request->correctAnswer;

            if ($question->save()) {
                $this->notice::success('Data Saved');
                return redirect()->route('question.index');
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
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $quiz = Quiz::get();
        $question = Question::findOrFail(encryptor('decrypt',$id));
        return view('backend.quiz.question.edit', compact('quiz', 'question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $question = Question::findOrFail(encryptor('decrypt', $id));
            $question->quiz_id = $request->quizId;
            $question->type = $request->questionType;
            $question->content = $request->questionContent;
            $question->option_a = $request->optionA;
            $question->option_b = $request->optionB;
            $question->option_c = $request->optionC;
            $question->option_d = $request->optionD;
            $question->correct_answer = $request->correctAnswer;

            if ($question->save()) {
                $this->notice::success('Data Saved');
                return redirect()->route('question.index');
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
        $data = Question::findOrFail(encryptor('decrypt', $id));
        if ($data->delete()) {
            $this->notice::error('Data Deleted!');
            return redirect()->back();
        }
    }
}
