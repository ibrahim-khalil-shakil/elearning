@extends('backend.layouts.appAuth')
@section('title','Sign Up')
@section('content')
	
<div class="auth-form">
	<h4 class="text-center mb-4">Sign up your account</h4>
	<form action="{{route('register.store')}}" method="POST">
		@csrf
		<div class="form-group">
			<label class="control-label mb-10" for="FullName">Full Name</label>
			<input type="text" class="form-control" name="FullName" value="{{old('FullName')}}" required="" id="FullName" placeholder="Your Full Name">
			@if($errors->has('FullName'))
				<small class="d-block text-danger">
					{{$errors->first('FullName')}}
				</small>
			@endif
		</div>
		<div class="form-group">
			<label class="control-label mb-10" for="EmailAddress">Email address</label>
			<input type="email" class="form-control" required="" id="EmailAddress" name="EmailAddress" value="{{old('EmailAddress')}}" placeholder="Enter email">
			@if($errors->has('EmailAddress'))
				<small class="d-block text-danger">
					{{$errors->first('EmailAddress')}}
				</small>
			@endif
		</div>
		<div class="form-group">
			<label class="control-label mb-10" for="contact_no_en">Contact Number</label>
			<input type="text" class="form-control" required="" id="contact_no_en" name="contact_no_en" value="{{old('contact_no_en')}}" placeholder="Phone Number">
			@if($errors->has('contact_no_en'))
				<small class="d-block text-danger">
					{{$errors->first('contact_no_en')}}
				</small>
			@endif
		</div>
		<div class="form-group">
			<label class="pull-left control-label mb-10" for="password">Password</label>
			<input type="password" class="form-control" required="" id="password" name="password" placeholder="Enter pwd">
			@if($errors->has('password'))
				<small class="d-block text-danger">
					{{$errors->first('password')}}
				</small>
			@endif
		</div>
		<div class="form-group">
			<label class="pull-left control-label mb-10" for="password_confirmation">Confirm Password</label>
			<input type="password" class="form-control" required="" id="password_confirmation" name="password_confirmation" placeholder="Enter pwd">
		</div>
		
		<div class="text-center mt-4">
			<button type="submit" class="btn btn-primary btn-block">Sign me up</button>
		</div>
	</form>
	<div class="new-account mt-3">
		<p>Already have an account? <a class="text-primary" href="{{route('login')}}">Sign in</a></p>
	</div>
</div>
@endsection
