@extends('backend.layouts.appAuth')
@section('title', 'Registraion')

@section('content')

<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <h4 class="text-center mb-4">Sign up your account</h4>
                                <form action="{{route('register.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label><strong>Full Name</strong></label>
                                        <input type="text" class="form-control" value="{{old('name')}}" name="name"
                                            id="name" placeholder="Enter your Full Name">
                                        @if($errors->has('name'))
                                        <small class="d-block text-danger">{{$errors->first('name')}}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Email</strong></label>
                                        <input type="email" class="form-control" value="{{old('email')}}" name="email"
                                            id="email" placeholder="Enter Email Address">
                                        @if($errors->has('email'))
                                        <small class="d-block text-danger">{{$errors->first('email')}}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Phone Number</strong></label>
                                        <input type="text" class="form-control" value="{{old('contact_en')}}"
                                            name="contact_en" id="contact_en" placeholder="Enter Contact No">
                                        @if($errors->has('contact_en'))
                                        <small class="d-block text-danger">{{$errors->first('contact_en')}}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Password</strong></label>
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="Enter Password">
                                        @if($errors->has('password'))
                                        <small class="d-block text-danger">{{$errors->first('password')}}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Confirm Password</strong></label>
                                        <input type="password" class="form-control" name="password_confirmation"
                                            id="password_confirmation" placeholder="Re-enter Password">
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                                    </div>
                                </form>
                                <div class="new-account mt-3">
                                    <p>Already have an account? <a class="text-primary" href="{{route('login')}}">Sign
                                            in</a></p>
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