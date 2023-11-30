@extends('frontend.layouts.app')
@section('header-attr') class="nav-shadow" @endsection

@section('content')

<!-- Breadcrumb Starts Here -->
<div class="py-0 section--bg-white">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb pb-0 mb-0">
                <li class="breadcrumb-item"><a href="index.html" class="fs-6 text-secondary">Home</a></li>
                <li class="breadcrumb-item active"><a href="contact.html" class="fs-6 text-secondary">Contact</a></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Breadcrumb Ends Here -->

<!-- Contact Hero Area Starts Here -->
<section class="section section--bg-white hero hero--one">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero__img-content">
                    <div class="hero__img-content--main">
                        <img src="{{asset('public/frontend/dist/images/contact/image.jpg')}}" alt="image" />
                    </div>
                    <img src="{{asset('public/frontend/dist/images/shape/dots/dots-img-02.png')}}" alt="shape" class="hero__img-content--shape-01" />
                    <img src="{{asset('public/frontend/dist/images/shape/rec05.png')}}" alt="shape" class="hero__img-content--shape-02" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero__content-info">
                    <h2 class="font-title--md mb-0">Our Branches</h2>
                    <p class="font-para--lg">
                        Mauris eu fringilla lorem. Phasellus a sem nisl. Sed tempor arcu ac condimentum molestie. Morbi
                        ullamcorper eleifend scelerisque. Aliquam venenatis eros elementum felis tincidunt scelerisque.
                    </p>
                    <ul class="hero__content-location">
                        <li>
                            <span>
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.5837 11.3261C20.5837 17.1859 13.0003 22.2087 13.0003 22.2087C13.0003 22.2087 5.41699 17.1859 5.41699 11.3261C5.41699 9.32792 6.21595 7.41159 7.6381 5.99868C9.06025 4.58576 10.9891 3.79199 13.0003 3.79199C15.0116 3.79199 16.9404 4.58576 18.3626 5.99868C19.7847 7.41159 20.5837 9.32792 20.5837 11.3261Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M13.0004 13.8372C14.3965 13.8372 15.5282 12.7128 15.5282 11.3258C15.5282 9.93883 14.3965 8.81445 13.0004 8.81445C11.6044 8.81445 10.4727 9.93883 10.4727 11.3258C10.4727 12.7128 11.6044 13.8372 13.0004 13.8372Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                            <p>Chikago, USA</p>
                        </li>
                        <li>
                            <span>
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.5837 11.3261C20.5837 17.1859 13.0003 22.2087 13.0003 22.2087C13.0003 22.2087 5.41699 17.1859 5.41699 11.3261C5.41699 9.32792 6.21595 7.41159 7.6381 5.99868C9.06025 4.58576 10.9891 3.79199 13.0003 3.79199C15.0116 3.79199 16.9404 4.58576 18.3626 5.99868C19.7847 7.41159 20.5837 9.32792 20.5837 11.3261Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M13.0004 13.8372C14.3965 13.8372 15.5282 12.7128 15.5282 11.3258C15.5282 9.93883 14.3965 8.81445 13.0004 8.81445C11.6044 8.81445 10.4727 9.93883 10.4727 11.3258C10.4727 12.7128 11.6044 13.8372 13.0004 13.8372Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                            <p>Mumbai, India</p>
                        </li>
                        <li>
                            <span>
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.5837 11.3261C20.5837 17.1859 13.0003 22.2087 13.0003 22.2087C13.0003 22.2087 5.41699 17.1859 5.41699 11.3261C5.41699 9.32792 6.21595 7.41159 7.6381 5.99868C9.06025 4.58576 10.9891 3.79199 13.0003 3.79199C15.0116 3.79199 16.9404 4.58576 18.3626 5.99868C19.7847 7.41159 20.5837 9.32792 20.5837 11.3261Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M13.0004 13.8372C14.3965 13.8372 15.5282 12.7128 15.5282 11.3258C15.5282 9.93883 14.3965 8.81445 13.0004 8.81445C11.6044 8.81445 10.4727 9.93883 10.4727 11.3258C10.4727 12.7128 11.6044 13.8372 13.0004 13.8372Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                            <p>Rome, italy</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Get in Touch Area Starts Here -->
<section class="section getin-touch overflow-hidden" style="background-image: url({{asset('public/frontend/dist/images/contact/bg.png')}});">
    <div class="container">
        <div class="row">
            <h2 class="font-title--md text-center">Get in Touch</h2>
            <div class="col-lg-5 pe-lg-4 position-relative mb-4 mb-lg-0">
                <div class="contact-feature d-flex align-items-center">
                    <div class="contact-feature-icon primary-bg">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clipOne)">
                                <path
                                    d="M1.33325 8.00033V29.3337L10.6666 24.0003L21.3333 29.3337L30.6666 24.0003V2.66699L21.3333 8.00033L10.6666 2.66699L1.33325 8.00033Z"
                                    stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M10.6667 2.66699V24.0003" stroke="currentColor" stroke-width="3"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M21.3333 8V29.3333" stroke="currentColor" stroke-width="3"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath>
                                    <rect width="32" height="32" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="contact-feature-text">
                        <h6>Address</h6>
                        <p>Street NO. #15, House NO.</p>
                        <p>#15/B Chicago-60827, USA</p>
                    </div>
                </div>

                <div class="contact-feature d-flex align-items-center my-lg-4 my-3">
                    <div class="contact-feature-icon tertiary-bg">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.06115 4.57129H27.2652C28.7918 4.57129 30.0407 5.857 30.0407 7.42843V24.5713C30.0407 26.1427 28.7918 27.4284 27.2652 27.4284H5.06115C3.53462 27.4284 2.28564 26.1427 2.28564 24.5713V7.42843C2.28564 5.857 3.53462 4.57129 5.06115 4.57129Z"
                                stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M30.0407 7.42773L16.1632 17.4277L2.28564 7.42773" stroke="currentColor"
                                stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="contact-feature-text">
                        <h6>Email</h6>
                        <h5>Edu.bd@gmail.com</h5>
                    </div>
                </div>

                <div class="contact-feature d-flex align-items-center">
                    <div class="contact-feature-icon success-bg">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M28.7992 22.3667V26.2205C28.8006 26.5783 28.7272 26.9324 28.5836 27.2602C28.44 27.588 28.2293 27.8823 27.9652 28.1242C27.701 28.366 27.3892 28.5502 27.0496 28.6648C26.71 28.7794 26.3502 28.822 25.9931 28.7898C22.0323 28.3602 18.2277 27.0095 14.8849 24.846C11.7749 22.8737 9.13821 20.2422 7.16198 17.1383C4.98665 13.7871 3.6329 9.9715 3.2104 6.00077C3.17823 5.64553 3.22053 5.2875 3.33461 4.94948C3.44869 4.61145 3.63204 4.30083 3.87299 4.0374C4.11394 3.77397 4.40721 3.56349 4.73413 3.41937C5.06105 3.27526 5.41446 3.20066 5.77185 3.20032H9.63333C10.258 3.19418 10.8636 3.41495 11.3372 3.82147C11.8109 4.22799 12.1202 4.79253 12.2077 5.40985C12.3706 6.64316 12.6729 7.85411 13.1087 9.01961C13.2818 9.4794 13.3193 9.9791 13.2167 10.4595C13.114 10.9399 12.8755 11.3809 12.5294 11.7301L10.8947 13.3616C12.7271 16.5777 15.3952 19.2405 18.6177 21.0693L20.2524 19.4378C20.6024 19.0924 21.0442 18.8544 21.5256 18.7519C22.0069 18.6495 22.5076 18.6869 22.9683 18.8597C24.1361 19.2946 25.3495 19.5963 26.5852 19.759C27.2105 19.847 27.7815 20.1613 28.1897 20.6421C28.5979 21.1229 28.8148 21.7367 28.7992 22.3667Z"
                                stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="contact-feature-text">
                        <h6>Phone</h6>
                        <h5>+1202-555-0621</h5>
                    </div>
                </div>
                <img src="{{asset('public/frontend/dist/images/shape/dots/dots-img-03.png')}}" alt="Shape" class="img-fluid contact-feature-shape" />
            </div>
            <div class="col-lg-7 form-area">
                <form action="#">
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control form-control--focused" placeholder="Type here..."
                                id="name" />
                        </div>
                        <div class="col-lg-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" placeholder="Type here..." id="email" />
                        </div>
                    </div>
                    <div class="row my-lg-2 my-2">
                        <div class="col-12">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" class="form-control" placeholder="Type here..." />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="message">Messages</label>
                            <textarea id="message" placeholder="Type here..." class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-end">
                            <button type="submit" class="button button-lg button--primary fw-normal">Send
                                Message</button>
                        </div>
                    </div>
                </form>
                <div class="form-area-shape">
                    <img src="{{asset('public/frontend/dist/images/shape/circle3.png')}}" alt="Shape" class="img-fluid shape-01" />
                    <img src="{{asset('public/frontend/dist/images/shape/circle5.png')}}" alt="Shape" class="img-fluid shape-02" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Get in Touch Area Ends Here -->

<!-- Map Area Starts Here -->
<div class="map-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="map-area-frame">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d201876.9935430553!2d-122.37539090724721!3d37.75890609140571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80857d8b28aaed03%3A0x71b415d535759367!2sOakland%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1613897278642!5m2!1sen!2sbd"
                        allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Map Area Ends Here -->

@endsection
