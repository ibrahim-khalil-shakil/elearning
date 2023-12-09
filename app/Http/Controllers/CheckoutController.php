<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.checkout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddNewRequest $request)
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
            $instructor->designation = $request->designation;
            $instructor->title = $request->title;
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
            // dd($e);
            return redirect()->back()->withInput()->with('error', 'Please try again');
        }
    }
}
