@extends('frontend.layouts.app')

@section('content')
<!-- SignIn Area Starts Here -->
<section class="section signup-area signin-area overflow-hidden">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 order-2 order-xl-0">
                <div class="signup-area-textwrapper">
                    <h2 class="font-title--md mb-0">Sign in</h2>
                    <p class="mt-2 mb-lg-4 mb-3">Don't have account? <a href="signup.html" class="text-black-50">Sign
                            up</a></p>
                    <form action="#">
                        <div class="form-element success">
                            <div class="form-alert">
                                <label for="name">Email</label>
                            </div>
                            <div class="form-alert-input">
                                <input type="email" placeholder="Arif Ahmed" id="name" />
                                <div class="form-alert-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-check">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="form-element active">
                            <div class="d-flex justify-content-between">
                                <label for="confirm-password">Password</label>
                                <a href="forget-password.html" class="text-primary fs-6">Forget Password</a>
                            </div>

                            <div class="form-alert-input">
                                <input type="password" placeholder="Type here..." id="confirm-password" />
                                <div class="form-alert-icon" onclick="showPassword('confirm-password',this);">
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
                            <label for="agree" class="text-secondary mb-0 fs-6">Remember me</label>
                        </div>
                        <div class="form-element">
                            <button type="submit" class="button button-lg button--primary w-100">Sign in</button>
                        </div>
                        <span class="d-block text-center text-secondary">or sign in with</span>
                        <div class="d-flex align-items-center flex-wrap mt-3 signinButtons">
                            <a href="#"
                                class="d-flex text-secondary align-items-center justify-content-center signup-with border fb rounded-1">
                                <svg class="me-2" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18 9C18 4.02891 13.9711 0 9 0C4.02891 0 0 4.02891 0 9C0 13.9711 4.02891 18 9 18C9.05273 18 9.10547 18 9.1582 17.9965V10.9934H7.22461V8.73984H9.1582V7.08047C9.1582 5.15742 10.3324 4.10977 12.048 4.10977C12.8707 4.10977 13.5773 4.16953 13.7812 4.19766V6.20859H12.6C11.6684 6.20859 11.4855 6.65156 11.4855 7.30195V8.73633H13.718L13.4262 10.9898H11.4855V17.652C15.2473 16.5727 18 13.1098 18 9V9Z"
                                        fill="#0078FF"></path>
                                </svg>

                                Facebook
                            </a>
                            <a href="#"
                                class="d-flex text-secondary align-items-center justify-content-center signup-with border google rounded-1">
                                <svg class="me-2" width="18" height="19" viewBox="0 0 18 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clipOne)">
                                        <path
                                            d="M3.98918 11.378L3.36263 13.717L1.07258 13.7654C0.388195 12.496 0 11.0437 0 9.50034C0 8.00793 0.362953 6.60055 1.00631 5.36133H1.0068L3.04559 5.73511L3.9387 7.76166C3.75177 8.30661 3.64989 8.89161 3.64989 9.50034C3.64996 10.161 3.76963 10.794 3.98918 11.378Z"
                                            fill="#FBBB00"></path>
                                        <path
                                            d="M17.8426 7.81836C17.946 8.36279 17.9999 8.92504 17.9999 9.49967C17.9999 10.144 17.9321 10.7725 17.8031 11.3788C17.365 13.4419 16.2202 15.2434 14.6343 16.5182L14.6338 16.5177L12.0659 16.3867L11.7024 14.1179C12.7547 13.5007 13.5771 12.535 14.0103 11.3788H9.19775V7.81836H14.0805H17.8426Z"
                                            fill="#518EF8"></path>
                                        <path
                                            d="M14.6341 16.5183L14.6346 16.5188C13.0922 17.7585 11.133 18.5003 9.00017 18.5003C5.57275 18.5003 2.59288 16.5846 1.07275 13.7654L3.98935 11.3779C4.74939 13.4064 6.70616 14.8503 9.00017 14.8503C9.9862 14.8503 10.91 14.5838 11.7026 14.1185L14.6341 16.5183Z"
                                            fill="#28B446"></path>
                                        <path
                                            d="M14.7447 2.57197L11.8291 4.95894C11.0087 4.44615 10.039 4.14992 9.00003 4.14992C6.65409 4.14992 4.66073 5.66013 3.93876 7.76131L1.00684 5.36098H1.00635C2.50421 2.47307 5.52167 0.5 9.00003 0.5C11.1838 0.5 13.186 1.27787 14.7447 2.57197Z"
                                            fill="#F14336"></path>
                                    </g>
                                    <defs>
                                        <clipPath>
                                            <rect width="18" height="18" fill="white" transform="translate(0 0.5)">
                                            </rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                                Google
                            </a>
                            <a href="#"
                                class="d-flex text-secondary align-items-center justify-content-center signup-with border twitter rounded-1">
                                <svg class="me-2" width="22" height="19" viewBox="0 0 22 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22 2.63092C21.1819 2.99231 20.3101 3.23185 19.4012 3.34815C20.3363 2.786 21.0499 1.90262 21.3854 0.837846C20.5136 1.36123 19.5511 1.73092 18.5254 1.93723C17.6976 1.04969 16.5179 0.5 15.2309 0.5C12.7339 0.5 10.7236 2.54092 10.7236 5.04292C10.7236 5.40292 10.7539 5.74908 10.8281 6.07862C7.0785 5.89446 3.76063 4.08477 1.53175 1.328C1.14262 2.00785 0.914375 2.786 0.914375 3.62369C0.914375 5.19662 1.71875 6.59092 2.91775 7.39815C2.19313 7.38431 1.48225 7.17246 0.88 6.83877C0.88 6.85262 0.88 6.87062 0.88 6.88862C0.88 9.09569 2.44337 10.9289 4.4935 11.3512C4.12637 11.4523 3.72625 11.5008 3.311 11.5008C3.02225 11.5008 2.73075 11.4842 2.45712 11.4232C3.0415 13.2218 4.69975 14.5442 6.6715 14.5871C5.137 15.7958 3.18863 16.5242 1.07938 16.5242C0.7095 16.5242 0.35475 16.5075 0 16.4618C1.99787 17.7592 4.36562 18.5 6.919 18.5C15.2185 18.5 19.756 11.5769 19.756 5.576C19.756 5.37523 19.7491 5.18139 19.7395 4.98892C20.6346 4.34923 21.3867 3.55031 22 2.63092Z"
                                        fill="#03A9F4"></path>
                                </svg>
                                Twitter
                            </a>
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