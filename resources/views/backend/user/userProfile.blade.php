@extends('backend.layouts.app')
@section('title', 'User Profile')


@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <p class="mb-0">Your business dashboard template</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="profile">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="cover-photo"></div>

                        </div>
                        <div class="profile-info">

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="profile-photo">
                                        <img src="{{asset('public/uploads/users/'.request()->session()->get('image'))}}" class="rounded-circle" height="140" width="140" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-9 col-12">
                                    <div class="row">
                                        <div class="col-xl-4 col-sm-6 border-right-1">
                                            <div class="profile-name">
                                                <h4 class="text-primary mb-0">{{ encryptor('decrypt', request()->session()->get('userName')) }}</h4>
                                                <p>{{ encryptor('decrypt', request()->session()->get('role')) }}</p>
                                            </div> 
                                        </div>
                                        <div class="col-xl-4 col-sm-6 border-right-1">
                                            <div class="profile-email">
                                                <h4 class="text-muted mb-0">{{ encryptor('decrypt', request()->session()->get('emailAddress')) }}</h4>
                                                <p>Email</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-statistics">
                            <div class="text-center mt-4 border-bottom-1 pb-3">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="m-b-0">150</h3><span>Follower</span>
                                    </div>
                                    <div class="col">
                                        <h3 class="m-b-0">140</h3><span>Place Stay</span>
                                    </div>
                                    <div class="col">
                                        <h3 class="m-b-0">45</h3><span>Reviews</span>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <a href="javascript:void()" class="btn btn-primary px-5 mr-3 mb-4">Follow</a>
                                    <a href="javascript:void()" class="btn btn-dark px-3 mb-4">Send Message</a>
                                </div>
                            </div>
                        </div>
                        <div class="profile-blog pt-3 border-bottom-1 pb-1">
                            <h5 class="text-primary d-inline">Today Highlights</h5><a href="javascript:void()"
                                class="pull-right f-s-16">More</a>
                            <img src="{{asset('public/images/profile/1.jpg')}}" alt="" class="img-fluid mt-4 mb-4 w-100">
                            <h4>Darwin Creative Agency Theme</h4>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia. It is a paradisematic country, in which roasted parts of sentences fly into
                                your mouth.</p>
                        </div>
                        <div class="profile-interest mt-4 pb-2 border-bottom-1">
                            <h5 class="text-primary d-inline">Interest</h5>
                            <div class="row mt-4">
                                <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                    <a href="javascript:void()" class="interest-cat">
                                        <img src="{{asset('public/images/profile/2.jpg')}}" alt="" class="img-fluid">
                                        <p>Shopping Mall</p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                    <a href="javascript:void()" class="interest-cat">
                                        <img src="{{asset('public/images/profile/3.jpg')}}" alt="" class="img-fluid">
                                        <p>Photography</p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                    <a href="javascript:void()" class="interest-cat">
                                        <img src="{{asset('public/images/profile/4.jpg')}}" alt="" class="img-fluid">
                                        <p>Art &amp; Gallery</p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                    <a href="javascript:void()" class="interest-cat">
                                        <img src="{{asset('public/images/profile/2.jpg')}}" alt="" class="img-fluid">
                                        <p>Visiting Place</p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                    <a href="javascript:void()" class="interest-cat">
                                        <img src="{{asset('public/images/profile/3.jpg')}}" alt="" class="img-fluid">
                                        <p>Shopping</p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                    <a href="javascript:void()" class="interest-cat">
                                        <img src="{{asset('public/images/profile/4.jpg')}}" alt="" class="img-fluid">
                                        <p>Biking</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="profile-news mt-4 pb-3">
                            <h5 class="text-primary d-inline">Our Latest News</h5>
                            <div class="media pt-3 pb-3">
                                <img src="{{asset('public/images/profile/5.jpg')}}" alt="image" class="mr-3">
                                <div class="media-body">
                                    <h5 class="m-b-5">John Tomas</h5>
                                    <p>I shared this on my fb wall a few months back, and I thought I'd share it here
                                        again because it's such a great read</p>
                                </div>
                            </div>
                            <div class="media pt-3 pb-3">
                                <img src="{{asset('public/images/profile/6.jpg')}}" alt="image" class="mr-3">
                                <div class="media-body">
                                    <h5 class="m-b-5">John Tomas</h5>
                                    <p>I shared this on my fb wall a few months back, and I thought I'd share it here
                                        again because it's such a great read</p>
                                </div>
                            </div>
                            <div class="media pt-3 pb-3">
                                <img src="{{asset('public/images/profile/7.jpg')}}" alt="image" class="mr-3">
                                <div class="media-body">
                                    <h5 class="m-b-5">John Tomas</h5>
                                    <p>I shared this on my fb wall a few months back, and I thought I'd share it here
                                        again because it's such a great read</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="#my-posts" data-toggle="tab"
                                            class="nav-link active show">Posts</a>
                                    </li>
                                    <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link">About
                                            Me</a>
                                    </li>
                                    <li class="nav-item"><a href="#profile-settings" data-toggle="tab"
                                            class="nav-link">Setting</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="my-posts" class="tab-pane fade active show">
                                        <div class="my-post-content pt-3">
                                            <div class="post-input">
                                                <textarea name="textarea" id="textarea" cols="30" rows="5"
                                                    class="form-control bg-transparent"
                                                    placeholder="Please type what you want...."></textarea> <a
                                                    href="javascript:void()"><i class="ti-clip"></i> </a>
                                                <a href="javascript:void()"><i class="ti-camera"></i> </a><a
                                                    href="javascript:void()" class="btn btn-primary">Post</a>
                                            </div>
                                            <div class="profile-uoloaded-post border-bottom-1 pb-5">
                                                <img src="{{asset('public/images/profile/8.jpg')}}" alt="" class="img-fluid">
                                                <a class="post-title" href="javascript:void()">
                                                    <h4>Collection of textile samples lay spread</h4>
                                                </a>
                                                <p>A wonderful serenity has take possession of my entire soul like these
                                                    sweet morning of spare which enjoy whole heart.A wonderful serenity
                                                    has take possession of my entire soul like these sweet morning
                                                    of spare which enjoy whole heart.</p>
                                                <button class="btn btn-primary mr-3"><span class="mr-3"><i
                                                            class="fa fa-heart"></i></span>Like</button>
                                                <button class="btn btn-secondary"><span class="mr-3"><i
                                                            class="fa fa-reply"></i></span>Reply</button>
                                            </div>
                                            <div class="profile-uoloaded-post border-bottom-1 pb-5">
                                                <img src="{{asset('public/images/profile/9.jpg')}}" alt="" class="img-fluid">
                                                <a class="post-title" href="javascript:void()">
                                                    <h4>Collection of textile samples lay spread</h4>
                                                </a>
                                                <p>A wonderful serenity has take possession of my entire soul like these
                                                    sweet morning of spare which enjoy whole heart.A wonderful serenity
                                                    has take possession of my entire soul like these sweet morning
                                                    of spare which enjoy whole heart.</p>
                                                <button class="btn btn-primary mr-3"><span class="mr-3"><i
                                                            class="fa fa-heart"></i></span>Like</button>
                                                <button class="btn btn-secondary"><span class="mr-3"><i
                                                            class="fa fa-reply"></i></span>Reply</button>
                                            </div>
                                            <div class="profile-uoloaded-post pb-5">
                                                <img src="{{asset('public/images/profile/8.jpg')}}" alt="" class="img-fluid">
                                                <a class="post-title" href="javascript:void()">
                                                    <h4>Collection of textile samples lay spread</h4>
                                                </a>
                                                <p>A wonderful serenity has take possession of my entire soul like these
                                                    sweet morning of spare which enjoy whole heart.A wonderful serenity
                                                    has take possession of my entire soul like these sweet morning
                                                    of spare which enjoy whole heart.</p>
                                                <button class="btn btn-primary mr-3"><span class="mr-3"><i
                                                            class="fa fa-heart"></i></span>Like</button>
                                                <button class="btn btn-secondary"><span class="mr-3"><i
                                                            class="fa fa-reply"></i></span>Reply</button>
                                            </div>
                                            <div class="text-center mb-2"><a href="javascript:void()"
                                                    class="btn btn-primary">Load More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="about-me" class="tab-pane fade">
                                        <div class="profile-about-me">
                                            <div class="pt-4 border-bottom-1 pb-4">
                                                <h4 class="text-primary">About Me</h4>
                                                <p>A wonderful serenity has taken possession of my entire soul, like
                                                    these sweet mornings of spring which I enjoy with my whole heart. I
                                                    am alone, and feel the charm of existence was created for the
                                                    bliss of souls like mine.I am so happy, my dear friend, so absorbed
                                                    in the exquisite sense of mere tranquil existence, that I neglect my
                                                    talents.</p>
                                                <p>A collection of textile samples lay spread out on the table - Samsa
                                                    was a travelling salesman - and above it there hung a picture that
                                                    he had recently cut out of an illustrated magazine and housed
                                                    in a nice, gilded frame.</p>
                                            </div>
                                        </div>
                                        <div class="profile-skills pt-2 border-bottom-1 pb-2">
                                            <h4 class="text-primary mb-4">Skills</h4>
                                            <a href="javascript:void()"
                                                class="btn btn-outline-dark btn-rounded px-4 my-3 my-sm-0 mr-2 mb-1 m-b-10">Admin</a>
                                            <a href="javascript:void()"
                                                class="btn btn-outline-dark btn-rounded px-4 my-3 my-sm-0 mr-2 mb-1 m-b-10">Dashboard</a>
                                            <a href="javascript:void()"
                                                class="btn btn-outline-dark btn-rounded px-4 my-3 my-sm-0 mr-2 mb-1 m-b-10">Photoshop</a>
                                            <a href="javascript:void()"
                                                class="btn btn-outline-dark btn-rounded px-4 my-3 my-sm-0 mr-2 mb-1 m-b-10">Bootstrap</a>
                                            <a href="javascript:void()"
                                                class="btn btn-outline-dark btn-rounded px-4 my-3 my-sm-0 mr-2 mb-1 m-b-10">Responsive</a>
                                            <a href="javascript:void()"
                                                class="btn btn-outline-dark btn-rounded px-4 my-3 my-sm-0 mr-2 mb-1 m-b-10">Crypto</a>
                                        </div>
                                        <div class="profile-lang pt-5 border-bottom-1 pb-5">
                                            <h4 class="text-primary mb-4">Language</h4><a href="javascript:void()"
                                                class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-us"></i>
                                                English</a> <a href="javascript:void()"
                                                class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-fr"></i>
                                                French</a>
                                            <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i
                                                    class="flag-icon flag-icon-bd"></i> Bangla</a>
                                        </div>
                                        <div class="profile-personal-info">
                                            <h4 class="text-primary mb-4">Personal Information</h4>
                                            <div class="row mb-4">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">Name <span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-9"><span>Mitchell C.Shay</span>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">Email <span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-9"><span>example@examplel.com</span>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">Availability <span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-9"><span>Full Time (Free Lancer)</span>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">Age <span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-9"><span>27</span>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">Location <span class="pull-right">:</span></h5>
                                                </div>
                                                <div class="col-9"><span>Rosemont Avenue Melbourne,
                                                        Florida</span>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">Year Experience <span
                                                            class="pull-right">:</span></h5>
                                                </div>
                                                <div class="col-9"><span>07 Year Experiences</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="profile-settings" class="tab-pane fade">
                                        <div class="pt-3">
                                            <div class="settings-form">
                                                <h4 class="text-primary">Account Setting</h4>
                                                <form>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label>Email</label>
                                                            <input type="email" placeholder="Email"
                                                                class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Password</label>
                                                            <input type="password" placeholder="Password"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <input type="text" placeholder="1234 Main St"
                                                            class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address 2</label>
                                                        <input type="text" placeholder="Apartment, studio, or floor"
                                                            class="form-control">
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label>City</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label>State</label>
                                                            <select class="form-control" id="inputState">
                                                                <option selected="">Choose...</option>
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                            <label>Zip</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="gridCheck">
                                                            <label class="custom-control-label" for="gridCheck"> Check
                                                                me out</label>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Sign
                                                        in</button>
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
        </div>
    </div>
</div>

@endsection

@push('scripts')

@endpush