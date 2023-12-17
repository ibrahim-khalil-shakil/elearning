<?php

namespace App\Http\Controllers\Backend\Courses;

use App\Models\Material;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\Course\Materials\AddNewRequest;
use App\Http\Requests\Backend\Course\Materials\UpdateRequest;
use App\Models\Course;
use Exception;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $material = Material::paginate(10);
        return view('backend.course.material.index', compact('material'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $course = Course::get();
        return view('backend.course.material.create', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddNewRequest $request)
    {
        try {
            $material = new Material;
            $material->title = $request->materialTitle;
            $material->course_id = $request->courseId;
            $material->type = $request->materialType;
            $material->content = $request->content;
            $material->content_url = $request->contentURL;

            if ($request->hasFile('content')) {
                $contentName = rand(111, 999) . time() . '.' . $request->content->extension();
                $request->content->move(public_path('uploads/courses/contents'), $contentName);
                $material->content = $contentName;
            }
            if ($material->save()) {
                $this->notice::success('Data Saved');
                return redirect()->route('material.index');
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
    public function show(Material $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $course = Course::get();
        $material = Material::findOrFail(encryptor('decrypt', $id));
        return view('backend.course.material.edit', compact('course', 'material'));
    }

    /** 
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, $id)
    {
        try {
            $material = Material::findOrFail(encryptor('decrypt', $id));
            $material->title = $request->materialTitle;
            $material->course_id = $request->courseId;
            $material->type = $request->materialType;
            $material->content_url = $request->contentURL;

            if ($request->hasFile('content')) {
                $contentName = rand(111, 999) . time() . '.' . $request->content->extension();
                $request->content->move(public_path('uploads/courses/contents'), $contentName);
                $material->content = $contentName;
            }
            if ($material->save()) {
                $this->notice::success('Data Saved');
                return redirect()->route('material.index');
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
        $data = Material::findOrFail(encryptor('decrypt', $id));
        if ($data->delete()) {
            $this->notice::error('Data Deleted!');
            return redirect()->back();
        }
    }
}
