@extends('backend.layouts.app')
@section('title', 'Question List')

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
                    <h4>Question List</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('question.index')}}">Questions</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('question.index')}}">All Question</a>
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-pills mb-3">
                    <li class="nav-item"><a href="#list-view" data-toggle="tab"
                            class="nav-link btn-primary mr-1 show active">List View</a></li>
                    <li class="nav-item"><a href="javascript:void(0);" data-toggle="tab"
                            class="nav-link btn-primary">Grid
                            View</a></li>
                </ul>
            </div>
            <div class="col-lg-12">
                <div class="row tab-content">
                    <div id="list-view" class="tab-pane fade active show col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Questions List </h4>
                                <a href="{{route('question.create')}}" class="btn btn-primary">+ Add new</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>{{__('Quiz')}}</th>
                                                <th>{{__('Type')}}</th>
                                                <th>{{__('Question')}}</th>
                                                <th>{{__('Option A')}}</th>
                                                <th>{{__('Option B')}}</th>
                                                <th>{{__('Option C')}}</th>
                                                <th>{{__('Option D')}}</th>
                                                <th>{{__('Correct Answer')}}</th>
                                                <th>{{__('Action')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($question as $q)
                                            <tr>
                                                <td>{{$q->quiz?->title}}</td>
                                                <td>
                                                    {{ $q->type == 'multiple_choice' ? __('Multiple Choice') : ($q->type
                                                    == 'true_false' ?
                                                    __('True False') : __('Short Answer')) }}
                                                </td>
                                                <td>{{$q->content}}</td>
                                                <td>{{$q->option_a}}</td>
                                                <td>{{$q->option_b}}</td>
                                                <td>{{$q->option_c}}</td>
                                                <td>{{$q->option_d}}</td>
                                                <td>{{$q->correct_answer == 'a' ? 'Option-A' : ($q->correct_answer ==
                                                    'b' ? 'Option-B' : ($q->correct_answer == 'c' ? 'Option-C' :
                                                    'Option-D'))}}</td>
                                                <td>
                                                    <a href="{{route('question.edit', encryptor('encrypt',$q->id))}}"
                                                        class="btn btn-sm btn-primary" title="Edit"><i
                                                            class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"
                                                        title="Delete" onclick="$('#form{{$q->id}}').submit()"><i
                                                            class="la la-trash-o"></i></a>
                                                    <form id="form{{$q->id}}"
                                                        action="{{route('question.destroy', encryptor('encrypt',$q->id))}}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <th colspan="5" class="text-center">No Question Found</th>
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