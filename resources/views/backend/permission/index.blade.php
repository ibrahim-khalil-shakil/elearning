@extends('backend.layouts.app')
@section('title', trans('Permission List'))

@push('styles')
<!-- Datatable -->
<link href="{{asset('public/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
@endpush

@section('content')

<style>
    .list-group-collapse li>ul li:first-child {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .list-group-collapse li>ul {
        margin-left: 16px;
        margin-right: 16px;
        margin-bottom: 11px;
    }
</style>

<div class="content-body">
    <!-- row -->
    <div class="container-fluid">

        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Permission List</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('role.index')}}">Permissions</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('role.index')}}">All Permission</a></li>
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
                        <div class="card px-3 pb-3">
                            <h4>{{$role->type}}</h4>
                            @php
                            $routes=array();
                            $auto_accept=array('GET',"DELETE");
                            $permissions=array();
                            foreach($permission as $perm){
                            $permissions[$perm->name]=$perm->name;
                            }
                            @endphp
                            @foreach(Illuminate\Support\Facades\Route::getRoutes() as $v)
                            @if($v->getPrefix()=="/admin")
                            @php
                            $rl=explode('.',$v->getName());
                            if(isset($rl[1]))
                            $routes[$rl[0]][]=array("method"=>$v->methods[0],"function"=>$rl[1]);
                            @endphp
                            @endif
                            @endforeach
                            <form action="{{route('permission.save',encryptor('encrypt',$role->id))}}" method="post">
                                @csrf
                                <div class="row p-2">
                                    @forelse($routes as $k=>$r)
                                    <div class="col-6 col-sm-3 col-md-2">
                                        <input type="checkbox" onchange="checkAll(this)"> {{__($k)}}
                                        @if($r)
                                        <ul class="list-group">
                                            @foreach($r as $name)
                                            @if(in_array($name['method'],$auto_accept))
                                            <li class="list-group-item">
                                                @if(in_array($k.'.'.$name['function'],$permissions))
                                                <input type="checkbox" checked name="permission[]" value="{{$k.'.'.$name['function']}}">
                                                {{__($name['function'])}}
                                                @else
                                                <input type="checkbox" name="permission[]" value="{{$k.'.'.$name['function']}}">
                                                {{__($name['function'])}}
                                                @endif
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                        @endif
                                    </div>
                                    @empty
                        
                                    @endforelse
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary"> Save</button>
                                    </div>
                                </div>
                            </form>
                        
                        </div>
                    </div>
                    {{-- <div id="grid-view" class="tab-pane fade col-lg-12">
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
                                                        href="{{route('user.edit', encryptor('encrypt',$d->id))}}">Edit</a>
                                                    <a class="dropdown-item text-danger"
                                                        href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-2">
                                        <div class="text-center">
                                            <div class="profile-photo">
                                                <img src="{{asset('public/uploads/users/'.$d->image)}}" width="100"
                                                    height="100" class="rounded-circle" alt="">
                                            </div>
                                            <h3 class="mt-4 mb-1">{{$d->name_en}}</h3>
                                            <p class="text-muted">{{$d->role?->type}}</p>
                                            <ul class="list-group mb-3 list-group-flush">
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                    <span>#Sl.</span><strong>{{$d->id}}</strong>
                                                </li>
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                    <span class="mb-0">Phone No.
                                                        :</span><strong>{{$d->contact_en}}</strong>
                                                </li>
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                    <span class="mb-0">Email:</span><strong>{{$d->email}}</strong>
                                                </li>
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                    <span class="mb-0">Created At.
                                                        :</span><strong>{{$d->created_at}}</strong>
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
                                            <p class="mt-3 px-4">User Not Found</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforelse
                        </div>
                    </div> --}}
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

<script>
    function checkAll(e){
        if($(e).prop('checked')==true)
            $(e).next('.list-group').find('input').attr('checked','checked');
        else
            $(e).next('.list-group').find('input').removeAttr('checked','checked');
    }

</script>

@endpush

