<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Student;
use App\Http\Requests\Students\Auth\SignUpRequest;
use App\Http\Requests\Students\Auth\SignInRequest;
use Illuminate\Support\Facades\Hash;
use Exception;

class AuthController extends Controller
{
    public function signUpForm()
    {
        return view('students.auth.register');
    }

    public function signUpStore(SignUpRequest $request)
    {
        try {
            $stu = new Student;
            $stu->name_en = $request->name;
            $stu->email = $request->email;
            $stu->password = Hash::make($request->password);
            if ($stu->save())
                return redirect()->route('studentLogin')->with('success', 'Successfully Registered');
            else
                return redirect()->route('studentLogin')->with('danger', 'Please Try Again');
        } catch (Exception $e) {
            //dd($e);
            return redirect()->route('studentLogin')->with('danger', 'Please Try Again');
        }
    }

    public function signInForm()
    {
        return view('students.auth.login');
    }

    public function signInCheck(SignInRequest $request)
    {
        try {
            $user = Student::Where('email', $request->email)->first();
            if ($user) {
                if ($user->status == 1) {
                    if (Hash::check($request->password, $user->password)) {
                        $this->setSession($user);
                        return redirect()->route('studentdashboard')->with('success', 'Successfully Logged In');
                    } else
                        return redirect()->route('studentLogin')->with('error', 'Username or Password is wrong!');
                } else
                    return redirect()->route('studentLogin')->with('error', 'You are not an active user! Please contact to Authority');
            } else
                return redirect()->route('studentLogin')->with('error', 'Username or Password is wrong!');
        } catch (Exception $e) {
            //dd($e);
            return redirect()->route('studentLogin')->with('error', 'Username or Password is wrong!');
        }
    }

    public function setSession($user)
    {
        return request()->session()->put(
            [
                'userId' => encryptor('encrypt', $user->id),
                'userName' => encryptor('encrypt', $user->name_en),
                'emailAddress' => encryptor('encrypt', $user->email),
                'studentLogin' => 1,
                'image' => $user->image ?? 'No Image Found'
            ]
        );
    }

    public function signOut()
    {
        request()->session()->flush();
        return redirect()->route('studentLogin')->with('danger', 'Succesfully Logged Out');
    }

    public function show(User $data)
    {
        return view('students.profile.userProfile', compact('data'));
    }
}
