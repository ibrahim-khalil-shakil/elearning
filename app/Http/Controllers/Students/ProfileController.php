<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Enrollment;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $student_info = Student::find(currentUserId());
        $enrollment = Enrollment::where('student_id', currentUserId())->get();
        return view('students.profile', compact('student_info', 'enrollment'));
    }

    public function save_profile(Request $request)
    {
        try {
            $data = Student::find(currentUserId());
            $data->name_en = $request->fullName_en;
            $data->contact_en = $request->contactNumber_en;
            $data->email = $request->emailAddress;
            $data->date_of_birth = $request->dob;
            $data->gender = $request->gender;
            $data->bio = $request->bio;
            $data->profession = $request->profession;
            $data->nationality = $request->nationality;
            $data->language = 'en';

            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/students'), $imageName);
                $data->image = $imageName;
            }
            if ($data->save()) {
                $this->setSession($data);
                return redirect()->back()->with('success', 'Your Changes Have been Saved');
            }
        } catch (Exception $e) {
            // dd($e);
            return redirect()->back()->withInput()->with('error', 'Something went wrong. Please try again');
        }
    }

    public function change_password(Request $request)
    {
        try {
            $data = Student::find(currentUserId());

            // Validate current password
            if (!Hash::check($request->current_password, $data->password)) {
                return redirect()->back()->with('error', 'Current password is incorrect.');
            }
            // Proceed with password change
            $data->password = Hash::make($request->password);
            $data->language = 'en';

            if ($data->save()) {
                $this->setSession($data);
                return redirect()->back()->with('success', 'Password Have been Changed');
            }
        } catch (Exception $e) {
            // dd($e); 
            return redirect()->back()->withInput()->with('error', 'Something went wrong. Please try again');
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
