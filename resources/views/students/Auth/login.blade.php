@extends('frontend.layouts.app')

@section('content')
<!-- SignIn Area Starts Here -->
<section class="section signup-area signin-area overflow-hidden">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 order-2 order-xl-0">
                <div class="signup-area-textwrapper">
                    <h2 class="font-title--md mb-0">Sign in</h2>
                    <p class="mt-2 mb-lg-4 mb-3">Don't have account? <a href="{{route('studentRegister')}}" class="text-black-50">Sign
                            up</a></p>
                    <form action="{{route('studentLogin.check')}}" method="POST">
                        @csrf
                        <div class="form-element success">
                            <div class="form-alert">
                                <label for="email">Email</label>
                            </div>
                            <div class="form-alert-input">
                                <input type="email" placeholder="Arif Ahmed" id="email" name="email" />
                                <div class="form-alert-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-check">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                                @if($errors->has('email'))
                                    <small class="d-block text-danger">{{$errors->first('email')}}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-element active">
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
                    <img src="{{asset('public/frontend/dist/images/signup/Illustration.png')}}" alt="Illustration Image" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SignIn Area Ends Here -->

<!-- Dot Images Starts Here -->
<div class="dot-images">
    <img src="{{asset('public/frontend/dist/images/shape/dots/dots-img-10.png')}}" alt="shape" style="z-index: 1;"
        class="img-fluid first-dotimage" />
    <img src="{{asset('public/frontend/dist/images/shape/dots/dots-img-07.png')}}" alt="shape" class="img-fluid second-dotimage" />
</div>
<!-- Dot Images Ends Here -->
@endsection