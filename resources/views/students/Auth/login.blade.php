@extends('frontend.layouts.app')
@section('title', 'Sign In')
@section('header-attr') class="nav-shadow" @endsection

@section('content')
<!-- SignIn Area Starts Here -->
<section class="signup-area signin-area p-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 order-2 order-xl-0">
                <div class="signup-area-textwrapper">
                    <h2 class="font-title--md mb-0">Sign in</h2>
                    <p class="mt-2 mb-lg-4 mb-3">Don't have account? <a href="{{route('studentRegister')}}"
                            class="text-black-50">Sign
                            up</a></p>
                    <form action="{{route('studentLogin.check','studentdashboard')}}" method="POST">
                        @csrf
                        <div class="form-element">
                            <label for="email">Email</label>
                            <input type="email" placeholder="Username" id="email" name="email" />
                            @if($errors->has('email'))
                            <small class="d-block text-danger">{{$errors->first('email')}}</small>
                            @endif
                        </div>
                        <div class="form-element">
                            <div class="d-flex justify-content-between">
                                <label for="password">Password</label>
                                <a href="forget-password.html" class="text-primary fs-6">Forget Password</a>
                            </div>
                            <div class="form-alert-input">
                                <input type="password" placeholder="Type here..." id="password" name="password" />
                                <div class="form-alert-icon" onclick="showPassword('password',this);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </div>
                                @if($errors->has('password'))
                                <small class="d-block text-danger">{{$errors->first('password')}}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-element d-flex align-items-center terms">
                            <input class="checkbox-primary me-1" type="checkbox" id="agree" />
                            <label for="agree" class="text-secondary mb-0 fs-6">Remember me</label>
                        </div>
                        <div class="form-element">
                            <button type="submit" class="button button-lg button--primary w-100">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-7 order-1 order-xl-0">
                <div class="signup-area-image">
                    <img src="{{asset('public/frontend/dist/images/signup/Illustration.png')}}" alt="Illustration Image"
                        class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SignIn Area Ends Here -->
@endsection