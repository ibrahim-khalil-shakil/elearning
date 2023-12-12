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
            $data->contact_en = $request->contactNumber_en;
            $data->email = $request->emailAddress;
            $data->date_of_birth = $request->dob;
            $data->gender = $request->gender;
            $data->bio = $request->bio;
            $data->profession = $request->profession;
            $data->nationality = $request->nationality;
            // $data->status = $request->status;
            // $data->password = Hash::make($request->fullName_bn);
            $data->language = 'en';

            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/students'), $imageName);
                $data->image = $imageName;
            }
            if ($data->save()){
                $this->setSession($data);
                return redirect()->back()->with('success', 'Data Saved');
            }
        } catch (Exception $e) {
            // dd($e);
            return redirect()->back()->withInput()->with('error', 'Please try again');
        }
    }

    public function setSession($student)
    {
        return request()->session()->put(
            [
                'userId' => encryptor('encrypt', $student->id),
                'userName' => encryptor('encrypt', $student->name_en),
                'emailAddress' => encryptor('encrypt', $student->email),
                'studentLogin' => 1,
                'image' => $student->image ?? 'No Image Found' 
            ]
        );
    }

    // ProfileController.php
    public function changeImage(Request $request)
    {
        try {
            $user = Student::find(currentUserId());

            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/students'), $imageName);
                $user->image = $imageName;
                $user->save();

                return redirect()->back()->with('success', 'Image changed successfully.');
            } else {
                return redirect()->back()->with('error', 'Please select a valid image file.');
            }
        } catch (\Exception $e) {
            // dd($e);
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

}
