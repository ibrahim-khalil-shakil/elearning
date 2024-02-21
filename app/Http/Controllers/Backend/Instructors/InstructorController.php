<?php

namespace App\Http\Controllers\Backend\Instructors;

use App\Http\Controllers\Controller;
use App\Models\Instructor;
use App\Models\User;
use App\Http\Requests\Backend\Instructors\AddNewRequest;
use App\Http\Requests\Backend\Instructors\UpdateRequest;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Exception;
use File;
use DB;

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
    public function store(AddNewRequest $request)
    {
        try {
            DB::beginTransaction();
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
            $instructor->password = Hash::make($request->password);
            $instructor->language = 'en';
            $instructor->access_block = $request->access_block;
            if ($request->hasFile('image')) {
                $imageName = (Role::find($request->roleId)->name) . '_' .  $request->fullName_en . '_' . rand(999, 111) .  '.' . $request->image->extension();
                $request->image->move(public_path('uploads/users'), $imageName);
                $instructor->image = $imageName;
            }

            if ($instructor->save()) {
                $user = new User;
                $user->instructor_id = $instructor->id;
                $user->name_en = $request->fullName_en;
                $user->email = $request->emailAddress;
                $user->contact_en = $request->contactNumber_en;
                $user->role_id = $request->roleId;
                $user->status = $request->status;
                $user->password = Hash::make($request->password);
                if (isset($imageName)) {
                    $user->image = $imageName; // Save the image name in the users table
                }
                if ($user->save()) {
                    DB::commit();
                    $this->notice::success('Successfully saved');
                    return redirect()->route('instructor.index');
                }
            } else
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

    public function frontShow($id)
    {
        $instructor = Instructor::findOrFail(encryptor('decrypt', $id));
        // dd($course); 
        return view('frontend.instructorProfile', compact('instructor'));
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
    public function update(UpdateRequest $request, $id)
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
            $instructor->designation = $request->designation;
            $instructor->title = $request->title;
            $instructor->status = $request->status;
            $instructor->password = Hash::make($request->password);
            $instructor->language = 'en';
            $instructor->access_block = $request->access_block;
            if ($request->hasFile('image')) {
                $imageName = (Role::find($request->roleId)->name) . '_' .  $request->fullName_en . '_' . rand(999, 111) .  '.' . $request->image->extension();
                $request->image->move(public_path('uploads/users'), $imageName);
                $instructor->image = $imageName;
            }

            if ($instructor->save()) {
                $user = User::where('instructor_id', $instructor->id)->first();
                $user->instructor_id = $instructor->id;
                $user->name_en = $request->fullName_en;
                $user->email = $request->emailAddress;
                $user->contact_en = $request->contactNumber_en;
                $user->role_id = $request->roleId;
                $user->status = $request->status;
                $user->password = Hash::make($request->password);
                if (isset($imageName)) {
                    $user->image = $imageName; // Save the image name in the users table
                }
                if ($user->save()) {
                    DB::commit();
                    $this->notice::success('Successfully saved');
                    return redirect()->route('instructor.index');
                }
            }
            return redirect()->back()->withInput()->with('error', 'Please try again');
        } catch (Exception $e) {
            // dd($e);
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
