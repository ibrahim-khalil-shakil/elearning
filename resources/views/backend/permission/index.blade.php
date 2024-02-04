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
                    <li class="nav-item"><a href="javascript:void()" data-toggle="tab" class="nav-link btn-primary">Grid
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

