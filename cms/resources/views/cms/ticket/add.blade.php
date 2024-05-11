@extends('cms.layouts.masterpage')
@section('title', 'Ticket')
@section('top-styles')
<link rel="stylesheet" type="text/css" href="{{ url('') }}/plugins/select2/select2.min.css">
<link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/css/bootstrap-tagsinput.css">
<link rel="stylesheet" type="text/css" href="{{ url('') }}/plugins/file-upload/file-upload-with-preview.min.css">
<link rel="stylesheet" href="{{ url('') }}/assets/libs/twitter-bootstrap-wizard/prettify.css">
<style>
.error {
    color: red;
}
.select2-container .select2-selection--single .select2-selection__rendered {
    line-height: 19px !important;
}
</style>
@endsection
@section('header')
@parent
@endsection
@section('leftside')
@parent
@endsection
@section('content')
<!--  BEGIN MAIN CONTAINER  -->
<div class="page-content mt-0">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row mt-0">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Ticket</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item">All Tickets</li>
                            <li class="breadcrumb-item"><a href="{{route('ticket')}}">Ticket</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$isEdit ? 'Edit' : 'Add'}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div id="progrss-wizard" class="twitter-bs-wizard">
                        <form action="{{ $isEdit ? route('ticket.update', [$ticket->id]) : route('ticket.store') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @if ($isEdit)
                            <input type="hidden" name="_method" value="put">
                             <input type="hidden" name="id" value="{{ $ticket->id ?? null }}">
                            @endif
                            <div>
                                <div class="row">
                                    <div class="col-md-6 mt15 pl30">
                                        <h5 class="mb-sm-0">Ticket / {{$isEdit ? 'Edit' : 'Add'}}</h5>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <a href="{{route('ticket')}}" class="btn btn-primary">
                                            <svg viewBox="0 0 24 24" width="10" height="10" stroke="currentColor"
                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" class="css-i6dzq1">
                                                <line x1="19" y1="12" x2="5" y2="12"></line>
                                                <polyline points="12 19 5 12 12 5"></polyline>
                                            </svg> &nbsp; | &nbsp; Go Back</a>
                                        <button type="submit" class="btn btn-primary mb-2 mr-4 ml-3 mt-2">
                                            </ <svg viewBox="0 0 24 24" width="10" height="10" stroke="currentColor"
                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" class="css-i6dzq1">
                                            <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z">
                                            </path>
                                            <polyline points="17 21 17 13 7 13 7 21"></polyline>
                                            <polyline points="7 3 7 8 15 8"></polyline>
                                            </svg>
                                            &nbsp; | &nbsp; {{ $isEdit ? 'Update' : 'Save' }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="">Coupon <span class="text-danger"> * </span></label>
                                                <input type="text" name="coupon"
                                                    value="{{ $ticket->coupon ?? old('coupon') ?? null }}"
                                                    class="form-control" placeholder="Enter Coupon..." required>
                                                @if ($errors->has('coupon'))
                                                <div class="error">{{ $errors->first('coupon') }}</div>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="">Name <span class="text-danger"> * </span></label>
                                                <input type="text" name="name"
                                                    value="{{ $ticket->name ?? old('name') ?? null }}"
                                                    class="form-control" placeholder="Enter Name..." required>
                                                @if ($errors->has('name'))
                                                <div class="error">{{ $errors->first('name') }}</div>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="">Price <span class="text-danger"> * </span></label>
                                                <input type="text" name="price"
                                                    value="{{ $ticket->price ?? old('price') ?? null }}"
                                                    class="form-control" placeholder="Enter Price..." required>
                                                @if ($errors->has('price'))
                                                <div class="error">{{ $errors->first('price') }}</div>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="">Category <span class="text-danger"> * </span></label>
                                                <input type="text" name="category"
                                                    value="{{ $ticket->category ?? old('category') ?? null }}"
                                                    class="form-control" placeholder="Enter Category..." required>
                                                @if ($errors->has('category'))
                                                <div class="error">{{ $errors->first('category') }}</div>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Date <span class="text-danger"> * </span></label>
                                                <input type="date" name="date" value="{{ $ticket->date ?? old('date') ?? null }}" class="form-control">
                                                @if ($errors->has('date'))
                                                    <div class="error">{{ $errors->first('date') }}</div>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Time <span class="text-danger"> * </span> </label>
                                                <input type="time" name="time" value="{{ $ticket->time ?? old('time') ?? null }}" class="form-control">
                                                @if ($errors->has('time'))
                                                    <div class="error">{{ $errors->first('time') }}</div>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="">Location <span class="text-danger"> * </span></label>
                                                <input type="text" name="location"
                                                    value="{{ $ticket->location ?? old('location') ?? null }}"
                                                    class="form-control" placeholder="Enter Location..." required>
                                                @if ($errors->has('location'))
                                                <div class="error">{{ $errors->first('location') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->
    @endsection
    @section('bottom-mid-scripts')
    <script src="{{ url('') }}/assets/libs/tinymce/tinymce.min.js"></script>
    <script src="{{ url('') }}/assets/js/components/ui-accordions.js"></script>
    <script src="{{ url('') }}/plugins/select2/select2.min.js"></script>
    <script src="{{ url('') }}/plugins/select2/custom-select2.js"></script>
    <script src="https://parsleyjs.org/dist/parsley.min.js"></script>
    <script src="{{ url('') }}/plugins/file-upload/file-upload-with-preview.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="{{ url('') }}/assets/js/pages/form-editor.init.js"></script>
    @endsection
    @section('bottom-bot-scripts')
    @endsection