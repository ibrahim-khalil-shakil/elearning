@extends('backend.layouts.app')
@section('title', 'Edit Course Material Material')

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
                    <h4>Edit Course Material</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('material.index')}}">Course Materials</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Edit Course Material</a></li>
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
                        <form action="{{route('material.update',encryptor('encrypt', $material->id))}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="uptoken" value="{{encryptor('encrypt',$material->id)}}">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" name="materialTitle"
                                            value="{{old('materialTitle',$material->title)}}">
                                    </div>
                                    @if($errors->has('materialTitle'))
                                    <span class="text-danger"> {{ $errors->first('materialTitle') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Lesson</label>
                                        <select class="form-control" name="lessonId">
                                            @forelse ($lesson as $l)
                                            <option value="{{$l->id}}" {{old('lessonId', $material->lesson_id) ==
                                                $l->id?'selected':''}}>
                                                {{$l->title}}</option>
                                            @empty
                                            <option value="">No Course Lesson Found</option>
                                            @endforelse
                                        </select>
                                    </div>
                                    @if($errors->has('lessonId'))
                                    <span class="text-danger"> {{ $errors->first('lessonId') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Material Type</label>
                                        <select class="form-control" name="materialType">
                                            <option value="video" @if(old('materialType', $material->type)=='video' ) selected
                                                @endif>Video
                                            </option>
                                            <option value="document" @if(old('materialType', $material->type)=='document' ) selected
                                                @endif>Document
                                            </option>
                                            <option value="quiz" @if(old('materialType', $material->type)
                                                =='quiz' )
                                                selected @endif>Quiz</option>
                                        </select>
                                    </div>
                                    @if($errors->has('materialType'))
                                    <span class="text-danger"> {{ $errors->first('materialType') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Content</label>
                                        <input type="file" class="form-control" name="content">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Content Url</label>
                                        <textarea class="form-control"
                                            name="contentURL">{{old('contentURL',$material->content_url)}}</textarea>
                                    </div>
                                    @if($errors->has('contentURL'))
                                    <span class="text-danger"> {{ $errors->first('contentURL') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="submit" class="btn btn-light">Cencel</button>
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