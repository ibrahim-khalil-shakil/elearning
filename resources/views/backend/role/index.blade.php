@extends('backend.layouts.app')
@section('title', trans('Role List'))

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
                    <h4>Role List</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('role.index')}}">Roles</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('role.index')}}">All Role</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="row tab-content">
                    <div id="list-view" class="tab-pane fade active show col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Role List </h4>
                                <a href="{{route('role.create')}}" class="btn btn-primary">+ Add new</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>{{__('#')}}</th>
                                                <th>{{__('Name')}}</th>
                                                <th>{{__('Identity')}}</th>
                                                <th>{{__('Action')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($data as $d)
                                            <tr>
                                                <td>{{++$loop->index}}</td>
                                                <td><strong>{{$d->name}}</strong></td>
                                                <td>{{$d->identity}}</td>
                                                <td>
                                                    <a href="{{route('role.edit', encryptor('encrypt',$d->id))}}"
                                                        class="btn btn-sm btn-primary" title="Edit"><i
                                                            class="la la-pencil"></i></a>
                                                    <a href="{{route('permission.list', encryptor('encrypt',$d->id))}}"
                                                        class="btn btn-sm btn-dark" title="Permissions"><i
                                                            class="la la-unlock"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"
                                                        title="Delete" onclick="$('#form{{$d->id}}').submit()"><i
                                                            class="la la-trash-o"></i></a>
                                                    <form id="form{{$d->id}}"
                                                        action="{{route('role.destroy', encryptor('encrypt',$d->id))}}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <th colspan="7" class="text-center">No User Found</th>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
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
<!-- Datatable -->
<script src="{{asset('public/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/js/plugins-init/datatables.init.js')}}"></script>

@endpush