<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ENV('APP_NAME')}} | @yield('title', 'Watch Course')</title>
    <link rel="stylesheet" href="{{asset('public/frontend/src/scss/vendors/plugin/css/video-js.css')}}" />
    <link rel="stylesheet" href="{{asset('public/frontend/src/scss/vendors/plugin/css/star-rating-svg.css')}}" />
    <link rel="stylesheet" href="{{asset('public/frontend/dist/main.css')}}" />
    <link rel="icon" type="image/png" href="{{asset('public/frontend/dist/images/favicon/favicon.png')}}" />
    <link rel="stylesheet" href="{{asset('public/frontend/fontawesome-free-5.15.4-web/css/all.min.css')}}">
    <style>
        .vjs-poster {
            width: 100%;
            background-size: cover;
        }
    </style>

</head>

<body style="background-color: #ebebf2;">

    <!-- Title Starts Here -->
    <header class="bg-transparent">
        <div class="container-fluid">
            <div class="coursedescription-header">
                <div class="coursedescription-header-start">
                    <a class="logo-image" href="{{route('home')}}">
                        <img src="{{asset('public/frontend/dist/images/logo/logo.png')}}" alt="Logo" />
                    </a>
                    <div class="topic-info">
                        <div class="topic-info-arrow">
                            <a href="{{URL::previous()}}">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <div class="topic-info-text">
                            <h6 class="font-title--xs"><a href="#">{{$course->title_en}}</a></h6>
                            <div class="lesson-hours">
                                <div class="book-lesson">
                                    <i class="fas fa-book-open text-primary"></i>
                                    <span>{{$course->lesson?$course->lesson:0}} Lesson</span>
                                </div>
                                <div class="totoal-hours">
                                    <i class="far fa-clock text-danger"></i>
                                    <span>{{$course->duration?$course->duration:0}} Hours</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="coursedescription-header-end">
                    <!-- <a href="#" class="rating-link" data-bs-toggle="modal" data-bs-target="#ratingModal">Leave a Rating</a> -->
                    <a href="#" class="button button--text" data-bs-toggle="modal" data-bs-target="#ratingModal">Leave a
                        Rating</a>

                    <!-- <a href="#" class="btn btn-primary regular-fill-btn">Next Lession</a> -->
                    <button class="button button--primary">Next Lession</button>
                </div>
            </div>
        </div>
    </header>
    <!-- Ttile Ends Here -->

    <!-- Course Description Starts Here -->
    <div class="container-fluid">
        <div class="row course-description">

            {{-- Video Area --}}
            <div class="col-lg-8">
                <div class="course-description-start">
                    <div class="video-area">
                        <video controls id="myvideo" class="video-js w-100"
                            poster="{{asset('public/frontend/dist/images/courses/vthumb.jpg')}}">
                            <source src="" class="w-100" />
                        </video>
                    </div>
                    <div class="course-description-start-content">
                        <h5 class="font-title--sm material-title">{{$course->title_en}}</h5>
                        <nav class="course-description-start-content-tab">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-ldescrip-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-ldescrip" type="button" role="tab" aria-controls="nav-ldescrip"
                                    aria-selected="true">
                                    Lesson Description
                                </button>
                                <button class="nav-link" id="nav-lnotes-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-lnotes" type="button" role="tab" aria-controls="nav-lnotes"
                                    aria-selected="false">Lesson Notes</button>
                                <button class="nav-link" id="nav-lcomments-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-lcomments" type="button" role="tab"
                                    aria-controls="nav-lcomments" aria-selected="false">Comments</button>
                                <button class="nav-link" id="nav-loverview-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-loverview" type="button" role="tab"
                                    aria-controls="nav-loverview" aria-selected="false">Course Overview</button>
                                <button class="nav-link" id="nav-linstruc-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-linstruc" type="button" role="tab" aria-controls="nav-linstruc"
                                    aria-selected="false">Instructor</button>
                            </div>
                        </nav>
                        <div class="tab-content course-description-start-content-tabitem" id="nav-tabContent">
                            <!-- Lesson Description Starts Here -->
                            <div class="tab-pane fade show active" id="nav-ldescrip" role="tabpanel"
                                aria-labelledby="nav-ldescrip-tab">
                                <div class="lesson-description">
                                    <p>
                                        Donec imperdiet erat tortor, nec consectetur odio fermentum et. Mauris vehicula
                                        faucibus viverra. Vestibulum varius ante enim. eu posuere ligula eleifend non.
                                        Praesent sapien nisi, luctus a tellus
                                        a, porta dapibus massa. Cras non mattis mauris. Etiam convallis purus a ante
                                        mattis,
                                        id tincidunt sapien hendrerit. Sed laoreet Check out my portfolio: <a
                                            href="#">https://bit.ly/2OZkYCo</a>
                                    </p>
                                </div>
                                <!-- Lesson Description Ends Here -->
                            </div>
                            <!-- Course Notes Starts Here -->
                            <div class="tab-pane fade" id="nav-lnotes" role="tabpanel" aria-labelledby="nav-lnotes-tab">
                                <div class="course-notes-area">
                                    <div class="course-notes">
                                        <div class="course-notes-item">
                                            <p>
                                                You have to take a minute to understand what is the goal, what is the
                                                problem, what they're trying to achieve with it who is the target
                                                audience,
                                                who is the competition, and understand
                                                what are you trying to do here and how will success will look like of
                                                the
                                                project. the way to do that is basically by doing two things
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Course Notes Ends Here -->
                            </div>
                            <!-- Lesson Comments Starts Here -->
                            <div class="tab-pane fade" id="nav-lcomments" role="tabpanel"
                                aria-labelledby="nav-lcomments-tab">
                                <div class="lesson-comments">
                                    <div class="feedback-comment pt-0 ps-0 pe-0">
                                        <h6 class="font-title--card">Add a Public Comment</h6>
                                        <form action="#">
                                            <label for="comment">Comment</label>
                                            <textarea class="form-control" id="comment" placeholder="Add a Public Comment"></textarea>
                                            <button type="submit" class="button button-md button--primary float-end">Post
                                                Comment</button>
                                        </form>
                                    </div>
                                    <div class="students-feedback pt-0 ps-0 pe-0 pb-0 mb-0">
                                        <div class="students-feedback-heading">
                                            <h5 class="font-title--card">Comments <span>(57,685)</span></h5>
                                        </div>
                                        <div class="students-feedback-item">
                                            <div class="feedback-rating">
                                                <div class="feedback-rating-start">
                                                    <div class="image">
                                                        <img src="{{asset('public/frontend/dist/images/ellipse/user.jpg')}}" alt="Image" />
                                                    </div>
                                                    <div class="text">
                                                        <h6><a href="#">Harry Pinsky</a></h6>
                                                        <p>1 hour ago</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>
                                                Aliquam eget leo quis neque molestie dictum. Etiam ut tortor tempor,
                                                vestibulum ante non, vulputate nibh. Cras non molestie diam. Great
                                                Course
                                                for Beginner 😀
                                            </p>
                                        </div>
                                        <div class="students-feedback-item">
                                            <div class="feedback-rating">
                                                <div class="feedback-rating-start">
                                                    <div class="image">
                                                        <img src="{{asset('public/frontend/dist/images/ellipse/1.png')}}" alt="Image" />
                                                    </div>
                                                    <div class="text">
                                                        <h6><a href="#">Harry Pinsky</a></h6>
                                                        <p>2 hour ago</p>
                                                    </div>
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
                                                        <img src="{{asset('public/frontend/dist/images/ellipse/2.png')}}" alt="Image" />
                                                    </div>
                                                    <div class="text">
                                                        <h6><a href="#">Watcraz Eggsy</a></h6>
                                                        <p>1 day ago</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>
                                                Aenean vulputate nisi ligula. Quisque in tempus sapien. Quisque
                                                vestibulum
                                                massa eget consequat scelerisque. Phasellus varius risus nec maximus
                                                auctor.
                                            </p>
                                        </div>
                                        <div class="students-feedback-item border-0">
                                            <div class="feedback-rating">
                                                <div class="feedback-rating-start">
                                                    <div class="image">
                                                        <img src="{{asset('public/frontend/dist/images/ellipse/3.png')}}" alt="Image" />
                                                    </div>
                                                    <div class="text">
                                                        <h6><a href="#">Watcraz Eggsy</a></h6>
                                                        <p>1 day ago</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>
                                                Cras non molestie diam. Aenean vulputate nisi ligula. Quisque in tempus
                                                sapien. Quisque vestibulum massa eget consequat scelerisque.
                                            </p>
                                        </div>
                                        <button class="button button-md button--primary-outline">Load More</button>
                                    </div>
                                </div>
                                <!-- Lesson Comments Ends Here -->
                            </div>
                            <!-- Course Overview Starts Here -->
                            <div class="tab-pane fade" id="nav-loverview" role="tabpanel"
                                aria-labelledby="nav-loverview-tab">
                                <div class="row course-overview-main">
                                    <div class="course-overview-main-item">
                                        <h6 class="font-title--card">Description</h6>
                                        <p class="mb-3 font-para--lg">
                                           {{$course->description_en}}
                                        </p>
                                    </div>
                                    <div class="course-overview-main-item">
                                        <h6 class="font-title--card">Requirments</h6>
                                        <p class="mb-2 font-para--lg">
                                           {{$course->prerequisites_en}}
                                        </p>
                                    </div>
                                </div>
                                <!-- Course Overview Ends Here -->
                            </div>
                            <!-- course details instructor  -->
                            <div class="tab-pane fade" id="nav-linstruc" role="tabpanel"
                                aria-labelledby="nav-linstruc-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="course-instructor mw-100">
                                            <div class="course-instructor-info">
                                                <div class="instructor-image">
                                                    <img src="{{asset('public/uploads/users/'.$course?->instructor?->image)}}"
                                                        alt="Instructor" />
                                                </div>
                                                <div class="instructor-text">
                                                    <h6 class="font-title--xs">
                                                        <a href="{{route('instructorProfile', encryptor('encrypt', $course->instructor->id))}}">
                                                            {{$course?->instructor?->name_en}}</a></h6>
                                                    <p>{{$course?->instructor?->designation}}</p>
                                                    <div class="d-flex align-items-center instructor-text-bottom">
                                                        <div class="d-flex align-items-center ratings-icon">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M9.94438 2.34287L11.7457 5.96656C11.8359 6.14934 12.0102 6.2769 12.2124 6.30645L16.2452 6.88901C16.4085 6.91079 16.5555 6.99635 16.6559 7.12701C16.8441 7.37201 16.8153 7.71891 16.5898 7.92969L13.6668 10.7561C13.5183 10.8961 13.4522 11.1015 13.4911 11.3014L14.1911 15.2898C14.2401 15.6204 14.0145 15.93 13.684 15.9836C13.5471 16.0046 13.4071 15.9829 13.2826 15.9214L9.69082 14.0384C9.51037 13.9404 9.29415 13.9404 9.1137 14.0384L5.49546 15.9315C5.1929 16.0855 4.82267 15.9712 4.65778 15.6748C4.59478 15.5551 4.57301 15.419 4.59478 15.286L5.29479 11.2975C5.32979 11.0984 5.26368 10.8938 5.11901 10.753L2.18055 7.92735C1.94099 7.68935 1.93943 7.30201 2.17821 7.06246C2.17899 7.06168 2.17977 7.06012 2.18055 7.05935C2.27932 6.9699 2.40066 6.91001 2.5321 6.88668L6.56569 6.30412C6.76713 6.27223 6.94058 6.14623 7.03236 5.96345L8.83215 2.34287C8.90448 2.19587 9.03281 2.08309 9.18837 2.03176C9.3447 1.97965 9.51582 1.99209 9.66282 2.06598C9.78337 2.12587 9.88215 2.22309 9.94438 2.34287Z"
                                                                    stroke="#FF7A1A" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                            <p>4.9 Star Rating</p>
                                                        </div>
                                                        <div class="d-flex align-items-center ratings-icon">
                                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M1.5 2.25H6C6.79565 2.25 7.55871 2.56607 8.12132 3.12868C8.68393 3.69129 9 4.45435 9 5.25V15.75C9 15.1533 8.76295 14.581 8.34099 14.159C7.91903 13.7371 7.34674 13.5 6.75 13.5H1.5V2.25Z"
                                                                    stroke="#00AF91" stroke-width="1.8"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                                <path
                                                                    d="M16.5 2.25H12C11.2044 2.25 10.4413 2.56607 9.87868 3.12868C9.31607 3.69129 9 4.45435 9 5.25V15.75C9 15.1533 9.23705 14.581 9.65901 14.159C10.081 13.7371 10.6533 13.5 11.25 13.5H16.5V2.25Z"
                                                                    stroke="#00AF91" stroke-width="1.8"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>

                                                            <p>5 Courses</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="lead-p">{{$course?->instructor?->title}}
                                            </p>
                                            <p class="course-instructor-description">
                                                {{$course?->instructor?->bio}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Index Course Contents --}}
            <div class="col-lg-4">
                <div class="videolist-area">
                    <div class="videolist-area-heading">
                        <h6>Course Contents</h6>
                        <p>5% Completed</p>
                    </div>
                    <div class="videolist-area-bar">
                        <span class="videolist-area-bar--progress"></span>
                    </div>
                    <div class="videolist-area-bar__wrapper">
                        @foreach($lessons as $lesson)
                        <div class="videolist-area-wizard" data-lesson-description="{{$lesson->description}}"
                            data-lesson-notes="{{$lesson->notes}}">
                            <div class="wizard-heading">
                                <h6 class="">{{$loop->iteration}}. {{$lesson->title}}</h6>
                            </div>
                            @foreach ($lesson->material as $material)
                            <div class="main-wizard"
                                data-material-title="{{$loop->parent->iteration}}.{{$loop->iteration}} {{$material->title}}">
                                <div class="main-wizard__wrapper">
                                    <a class="main-wizard-start" onclick="show_video('{{$material->content}}')">
                                        @if ($material->type=='video')
                                        <div class="main-wizard-icon">
                                            <i class="far fa-play-circle fa-lg"></i>
                                        </div>
                                        @else
                                        <div class="main-wizard-icon">
                                            <i class="far fa-file fa-lg text-success"></i>
                                        </div>
                                        @endif
                                        <div class="main-wizard-title">
                                            <p>{{$loop->parent->iteration}}.{{$loop->iteration}} {{$material->title}}
                                            </p>
                                        </div>
                                    </a>
                                    <div class="main-wizard-end d-flex align-items-center">
                                        <span>12:34</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                style="border-radius: 0px; margin-left: 5px;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Course Description Ends Here -->

    <!-- Rating Modal -->
    <div class="modal fade modal--rating" id="ratingModal" tabindex="-1" aria-labelledby="ratingModal"
        aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Leave A Rating</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center pt-0 pb-0">
                    <div class="modal-body-rating">
                        <p>4.5 <span>(Good/Amazing)</span></p>
                        <div class="my-rating rating-icons rating-icons-modal"></div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <form action="#" class="w-100">
                        <label for="messages">Message</label>
                        <textarea id="messages" placeholder="How is your to feeling taking these course?"
                            class="w-100"></textarea>
                        <button type="submit" class="button button-md button--primary w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="{{asset('public/frontend/src/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/frontend/src/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/frontend/src/scss/vendors/plugin/js/video.min.js')}}"></script>
    <script src="{{asset('public/frontend/src/scss/vendors/plugin/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('public/frontend/src/scss/vendors/plugin/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('public/frontend/src/scss/vendors/plugin/js/slick.min.js')}}"></script>
    <script src="{{asset('public/frontend/src/scss/vendors/plugin/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('public/frontend/src/scss/vendors/plugin/js/jquery.star-rating-svg.js')}}"></script>
    <script src="{{asset('public/frontend/src/js/app.js')}}"></script>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        $(".my-rating").starRating({
                    starSize: 30,
                    activeColor: "#FF7A1A",
                    hoverColor: "#FF7A1A",
                    ratedColors: ["#FF7A1A", "#FF7A1A", "#FF7A1A", "#FF7A1A", "#FF7A1A"],
                    starShape: "rounded",
        });

        function show_video(e){
            let link="{{asset('public/uploads/courses/contents')}}/"+e
           
            var video = document.getElementById('myvideo');
                        video.src = link;
                        video.play();
        }
    </script>

    <script>
        $(document).ready(function() {
        $('.videolist-area-wizard').on('click', function() {
            // Get lesson and material details
            var lessonDescription = $(this).data('lesson-description');
            var lessonNotes = $(this).data('lesson-notes');
            // Update lesson description
            $('#nav-ldescrip .lesson-description p').html(lessonDescription);
            // Update lesson notes
            $('#nav-lnotes .course-notes-area .course-notes-item p').html(lessonNotes);
        });

        $('.main-wizard').on('click', function() {
            // Get material title
            var materialTitle = $(this).data('material-title');
            // Update material title
            $('.material-title').html(materialTitle);
        });
    });
    </script>


</body>

</html>