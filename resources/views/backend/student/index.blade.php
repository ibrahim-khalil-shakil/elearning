@extends('backend.layouts.app')
@section('title', 'Student List')

@push('styles')
<!-- Datatable -->
<link href="{{asset('public/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
@endpush

@section('content')

<div class="content-body">
    <!-- row -->
    <div class="container-fluid">

        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Student List</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('student.index')}}">Students</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('student.index')}}">All Student</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-pills mb-3">
                    <li class="nav-item"><a href="#list-view" data-toggle="tab"
                            class="nav-link btn-primary mr-1 show active">List View</a></li>
                    <li class="nav-item"><a href="#grid-view" data-toggle="tab" class="nav-link btn-primary">Grid
                            View</a></li>
                </ul>
            </div>
            <div class="col-lg-12">
                <div class="row tab-content">
                    <div id="list-view" class="tab-pane fade active show col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Students List </h4>
                                <a href="{{route('student.create')}}" class="btn btn-primary">+ Add new</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>{{__('#')}}</th>
                                                <th>{{__('Name')}}</th>
                                                <th>{{__('Email')}}</th>
                                                <th>{{__('Contact')}}</th>
                                                <th>{{__('Role')}}</th>
                                                <th>{{__('Gender')}}</th>
                                                <th>{{__('Status')}}</th>
                                                <th>{{__('Action')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($data as $d)
                                            <tr>
                                                <td><img class="rounded-circle" width="35" height="35"
                                                        src="{{asset('public/uploads/students/'.$d->image)}}" alt=""></td>
                                                <td><strong>{{$d->name_en}}</strong></td>
                                                <td>{{$d->email}}</td>
                                                <td>{{$d->contact_en}}</td>
                                                <td>{{$d->role?->name}}</td>
                                                <td>
                                                   {{ $d->gender == 'male' ? __('Male') : ($d->gender == 'female' ? __('Female') : __('Other')) }}
                                                </td>
                                                <td>
                                                    <span class="badge {{$d->status==1?"
                                                        badge-success":"badge-danger"}}">@if($d->status==1){{__('Active')}}
                                                        @else{{__('Inactive')}} @endif</span>
                                                </td>
                                                <td>
                                                    <a href="{{route('student.edit', encryptor('encrypt',$d->id))}}"
                                                        class="btn btn-sm btn-primary" title="Edit"><i
                                                            class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"
                                                        title="Delete" onclick="$('#form{{$d->id}}').submit()"><i
                                                            class="la la-trash-o"></i></a>
                                                    <form id="form{{$d->id}}"
                                                        action="{{route('student.destroy', encryptor('encrypt',$d->id))}}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <th colspan="7" class="text-center">No Student Found</th>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="grid-view" class="tab-pane fade col-lg-12">
                        <div class="row">
                            @forelse ($data as $d)
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="card card-profile">
                                    <div class="card-header justify-content-end pb-0">
                                        <div class="dropdown">
                                            <button class="btn btn-link" type="button" data-toggle="dropdown">
                                                <span class="dropdown-dots fs--1"></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right border py-0">
                                                <div class="py-2">
                                                    <a class="dropdown-item"
                                                        href="{{route('student.edit', encryptor('encrypt',$d->id))}}">Edit</a>
                                                    <a class="dropdown-item text-danger"
                                                        href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-2">
                                        <div class="text-center">
                                            <div class="profile-photo">
                                                <img src="{{asset('public/uploads/students/'.$d->image)}}" width="100"
                                                    height="100" class="rounded-circle" alt="">
                                            </div>
                                            <h3 class="mt-4 mb-1">{{$d->name_en}}</h3>
                                            <p class="text-muted">{{$d->role?->name}}</p>
                                            <ul class="list-group mb-3 list-group-flush">
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                    <span>Phone No. :</span>
                                                    <strong>{{$d->contact_en}}</strong>
                                                </li>
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                    <span class="mb-0">Email :</span>
                                                    <strong>{{$d->email}}</strong>
                                                </li>
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                    <span class="mb-0">Gender :</span>
                                                    <strong>{{$d->gender}}</strong>
                                                </li>
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                    <span class="mb-0">Status :</span>
                                                    <span class="badge {{$d->status==1?"
                                                        badge-success":"badge-danger"}}">@if($d->status==1){{__('Active')}}
                                                        @else{{__('Inactive')}} @endif</span>
                                                </li>
                                            </ul>
                                            <a class="btn btn-outline-primary btn-rounded mt-3 px-4"
                                                href="about-student.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="card card-profile">
                                    <div class="card-body pt-2">
                                        <div class="text-center">
                                            <p class="mt-3 px-4">Student Not Found</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection

@push('scripts')
<!-- Datatable -->
<script src="{{asset('public/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/js/plugins-init/datatables.init.js')}}"></script>

@endpush