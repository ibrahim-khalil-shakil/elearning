@extends('frontend.layouts.app')
@section('title', "Student's Dashboard")
@section('body-attr') style="background-color: #ebebf2;" @endsection

@section('content')

<!-- Breadcrumb Starts Here -->
<div class="py-0">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb align-items-center bg-transparent mb-0">
                <li class="breadcrumb-item"><a href="index.html" class="fs-6 text-secondary">Home</a></li>
                <li class="breadcrumb-item fs-6 text-secondary" aria-current="page">My Profile</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Students Info area Starts Here -->
<section class="section students-info">
    <div class="container">
        <div class="students-info-intro">
            <!-- profile Details   -->
            <div class="students-info-intro__profile">
                <div>
                    <div class="students-info-intro-start">
                        <div class="image">
                            <img src="{{ asset('public/uploads/students/' . $student_info->image) }}" alt="Student" />
                        </div>
                        <div class="text">
                            <h5>{{$student_info->name_en}}</h5>
                            <p>{{$student_info->profession?$student_info->profession:'Student'}}</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="students-info-intro-end">
                        <div class="enrolled-courses">
                            <div class="enrolled-courses-icon">
                                <svg width="28" height="26" viewBox="0 0 28 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1 1.625H8.8C10.1791 1.625 11.5018 2.15764 12.477 3.10574C13.4521 4.05384 14 5.33974 14 6.68056V24.375C14 23.3694 13.5891 22.405 12.8577 21.6939C12.1263 20.9828 11.1343 20.5833 10.1 20.5833H1V1.625Z"
                                        stroke="#1089FF" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M27 1.625H19.2C17.8209 1.625 16.4982 2.15764 15.523 3.10574C14.5479 4.05384 14 5.33974 14 6.68056V24.375C14 23.3694 14.4109 22.405 15.1423 21.6939C15.8737 20.9828 16.8657 20.5833 17.9 20.5833H27V1.625Z"
                                        stroke="#1089FF" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="enrolled-courses-text">
                                <h6 class="font-title--xs">{{$enrollment?$enrollment->count():0}}</h6>
                                <p class="fs-6 mt-1">Enrolled Courses</p>
                            </div>
                        </div>
                        <div class="completed-courses">
                            <div class="completed-courses-icon">
                                <svg width="22" height="26" viewBox="0 0 22 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M19.1716 3.95235C19.715 4.14258 20.078 4.65484 20.078 5.23051V13.6518C20.078 16.0054 19.2226 18.2522 17.7119 19.9929C16.9522 20.8694 15.9911 21.552 14.9703 22.1041L10.5465 24.4938L6.11516 22.1028C5.09312 21.5508 4.13077 20.8694 3.36983 19.9916C1.85791 18.2509 1 16.0029 1 13.6468V5.23051C1 4.65484 1.36306 4.14258 1.90641 3.95235L10.0902 1.07647C10.3811 0.974511 10.6982 0.974511 10.9879 1.07647L19.1716 3.95235Z"
                                        stroke="#00AF91" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M7.30688 12.4002L9.65931 14.7538L14.5059 9.90723" stroke="#00AF91"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="completed-courses-text">
                                <h5 class="font-title--xs">0</h5>
                                <p class="fs-6 mt-1">Completed Courses</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Nav  -->
            <nav class="students-info-intro__nav">
                <div class="nav" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                        aria-selected="true">Dashboard</button>

                    <button class="nav-link" id="nav-coursesall-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-coursesall" type="button" role="tab" aria-controls="nav-coursesall"
                        aria-selected="false">All Courses</button>

                    <button class="nav-link" id="nav-activecourses-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-activecourses" type="button" role="tab" aria-controls="nav-activecourses"
                        aria-selected="false">
                        Active Courses
                    </button>

                    <button class="nav-link" id="nav-completedcourses-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-completedcourses" type="button" role="tab"
                        aria-controls="nav-completedcourses" aria-selected="false">
                        Completed Courses
                    </button>

                    <button class="nav-link" id="nav-purchase-tab" data-bs-toggle="tab" data-bs-target="#nav-purchase"
                        type="button" role="tab" aria-controls="nav-purchase" aria-selected="false">Purchase
                        History</button>

                    <button class="nav-link "><a href="{{route('student_profile')}}"
                            class="text-secondary">Profile</a></button>

                    <button class="nav-link "><a href="{{route('home')}}" class="text-secondary">Home</a></button>
                </div>
            </nav>
        </div>

        <div class="students-info-main">
            <div class="tab-content" id="nav-tabContent">
                {{-- Profile Info --}}
                <div class="tab-pane fade show active" id="nav-profile" role="tabpanel"
                    aria-labelledby="nav-profile-tab">
                    <div class="tab-content__profile">
                        <section class="section section--bg-white calltoaction">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-12 mx-auto text-center">
                                        <h5 class="font-title--sm">Invest in your career with Us</h5>
                                        <p class="my-4 font-para--lg">
                                            Duis posuere maximus arcu eu tincidunt. Nam rutrum, nibh vitae tempus
                                            venenatis, ex tortor ultricies
                                            magna, et faucibus magna eros quis arcu.
                                        </p>
                                        <a href="{{route('searchCourse')}}"
                                            class="button button-md button--primary">Let’s Go</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                {{-- All Courses --}}
                <div class="tab-pane fade" id="nav-coursesall" role="tabpanel" aria-labelledby="nav-coursesall-tab">
                    <div class="row">
                        @forelse ($enrollment as $a)
                        <div class="col-lg-4 col-md-6 col-md-6 mb-4">
                            <div class="contentCard contentCard--watch-course">
                                <div class="contentCard-top">
                                    <a href="#"><img src="{{asset('public/uploads/courses/'.$a->course?->image)}}"
                                            alt="images" class="img-fluid" /></a>
                                </div>
                                <div class="contentCard-bottom">
                                    <h5>
                                        <a href="{{route('courseDetails', encryptor('encrypt', $a->course?->id))}}"
                                            class="font-title--card">{{$a->course?->title_en}}</a>
                                    </h5>
                                    <div class="contentCard-info d-flex align-items-center justify-content-between">
                                        <a href="{{route('instructorProfile', encryptor('encrypt', $a->course?->instructor->id))}}"
                                            class="contentCard-user d-flex align-items-center">
                                            <img src="{{asset('public/uploads/users/'.$a->course?->instructor?->image)}}"
                                                alt="client-image" class="rounded-circle" height="34" width="34" />
                                            <p class="font-para--md">{{$a->course?->instructor?->name_en}}</p>
                                        </a>
                                        <div class="contentCard-course--status d-flex align-items-center">
                                            <span class="percentage">43%</span>
                                            <p>Finish</p>
                                        </div>
                                    </div>
                                    <a class="button button-md button--primary-outline w-100 my-3"
                                        href="{{route('watchCourse', encryptor('encrypt', $a->course?->id))}}">Watch
                                        Course</a>
                                    <div class="contentCard-watch--progress">
                                        <span class="percentage" style="width: 43%;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-12 py-5">
                            <div class="col-md-6 col-12 mx-auto text-center">
                                <h5 class="font-title--sm">You Haven't Enrolled Any Course Yet...</h5>
                                <p class="my-4 font-para--lg">
                                    Your Course List is Empty!
                                </p>
                                <a href="{{route('searchCourse')}}" class="button button-md button--primary">Enroll
                                    Now!</a>
                            </div>
                        </div>
                        @endforelse

                        <div class="col-lg-12 mt-lg-5">
                            <div class="pagination justify-content-center pb-0">
                                <div class="pagination-group">
                                    <a href="#" class="p_prev">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9.414" height="16.828"
                                            viewBox="0 0 9.414 16.828">
                                            <path data-name="Icon feather-chevron-left" d="M20.5,23l-7-7,7-7"
                                                transform="translate(-12.5 -7.586)" fill="none" stroke="#1a2224"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                        </svg>
                                    </a>
                                    <a href="#!1" class="cdp_i active">01</a>
                                    <a href="#!2" class="cdp_i">02</a>
                                    <a href="#!3" class="cdp_i">03</a>
                                    <a href="#!+1" class="p_next">
                                        <svg width="10" height="16" viewBox="0 0 10 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 1L8.5 8L1.5 15" stroke="#35343E" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Active Courses --}}
                <div class="tab-pane fade" id="nav-activecourses" role="tabpanel"
                    aria-labelledby="nav-activecourses-tab">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-md-6 mb-4">
                            <div class="contentCard contentCard--watch-course">
                                <div class="contentCard-top">
                                    <a href="#"><img
                                            src="{{asset('public/frontend/dist/images/courses/demo-img-04.png')}}"
                                            alt="images" class="img-fluid" /></a>
                                </div>
                                <div class="contentCard-bottom">
                                    <h5>
                                        <a href="#" class="font-title--card">Chicago International
                                            Conference on Education</a>
                                    </h5>
                                    <div class="contentCard-info d-flex align-items-center justify-content-between">
                                        <a href="instructor-profile.html"
                                            class="contentCard-user d-flex align-items-center">
                                            <img src="{{asset('public/frontend/dist/images/courses/7.png')}}"
                                                alt="client-image" class="rounded-circle" />
                                            <p class="font-para--md">Brandon Dias</p>
                                        </a>
                                        <div class="contentCard-course--status d-flex align-items-center">
                                            <span class="percentage">43%</span>
                                            <p>Finish</p>
                                        </div>
                                    </div>
                                    <a class="button button-md button--primary-outline w-100 my-3" href="#">Watch
                                        Course</a>
                                    <div class="contentCard-watch--progress">
                                        <span class="percentage" style="width: 43%;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-md-6 mb-4">
                            <div class="contentCard contentCard--watch-course">
                                <div class="contentCard-top">
                                    <a href="#"><img
                                            src="{{asset('public/frontend/dist/images/courses/demo-img-05.png')}}"
                                            alt="images" class="img-fluid" /></a>
                                </div>
                                <div class="contentCard-bottom">
                                    <h5>
                                        <a href="#" class="font-title--card">Chicago International
                                            Conference on Education</a>
                                    </h5>
                                    <div class="contentCard-info d-flex align-items-center justify-content-between">
                                        <a href="instructor-profile.html"
                                            class="contentCard-user d-flex align-items-center">
                                            <img src="{{asset('public/frontend/dist/images/courses/7.png')}}"
                                                alt="client-image" class="rounded-circle" />
                                            <p class="font-para--md">Brandon Dias</p>
                                        </a>
                                        <div class="contentCard-course--status d-flex align-items-center">
                                            <span class="percentage">43%</span>
                                            <p>Finish</p>
                                        </div>
                                    </div>
                                    <a class="button button-md button--primary-outline w-100 my-3" href="#">Watch
                                        Course</a>
                                    <div class="contentCard-watch--progress">
                                        <span class="percentage" style="width: 43%;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-md-6 mb-4">
                            <div class="contentCard contentCard--watch-course">
                                <div class="contentCard-top">
                                    <a href="#"><img
                                            src="{{asset('public/frontend/dist/images/courses/demo-img-01.png')}}"
                                            alt="images" class="img-fluid" /></a>
                                </div>
                                <div class="contentCard-bottom">
                                    <h5>
                                        <a href="#" class="font-title--card">Chicago International
                                            Conference on Education</a>
                                    </h5>
                                    <div class="contentCard-info d-flex align-items-center justify-content-between">
                                        <a href="instructor-profile.html"
                                            class="contentCard-user d-flex align-items-center">
                                            <img src="{{asset('public/frontend/dist/images/courses/7.png')}}"
                                                alt="client-image" class="rounded-circle" />
                                            <p class="font-para--md">Brandon Dias</p>
                                        </a>
                                        <div class="contentCard-course--status d-flex align-items-center">
                                            <span class="percentage">43%</span>
                                            <p>Finish</p>
                                        </div>
                                    </div>
                                    <a class="button button-md button--primary-outline w-100 my-3" href="#">Watch
                                        Course</a>
                                    <div class="contentCard-watch--progress">
                                        <span class="percentage" style="width: 43%;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-lg-5">
                            <div class="pagination justify-content-center pb-0">
                                <div class="pagination-group">
                                    <a href="#" class="p_prev">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9.414" height="16.828"
                                            viewBox="0 0 9.414 16.828">
                                            <path data-name="Icon feather-chevron-left" d="M20.5,23l-7-7,7-7"
                                                transform="translate(-12.5 -7.586)" fill="none" stroke="#1a2224"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                        </svg>
                                    </a>
                                    <a href="#!1" class="cdp_i active">01</a>
                                    <a href="#!2" class="cdp_i">02</a>
                                    <a href="#!3" class="cdp_i">03</a>
                                    <a href="#!+1" class="p_next">
                                        <svg width="10" height="16" viewBox="0 0 10 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 1L8.5 8L1.5 15" stroke="#35343E" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Completed Courses --}}
                <div class="tab-pane fade" id="nav-completedcourses" role="tabpanel"
                    aria-labelledby="nav-completedcourses-tab">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-md-6 mb-4">
                            <div class="contentCard contentCard--watch-course">
                                <div class="contentCard-top">
                                    <a href="#"><img
                                            src="{{asset('public/frontend/dist/images/courses/demo-img-02.png')}}"
                                            alt="images" class="img-fluid" /></a>
                                </div>
                                <div class="contentCard-bottom">
                                    <h5>
                                        <a href="#" class="font-title--card">Chicago International
                                            Conference on Education</a>
                                    </h5>
                                    <div class="contentCard-info d-flex align-items-center justify-content-between">
                                        <a href="instructor-profile.html"
                                            class="contentCard-user d-flex align-items-center">
                                            <img src="{{asset('public/frontend/dist/images/courses/7.png')}}"
                                                alt="client-image" class="rounded-circle" />
                                            <p class="font-para--md">Brandon Dias</p>
                                        </a>
                                        <div class="contentCard-course--status d-flex align-items-center">
                                            <span class="percentage">100%</span>
                                            <p>Finish</p>
                                        </div>
                                    </div>
                                    <a class="button button-md button--primary-outline w-100 my-3" href="#">Watch
                                        Course</a>
                                    <div class="contentCard-watch--progress">
                                        <span class="percentage" style="width: 100%;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-md-6 mb-4">
                            <div class="contentCard contentCard--watch-course">
                                <div class="contentCard-top">
                                    <a href="#"><img
                                            src="{{asset('public/frontend/dist/images/courses/demo-img-03.png')}}"
                                            alt="images" class="img-fluid" /></a>
                                </div>
                                <div class="contentCard-bottom">
                                    <h5>
                                        <a href="#" class="font-title--card">Chicago International
                                            Conference on Education</a>
                                    </h5>
                                    <div class="contentCard-info d-flex align-items-center justify-content-between">
                                        <a href="instructor-profile.html"
                                            class="contentCard-user d-flex align-items-center">
                                            <img src="{{asset('public/frontend/dist/images/courses/7.png')}}"
                                                alt="client-image" class="rounded-circle" />
                                            <p class="font-para--md">Brandon Dias</p>
                                        </a>
                                        <div class="contentCard-course--status d-flex align-items-center">
                                            <span class="percentage">100%</span>
                                            <p>Finish</p>
                                        </div>
                                    </div>
                                    <a class="button button-md button--primary-outline w-100 my-3" href="#">Watch
                                        Course</a>
                                    <div class="contentCard-watch--progress">
                                        <span class="percentage" style="width: 100%;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-md-6 mb-4">
                            <div class="contentCard contentCard--watch-course">
                                <div class="contentCard-top">
                                    <a href="#"><img
                                            src="{{asset('public/frontend/dist/images/courses/demo-img-04.png')}}"
                                            alt="images" class="img-fluid" /></a>
                                </div>
                                <div class="contentCard-bottom">
                                    <h5>
                                        <a href="#" class="font-title--card">Chicago International
                                            Conference on Education</a>
                                    </h5>
                                    <div class="contentCard-info d-flex align-items-center justify-content-between">
                                        <a href="instructor-profile.html"
                                            class="contentCard-user d-flex align-items-center">
                                            <img src="{{asset('public/frontend/dist/images/courses/7.png')}}"
                                                alt="client-image" class="rounded-circle" />
                                            <p class="font-para--md">Brandon Dias</p>
                                        </a>
                                        <div class="contentCard-course--status d-flex align-items-center">
                                            <span class="percentage">100%</span>
                                            <p>Finish</p>
                                        </div>
                                    </div>
                                    <a class="button button-md button--primary-outline w-100 my-3" href="#">Watch
                                        Course</a>
                                    <div class="contentCard-watch--progress">
                                        <span class="percentage" style="width: 100%;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-lg-5">
                            <div class="pagination justify-content-center pb-0">
                                <div class="pagination-group">
                                    <a href="#" class="p_prev">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9.414" height="16.828"
                                            viewBox="0 0 9.414 16.828">
                                            <path data-name="Icon feather-chevron-left" d="M20.5,23l-7-7,7-7"
                                                transform="translate(-12.5 -7.586)" fill="none" stroke="#1a2224"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                        </svg>
                                    </a>
                                    <a href="#!1" class="cdp_i active">01</a>
                                    <a href="#!2" class="cdp_i">02</a>
                                    <a href="#!3" class="cdp_i">03</a>
                                    <a href="#!+1" class="p_next">
                                        <svg width="10" height="16" viewBox="0 0 10 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 1L8.5 8L1.5 15" stroke="#35343E" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Purchase History --}}
                <div class="tab-pane fade" id="nav-purchase" role="tabpanel" aria-labelledby="nav-purchase-tab">
                    @foreach ($checkout as $e)
                    @if ($e->cart_data)
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <div class="purchase-area">
                                <div class="purchase-area-close">
                                    <a href="#">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 1L1 11" stroke="#F15C4C" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M1 1L11 11" stroke="#F15C4C" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="d-flex align-items-lg-center align-items-start flex-column flex-lg-row">


                                    <div class="purchase-area-items">
                                        @php $i=0; @endphp
                                        @foreach (json_decode(base64_decode($e->cart_data))->cart as $data)
                                        @php ++$i; @endphp
                                        <div
                                            class="purchase-area-items-start d-flex align-items-lg-center flex-column flex-lg-row">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="{{asset('public/uploads/courses/'.$data->image)}}"
                                                        alt="Image" />
                                                </a>
                                            </div>
                                            <div class="text d-flex flex-column flex-lg-row">
                                                <div class="text-main">
                                                    <h6>
                                                        <a href="#">{{$data->title_en}}</a>
                                                    </h6>
                                                    <p> By 
                                                        <a href="#">
                                                         {{$data->instructor}}</a>
                                                    </p>
                                                </div>
                                                <p class="ms-2">{{$data->price?('৳'.$data->price):'Free'}}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="purchase-area-items-end">
                                        <p>{{$e->created_at}}</p>
                                        <dl class="row">
                                            <dt class="col-sm-4">Total</dt>
                                            <dd class="col-sm-8">
                                                {{json_decode(base64_decode($e->cart_data))->cart_details->total_amount}}
                                            </dd>
                                            <dt class="col-sm-4">Total Courses</dt>
                                            <dd class="col-sm-8">
                                                {{$i}}
                                            </dd>
                                            <dt class="col-sm-4">Payment Type</dt>
                                            <dd class="col-sm-8">
                                                {{$e->txnid}}
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <div class="row mt-lg-5 mt-4">
                        <div class="col-lg-12 text-center">
                            <p style="color: #42414b !important; font-size: 18px !important;">
                                Yay! You have seen all your purchase history.
                                <svg width="31" height="31" viewBox="0 0 31 31" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_d)">
                                        <path
                                            d="M15.8653 26.6346C23.1194 26.4329 28.8365 20.3887 28.6347 13.1346C28.433 5.8805 22.3888 0.163433 15.1347 0.365178C7.88061 0.566922 2.16355 6.61108 2.36529 13.8652C2.56704 21.1193 8.61119 26.8363 15.8653 26.6346Z"
                                            fill="url(#paint0_radial)" />
                                        <path
                                            d="M15.8653 26.6346C23.1194 26.4329 28.8365 20.3887 28.6347 13.1346C28.433 5.8805 22.3888 0.163433 15.1347 0.365178C7.88061 0.566922 2.16355 6.61108 2.36529 13.8652C2.56704 21.1193 8.61119 26.8363 15.8653 26.6346Z"
                                            fill="url(#paint1_linear)" />
                                        <path
                                            d="M28.0022 13.1522C28.1942 20.0569 22.7524 25.81 15.8477 26.002C8.94295 26.1941 3.18988 20.7523 2.99785 13.8476C2.80582 6.94284 8.24756 1.18977 15.1523 0.997737C22.057 0.805709 27.8101 6.24744 28.0022 13.1522Z"
                                            stroke="#D67504" stroke-opacity="0.27" stroke-width="1.26563" />
                                    </g>
                                    <path
                                        d="M17.7944 8.07061C16.9534 8.34992 15.9151 8.39547 15.5022 8.40458C15.0893 8.39547 14.0449 8.34992 13.2069 8.07061C11.61 7.5393 9.03846 7.20231 7.07718 7.24785C5.62595 7.28429 4.12311 7.47859 3.18801 7.66683C2.77208 7.75184 2.50794 8.15866 2.6051 8.57156L2.70528 8.99963C2.76297 9.24859 2.95728 9.43379 3.20016 9.5188C3.32464 9.56434 3.44608 9.64632 3.50073 9.79205C3.66771 10.2444 4.57852 12.9252 5.07036 13.918C5.47415 14.7286 6.56712 15.4239 9.10829 15.436C12.7242 15.4512 13.9751 13.0588 14.5519 11.5165C14.6126 11.3556 14.7037 11.0459 14.7857 10.7454C14.9041 10.3173 15.1652 9.89526 15.2805 9.83454C15.3504 9.80115 15.4293 9.7708 15.5083 9.7708C15.5902 9.7708 15.6692 9.80115 15.739 9.83454C15.8544 9.89526 16.1094 10.3173 16.2278 10.7454C16.3098 11.0459 16.4008 11.3526 16.4616 11.5165C17.0354 13.0619 18.2893 15.4512 21.9021 15.436C24.4433 15.4269 25.5363 14.7317 25.9401 13.918C26.4319 12.9283 27.3397 10.2444 27.5097 9.79205C27.5644 9.64632 27.6828 9.56434 27.8072 9.5188C28.0501 9.43379 28.2414 9.24859 28.3021 8.99963L28.4023 8.56852C28.4964 8.15562 28.2323 7.7488 27.8194 7.66379C26.8843 7.47555 25.3814 7.28125 23.9302 7.24481C21.9598 7.20231 19.3913 7.5393 17.7944 8.07061Z"
                                        fill="#261F11" />
                                    <path
                                        d="M17.1971 10.4655C17.273 12.2173 18.9792 13.8993 20.5731 14.2849C22.92 14.8526 24.6839 14.3456 25.6858 12.19C25.9864 11.5403 26.6331 10.1224 26.5906 9.36647C26.5177 8.05187 24.8509 8.2826 23.7853 8.25831C23.6699 8.25528 17.0908 8.07008 17.1971 10.4655Z"
                                        fill="#574A2D" />
                                    <path
                                        d="M13.8691 10.4655C13.7932 12.2173 12.087 13.8993 10.4931 14.2849C8.1462 14.8526 6.38226 14.3456 5.38037 12.19C5.0798 11.5403 4.43313 10.1224 4.47563 9.36647C4.5485 8.05187 6.21528 8.2826 7.28093 8.25831C7.39326 8.25528 13.9754 8.07008 13.8691 10.4655Z"
                                        fill="#574A2D" />
                                    <g filter="url(#filter1_di)">
                                        <path
                                            d="M18.303 20.2245C17.9538 20.2245 17.5986 20.2002 17.2373 20.1455C16.8852 20.0939 16.6453 19.766 16.6969 19.4138C16.7485 19.0647 17.0734 18.8218 17.4286 18.8734C19.4628 19.177 21.2692 18.4089 22.0312 16.9121C22.1922 16.5964 22.5808 16.4719 22.8965 16.6328C23.2123 16.7937 23.3398 17.1824 23.1789 17.4981C22.3015 19.2165 20.4525 20.2245 18.303 20.2245Z"
                                            fill="#823423" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_d" x="0.65517" y="0.360352" width="29.6901" height="29.6901"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                            <feOffset dy="1.70518" />
                                            <feGaussianBlur stdDeviation="0.852591" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.9 0 0 0 0 0.6165 0 0 0 0 0.19125 0 0 0 0.33 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow"
                                                result="shape" />
                                        </filter>
                                        <filter id="filter1_di" x="16.2636" y="16.5625" width="7.41119" height="4.51454"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                            <feOffset dy="0.426295" />
                                            <feGaussianBlur stdDeviation="0.213148" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.35 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow"
                                                result="shape" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                            <feOffset dy="0.426295" />
                                            <feGaussianBlur stdDeviation="0.426295" />
                                            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                            <feBlend mode="normal" in2="shape" result="effect2_innerShadow" />
                                        </filter>
                                        <radialGradient id="paint0_radial" cx="0" cy="0" r="1"
                                            gradientUnits="userSpaceOnUse"
                                            gradientTransform="translate(15.1347 0.365178) rotate(88.407) scale(26.2796)">
                                            <stop stop-color="#EED919" offset="1" />
                                            <stop offset="1" stop-color="#F1BE08" />
                                        </radialGradient>
                                        <linearGradient id="paint1_linear" x1="15.1347" y1="0.365178" x2="15.8653"
                                            y2="26.6346" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="white" offset="1" stop-opacity="0.52" />
                                            <stop offset="1" stop-color="white" stop-opacity="0" />
                                            <stop offset="1" stop-color="white" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

@endsection