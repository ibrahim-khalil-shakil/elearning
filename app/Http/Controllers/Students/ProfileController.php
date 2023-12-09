<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class ProfileController extends Controller
{
    public function index()
    {
        $student_info=Student::find(currentUserId());
        return view('students.profile',compact('student_info'));
    }

    public function save_profile(Request $request)
    {
        try {
            $data=Student::find(currentUserId());
            $data->name_en = $request->fullName_en;
            $data->name_bn = $request->fullName_bn;
            $data->contact_en = $request->contactNumber_en;
            $data->contact_bn = $request->contactNumber_bn;
            $data->email = $request->emailAddress;
            $data->role_id = $request->roleId;
            $data->bio = $request->bio;
            $data->designation = $request->designation;
            $data->title = $request->title;
            $data->status = $request->status;
            $data->password = Hash::make($request->fullName_bn);
            $data->language = 'en';
            $data->access_block = $request->access_block;

            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/students'), $imageName);
                $data->image = $imageName;
            }
            if ($data->save())
                return redirect()->back()->with('success', 'Data Saved');
            else
                return redirect()->back()->withInput()->with('error', 'Please try again');
        } catch (Exception $e) {
            // dd($e);
            return redirect()->back()->withInput()->with('error', 'Please try again');
        }
    }
}
