@extends('backend.layouts.appAuth')

@section('content')
<div class="auth-form">
	<h4 class="text-center mb-4">Sign in your account</h4>
	<form action="{{route('login.check')}}" method="POST">
		@csrf
		<div class="form-group">
			<label class="control-label mb-10" for="username">Contact Number / Email Address</label>
			<input type="text" class="form-control" required="" id="username" name="username" value="{{old('username')}}" placeholder="Phone Number/Email Address">
			@if($errors->has('username'))
				<small class="d-block text-danger">
					{{$errors->first('username')}}
				</small>
			@endif
		</div>
		<div class="form-group">
			<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
			<input type="password" class="form-control" required="" id="password" name="password" placeholder="Enter pwd">
			@if($errors->has('password'))
				<small class="d-block text-danger">
					{{$errors->first('password')}}
				</small>
			@endif
		</div>
		<div class="form-group">
			<a href="page-forgot-password.html">Forgot Password?</a>
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-primary btn-block">Sign me in</button>
		</div>
	</form>
	<div class="new-account mt-3">
		<p>Don't have an account? <a class="text-primary" href="{{route('register')}}">Sign up</a></p>
	</div>
</div>
@endsection
