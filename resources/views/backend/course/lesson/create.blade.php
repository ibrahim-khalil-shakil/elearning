@extends('backend.layouts.app')
@section('title', 'Add Course Lesson')

@push('styles')
<!-- Pick date -->
<link rel="stylesheet" href="{{asset('public/vendor/pickadate/themes/default.css')}}">
<link rel="stylesheet" href="{{asset('public/vendor/pickadate/themes/default.date.css')}}">
@endpush

@section('content')

<div class="content-body">
    <!-- row -->
    <div class="container-fluid">

        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Add Course Lesson</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('lesson.index')}}">Course Lessons</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('lesson.create')}}">Add Course Lesson</a>
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Basic Info</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('lesson.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" name="lessonTitle"
                                            value="{{old('lessonTitle')}}">
                                    </div>
                                    @if($errors->has('lessonTitle'))
                                    <span class="text-danger"> {{ $errors->first('lessonTitle') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Course</label>
                                        <select class="form-control" name="courseId">
                                            @forelse ($course as $c)
                                            <option value="{{$c->id}}" {{old('courseId')==$c->id?'selected':''}}>
                                                {{$c->title_en}}</option>
                                            @empty
                                            <option value="">No Course Found</option>
                                            @endforelse
                                        </select>
                                    </div>
                                    @if($errors->has('courseId'))
                                    <span class="text-danger"> {{ $errors->first('courseId') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Lesson Description</label>
                                        <textarea class="form-control" name="lessonDescription"
                                            value="{{old('lessonDescription')}}"></textarea>
                                    </div>
                                    @if($errors->has('lessonDescription'))
                                    <span class="text-danger"> {{ $errors->first('lessonDescription') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Lesson Notes</label>
                                        <textarea class="form-control" name="lessonNotes"
                                            value="{{old('lessonNotes')}}"></textarea>
                                    </div>
                                    @if($errors->has('lessonNotes'))
                                    <span class="text-danger"> {{ $errors->first('lessonNotes') }}</span>
                                    @endif
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

@endsection

@push('scripts')
<!-- pickdate -->
<script src="{{asset('public/vendor/pickadate/picker.js')}}"></script>
<script src="{{asset('public/vendor/pickadate/picker.time.js')}}"></script>
<script src="{{asset('public/vendor/pickadate/picker.date.js')}}"></script>

<!-- Pickdate -->
<script src="{{asset('public/js/plugins-init/pickadate-init.js')}}"></script>
@endpush