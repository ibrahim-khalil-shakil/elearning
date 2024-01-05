@extends('backend.layouts.app')
@section('title', 'Edit Event')

@push('styles')
<!-- Pick date -->
<link rel="stylesheet" href="{{asset('public/vendor/pickadate/themes/default.css')}}">
<link rel="stylesheet" href="{{asset('public/vendor/pickadate/themes/default.date.css')}}">
@endpush

@section('content')

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">

        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Edit Event</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('event.index')}}">Events</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Edit Event</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Event Info</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('event.update', $event->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Event Title</label>
                                        <input type="text" class="form-control" name="title"
                                            value="{{old('title', $event->title)}}">
                                    </div>
                                    @if($errors->has('title'))
                                    <span class="text-danger"> {{$errors->first('title')}}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Location Type</label>
                                        <input type="text" class="form-control" name="location"
                                            value="{{old('location', $event->location)}}">
                                    </div>
                                    @if($errors->has('location'))
                                    <span class="text-danger"> {{$errors->first('location')}}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Topic</label>
                                        <input type="text" class="form-control" name="topic"
                                            value="{{old('topic', $event->topic)}}">
                                    </div>
                                    @if($errors->has('topic'))
                                    <span class="text-danger"> {{$errors->first('topic')}}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Hosted By</label>
                                        <input type="text" class="form-control" name="hosted_by"
                                            value="{{old('hosted_by', $event->hosted_by)}}">
                                    </div>
                                    @if($errors->has('hosted_by'))
                                    <span class="text-danger"> {{$errors->first('hosted_by')}}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Description</label>
                                        <textarea name="description"
                                            class="form-control">{{old('description', $event->description)}}</textarea>
                                    </div>
                                    @if($errors->has('description'))
                                    <span class="text-danger"> {{$errors->first('description')}}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Event Goal</label>
                                        <textarea name="goal"
                                            class="form-control">{{old('goal', $event->goal)}}</textarea>
                                        @if($errors->has('goal'))
                                        <span class="text-danger"> {{$errors->first('goal')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Date</label>
                                        <input type="date" class="form-control" name="date"
                                            value="{{old('date', $event->date)}}">
                                    </div>
                                    @if($errors->has('date'))
                                    <span class="text-danger"> {{$errors->first('date')}}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Image</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="submit" class="btn btn-light">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->

@endsection

@push('scripts')
<!-- pickdate -->
<script src="{{asset('public/vendor/pickadate/picker.js')}}"></script>
<script src="{{asset('public/vendor/pickadate/picker.time.js')}}"></script>
<script src="{{asset('public/vendor/pickadate/picker.date.js')}}"></script>

<!-- Pickdate -->
<script src="{{asset('public/js/plugins-init/pickadate-init.js')}}"></script>
@endpush