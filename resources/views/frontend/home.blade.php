@extends('frontend.layouts.app')
@section('title', 'Home')
@section('footer-class') footer--two @endsection


@section('content')

<!-- Banner Starts Here -->
<section class="main-banner" style="background-image: url({{asset('public/frontend/dist/images/banner/banner.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mb-lg-0 order-2 order-lg-0 d-flex align-items-center">
                <div class="banner-two-start">
                    <h1 class="font-title--lg">Unlock Knowledge Anywhere, Anytime with Experts.</h1>
                    <p>
                       Our commitment is to guide you to the finest online courses, offering expert insights whenever and wherever you are.
                    </p>
                    <form>
                        <div class="banner-input">
                            <div class="main-input">
                                <input type="text" placeholder="what do you want to learn today..." />
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-search">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                            </div>
                            <div class="search-button">
                                <button class="button button-lg button--primary">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-0">
                <div class="main-banner-end">
                    <img src="{{asset('public/frontend/dist/images/banner/banner-image-01.png')}}" alt="image"
                        class="img-fluid" width="515" height="700"/>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Browse Categories Starts Here -->
<section class="section browse-categories">
    <div class="container">
        <h2 class="font-title--md text-center mb-0">Browse Course with Top Categories</h2>
        <div class="browse-categories__wrapper position-relative">
            <div class="categories--box">
                @forelse ($category as $cat)
                @php
                // Fetch the count of courses for each category
                $courseCount = $cat->course()->count();
                @endphp
                <div class="browse-categories-item default-item-one mb-2">
                    <div class="browse-categories-item-icon">
                        <div class="categories-one default-categories">
                            <img src="{{asset('public/uploads/courseCategories/'.$cat->category_image)}}"
                                class="rounded-circle" width="80" height="80" alt="">
                        </div>
                    </div>
                    <div class="browse-categories-item-text">
                        <h6 class="font-title--card"><a href="#">{{$cat->category_name}}</a></h6>
                        <p>{{ $courseCount }} Courses</p>
                    </div>
                </div>
                @empty
                @endforelse
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="{{route('searchCourse')}}" class="button button-lg button--primary mt-5">Browse all Courses</a>
            </div>
        </div>
    </div>
    <div class="browse-categories-shape">
        <img src="{{asset('public/frontend/dist/images/shape/dots/dots-img-11.png')}}" alt="shape"
            class="img-fluid shape-01" />
        <img src="{{asset('public/frontend/dist/images/shape/line01.png')}}" alt="shape" class="img-fluid shape-02" />
    </div>
</section>

<!--  Popular Courses Starts Here -->
<section class="section section--bg-offwhite-three featured-popular-courses main-popular-course">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="featured-popular-courses-heading d-flex align-content-center justify-content-between">
                    <div class="main-heading">
                        <h3 class="font-title--md">Our Popular Courses</h3>
                    </div>
                    <div class="nav-button featured-popular-courses-tabs">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active ps-0" id="pills-all-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all"
                                    aria-selected="true">
                                    All
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-design-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-design" type="button" role="tab" aria-controls="pills-design"
                                    aria-selected="false">
                                    Design
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-dev-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-dev" type="button" role="tab" aria-controls="pills-dev"
                                    aria-selected="false">
                                    Development
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-bus-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-bus" type="button" role="tab" aria-controls="pills-bus"
                                    aria-selected="false">
                                    Business
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link me-0" id="pills-its-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-its" type="button" role="tab" aria-controls="pills-its"
                                    aria-selected="false">
                                    IT & Software
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                    <div class="row">
                        @forelse ($popularCourses as $pc)
                        <div class="col-xl-4 col-md-6">
                            <div class="contentCard contentCard--course">
                                <div class="contentCard-top">
                                    <a href="#"><img src="{{asset('public/uploads/courses/'.$pc->image)}}" alt="images"
                                            class="img-fluid" /></a>
                                </div>
                                <div class="contentCard-bottom">
                                    <h5>
                                        <a href="{{route('courseDetails', ['id' => encryptor('encrypt', $pc->id)])}}"
                                            class="font-title--card">{{$pc->title_en}}</a>
                                    </h5>
                                    <div class="contentCard-info d-flex align-items-center justify-content-between">
                                        <a href="{{route('instructorProfile', encryptor('encrypt', $pc->instructor?->id))}}"
                                            class="contentCard-user d-flex align-items-center">
                                            <img src="{{asset('public/uploads/users/'.$pc?->instructor->image)}}"
                                                alt="client-image" class="rounded-circle" height="34" width="34" />
                                            <p class="font-para--md">{{$pc?->instructor->name_en}}</p>
                                        </a>
                                        <div class="price">
                                            <span>{{$pc->price?'৳'.$pc->price:'Free'}}</span>
                                            <del>{{$pc->old_price?'৳'.$pc->old_price:''}}</del>
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
                                            <span>{{$pc->lesson?$pc->lesson:0}} Lesson</span>
                                        </div>
                                        <div class="clock d-flex align-items-center">
                                            <div class="icon">
                                                <img src="{{asset('public/frontend/dist/images/icon/Clock.png')}}"
                                                    alt="clock" />
                                            </div>
                                            <span>{{$pc->duration?$pc->duration:0}} Hours</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-xl-4 col-md-6">
                            <div class="contentCard contentCard--course">
                                <h3>No Courses Available</h3>
                            </div>
                        </div>
                        @endforelse
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <a href="{{route('searchCourse')}}" class="button button-lg button--primary">Browse all
                                Courses</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-design" role="tabpanel" aria-labelledby="pills-design-tab">
                    <div class="row">
                        @forelse ($designCourses as $dc)
                        <div class="col-xl-4 col-md-6">
                            <div class="contentCard contentCard--course">
                                <div class="contentCard-top">
                                    <a href="#"><img src="{{asset('public/uploads/courses/'.$dc->image)}}" alt="images" class="img-fluid" /></a>
                                </div>
                                <div class="contentCard-bottom">
                                    <h5>
                                        <a href="{{route('courseDetails', ['id' => encryptor('encrypt', $dc->id)])}}"
                                            class="font-title--card">{{$dc->title_en}}</a>
                                    </h5>
                                    <div class="contentCard-info d-flex align-items-center justify-content-between">
                                        <a href="{{route('instructorProfile', encryptor('encrypt', $dc->instructor?->id))}}"
                                            class="contentCard-user d-flex align-items-center">
                                            <img src="{{asset('public/uploads/users/'.$dc?->instructor->image)}}" alt="client-image"
                                                class="rounded-circle" height="34" width="34" />
                                            <p class="font-para--md">{{$dc?->instructor->name_en}}</p>
                                        </a>
                                        <div class="price">
                                            <span>{{$dc->price?'৳'.$dc->price:'Free'}}</span>
                                            <del>{{$dc->old_price?'৳'.$dc->old_price:''}}</del>
                                        </div>
                                    </div>
                                    <div class="contentCard-more">
                                        <div class="d-flex align-items-center">
                                            <div class="icon">
                                                <img src="{{asset('public/frontend/dist/images/icon/star.png')}}" alt="star" />
                                            </div>
                                            <span>4.5</span>
                                        </div>
                                        <div class="eye d-flex align-items-center">
                                            <div class="icon">
                                                <img src="{{asset('public/frontend/dist/images/icon/eye.png')}}" alt="eye" />
                                            </div>
                                            <span>24,517</span>
                                        </div>
                                        <div class="book d-flex align-items-center">
                                            <div class="icon">
                                                <img src="{{asset('public/frontend/dist/images/icon/book.png')}}" alt="location" />
                                            </div>
                                            <span>{{$dc->lesson?$dc->lesson:0}} Lesson</span>
                                        </div>
                                        <div class="clock d-flex align-items-center">
                                            <div class="icon">
                                                <img src="{{asset('public/frontend/dist/images/icon/Clock.png')}}" alt="clock" />
                                            </div>
                                            <span>{{$dc->duration?$dc->duration:0}} Hours</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-xl-4 col-md-6">
                            <div class="contentCard contentCard--course">
                                <h3>No Courses Available</h3>
                            </div>
                        </div>
                        @endforelse
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <a href="{{route('searchCourse')}}" class="button button-lg button--primary">Browse all
                                Courses</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-dev" role="tabpanel" aria-labelledby="pills-dev-tab">
                    <div class="row">
                        @forelse ($developmentCourses as $dv)
                        <div class="col-xl-4 col-md-6">
                            <div class="contentCard contentCard--course">
                                <div class="contentCard-top">
                                    <a href="#"><img src="{{asset('public/uploads/courses/'.$dv->image)}}" alt="images"
                                            class="img-fluid" /></a>
                                </div>
                                <div class="contentCard-bottom">
                                    <h5>
                                        <a href="{{route('courseDetails', ['id' => encryptor('encrypt', $dv->id)])}}"
                                            class="font-title--card">{{$dv->title_en}}</a>
                                    </h5>
                                    <div class="contentCard-info d-flex align-items-center justify-content-between">
                                        <a href="{{route('instructorProfile', encryptor('encrypt', $dv->instructor?->id))}}"
                                            class="contentCard-user d-flex align-items-center">
                                            <img src="{{asset('public/uploads/users/'.$dv?->instructor->image)}}" alt="client-image"
                                                class="rounded-circle" height="34" width="34" />
                                            <p class="font-para--md">{{$dv?->instructor->name_en}}</p>
                                        </a>
                                        <div class="price">
                                            <span>{{$dv->price?'৳'.$dv->price:'Free'}}</span>
                                            <del>{{$dv->old_price?'৳'.$dv->old_price:''}}</del>
                                        </div>
                                    </div>
                                    <div class="contentCard-more">
                                        <div class="d-flex align-items-center">
                                            <div class="icon">
                                                <img src="{{asset('public/frontend/dist/images/icon/star.png')}}" alt="star" />
                                            </div>
                                            <span>4.5</span>
                                        </div>
                                        <div class="eye d-flex align-items-center">
                                            <div class="icon">
                                                <img src="{{asset('public/frontend/dist/images/icon/eye.png')}}" alt="eye" />
                                            </div>
                                            <span>24,517</span>
                                        </div>
                                        <div class="book d-flex align-items-center">
                                            <div class="icon">
                                                <img src="{{asset('public/frontend/dist/images/icon/book.png')}}" alt="location" />
                                            </div>
                                            <span>{{$dv->lesson?$dv->lesson:0}} Lesson</span>
                                        </div>
                                        <div class="clock d-flex align-items-center">
                                            <div class="icon">
                                                <img src="{{asset('public/frontend/dist/images/icon/Clock.png')}}" alt="clock" />
                                            </div>
                                            <span>{{$dv->duration?$dv->duration:0}} Hours</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-xl-4 col-md-6">
                            <div class="contentCard contentCard--course">
                                <h3>No Courses Available</h3>
                            </div>
                        </div>
                        @endforelse
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <a href="{{route('searchCourse')}}" class="button button-lg button--primary">Browse all
                                Courses</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-bus" role="tabpanel" aria-labelledby="pills-bus-tab">
                    <div class="row">
                        @forelse ($businessCourses as $bc)
                        <div class="col-xl-4 col-md-6">
                            <div class="contentCard contentCard--course">
                                <div class="contentCard-top">
                                    <a href="#"><img src="{{asset('public/uploads/courses/'.$bc->image)}}" alt="images"
                                            class="img-fluid" /></a>
                                </div>
                                <div class="contentCard-bottom">
                                    <h5>
                                        <a href="{{route('courseDetails', ['id' => encryptor('encrypt', $bc->id)])}}"
                                            class="font-title--card">{{$bc->title_en}}</a>
                                    </h5>
                                    <div class="contentCard-info d-flex align-items-center justify-content-between">
                                        <a href="{{route('instructorProfile', encryptor('encrypt', $bc->instructor?->id))}}"
                                            class="contentCard-user d-flex align-items-center">
                                            <img src="{{asset('public/uploads/users/'.$bc?->instructor->image)}}" alt="client-image"
                                                class="rounded-circle" height="34" width="34" />
                                            <p class="font-para--md">{{$bc?->instructor->name_en}}</p>
                                        </a>
                                        <div class="price">
                                            <span>{{$bc->price?'৳'.$bc->price:'Free'}}</span>
                                            <del>{{$bc->old_price?'৳'.$bc->old_price:''}}</del>
                                        </div>
                                    </div>
                                    <div class="contentCard-more">
                                        <div class="d-flex align-items-center">
                                            <div class="icon">
                                                <img src="{{asset('public/frontend/dist/images/icon/star.png')}}" alt="star" />
                                            </div>
                                            <span>4.5</span>
                                        </div>
                                        <div class="eye d-flex align-items-center">
                                            <div class="icon">
                                                <img src="{{asset('public/frontend/dist/images/icon/eye.png')}}" alt="eye" />
                                            </div>
                                            <span>24,517</span>
                                        </div>
                                        <div class="book d-flex align-items-center">
                                            <div class="icon">
                                                <img src="{{asset('public/frontend/dist/images/icon/book.png')}}" alt="location" />
                                            </div>
                                            <span>{{$bc->lesson?$bc->lesson:0}} Lesson</span>
                                        </div>
                                        <div class="clock d-flex align-items-center">
                                            <div class="icon">
                                                <img src="{{asset('public/frontend/dist/images/icon/Clock.png')}}" alt="clock" />
                                            </div>
                                            <span>{{$bc->duration?$bc->duration:0}} Hours</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-xl-4 col-md-6">
                            <div class="contentCard contentCard--course">
                                <h3>No Courses Available</h3>
                            </div>
                        </div>
                        @endforelse
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <a href="{{route('searchCourse')}}" class="button button-lg button--primary">Browse all
                                Courses</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-its" role="tabpanel" aria-labelledby="pills-its-tab">
                    <div class="row">
                        @forelse ($itCourses as $ic)
                        <div class="col-xl-4 col-md-6">
                            <div class="contentCard contentCard--course">
                                <div class="contentCard-top">
                                    <a href="#"><img src="{{asset('public/uploads/courses/'.$ic->image)}}" alt="images"
                                            class="img-fluid" /></a>
                                </div>
                                <div class="contentCard-bottom">
                                    <h5>
                                        <a href="{{route('courseDetails', ['id' => encryptor('encrypt', $ic->id)])}}"
                                            class="font-title--card">{{$ic->title_en}}</a>
                                    </h5>
                                    <div class="contentCard-info d-flex align-items-center justify-content-between">
                                        <a href="{{route('instructorProfile', encryptor('encrypt', $ic->instructor?->id))}}"
                                            class="contentCard-user d-flex align-items-center">
                                            <img src="{{asset('public/uploads/users/'.$ic?->instructor->image)}}" alt="client-image"
                                                class="rounded-circle" height="34" width="34" />
                                            <p class="font-para--md">{{$ic?->instructor->name_en}}</p>
                                        </a>
                                        <div class="price">
                                            <span>{{$ic->price?'৳'.$ic->price:'Free'}}</span>
                                            <del>{{$ic->old_price?'৳'.$ic->old_price:''}}</del>
                                        </div>
                                    </div>
                                    <div class="contentCard-more">
                                        <div class="d-flex align-items-center">
                                            <div class="icon">
                                                <img src="{{asset('public/frontend/dist/images/icon/star.png')}}" alt="star" />
                                            </div>
                                            <span>4.5</span>
                                        </div>
                                        <div class="eye d-flex align-items-center">
                                            <div class="icon">
                                                <img src="{{asset('public/frontend/dist/images/icon/eye.png')}}" alt="eye" />
                                            </div>
                                            <span>24,517</span>
                                        </div>
                                        <div class="book d-flex align-items-center">
                                            <div class="icon">
                                                <img src="{{asset('public/frontend/dist/images/icon/book.png')}}" alt="location" />
                                            </div>
                                            <span>{{$ic->lesson?$ic->lesson:0}} Lesson</span>
                                        </div>
                                        <div class="clock d-flex align-items-center">
                                            <div class="icon">
                                                <img src="{{asset('public/frontend/dist/images/icon/Clock.png')}}" alt="clock" />
                                            </div>
                                            <span>{{$ic->duration?$ic->duration:0}} Hours</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-xl-4 col-md-6">
                            <div class="contentCard contentCard--course">
                                <h3>No Courses Available</h3>
                            </div>
                        </div>
                        @endforelse
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <a href="{{route('searchCourse')}}" class="button button-lg button--primary">Browse all
                                Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="featured-popular-courses-shape">
        <img src="{{asset('public/frontend/dist/images/shape/dots/dots-img-12.png')}}" alt="Shape"
            class="img-fluid dot-06" />
        <img src="{{asset('public/frontend/dist/images/shape/triangel.png')}}" alt="Shape" class="img-fluid dot-07" />
    </div>
</section>

{{-- Why You'll Learn With Eduguard --}}
<section class="section feature section section--bg-offwhite-one">
    <div class="container">
        <h2 class="font-title--md text-center">Why You'll Learn with Eduguard</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="cardFeature">
                    <div class="cardFeature__icon cardFeature__icon--bg-g">
                        <svg width="32" height="28" viewBox="0 0 32 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 2H10.4C11.8852 2 13.3096 2.5619 14.3598 3.5621C15.41 4.56229 16 5.91885 16 7.33333V26C16 24.9391 15.5575 23.9217 14.7699 23.1716C13.9822 22.4214 12.9139 22 11.8 22H2V2Z"
                                stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M30 2H21.6C20.1148 2 18.6904 2.5619 17.6402 3.5621C16.59 4.56229 16 5.91885 16 7.33333V26C16 24.9391 16.4425 23.9217 17.2302 23.1716C18.0178 22.4214 19.0861 22 20.2 22H30V2Z"
                                stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h5 class="font-title--xs">250k online course</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed commodo enim Fusce sed.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cardFeature">
                    <div class="cardFeature__icon cardFeature__icon--bg-b">
                        <svg width="28" height="27" viewBox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.3855 12.224C21.8743 12.224 23.8915 10.2067 23.8915 7.71794C23.8915 5.23054 21.8743 3.21191 19.3855 3.21191"
                                stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M21.4575 17.1211C22.201 17.1717 22.939 17.2783 23.6675 17.4395C24.6775 17.6404 25.8938 18.0546 26.3257 18.9607C26.6018 19.5415 26.6018 20.218 26.3257 20.7989C25.8952 21.705 24.6775 22.1191 23.6675 22.3269"
                                stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10.5994 18.0913C15.6425 18.0913 19.9504 18.8553 19.9504 21.9071C19.9504 24.9604 15.6699 25.7503 10.5994 25.7503C5.55624 25.7503 1.24976 24.9877 1.24976 21.9345C1.24976 18.8813 5.52891 18.0913 10.5994 18.0913Z"
                                stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10.5993 13.7349C7.27274 13.7349 4.60767 11.0684 4.60767 7.74188C4.60767 4.41669 7.27274 1.75024 10.5993 1.75024C13.9259 1.75024 16.5923 4.41669 16.5923 7.74188C16.5923 11.0684 13.9259 13.7349 10.5993 13.7349Z"
                                stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h5 class="font-title--xs">Expert Instructors</h5>
                    <p>
                        Vivamus interdum neque massa, eget mattis mi gravida eget. Donec et dictum justo. Vivamus
                        interdum.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cardFeature">
                    <div class="cardFeature__icon cardFeature__icon--bg-r">
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M25.2502 13.2495C25.2502 19.8774 19.8781 25.2495 13.2502 25.2495C6.62235 25.2495 1.25024 19.8774 1.25024 13.2495C1.25024 6.62162 6.62235 1.24951 13.2502 1.24951C19.8781 1.24951 25.2502 6.62162 25.2502 13.2495Z"
                                stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M17.7021 17.0667L12.8113 14.1491V7.86108" stroke="currentColor" stroke-width="2.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h5 class="font-title--xs">Lifetime Access</h5>
                    <p>
                        Vivamus cursus libero quis lobortis mattis. Suspendisse in malesuada mi. Maecenas vel
                        euismod turpis.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--  Learning Rules Starts Here -->
<section class="section learning-rules">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-2 order-lg-0">
                <div class="learning-rules-starts">
                    <h2 class="font-title--md">
                        Eduguard Simple <br class="d-none d-md-block" />
                        Learning Steps
                    </h2>
                    <div class="learning-rules__wrapper">
                        <div class="learning-rules-item">
                            <div class="item-number"><span>01.</span></div>
                            <div class="item-text">
                                <h6>Make Your Own Place.</h6>
                                <p>
                                    Fusce dictum, velit eu placerat consectetur, ante nisl auctor magna, sit amet
                                    fringilla urna nibh a risus.
                                </p>
                            </div>
                        </div>
                        <div class="learning-rules-item">
                            <div class="item-number"><span>02.</span></div>
                            <div class="item-text">
                                <h6>Find Best Course With Better Filtter.</h6>
                                <p>
                                    Morbi id est a risus sollicitudin maximus. Fusce lorem neque, tincidunt vel
                                    rhoncus eget, convallis ullamcorper sem.
                                </p>
                            </div>
                        </div>
                        <div class="learning-rules-item">
                            <div class="item-number"><span>03.</span></div>
                            <div class="item-text">
                                <h6>And Become a Master in Your Field.</h6>
                                <p>
                                    Sed pulvinar dignissim neque, ac consectetur urna tincidunt vel. Sed congue
                                    nulla sed tempus ultrices.
                                </p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="button button-lg button--primary">Start Learning</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-0">
                <div class="learning-rules-ends">
                    <img src="{{asset('public/frontend/dist/images/hero/hero-img-01.jpg')}}" alt="img"
                        class="img-fluid rounded"/>
                    <div class="learning-rules-ends-circle">
                        <img src="{{asset('public/frontend/dist/images/shape/l03.png')}}" alt="shape"
                            class="img-fluid" />
                    </div>
                    <div class="earning-rules-ends-shape">
                        <img src="{{asset('public/frontend/dist/images/shape/l04.png')}}" alt="shape"
                            class="img-fluid shape-1" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="learning-rules-shape">
        <img src="{{asset('public/frontend/dist/images/shape/dots/dots-img-16.png')}}" alt="shape"
            class="img-fluid shape-01" />
        <img src="{{asset('public/frontend/dist/images/shape/l02.png')}}" alt="shape" class="img-fluid shape-02" />
    </div>
</section>

<!--  About Services Starts Here -->
<section class="section about-services section section--bg-offgradient">
    <div class="container about-services-area">
        <div class="row">
            <div class="col-lg-6 text-center mx-auto">
                <h2 class="font-title--md">What Our Students Says About our Services</h2>
            </div>
        </div>
        <div class="testimonial testimonial--one testimonial__slider--one">
            <div class="testimonial__item">
                <p>
                    “Nam hendrerit quam eu neque egestas, nec lobortis enim rutrum. Quisque ligula tortor, mollis a
                    efficitur vitae, imperdiet et mauris. Nam in orci quis risus dapibus mollis.“
                </p>
                <div class="testimonial__user-wrapper d-flex justify-content-between">
                    <div class="testimonial__user d-flex align-items-center">
                        <div class="testimonial__user-img">
                            <img src="{{asset('public/frontend/dist/images/avatar/avatar-img-01.png')}}" alt="Client" />
                        </div>
                        <div class="testimonial__user-info">
                            <h6>Sheikh Rashed</h6>
                            <span class="font-para--md">UI/UX Student</span>
                        </div>
                    </div>
                    <ul class="testimonial__item-star d-flex align-items-center">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="testimonial__item">
                <p>
                    “Nam hendrerit quam eu neque egestas, nec lobortis enim rutrum. Quisque ligula tortor, mollis a
                    efficitur vitae, imperdiet et mauris. Nam in orci quis risus dapibus mollis.“
                </p>
                <div class="testimonial__user-wrapper d-flex justify-content-between">
                    <div class="testimonial__user d-flex align-items-center">
                        <div class="testimonial__user-img">
                            <img src="{{asset('public/frontend/dist/images/avatar/avatar-img-02.png')}}" alt="Client" />
                        </div>
                        <div class="testimonial__user-info">
                            <h6>Dev Zakir</h6>
                            <span class="font-para--md">UI/UX Student</span>
                        </div>
                    </div>
                    <ul class="testimonial__item-star d-flex align-items-center">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="testimonial__item">
                <p>
                    “Nam hendrerit quam eu neque egestas, nec lobortis enim rutrum. Quisque ligula tortor, mollis a
                    efficitur vitae, imperdiet et mauris. Nam in orci quis risus dapibus mollis.“
                </p>
                <div class="testimonial__user-wrapper d-flex justify-content-between">
                    <div class="testimonial__user d-flex align-items-center">
                        <div class="testimonial__user-img">
                            <img src="{{asset('public/frontend/dist/images/avatar/avatar-img-03.png')}}" alt="Client" />
                        </div>
                        <div class="testimonial__user-info">
                            <h6>Dev Kate</h6>
                            <span class="font-para--md">UI/UX Student</span>
                        </div>
                    </div>
                    <ul class="testimonial__item-star d-flex align-items-center">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="about-services-shape">
        <img src="{{asset('public/frontend/dist/images/shape/line02.png')}}" alt="shape"
            class="img-fluid img-shape-01" />
        <img src="{{asset('public/frontend/dist/images/shape/dots/dots-img-13.png')}}" alt="shape"
            class="img-fluid img-shape-02" />
        <img src="{{asset('public/frontend/dist/images/shape/l02.png')}}" alt="shape" class="img-fluid img-shape-03" />
    </div>
    <div class="container overflow-hidden">
        <div class="row mb-40">
            <div class="col-lg-6 mx-auto text-center brands-area-two-heading">
                <h4>
                    Over 30,000+ Schools & College Learning With Us.
                </h4>
                <p>
                    Proin euismod elementum dolor, non iaculis velit mollis sed. In eleifend urna sit amet purus
                    congue.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-area">
                    <div class="brand-area-image">
                        <img src="{{asset('public/frontend/dist/images/versity/1.png')}}" alt="Brand"
                            class="img-fluid" />
                    </div>
                    <div class="brand-area-image">
                        <img src="{{asset('public/frontend/dist/images/versity/2.png')}}" alt="Brand"
                            class="img-fluid" />
                    </div>
                    <div class="brand-area-image">
                        <img src="{{asset('public/frontend/dist/images/versity/3.png')}}" alt="Brand"
                            class="img-fluid" />
                    </div>
                    <div class="brand-area-image">
                        <img src="{{asset('public/frontend/dist/images/versity/4.png')}}" alt="Brand"
                            class="img-fluid" />
                    </div>
                    <div class="brand-area-image">
                        <img src="{{asset('public/frontend/dist/images/versity/2.png')}}" alt="Brand"
                            class="img-fluid" />
                    </div>
                    <div class="brand-area-image">
                        <img src="{{asset('public/frontend/dist/images/versity/5.png')}}" alt="Brand"
                            class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Best Instructors Starts Here -->
<section class="section best-instructor-featured overflow-hidden main-instructor-featured">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 position-relative">
                <h3 class="text-center mb-40 font-title--md">Meet Our Best Instructor</h3>
                <div class="ourinstructor__wrapper mt-lg-5 mt-0">
                    <div class="ourinstructor-active">
                        @forelse ($instructor as $i)
                        <div class="mentor">
                            <div class="mentor__img">
                                <img src="{{asset('public/uploads/users/'.$i->image)}}" alt="Mentor image" />
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.9507 5.29205C17.9086 4.33564 17.7539 3.67812 17.5324 3.10836C17.3038 2.50359 16.9522 1.96213 16.4915 1.51201C16.0414 1.05489 15.4963 0.699691 14.8986 0.474702C14.3255 0.253147 13.6714 0.0984842 12.715 0.0563159C11.7515 0.0105764 11.4456 0 9.00174 0C6.55791 0 6.25202 0.0105764 5.29204 0.0527447C4.33563 0.0949129 3.67811 0.249713 3.1085 0.471131C2.50358 0.699691 1.96213 1.05132 1.51201 1.51201C1.05489 1.96213 0.699827 2.50716 0.474701 3.10493C0.253147 3.67812 0.098484 4.33207 0.0563158 5.28848C0.0105764 6.25203 0 6.55792 0 9.00176C0 11.4456 0.0105764 11.7515 0.0527446 12.7115C0.0949128 13.6679 0.249713 14.3254 0.471267 14.8952C0.699827 15.4999 1.05489 16.0414 1.51201 16.4915C1.96213 16.9486 2.50715 17.3038 3.10493 17.5288C3.67811 17.7504 4.33206 17.905 5.28861 17.9472C6.24845 17.9895 6.55448 17.9999 8.99831 17.9999C11.4421 17.9999 11.748 17.9895 12.708 17.9472C13.6644 17.905 14.3219 17.7504 14.8916 17.5288C16.1012 17.0611 17.0577 16.1047 17.5254 14.8952C17.7468 14.322 17.9016 13.6679 17.9437 12.7115C17.9859 11.7515 17.9965 11.4456 17.9965 9.00176C17.9965 6.55792 17.9929 6.25203 17.9507 5.29205ZM16.3298 12.6411C16.2911 13.5202 16.1434 13.9949 16.0203 14.3114C15.7179 15.0956 15.0955 15.7179 14.3114 16.0204C13.9949 16.1434 13.5168 16.2911 12.6411 16.3297C11.6917 16.372 11.407 16.3824 9.00531 16.3824C6.60365 16.3824 6.31534 16.372 5.36937 16.3297C4.4903 16.2911 4.01559 16.1434 3.69913 16.0204C3.3089 15.8761 2.9537 15.6476 2.66539 15.3487C2.3665 15.0568 2.13794 14.7052 1.99372 14.315C1.87065 13.9985 1.72299 13.5202 1.68439 12.6447C1.64209 11.6953 1.63165 11.4104 1.63165 9.00876C1.63165 6.60709 1.64209 6.31878 1.68439 5.37295C1.72299 4.49387 1.87065 4.01917 1.99372 3.7027C2.13794 3.31234 2.3665 2.95727 2.66896 2.66883C2.9607 2.36994 3.31233 2.14138 3.7027 1.99729C4.01917 1.87422 4.49744 1.72656 5.37294 1.68783C6.32235 1.64566 6.60722 1.63508 9.00875 1.63508C11.414 1.63508 11.6987 1.64566 12.6447 1.68783C13.5238 1.72656 13.9985 1.87422 14.3149 1.99729C14.7052 2.14138 15.0604 2.36994 15.3487 2.66883C15.6476 2.96071 15.8761 3.31234 16.0203 3.7027C16.1434 4.01917 16.2911 4.49731 16.3298 5.37295C16.372 6.32236 16.3826 6.60709 16.3826 9.00876C16.3826 11.4104 16.372 11.6917 16.3298 12.6411Z"
                                                    fill="#25252E"></path>
                                                <path
                                                    d="M9.00188 4.37695C6.44912 4.37695 4.37793 6.44801 4.37793 9.0009C4.37793 11.5538 6.44912 13.6249 9.00188 13.6249C11.5548 13.6249 13.6258 11.5538 13.6258 9.0009C13.6258 6.44801 11.5548 4.37695 9.00188 4.37695ZM9.00188 12.0003C7.34578 12.0003 6.00244 10.6571 6.00244 9.0009C6.00244 7.34467 7.34578 6.00146 9.00188 6.00146C10.6581 6.00146 12.0013 7.34467 12.0013 9.0009C12.0013 10.6571 10.6581 12.0003 9.00188 12.0003Z"
                                                    fill="#25252E"></path>
                                                <path
                                                    d="M14.8876 4.19472C14.8876 4.79085 14.4043 5.2742 13.808 5.2742C13.2119 5.2742 12.7285 4.79085 12.7285 4.19472C12.7285 3.59845 13.2119 3.11523 13.808 3.11523C14.4043 3.11523 14.8876 3.59845 14.8876 4.19472Z"
                                                    fill="#25252E"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.9955 18.0002V17.9994H18V11.3979C18 8.16841 17.3047 5.68066 13.5292 5.68066C11.7142 5.68066 10.4962 6.67666 9.99896 7.62091H9.94646V5.98216H6.3667V17.9994H10.0942V12.0489C10.0942 10.4822 10.3912 8.96716 12.3315 8.96716C14.2432 8.96716 14.2717 10.7552 14.2717 12.1494V18.0002H17.9955Z"
                                                    fill="#25252E"></path>
                                                <path d="M0.296997 5.98242H4.029V17.9997H0.296997V5.98242Z"
                                                    fill="#25252E"></path>
                                                <path
                                                    d="M2.1615 0C0.96825 0 0 0.96825 0 2.1615C0 3.35475 0.96825 4.34325 2.1615 4.34325C3.35475 4.34325 4.323 3.35475 4.323 2.1615C4.32225 0.96825 3.354 0 2.1615 0V0Z"
                                                    fill="#25252E"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18 1.73137C17.3306 2.025 16.6174 2.21962 15.8737 2.31412C16.6388 1.85737 17.2226 1.13962 17.4971 0.2745C16.7839 0.69975 15.9964 1.00013 15.1571 1.16775C14.4799 0.446625 13.5146 0 12.4616 0C10.4186 0 8.77387 1.65825 8.77387 3.69113C8.77387 3.98363 8.79862 4.26487 8.85938 4.53262C5.7915 4.383 3.07687 2.91263 1.25325 0.67275C0.934875 1.22513 0.748125 1.85738 0.748125 2.538C0.748125 3.816 1.40625 4.94887 2.38725 5.60475C1.79437 5.5935 1.21275 5.42138 0.72 5.15025C0.72 5.1615 0.72 5.17613 0.72 5.19075C0.72 6.984 1.99912 8.4735 3.6765 8.81662C3.37612 8.89875 3.04875 8.93812 2.709 8.93812C2.47275 8.93812 2.23425 8.92463 2.01038 8.87512C2.4885 10.3365 3.84525 11.4109 5.4585 11.4457C4.203 12.4279 2.60888 13.0196 0.883125 13.0196C0.5805 13.0196 0.29025 13.0061 0 12.969C1.63462 14.0231 3.57188 14.625 5.661 14.625C12.4515 14.625 16.164 9 16.164 4.12425C16.164 3.96112 16.1584 3.80363 16.1505 3.64725C16.8829 3.1275 17.4982 2.47837 18 1.73137Z"
                                                    fill="#25252E"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.0427 0.885481C16.8137 1.09312 17.4216 1.70094 17.6291 2.47204C18.0148 3.88048 17.9999 6.81629 17.9999 6.81629C17.9999 6.81629 17.9999 9.73713 17.6293 11.1457C17.4216 11.9167 16.8138 12.5246 16.0427 12.7321C14.6341 13.1029 8.99996 13.1029 8.99996 13.1029C8.99996 13.1029 3.38048 13.1029 1.95721 12.7174C1.18611 12.5098 0.57829 11.9018 0.37065 11.1309C0 9.73713 0 6.80146 0 6.80146C0 6.80146 0 3.88048 0.37065 2.47204C0.578153 1.70108 1.20094 1.07829 1.95707 0.870787C3.36565 0.5 8.99983 0.5 8.99983 0.5C8.99983 0.5 14.6341 0.5 16.0427 0.885481ZM11.8913 6.80154L7.20605 9.50006V4.10303L11.8913 6.80154Z"
                                                    fill="#25252E"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <svg width="9" height="18" viewBox="0 0 9 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.3575 2.98875H9.00075V0.12675C8.71725 0.08775 7.74225 0 6.60675 0C4.2375 0 2.6145 1.49025 2.6145 4.22925V6.75H0V9.9495H2.6145V18H5.82V9.95025H8.32875L8.727 6.75075H5.81925V4.5465C5.82 3.62175 6.069 2.98875 7.3575 2.98875Z"
                                                    fill="#25252E"></path>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mentor__title">
                                <h6>
                                    <a href="{{route('instructorProfile', encryptor('encrypt', $i->id))}}"
                                        tabindex="0">{{$i->name_en}}</a>
                                </h6>
                                <p>{{$i->designation}}</p>
                            </div>
                        </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-instructor-featured-shape">
        <img src="{{asset('public/frontend/dist/images/shape/dots/dots-img-14.png')}}" alt="shape"
            class="img-fluid shape01" />
        <img src="{{asset('public/frontend/dist/images/shape/triangel2.png')}}" alt="shape" class="img-fluid shape02" />
    </div>
</section>

<!--  Latest Events Featured Starts Here -->
<section class="section section--bg-offwhite-three latest-events-featured main-events-featured">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="font-title--md">Latest Events</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 position-relative px-0 mx-0">
                <div class="eventsSlider">
                    @forelse ($course as $c)
                    <div class="contentCard contentCard--event contentCard--space">
                        <div class="contentCard-top">
                            <a href="#"><img src="{{asset('public/uploads/courses/'.$c->image)}}" alt="images"
                                    class="img-fluid" /></a>
                        </div>
                        <div class="contentCard-bottom">
                            <h5>
                                <a href="{{route('courseDetails', encryptor('encrypt', $c->id))}}"
                                    class="font-title--card">{{$c->title_en}}</a>
                            </h5>
                            <div class="contentCard-more">
                                <div class="d-flex align-items-center">
                                    <div class="icon">
                                        <img src="{{asset('public/frontend/dist/images/icon/location.png')}}"
                                            alt="location" />
                                    </div>
                                    <span>Chicago, Illinois</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="icon">
                                        <img src="{{asset('public/frontend/dist/images/icon/calendar.png')}}"
                                            alt="calendar" />
                                    </div>
                                    <span>29th jan, 2020</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="{{route('searchCourse')}}" class="button button-lg button--primary mt-lg-5 mt-5">Browse all
                    events</a>
            </div>
        </div>
    </div>
    <div class="main-events-featured-shape">
        <img src="{{asset('public/frontend/dist/images/shape/triangel3.png')}}" alt="shape" class="img-fluid shape01" />
    </div>
</section>

<!--  Main Become Instructor Starts Here -->
<section class="section main-become-instructor">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="main-become-instructor-item me-12">
                    <div class="main-image">
                        <img src="{{asset('public/frontend/dist/images/event/image01.png')}}" alt="image"
                            class="img-fluid" />
                    </div>
                    <div class="main-text">
                        <h6 class="font-title--sm">Become an Instructor</h6>
                        <p>
                            Praesent ultricies nulla ac congue bibendum. Aliquam tempor euismod purus posuere
                            gravida. Praesent augue sapien, vulputate eu imperdiet eget, tempor at enim.
                        </p>
                        <div class="text-center">
                            <a href="become-instructor.html" class="green-btn">Apply as Instructor</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="main-become-instructor-item ms-12 mb-0">
                    <div class="main-image">
                        <img src="{{asset('public/frontend/dist/images/event/image02.png')}}" alt="image"
                            class="img-fluid" />
                    </div>
                    <div class="main-text">
                        <h6 class="font-title--sm">Use Eduguard For Business</h6>
                        <p>
                            Praesent ultricies nulla ac congue bibendum. Aliquam tempor euismod purus posuere
                            gravida. Praesent augue sapien, vulputate eu imperdiet eget, tempor at enim.
                        </p>
                        <div class="text-center">
                            <a href="#" class="green-btn">Get Eduguard For Business</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-become-instructor-shape">
        <img src="{{asset('public/frontend/dist/images/shape/line03.png')}}" alt="shape" class="img-fluid" />
    </div>
</section>

<!-- News Letter Starts Here -->
<section style="background-color: #ebebf2;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="newsletter-area">
                    <h4>Subscribe our Newsletter</h4>
                    <p class="mt-2 mb-lg-4 mb-3">
                        Duis posuere maximus arcu eu tincidunt. Nam rutrum, nibh vitae tempus venenatis, ex tortor
                        ultricies magna, et faucibus magna eros quis arcu.
                    </p>
                    <form>
                        <div class="input-group">
                            <input type="email" class="form-control border-lowBlack" placeholder="Your email" />
                            <button class="button button-lg button--primary" type="button">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')

<script>
    function drop() {
                    const dropBox = document.querySelector(".categoryDrop");
                    const arrow = document.querySelector(".select-button button svg");
                    arrow.classList.toggle("appear");
                    dropBox.classList.toggle("appear");
                }
</script>

@endpush