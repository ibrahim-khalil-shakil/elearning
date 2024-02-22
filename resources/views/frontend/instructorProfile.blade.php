@extends('frontend.layouts.app')
@section('title', "Instructor's Profile")
@section('body-attr') style="background-color: #ebebf2;" @endsection

@push('styles')
<link rel="stylesheet" href="{{asset('public/frontend/src/scss/vendors/plugin/css/star-rating-svg.css')}}" />
@endpush

@section('content')
<!-- Breadcrumb Starts Here -->
<div class="py-0">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0">
                <li class="breadcrumb-item"><a href="index.html" class="fs-6 text-secondary">Home</a></li>
                <li class="breadcrumb-item"><a href="course-search.html" class="fs-6 text-secondary">Courses</a></li>
                <li class="breadcrumb-item d-none d-lg-inline-block"><a href="#"
                        class="fs-6 text-secondary">Course Detail Instructor</a></li>
                <li class="breadcrumb-item d-none d-lg-inline-block"><a href="#" class="fs-6 text-secondary">{{$instructor->name_en}}</a></li>
            </ol>
        </nav>
    </div>
</div>

<!-- Instructor Courses Starts Here -->
<section class="section instructor-courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="instructor-courses-instructor">
                    <div class="instructor-image mx-auto text-center">
                        <img src="{{asset('public/uploads/users/'.$instructor->image)}}" alt="Instructor" />
                    </div>
                    <div class="instructor-info text-center">
                        <h5 class="font-title--sm">{{$instructor->name_en}}</h5>
                        <p class="text-secondary mb-3">{{$instructor->designation}}</p>
                        <ul class="list-inline social-links">
                            <li class="list-inline-item">
                                <a href="#">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.9507 5.29205C17.9086 4.33564 17.7539 3.67812 17.5324 3.10836C17.3038 2.50359 16.9522 1.96213 16.4915 1.51201C16.0414 1.05489 15.4963 0.699691 14.8986 0.474702C14.3255 0.253147 13.6714 0.0984842 12.715 0.0563159C11.7515 0.0105764 11.4456 0 9.00174 0C6.55791 0 6.25202 0.0105764 5.29204 0.0527447C4.33563 0.0949129 3.67811 0.249713 3.1085 0.471131C2.50358 0.699691 1.96213 1.05132 1.51201 1.51201C1.05489 1.96213 0.699827 2.50716 0.474701 3.10493C0.253147 3.67812 0.098484 4.33207 0.0563158 5.28848C0.0105764 6.25203 0 6.55792 0 9.00176C0 11.4456 0.0105764 11.7515 0.0527446 12.7115C0.0949128 13.6679 0.249713 14.3254 0.471267 14.8952C0.699827 15.4999 1.05489 16.0414 1.51201 16.4915C1.96213 16.9486 2.50715 17.3038 3.10493 17.5288C3.67811 17.7504 4.33206 17.905 5.28861 17.9472C6.24845 17.9895 6.55448 17.9999 8.99831 17.9999C11.4421 17.9999 11.748 17.9895 12.708 17.9472C13.6644 17.905 14.3219 17.7504 14.8916 17.5288C16.1012 17.0611 17.0577 16.1047 17.5254 14.8952C17.7468 14.322 17.9016 13.6679 17.9437 12.7115C17.9859 11.7515 17.9965 11.4456 17.9965 9.00176C17.9965 6.55792 17.9929 6.25203 17.9507 5.29205ZM16.3298 12.6411C16.2911 13.5202 16.1434 13.9949 16.0203 14.3114C15.7179 15.0956 15.0955 15.7179 14.3114 16.0204C13.9949 16.1434 13.5168 16.2911 12.6411 16.3297C11.6917 16.372 11.407 16.3824 9.00531 16.3824C6.60365 16.3824 6.31534 16.372 5.36937 16.3297C4.4903 16.2911 4.01559 16.1434 3.69913 16.0204C3.3089 15.8761 2.9537 15.6476 2.66539 15.3487C2.3665 15.0568 2.13794 14.7052 1.99372 14.315C1.87065 13.9985 1.72299 13.5202 1.68439 12.6447C1.64209 11.6953 1.63165 11.4104 1.63165 9.00876C1.63165 6.60709 1.64209 6.31878 1.68439 5.37295C1.72299 4.49387 1.87065 4.01917 1.99372 3.7027C2.13794 3.31234 2.3665 2.95727 2.66896 2.66883C2.9607 2.36994 3.31233 2.14138 3.7027 1.99729C4.01917 1.87422 4.49744 1.72656 5.37294 1.68783C6.32235 1.64566 6.60722 1.63508 9.00875 1.63508C11.414 1.63508 11.6987 1.64566 12.6447 1.68783C13.5238 1.72656 13.9985 1.87422 14.3149 1.99729C14.7052 2.14138 15.0604 2.36994 15.3487 2.66883C15.6476 2.96071 15.8761 3.31234 16.0203 3.7027C16.1434 4.01917 16.2911 4.49731 16.3298 5.37295C16.372 6.32236 16.3826 6.60709 16.3826 9.00876C16.3826 11.4104 16.372 11.6917 16.3298 12.6411Z"
                                            fill="#42414B"></path>
                                        <path
                                            d="M9.00188 4.37744C6.44912 4.37744 4.37793 6.44849 4.37793 9.00139C4.37793 11.5543 6.44912 13.6253 9.00188 13.6253C11.5548 13.6253 13.6258 11.5543 13.6258 9.00139C13.6258 6.44849 11.5548 4.37744 9.00188 4.37744ZM9.00188 12.0008C7.34578 12.0008 6.00244 10.6576 6.00244 9.00139C6.00244 7.34515 7.34578 6.00195 9.00188 6.00195C10.6581 6.00195 12.0013 7.34515 12.0013 9.00139C12.0013 10.6576 10.6581 12.0008 9.00188 12.0008Z"
                                            fill="#42414B"></path>
                                        <path
                                            d="M14.8876 4.19521C14.8876 4.79133 14.4043 5.27469 13.808 5.27469C13.2119 5.27469 12.7285 4.79133 12.7285 4.19521C12.7285 3.59894 13.2119 3.11572 13.808 3.11572C14.4043 3.11572 14.8876 3.59894 14.8876 4.19521Z"
                                            fill="#42414B"></path>
                                    </svg>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.9955 18.0002V17.9994H18V11.3979C18 8.16841 17.3047 5.68066 13.5292 5.68066C11.7142 5.68066 10.4962 6.67666 9.99896 7.62091H9.94646V5.98216H6.3667V17.9994H10.0942V12.0489C10.0942 10.4822 10.3912 8.96716 12.3315 8.96716C14.2432 8.96716 14.2717 10.7552 14.2717 12.1494V18.0002H17.9955Z"
                                            fill="#42414B"></path>
                                        <path d="M0.296875 5.98291H4.02888V18.0002H0.296875V5.98291Z" fill="#42414B">
                                        </path>
                                        <path
                                            d="M2.1615 0C0.96825 0 0 0.96825 0 2.1615C0 3.35475 0.96825 4.34325 2.1615 4.34325C3.35475 4.34325 4.323 3.35475 4.323 2.1615C4.32225 0.96825 3.354 0 2.1615 0V0Z"
                                            fill="#42414B"></path>
                                    </svg>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18 1.73137C17.3306 2.025 16.6174 2.21962 15.8737 2.31412C16.6388 1.85737 17.2226 1.13962 17.4971 0.2745C16.7839 0.69975 15.9964 1.00013 15.1571 1.16775C14.4799 0.446625 13.5146 0 12.4616 0C10.4186 0 8.77387 1.65825 8.77387 3.69113C8.77387 3.98363 8.79862 4.26487 8.85938 4.53262C5.7915 4.383 3.07687 2.91263 1.25325 0.67275C0.934875 1.22513 0.748125 1.85738 0.748125 2.538C0.748125 3.816 1.40625 4.94887 2.38725 5.60475C1.79437 5.5935 1.21275 5.42138 0.72 5.15025C0.72 5.1615 0.72 5.17613 0.72 5.19075C0.72 6.984 1.99912 8.4735 3.6765 8.81662C3.37612 8.89875 3.04875 8.93812 2.709 8.93812C2.47275 8.93812 2.23425 8.92463 2.01038 8.87512C2.4885 10.3365 3.84525 11.4109 5.4585 11.4457C4.203 12.4279 2.60888 13.0196 0.883125 13.0196C0.5805 13.0196 0.29025 13.0061 0 12.969C1.63462 14.0231 3.57188 14.625 5.661 14.625C12.4515 14.625 16.164 9 16.164 4.12425C16.164 3.96112 16.1584 3.80363 16.1505 3.64725C16.8829 3.1275 17.4982 2.47837 18 1.73137Z"
                                            fill="#42414B"></path>
                                    </svg>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M16.0427 0.885481C16.8137 1.09312 17.4216 1.70094 17.6291 2.47204C18.0148 3.88048 17.9999 6.81629 17.9999 6.81629C17.9999 6.81629 17.9999 9.73713 17.6293 11.1457C17.4216 11.9167 16.8138 12.5246 16.0427 12.7321C14.6341 13.1029 8.99996 13.1029 8.99996 13.1029C8.99996 13.1029 3.38048 13.1029 1.95721 12.7174C1.18611 12.5098 0.57829 11.9018 0.37065 11.1309C0 9.73713 0 6.80146 0 6.80146C0 6.80146 0 3.88048 0.37065 2.47204C0.578153 1.70108 1.20094 1.07829 1.95707 0.870787C3.36565 0.5 8.99983 0.5 8.99983 0.5C8.99983 0.5 14.6341 0.5 16.0427 0.885481ZM11.8913 6.80154L7.20605 9.50006V4.10303L11.8913 6.80154Z"
                                            fill="#42414B"></path>
                                    </svg>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <svg width="9" height="18" viewBox="0 0 9 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.3575 2.98875H9.00075V0.12675C8.71725 0.08775 7.74225 0 6.60675 0C4.2375 0 2.6145 1.49025 2.6145 4.22925V6.75H0V9.9495H2.6145V18H5.82V9.95025H8.32875L8.727 6.75075H5.81925V4.5465C5.82 3.62175 6.069 2.98875 7.3575 2.98875Z"
                                            fill="#42414B"></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="instructor-course-info">
                        <div class="instructor-course-info-rating">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <svg width="30" height="28" viewBox="0 0 30 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M15.9846 2.35002L19.1839 8.69148C19.3441 9.01135 19.6535 9.23457 20.0127 9.28629L27.1751 10.3058C27.4652 10.3439 27.7263 10.4936 27.9045 10.7223C28.2388 11.151 28.1877 11.7581 27.7871 12.1269L22.5959 17.0733C22.332 17.3183 22.2146 17.6776 22.2837 18.0274L23.5269 25.0072C23.6139 25.5857 23.2133 26.1274 22.6263 26.2213C22.3831 26.2581 22.1345 26.22 21.9135 26.1125L15.5343 22.8172C15.2138 22.6457 14.8298 22.6457 14.5093 22.8172L8.0831 26.1302C7.54574 26.3997 6.8882 26.1996 6.59535 25.681C6.48346 25.4714 6.44478 25.2332 6.48346 25.0004L7.7267 18.0206C7.78886 17.6722 7.67145 17.3142 7.41451 17.0678L2.19566 12.1229C1.77019 11.7064 1.76743 11.0285 2.19151 10.6093C2.1929 10.6079 2.19428 10.6052 2.19566 10.6039C2.37109 10.4473 2.58659 10.3425 2.82004 10.3017L9.98387 9.28221C10.3417 9.2264 10.6497 9.0059 10.8127 8.68604L14.0092 2.35002C14.1377 2.09277 14.3656 1.89541 14.6419 1.80557C14.9195 1.71438 15.2234 1.73616 15.4845 1.86546C15.6986 1.97027 15.8741 2.14041 15.9846 2.35002Z"
                                        stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="text text-center">
                                <h6>5.0</h6>
                                <p>Ratings</p>
                            </div>
                        </div>
                        <div class="instructor-course-info-students">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <svg width="36" height="28" viewBox="0 0 36 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M26.9229 12.4414C29.4522 12.4414 31.504 10.3823 31.504 7.84211C31.504 5.30195 29.4522 3.2428 26.9229 3.2428"
                                        stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M29.0283 17.4402C29.7836 17.4925 30.5346 17.6 31.274 17.7672C32.3014 17.9691 33.5371 18.392 33.977 19.3177C34.2577 19.9106 34.2577 20.6008 33.977 21.1952C33.5386 22.1209 32.3014 22.5423 31.274 22.7545"
                                        stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M9.07725 12.4414C6.54792 12.4414 4.49609 10.3823 4.49609 7.84211C4.49609 5.30195 6.54792 3.2428 9.07725 3.2428"
                                        stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M6.97137 17.4403C6.21604 17.4926 5.46505 17.6002 4.72564 17.7673C3.69828 17.9693 2.46256 18.3921 2.02412 19.3178C1.74196 19.9107 1.74196 20.601 2.02412 21.1953C2.46111 22.121 3.69828 22.5424 4.72564 22.7546"
                                        stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M17.9921 18.4314C23.1173 18.4314 27.4959 19.2103 27.4959 22.3274C27.4959 25.443 23.1462 26.2509 17.9921 26.2509C12.8654 26.2509 8.48828 25.472 8.48828 22.355C8.48828 19.2379 12.8379 18.4314 17.9921 18.4314Z"
                                        stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M17.9927 13.9843C14.6125 13.9843 11.9023 11.2625 11.9023 7.86643C11.9023 4.4718 14.6125 1.75 17.9927 1.75C21.3729 1.75 24.0831 4.4718 24.0831 7.86643C24.0831 11.2625 21.3729 13.9843 17.9927 13.9843Z"
                                        stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="text text-center">
                                <h6>29,874</h6>
                                <p>Students Learning</p>
                            </div>
                        </div>
                        <div class="instructor-course-info-courses">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <svg width="32" height="28" viewBox="0 0 32 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2 1.75H10.4C11.8852 1.75 13.3096 2.32361 14.3598 3.34464C15.41 4.36567 16 5.75049 16 7.19444V26.25C16 25.167 15.5575 24.1284 14.7699 23.3626C13.9822 22.5969 12.9139 22.1667 11.8 22.1667H2V1.75Z"
                                        stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M30 1.75H21.6C20.1148 1.75 18.6904 2.32361 17.6402 3.34464C16.59 4.36567 16 5.75049 16 7.19444V26.25C16 25.167 16.4425 24.1284 17.2302 23.3626C18.0178 22.5969 19.0861 22.1667 20.2 22.1667H30V1.75Z"
                                        stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="text text-center">
                                <h6>35</h6>
                                <p>Courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="about-instructor">
                        <h6>About Me</h6>
                        <p>{{$instructor->bio}}</p>
                    </div>
                    <div class="instructor-qualification">
                        <h6>Education</h6>
                        <div class="qualification-info">
                            <div class="qualification-info-title">
                                <h6>Bachelor Degree</h6>
                                <p>2008 - 2010</p>
                            </div>
                            <p>
                                Don Honorio Vectura Technological States University
                            </p>
                        </div>
                        <div class="qualification-info">
                            <div class="qualification-info-title">
                                <h6>Vocation</h6>
                                <p>2018 - 2011</p>
                            </div>
                            <p>
                                Gonzalo Puyat School of Arts and Trades
                            </p>
                        </div>
                        <div class="qualification-info pb-0 mb-0 border-0">
                            <div class="qualification-info-title">
                                <h6>Bachelor of Design</h6>
                                <p>2012 - 2014</p>
                            </div>
                            <p>
                                Don Honorio Vectura Technological States University
                            </p>
                        </div>
                    </div>
                    <div class="instructor-qualification mb-0 pb-0 border-0">
                        <h6>Experiences</h6>
                        <div class="qualification-info">
                            <div class="qualification-info-title">
                                <h6>Typeface Design</h6>
                                <p>2008 - 2010</p>
                            </div>
                            <p>
                                Integer ultricies a turpis ac mattis. Integer auctor eleifend diam vitae sodales. Nullam
                                mollis semper rutrum. Vestibulum hendrerit nulla vitae velit semper.
                            </p>
                        </div>
                        <div class="qualification-info pb-0 mb-0 border-0">
                            <div class="qualification-info-title">
                                <h6>Graphic Design</h6>
                                <p>2018 - 2011</p>
                            </div>
                            <p>
                                Integer ultricies a turpis ac mattis. Integer auctor eleifend diam vitae sodales. Nullam
                                mollis semper rutrum. Vestibulum hendrerit nulla vitae velit semper.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mt-4 mt-lg-0">
                <div class="instructor-tabs">
                    <ul class="nav nav-pills instructor-tabs-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-courses-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-courses" type="button" role="tab"
                                aria-selected="true">Courses</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link me-0" id="pills-pills-review-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-pills-review" type="button" role="tab"
                                aria-selected="false">Review</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-courses" role="tabpanel"
                            aria-labelledby="pills-courses-tab">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="contentCard contentCard--course">
                                        <div class="contentCard-top">
                                            <a href="#"><img
                                                    src="{{asset('public/frontend/dist/images/courses/demo-img-01.png')}}"
                                                    alt="images" class="img-fluid" /></a>
                                        </div>
                                        <div class="contentCard-bottom">
                                            <h5>
                                                <a href="#" class="font-title--card">Chicago
                                                    International Conference on Education</a>
                                            </h5>
                                            <div
                                                class="contentCard-info d-flex align-items-center justify-content-between">
                                                <a href="instructor-profile.html"
                                                    class="contentCard-user d-flex align-items-center">
                                                    <img src="{{asset('public/frontend/dist/images/courses/7.png')}}"
                                                        alt="client-image" class="rounded-circle" />
                                                    <p class="font-para--md">Brandon Dias</p>
                                                </a>
                                                <div class="price">
                                                    <span>৳12</span>
                                                    <del>৳95</del>
                                                </div>
                                            </div>
                                            <div class="contentCard-more">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon">
                                                        <img src="{{asset('public/frontend/dist/images/icon/star.png')}}"
                                                            alt="star" />
                                                    </div>
                                                    <span>4.5</span>
                                                </div>
                                                <div class="eye d-flex align-items-center">
                                                    <div class="icon">
                                                        <img src="{{asset('public/frontend/dist/images/icon/eye.png')}}"
                                                            alt="eye" />
                                                    </div>
                                                    <span>24,517</span>
                                                </div>
                                                <div class="book d-flex align-items-center">
                                                    <div class="icon">
                                                        <img src="{{asset('public/frontend/dist/images/icon/book.png')}}"
                                                            alt="location" />
                                                    </div>
                                                    <span>37 Lesson</span>
                                                </div>
                                                <div class="clock d-flex align-items-center">
                                                    <div class="icon">
                                                        <img src="{{asset('public/frontend/dist/images/icon/Clock.png')}}"
                                                            alt="clock" />
                                                    </div>
                                                    <span>3 Hours</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="contentCard contentCard--course">
                                        <div class="contentCard-top">
                                            <a href="#"><img
                                                    src="{{asset('public/frontend/dist/images/courses/demo-img-02.png')}}"
                                                    alt="images" class="img-fluid" /></a>
                                        </div>
                                        <div class="contentCard-bottom">
                                            <h5>
                                                <a href="#" class="font-title--card">Chicago
                                                    International Conference on Education</a>
                                            </h5>
                                            <div
                                                class="contentCard-info d-flex align-items-center justify-content-between">
                                                <a href="instructor-profile.html"
                                                    class="contentCard-user d-flex align-items-center">
                                                    <img src="{{asset('public/frontend/dist/images/courses/7.png')}}"
                                                        alt="client-image" class="rounded-circle" />
                                                    <p class="font-para--md">Brandon Dias</p>
                                                </a>
                                                <div class="price">
                                                    <span>৳12</span>
                                                    <del>৳95</del>
                                                </div>
                                            </div>
                                            <div class="contentCard-more">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon">
                                                        <img src="{{asset('public/frontend/dist/images/icon/star.png')}}"
                                                            alt="star" />
                                                    </div>
                                                    <span>4.5</span>
                                                </div>
                                                <div class="eye d-flex align-items-center">
                                                    <div class="icon">
                                                        <img src="{{asset('public/frontend/dist/images/icon/eye.png')}}"
                                                            alt="eye" />
                                                    </div>
                                                    <span>24,517</span>
                                                </div>
                                                <div class="book d-flex align-items-center">
                                                    <div class="icon">
                                                        <img src="{{asset('public/frontend/dist/images/icon/book.png')}}"
                                                            alt="location" />
                                                    </div>
                                                    <span>37 Lesson</span>
                                                </div>
                                                <div class="clock d-flex align-items-center">
                                                    <div class="icon">
                                                        <img src="{{asset('public/frontend/dist/images/icon/Clock.png')}}"
                                                            alt="clock" />
                                                    </div>
                                                    <span>3 Hours</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="contentCard contentCard--course">
                                        <div class="contentCard-top">
                                            <a href="#"><img
                                                    src="{{asset('public/frontend/dist/images/courses/demo-img-03.png')}}"
                                                    alt="images" class="img-fluid" /></a>
                                        </div>
                                        <div class="contentCard-bottom">
                                            <h5>
                                                <a href="#" class="font-title--card">Chicago
                                                    International Conference on Education</a>
                                            </h5>
                                            <div
                                                class="contentCard-info d-flex align-items-center justify-content-between">
                                                <a href="instructor-profile.html"
                                                    class="contentCard-user d-flex align-items-center">
                                                    <img src="{{asset('public/frontend/dist/images/courses/7.png')}}"
                                                        alt="client-image" class="rounded-circle" />
                                                    <p class="font-para--md">Brandon Dias</p>
                                                </a>
                                                <div class="price">
                                                    <span>৳12</span>
                                                    <del>৳95</del>
                                                </div>
                                            </div>
                                            <div class="contentCard-more">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon">
                                                        <img src="{{asset('public/frontend/dist/images/icon/star.png')}}"
                                                            alt="star" />
                                                    </div>
                                                    <span>4.5</span>
                                                </div>
                                                <div class="eye d-flex align-items-center">
                                                    <div class="icon">
                                                        <img src="{{asset('public/frontend/dist/images/icon/eye.png')}}"
                                                            alt="eye" />
                                                    </div>
                                                    <span>24,517</span>
                                                </div>
                                                <div class="book d-flex align-items-center">
                                                    <div class="icon">
                                                        <img src="{{asset('public/frontend/dist/images/icon/book.png')}}"
                                                            alt="location" />
                                                    </div>
                                                    <span>37 Lesson</span>
                                                </div>
                                                <div class="clock d-flex align-items-center">
                                                    <div class="icon">
                                                        <img src="{{asset('public/frontend/dist/images/icon/Clock.png')}}"
                                                            alt="clock" />
                                                    </div>
                                                    <span>3 Hours</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="contentCard contentCard--course">
                                        <div class="contentCard-top">
                                            <a href="#"><img
                                                    src="{{asset('public/frontend/dist/images/courses/demo-img-04.png')}}"
                                                    alt="images" class="img-fluid" /></a>
                                        </div>
                                        <div class="contentCard-bottom">
                                            <h5>
                                                <a href="#" class="font-title--card">Chicago
                                                    International Conference on Education</a>
                                            </h5>
                                            <div
                                                class="contentCard-info d-flex align-items-center justify-content-between">
                                                <a href="instructor-profile.html"
                                                    class="contentCard-user d-flex align-items-center">
                                                    <img src="{{asset('public/frontend/dist/images/courses/7.png')}}"
                                                        alt="client-image" class="rounded-circle" />
                                                    <p class="font-para--md">Brandon Dias</p>
                                                </a>
                                                <div class="price">
                                                    <span>৳12</span>
                                                    <del>৳95</del>
                                                </div>
                                            </div>
                                            <div class="contentCard-more">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon">
                                                        <img src="{{asset('public/frontend/dist/images/icon/star.png')}}"
                                                            alt="star" />
                                                    </div>
                                                    <span>4.5</span>
                                                </div>
                                                <div class="eye d-flex align-items-center">
                                                    <div class="icon">
                                                        <img src="{{asset('public/frontend/dist/images/icon/eye.png')}}"
                                                            alt="eye" />
                                                    </div>
                                                    <span>24,517</span>
                                                </div>
                                                <div class="book d-flex align-items-center">
                                                    <div class="icon">
                                                        <img src="{{asset('public/frontend/dist/images/icon/book.png')}}"
                                                            alt="location" />
                                                    </div>
                                                    <span>37 Lesson</span>
                                                </div>
                                                <div class="clock d-flex align-items-center">
                                                    <div class="icon">
                                                        <img src="{{asset('public/frontend/dist/images/icon/Clock.png')}}"
                                                            alt="clock" />
                                                    </div>
                                                    <span>3 Hours</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="contentCard contentCard--course">
                                        <div class="contentCard-top">
                                            <a href="#"><img
                                                    src="{{asset('public/frontend/dist/images/courses/demo-img-05.png')}}"
                                                    alt="images" class="img-fluid" /></a>
                                        </div>
                                        <div class="contentCard-bottom">
                                            <h5>
                                                <a href="#" class="font-title--card">Chicago
                                                    International Conference on Education</a>
                                            </h5>
                                            <div
                                                class="contentCard-info d-flex align-items-center justify-content-between">
                                                <a href="instructor-profile.html"
                                                    class="contentCard-user d-flex align-items-center">
                                                    <img src="{{asset('public/frontend/dist/images/courses/7.png')}}"
                                                        alt="client-image" class="rounded-circle" />
                                                    <p class="font-para--md">Brandon Dias</p>
                                                </a>
                                                <div class="price">
                                                    <span>৳12</span>
                                                    <del>৳95</del>
                                                </div>
                                            </div>
                                            <div class="contentCard-more">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon">
                                                        <img src="{{asset('public/frontend/dist/images/icon/star.png')}}"
                                                            alt="star" />
                                                    </div>
                                                    <span>4.5</span>
                                                </div>
                                                <div class="eye d-flex align-items-center">
                                                    <div class="icon">
                                                        <img src="{{asset('public/frontend/dist/images/icon/eye.png')}}"
                                                            alt="eye" />
                                                    </div>
                                                    <span>24,517</span>
                                                </div>
                                                <div class="book d-flex align-items-center">
                                                    <div class="icon">
                                                        <img src="{{asset('public/frontend/dist/images/icon/book.png')}}"
                                                            alt="location" />
                                                    </div>
                                                    <span>37 Lesson</span>
                                                </div>
                                                <div class="clock d-flex align-items-center">
                                                    <div class="icon">
                                                        <img src="{{asset('public/frontend/dist/images/icon/Clock.png')}}"
                                                            alt="clock" />
                                                    </div>
                                                    <span>3 Hours</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="contentCard contentCard--course">
                                        <div class="contentCard-top">
                                            <a href="#"><img
                                                    src="{{asset('public/frontend/dist/images/courses/demo-img-01.png')}}"
                                                    alt="images" class="img-fluid" /></a>
                                        </div>
                                        <div class="contentCard-bottom">
                                            <h5>
                                                <a href="#" class="font-title--card">Chicago
                                                    International Conference on Education</a>
                                            </h5>
                                            <div
                                                class="contentCard-info d-flex align-items-center justify-content-between">
                                                <a href="instructor-profile.html"
                                                    class="contentCard-user d-flex align-items-center">
                                                    <img src="{{asset('public/frontend/dist/images/courses/7.png')}}"
                                                        alt="client-image" class="rounded-circle" />
                                                    <p class="font-para--md">Brandon Dias</p>
                                                </a>
                                                <div class="price">
                                                    <span>৳12</span>
                                                    <del>৳95</del>
                                                </div>
                                            </div>
                                            <div class="contentCard-more">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon">
                                                        <img src="{{asset('public/frontend/dist/images/icon/star.png')}}"
                                                            alt="star" />
                                                    </div>
                                                    <span>4.5</span>
                                                </div>
                                                <div class="eye d-flex align-items-center">
                                                    <div class="icon">
                                                        <img src="{{asset('public/frontend/dist/images/icon/eye.png')}}"
                                                            alt="eye" />
                                                    </div>
                                                    <span>24,517</span>
                                                </div>
                                                <div class="book d-flex align-items-center">
                                                    <div class="icon">
                                                        <img src="{{asset('public/frontend/dist/images/icon/book.png')}}"
                                                            alt="location" />
                                                    </div>
                                                    <span>37 Lesson</span>
                                                </div>
                                                <div class="clock d-flex align-items-center">
                                                    <div class="icon">
                                                        <img src="{{asset('public/frontend/dist/images/icon/Clock.png')}}"
                                                            alt="clock" />
                                                    </div>
                                                    <span>3 Hours</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="pagination-group justify-content-center mt-lg-5 mt-2">
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
                        <div class="tab-pane fade" id="pills-pills-review" role="tabpanel"
                            aria-labelledby="pills-pills-review-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="instructor-rating-area d-flex">
                                        <div class="rating-number">
                                            <h2>4.6</h2>
                                            <div class="rating-icon">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <polygon
                                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                            </polygon>
                                                        </svg>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <polygon
                                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                            </polygon>
                                                        </svg>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <polygon
                                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                            </polygon>
                                                        </svg>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <polygon
                                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                            </polygon>
                                                        </svg>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-star-half"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.354 5.119L7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.519.519 0 0 1-.146.05c-.341.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.171-.403.59.59 0 0 1 .084-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027c.08 0 .16.018.232.056l3.686 1.894-.694-3.957a.564.564 0 0 1 .163-.505l2.906-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.002 2.223 8 2.226v9.8z" />
                                                        </svg>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>Instructor Rating</p>
                                        </div>
                                        <div class="ms-lg-4 rating-range">
                                            <div class="rating-range-item d-flex align-items-center">
                                                <div class="rating-range-item-ratings">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-range-item-bar">
                                                    <div class="rating-width" style="width: 23%;"></div>
                                                </div>
                                                <div class="rating-range-item-percent">
                                                    <p>59%</p>
                                                </div>
                                            </div>
                                            <div class="rating-range-item d-flex align-items-center four-star">
                                                <div class="rating-range-item-ratings">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="fill-star feather feather-star"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-range-item-bar">
                                                    <div class="rating-width" style="width: 60%;"></div>
                                                </div>
                                                <div class="rating-range-item-percent">
                                                    <p>31%</p>
                                                </div>
                                            </div>
                                            <div class="rating-range-item d-flex align-items-center three-star">
                                                <div class="rating-range-item-ratings">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="fill-star feather feather-star"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="fill-star feather feather-star"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-range-item-bar">
                                                    <div class="rating-width" style="width: 50%;"></div>
                                                </div>
                                                <div class="rating-range-item-percent">
                                                    <p>1%</p>
                                                </div>
                                            </div>
                                            <div class="rating-range-item d-flex align-items-center two-star">
                                                <div class="rating-range-item-ratings">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="fill-star feather feather-star"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="fill-star feather feather-star"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="fill-star feather feather-star"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-range-item-bar">
                                                    <div class="rating-width" style="width: 95%;"></div>
                                                </div>
                                                <div class="rating-range-item-percent">
                                                    <p>1%</p>
                                                </div>
                                            </div>
                                            <div class="rating-range-item d-flex align-items-center one-star">
                                                <div class="rating-range-item-ratings">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="fill-star feather feather-star"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="fill-star feather feather-star"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="fill-star feather feather-star"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="fill-star feather feather-star"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-range-item-bar">
                                                    <div class="rating-width" style="width: 39%;"></div>
                                                </div>
                                                <div class="rating-range-item-percent">
                                                    <p>1%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="students-feedback">
                                        <div class="students-feedback-heading">
                                            <h5>Students Feedback <span>(57,685)</span></h5>
                                            <div class="right">
                                                <h6>Sort by:</h6>
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenu2"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        All Rating
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                        <li><button class="dropdown-item" type="button">Rating</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button">Another
                                                                Rating</button></li>
                                                        <li><button class="dropdown-item" type="button">Rating else
                                                                here</button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="students-feedback-item">
                                            <div class="feedback-rating">
                                                <div class="feedback-rating-start">
                                                    <div class="image">
                                                        <img src="{{asset('public/frontend/dist/images/ellipse/user.jpg')}}"
                                                            alt="Image" />
                                                    </div>
                                                    <div class="text">
                                                        <h6><a href="#">Harry Pinsky</a></h6>
                                                        <p>1 hour ago</p>
                                                    </div>
                                                </div>
                                                <div class="feedback-rating-end">
                                                    <div class="rating-icons rating-icons-2"></div>
                                                </div>
                                            </div>
                                            <p>
                                                Aliquam eget leo quis neque molestie dictum. Etiam ut tortor tempor,
                                                vestibulum ante non, vulputate nibh. Cras non molestie diam. Great
                                                Course for Beginner 😀
                                            </p>
                                        </div>
                                        <div class="students-feedback-item">
                                            <div class="feedback-rating">
                                                <div class="feedback-rating-start">
                                                    <div class="image">
                                                        <img src="{{asset('public/frontend/dist/images/ellipse/1.png')}}"
                                                            alt="Image" />
                                                    </div>
                                                    <div class="text">
                                                        <h6><a href="#">Harry Pinsky</a></h6>
                                                        <p>2 hour ago</p>
                                                    </div>
                                                </div>
                                                <div class="feedback-rating-end">
                                                    <div class="rating-icons rating-icons-2"></div>
                                                </div>
                                            </div>
                                            <p>
                                                Aliquam eget leo quis neque molestie dictum. Etiam ut tortor tempor,
                                                vestibulum ante non, vulputate nibh.
                                            </p>
                                        </div>
                                        <div class="students-feedback-item">
                                            <div class="feedback-rating">
                                                <div class="feedback-rating-start">
                                                    <div class="image">
                                                        <img src="{{asset('public/frontend/dist/images/ellipse/2.png')}}"
                                                            alt="Image" />
                                                    </div>
                                                    <div class="text">
                                                        <h6><a href="#">Watcraz Eggsy</a></h6>
                                                        <p>1 day ago</p>
                                                    </div>
                                                </div>
                                                <div class="feedback-rating-end">
                                                    <div class="rating-icons rating-icons-2"></div>
                                                </div>
                                            </div>
                                            <p>
                                                Aenean vulputate nisi ligula. Quisque in tempus sapien. Quisque
                                                vestibulum massa eget consequat scelerisque. Phasellus varius risus nec
                                                maximus auctor.
                                            </p>
                                        </div>
                                        <div class="students-feedback-item border-0">
                                            <div class="feedback-rating">
                                                <div class="feedback-rating-start">
                                                    <div class="image">
                                                        <img src="{{asset('public/frontend/dist/images/ellipse/3.png')}}"
                                                            alt="Image" />
                                                    </div>
                                                    <div class="text">
                                                        <h6><a href="#">Watcraz Eggsy</a></h6>
                                                        <p>1 day ago</p>
                                                    </div>
                                                </div>
                                                <div class="feedback-rating-end">
                                                    <div class="rating-icons rating-icons-2"></div>
                                                </div>
                                            </div>
                                            <p>
                                                Cras non molestie diam. Aenean vulputate nisi ligula. Quisque in tempus
                                                sapien. Quisque vestibulum massa eget consequat scelerisque.
                                            </p>
                                        </div>
                                        <div class="text-center">
                                            <button class="button button-md button--primary-outline">Load more</button>
                                        </div>
                                    </div>
                                    <div class="feedback-comment">
                                        <h6 class="font-title--card">Leave a Rating</h6>
                                        <span>Rating</span>
                                        <!-- <div id="my-rating"></div> -->
                                        <div class="my-rating rating-icons rating-icons-modal"></div>
                                        <form action="#">
                                            <label for="comment">Message</label>
                                            <textarea class="form-control" id="comment"
                                                placeholder="how is your feeling about the instructor"></textarea>
                                            <button type="submit"
                                                class="button button-lg button--primary float-end">Post Review</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Instructor Courses Ends Here -->
@endsection

@push('scripts')
<script src="{{asset('public/frontend/src/scss/vendors/plugin/js/jquery.star-rating-svg.js')}}"></script>
<script>
    // Toggle Menu
            const toggleMenu = document.querySelector(".menu-icon-container");
            const sidebar = document.querySelector(".navbar-mobile");
            const crossSidebar = document.querySelector(".navbar-mobile--cross");
            let menuicon = document.querySelector(".menu-icon");

            toggleMenu.addEventListener("click", function () {
                sidebar.classList.toggle("show");
                document.body.classList.toggle("over");
            });

            crossSidebar.addEventListener("click", function () {
                sidebar.classList.remove("show");
                menuicon.classList.remove("transformed");
            });

            var navMenu = [].slice.call(document.querySelectorAll(".navbar-mobile__menu-item"));

            for (var y = 0; y < navMenu.length; y++) {
                navMenu[y].addEventListener("click", function () {
                    menuClick(this);
                });
            }

            function menuClick(current) {
                const active = current.classList.contains("open");
                navMenu.forEach((el) => el.classList.remove("open"));
                if (active) {
                    current.classList.remove("open");
                } else {
                    current.classList.add("open");
                }
            }

            $(".my-rating").starRating({
                starSize: 30,
                activeColor: "#FF7A1A",
                hoverColor: "#FF7A1A",
                ratedColors: ["#FF7A1A", "#FF7A1A", "#FF7A1A", "#FF7A1A", "#FF7A1A"],
                starShape: "rounded",
            });
            $(".menu-icon-container").on("click", function () {
                $(".menu-icon").toggleClass("transformed");
            });
</script>
@endpush