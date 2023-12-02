@extends('frontend.layouts.app')

@section('content')
<!-- SignUp Area Starts Here -->
<section class="signup-area">
    <div class="container">
        <div class="row align-items-center justify-content-md-center">
            <div class="col-lg-5 order-2 order-lg-0">
                <div class="signup-area-textwrapper">
                    <h2 class="font-title--md mb-0">Sign Up</h2>
                    <p class="mt-2 mb-lg-4 mb-3">Already have account? <a href="{{route('studentLogin')}}" class="text-black-50">Sign
                            In</a></p>
                    <form action="{{route('studentRegister.store')}}" method="POST">
                        @csrf
                        <div class="form-element success">
                            <div class="form-alert">
                                <label for="name">Full Name</label>
                            </div>
                            <div class="form-alert-input">
                                <input type="text" placeholder="Your Name" id="name" value="{{old('name')}}" name="name" />
                                <div class="form-alert-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-check">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                                @if($errors->has('name'))
                                    <small class="d-block text-danger">{{$errors->first('name')}}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-element error">
                            <div class="form-alert">
                                <label for="email">Email</label>
                                <span>*please enter a valid email</span>
                            </div>
                            <div class="form-alert-input">
                                <input type="email" placeholder="arifAhmed@gmail.com" id="email" value="{{old('email')}}" name="email" />
                                <div class="form-alert-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-alert-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" y1="8" x2="12" y2="12"></line>
                                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                    </svg>
                                </div>
                                @if($errors->has('email'))
                                    <small class="d-block text-danger">{{$errors->first('email')}}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-element active">
                            <label for="password" class="w-100" style="text-align: left;">password</label>
                            <div class="form-alert-input">
                                <input type="password" placeholder="Type here..." id="password"  name="password"/>
                                <div class="form-alert-icon" onclick="showPassword('password',this)">
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
                        <div class="form-element">
                            <label for="password_confirmation" class="w-100" style="text-align: left;">Confirm
                                password</label>
                            <div class="form-alert-input">
                                <input type="password" placeholder="Type here..." name="password_confirmation" id="password_confirmation" />
                                <div class="form-alert-icon" onclick="showPassword('password_confirmation',this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="form-element d-flex align-items-center terms">
                            <input class="checkbox-primary me-1" type="checkbox" id="agree" />
                            <label for="agree" class="text-secondary mb-0">Accept the <a href="#"
                                    style="text-decoration: underline;">Terms</a> and <a href="#"
                                    style="text-decoration: underline;">Privacy Policy</a></label>
                        </div>
                        <div class="form-element">
                            <button type="submit" class="button button-lg button--primary w-100">Sign UP</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 order-1 order-lg-0">
                <div class="signup-area-image">
                    <img src="{{asset('public/frontend/dist/images/signup/Illustration.png')}}" alt="Illustration Image"
                        class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SignUp Area Ends Here -->

<!-- Dot Images Starts Here -->
<div class="dot-images">
    <img src="{{asset('public/frontend/dist/images/shape/dots/dots-img-05.png')}}" alt="shape"
        class="img-fluid first-dotimage" />
    <img src="{{asset('public/frontend/dist/images/shape/dots/dots-img-07.png')}}" alt="shape"
        class="img-fluid second-dotimage" />
</div>
<!-- Dot Images Ends Here -->
@endsection