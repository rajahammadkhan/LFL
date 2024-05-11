@extends('cms.layouts.masterpage')
@section('title', 'Profile')
@section('top-styles')
<link rel="stylesheet" type="text/css" href="{{ url('') }}/plugins/select2/select2.min.css">
<link rel="stylesheet" type="text/css"
    href="{{ url('') }}/assets/css/components/tabs-accordian/custom-accordions.css">
<link rel="stylesheet" type="text/css"
    href="{{ url('') }}/plugins/file-upload/file-upload-with-preview.min.css">
<style>
    .error {
        color: red;
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
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Profile</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a
                                    href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
        <div class="row">
        <div class="col-12">
        @if (\Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <h4 class="alert-heading">Success!</h4>
                <hr>
                <p class="mb-0 text-black">{!! \Session::get('success') !!}</p>
            </div>
        @endif
        @if (\Session::has('wrong'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <h4 class="alert-heading">Error!</h4>
                <hr>
                <p class="mb-0 text-black">{!! \Session::get('wrong') !!}</p>
            </div>
        @endif
        </div>
        </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div id="progrss-wizard" class="twitter-bs-wizard">
                        <form action="{{ route('profile.update') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="_method" value="put">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="mb-sm-0">Profile</h4>
                                </div>
                                <div class="col-md-6 text-end">
                                    <button type="submit" class="btn btn-primary mb-2 mr-4 ml-3 mt-2">
                                        <svg viewBox="0 0 24 24" width="10" height="10" stroke="currentColor"
                                            stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            class="css-i6dzq1">
                                            <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z">
                                            </path>
                                            <polyline points="17 21 17 13 7 13 7 21"></polyline>
                                            <polyline points="7 3 7 8 15 8"></polyline>
                                        </svg>
                                        &nbsp; | &nbsp; Update</button>
                                </div>
                            </div>
                    </div>

                    <div class="widget-content widget-content-area">
                        <div id="toggleAccordion">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="">Old Password <span class="text-danger"> * </span></label>
                                            <input type="password" name="old_password"
                                                value="{{ ('old_password') ?? null }}"
                                                class="form-control" placeholder="Old Password..." required>
                                            @if($errors->has('old_password'))
                                                <div class="error">
                                                    {{ $errors->first('old_password') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">New Password <span class="text-danger"> * </span></label>
                                            <input type="password" name="new_password"
                                                value="{{('new_password') ?? null }}"
                                                class="form-control" placeholder="New Password..." required>
                                            @if($errors->has('new_password'))
                                                <div class="error">
                                                    {{ $errors->first('new_password') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-12 mt10">
                                            <label for="">Confirm Password <span class="text-danger"> * </span></label>
                                            <input type="password" name="confirm_password"
                                                value="{{('address') ?? null }}"
                                                class="form-control" placeholder="Confirm Password..." required>
                                            @if($errors->has('confirm_password'))
                                                <div class="error">{{ $errors->first('confirm_password') }}
                                                </div>
                                            @endif
                                        </div>
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
<script src="{{ url('') }}/assets/js/components/ui-accordions.js"></script>
<script src="{{ url('') }}/plugins/select2/select2.min.js"></script>
<script src="{{ url('') }}/plugins/select2/custom-select2.js"></script>
<script src="https://parsleyjs.org/dist/parsley.min.js"></script>
@endsection
@section('bottom-bot-scripts')
@endsection
