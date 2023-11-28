<?php

namespace App\Http\Controllers\Backend\Quizzes;

use App\Models\Option;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use Exception;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $option = Option::paginate(20);
        return view('backend.quiz.option.index', compact('option'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $question = Question::get();
        return view('backend.quiz.option.create', compact('question'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $option = new Option;
            $option->question_id = $request->questionId;
            $option->option_text = $request->optionText;
            $option->is_correct = $request->is_correct;

            if ($option->save()) {
                $this->notice::success('Data Saved');
                return redirect()->route('option.index');
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
    public function show(Option $option)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $question = Question::get();
        $option = Option::findOrFail(encryptor('decrypt', $id));
        return view('backend.quiz.option.edit', compact('question', 'option'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $option = Option::findOrFail(encryptor('decrypt', $id));
            $option->question_id = $request->questionId;
            $option->option_text = $request->optionText;
            $option->is_correct = $request->is_correct;

            if ($option->save()) {
                $this->notice::success('Data Saved');
                return redirect()->route('option.index');
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
        $data = Option::findOrFail(encryptor('decrypt', $id));
        if ($data->delete()) {
            $this->notice::error('Data Deleted!');
            return redirect()->back();
        }
    }
}
