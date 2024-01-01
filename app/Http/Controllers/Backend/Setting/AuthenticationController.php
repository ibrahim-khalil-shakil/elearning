<?php

namespace App\Http\Controllers\Backend\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Http\Requests\Authentication\SignUpRequest;
use App\Http\Requests\Authentication\SignInRequest;
use Illuminate\Support\Facades\Hash;
use Exception;

class AuthenticationController extends Controller
{
    public function signUpForm()
    {
        return view('backend.Authentication.register');
    }

    public function signUpStore(SignUpRequest $request)
    {
        try {
            $user = new User;
            $user->name_en = $request->name;
            $user->contact_en = $request->contact_en;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role_id = 4;
            // dd($request->all()); 
            if ($user->save())
                return redirect('login')->with('success', 'Successfully Registered');
            else
                return redirect('login')->with('danger', 'Please Try Again');
        } catch (Exception $e) {
            dd($e);
            return redirect('login')->with('danger', 'Please Try Again');
        }
    }

    public function signInForm()
    {
        return view('backend.Authentication.login');
    }

    public function signInCheck(SignInRequest $request)
    {
        try {
            $user = User::where('contact_en', $request->username)->orWhere('email', $request->username)->first();
            if ($user) {
                if ($user->status == 1) {
                    if (Hash::check($request->password, $user->password)) {
                        $this->setSession($user);
                        return redirect()->route('dashboard')->with('success', 'Successfully Logged In');
                    } else
                        return redirect()->route('login')->with('error', 'Username or Password is wrong!');
                } else
                    return redirect()->route('login')->with('error', 'You are not an active user! Please contact to Authority');
            } else
                return redirect()->route('login')->with('error', 'Username or Password is wrong!');
        } catch (Exception $e) {
            // dd($e);
            return redirect()->route('login')->with('error', 'Username or Password is wrong!');
        }
    }

    public function setSession($user)
    {
        return request()->session()->put(
            [
                'userId' => encryptor('encrypt', $user->id),
                'userName' => encryptor('encrypt', $user->name_en),
                'emailAddress' => encryptor('encrypt', $user->email),
                'role_id' => encryptor('encrypt', $user->role_id),
                'accessType' => encryptor('encrypt', $user->full_access),
                'role' => encryptor('encrypt', $user->role->name),
                'roleIdentitiy' => encryptor('encrypt', $user->role->identity),
                'language' => encryptor('encrypt', $user->language),
                'image' => $user->image ?? 'No Image Found',
                'instructorImage' => $user?->instructor->image ?? 'No instructorImage Found',
            ]
        );
    }

    public function signOut()
    {
        request()->session()->flush();
        return redirect('login')->with('danger', 'Succesfully Logged Out');
    }

    public function show(User $data)
    {
        return view('backend.user.userProfile', compact('data'));
    }
}
