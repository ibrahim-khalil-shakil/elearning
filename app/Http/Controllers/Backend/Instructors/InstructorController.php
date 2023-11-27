<?php

namespace App\Http\Controllers\Backend\Instructors;

use App\Http\Controllers\Controller;
use App\Models\Instructor;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Exception;
use File;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instructor = Instructor::paginate(10);
        return view('backend.instructor.index', compact('instructor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role = Role::get();
        return view('backend.instructor.create', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $instructor = new Instructor;
            $instructor->name_en = $request->fullName_en;
            $instructor->name_bn = $request->fullName_bn;
            $instructor->contact_en = $request->contactNumber_en;
            $instructor->contact_bn = $request->contactNumber_bn;
            $instructor->email = $request->emailAddress;
            $instructor->role_id = $request->roleId;
            $instructor->bio = $request->bio;
            $instructor->status = $request->status;
            $instructor->password = Hash::make($request->fullName_bn);
            $instructor->language = 'en';
            $instructor->access_block = $request->access_block;

            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/instructors'), $imageName);
                $instructor->image = $imageName;
            }
            if ($instructor->save())
                return redirect()->route('instructor.index')->with('success', 'Data Saved');
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
    public function show(Instructor $instructor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $role = Role::get();
        $instructor = Instructor::findOrFail(encryptor('decrypt', $id));
        return view('backend.instructor.edit', compact('role', 'instructor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $instructor = Instructor::findOrFail(encryptor('decrypt', $id));
            $instructor->name_en = $request->fullName_en;
            $instructor->name_bn = $request->fullName_bn;
            $instructor->contact_en = $request->contactNumber_en;
            $instructor->contact_bn = $request->contactNumber_bn;
            $instructor->email = $request->emailAddress;
            $instructor->role_id = $request->roleId;
            $instructor->bio = $request->bio;
            $instructor->status = $request->status;
            $instructor->password = Hash::make($request->fullName_bn);
            $instructor->language = 'en';
            $instructor->access_block = $request->access_block;

            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/instructors'), $imageName);
                $instructor->image = $imageName;
            }
            if ($instructor->save())
                return redirect()->route('instructor.index')->with('success', 'Data Saved');
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
        $data = Instructor::findOrFail(encryptor('decrypt', $id));
        $image_path = public_path('uploads/instructors') . $data->image;

        if ($data->delete()) {
            if (File::exists($image_path))
                File::delete($image_path);

            return redirect()->back();
        }
    }
}