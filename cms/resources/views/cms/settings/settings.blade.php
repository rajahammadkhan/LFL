@extends('cms.layouts.masterpage')
@section('title', 'Settings')
@section('top-styles')
<link rel="stylesheet" type="text/css" href="{{ url('') }}/plugins/select2/select2.min.css">
<link rel="stylesheet" type="text/css"
    href="{{ url('') }}/assets/css/components/tabs-accordian/custom-accordions.css">
<link rel="stylesheet" type="text/css"
    href="{{ url('') }}/plugins/file-upload/file-upload-with-preview.min.css">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<style>
    .error {
        color: red;
    }

    .file {
        visibility: hidden;
        position: absolute;
    }

    .logo-footer {
        visibility: hidden;
        position: absolute;
    }

    .img-header {
        visibility: hidden;
        position: absolute;
    }

    .img-thumbnail {
        cursor: pointer;
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
    }

    .img-thumbnail-header {
        cursor: pointer;
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
    }

    .images {
        display: flex;
        flex-wrap: wrap;
    }

    .images-header {
        display: flex;
        flex-wrap: wrap;
    }

    .photo {
        width: 230px;
        height: 120px;
    }

    .photo img {
        width: 100%;
        height: 100%;
    }

    .photo-header {
        width: 1850px;
        height: 400px;
    }

    .photo-header img {
        width: 100%;
        height: 100%;
    }

    .photo-footer {
        width: 320px;
        height: 120px;
    }

    .photo-footer img {
        width: 100%;
        height: 100%;
    }

    .img-thumbnail:hover {
        box-shadow: 0 0 2px 1px #000;
    }

    .img-thumbnail-header:hover {
        box-shadow: 0 0 2px 1px #000;
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
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Settings</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a
                                    href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Settings</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div id="progrss-wizard" class="twitter-bs-wizard">
                        <form action="{{ route('settings.update') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="_method" value="put">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="mb-sm-0">Settings</h4>
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
                                <div class="col-md-2">
                                    <label>Site Logo <small>(Header)</small> <span class="text-danger"> *
                                        </span></label>
                                    <input type="file" name="key[site_logo_header]" class="file" accept="image/*">
                                    <div class="images">
                                        <div class="photo">
                                            <img src="{{ url('') }}/laravel_files/public/uploads/{{ getSettings('site_logo_header') ?? 'placeholder.png' }}"
                                                id="preview" class="img-thumbnail browse">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label>Site Logo <small>(Footer)</small> <span class="text-danger"> *
                                        </span></label>
                                    <input type="file" name="key[site_logo_footer]" class="logo-footer"
                                        accept="image/*">
                                    <div class="images-footer">
                                        <div class="photo-footer">
                                            <img src="{{ url('') }}/laravel_files/public/uploads/{{ getSettings('site_logo_footer') ?? 'placeholder.png' }}"
                                                style="width:248px" id="preview-footer-logo"
                                                class="img-thumbnail browse-logo-footer">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="row">
                                        <!-- <div class="col-md-6">
                                                <label for="">Site Name <span class="text-danger"> * </span></label>
                                                <input type="text" name="site_name" value="{{ getSettings('site_name') ?? null }}"
                                                    class="form-control" placeholder="Site Name..." required>
                                                                    @if($errors->has('site_name'))
                                                    <div class="error">{{ $errors->first('site_name') }}</div>
                                                                    @endif
                                            </div> -->
                                        <div class="col-md-6">
                                            <label for="">Site Email <span class="text-danger"> * </span></label>
                                            <input type="text" name="key[site_email]"
                                                value="{{ getSettings('site_email') ?? null }}"
                                                class="form-control" placeholder="Site Email..." required>
                                            @if($errors->has('site_email'))
                                                <div class="error">
                                                    {{ $errors->first('site_email') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Contact Number <span class="text-danger"> * </span></label>
                                            <input type="text" name="key[contact_no]"
                                                value="{{ getSettings('contact_no') ?? null }}"
                                                class="form-control" placeholder="Contact Number..." required>
                                            @if($errors->has('contact_number'))
                                                <div class="error">
                                                    {{ $errors->first('contact_number') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-12 mt10">
                                            <label for="">Address <span class="text-danger"> * </span></label>
                                            <input type="text" name="key[address]"
                                                value="{{ getSettings('address') ?? null }}"
                                                class="form-control" placeholder="Address..." required>
                                            @if($errors->has('address'))
                                                <div class="error">{{ $errors->first('address') }}
                                                </div>
                                            @endif
                                        </div>
                                        <!-- <div class="col-md-6 mt10">
                                                <label for="">Timings <small>( separated by / sign )</small> <span class="text-danger"> * </span></label>
                                                <input type="text" name="key[timings]" value="{{ getSettings('timings') ?? null }}"
                                                    class="form-control" placeholder="Timings..." required>
                                                                @if($errors->has('timings'))
                                                    <div class="error">{{ $errors->first('timings') }}</div>
                                                                @endif
                                            </div> -->
                                    </div>

                                </div>


                            </div>
                            <!-- <hr>
                                    <h5 class="mt10"><b>Social Links</b></h5>
                                <hr> -->
                            <div class="row">
                                <div class="col-md-6 mt30">
                                    <label for="">Facebook <span class="text-danger"> * </span></label>
                                    <input type="text" name="key[social_facebook]"
                                        value="{{ getSettings('social_facebook') ?? null }}"
                                        class="form-control" placeholder="Facebook..." required>
                                    @if($errors->has('social_facebook'))
                                        <div class="error">{{ $errors->first('social_facebook') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-6 mt30">
                                    <label for="">Instagram <span class="text-danger"> * </span></label>
                                    <input type="text" name="key[social_instagram]"
                                        value="{{ getSettings('social_instagram') ?? null }}"
                                        class="form-control" placeholder="Facebook..." required>
                                    @if($errors->has('social_instagram'))
                                        <div class="error">
                                            {{ $errors->first('social_instagram') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-6 mt10">
                                    <label for="">Tiktok <span class="text-danger"> * </span></label>
                                    <input type="text" name="key[social_tiktok]"
                                        value="{{ getSettings('social_tiktok') ?? null }}"
                                        class="form-control" placeholder="Twitter..." required>
                                    @if($errors->has('social_tiktok'))
                                        <div class="error">{{ $errors->first(social_tiktok) }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-6 mt10">
                                    <label for="">Youtube <span class="text-danger"> * </span></label>
                                    <input type="text" name="key[social_youtube]"
                                        value="{{ getSettings('social_youtube') ?? null }}"
                                        class="form-control" placeholder="LinkedIn..." required>
                                    @if($errors->has('social_youtube'))
                                        <div class="error">{{ $errors->first('social_youtube') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-6 mt10">
                                    <label for="">Snapchat <span class="text-danger"> * </span></label>
                                    <input type="text" name="key[social_snapchat]"
                                        value="{{ getSettings('social_snapchat') ?? null }}"
                                        class="form-control" placeholder="Whatsapp..." required>
                                    @if($errors->has('social_snapchat'))
                                        <div class="error">
                                            {{ $errors->first('social_snapchat') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-12 mt10">
                                    <label for="">About Us <small>( Footer )</small> <span class="text-danger"> *
                                        </span></label>
                                    <textarea rows="4" name="key[footer_about]" class="form-control"
                                        required>{{ getSettings('footer_about') ?? null }}</textarea>
                                    @if($errors->has('footer_about'))
                                        <div class="error">{{ $errors->first('footer_about') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-12 mt10">
                                    <label for="">Google Map <small>( Embedded Code )</small> <span class="text-danger">
                                            * </span></label>
                                    <textarea rows="4" name="key[google_location]" class="form-control"
                                        required>{{ getSettings('google_location') ?? null }}</textarea>
                                    @if($errors->has('google_location'))
                                        <div class="error">{{ $errors->first('google_location') }}
                                        </div>
                                    @endif
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
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="{{ url('') }}/plugins/select2/select2.min.js"></script>
<script src="{{ url('') }}/plugins/select2/custom-select2.js"></script>
<script src="https://parsleyjs.org/dist/parsley.min.js"></script>
<script src="{{ url('') }}/plugins/file-upload/file-upload-with-preview.min.js"></script>
@endsection
@section('bottom-bot-scripts')
<script>
    $(document).ready(function () {
        $('form').parsley();

        $('.summernote').summernote({
            height: 300,
            focus: true
        });

        $(document).on("click", ".browse", function () {
            var file = $(this).parents().find(".file");
            file.trigger("click");
        });


        $('.file').change(function (e) {
            var fileName = e.target.files[0].name;
            $("#file").val(fileName);

            var reader = new FileReader();
            reader.onload = function (e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview").src = e.target.result;
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });

        $(document).on("click", ".browse-logo-footer", function () {
            var file = $(this).parents().find(".logo-footer");
            file.trigger("click");
        });

        $('.logo-footer').change(function (e) {
            var fileName = e.target.files[0].name;
            $("#file").val(fileName);

            var reader = new FileReader();
            reader.onload = function (e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview-footer-logo").src = e.target.result;
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });

        $(document).on("click", ".browse-img-header", function () {
            var file1 = $(this).parents().find(".img-header");
            file1.trigger("click");
        });

        $('.img-header').change(function (e) {

            var fileName = e.target.files[0].name;

            $("#file").val(fileName);

            var reader = new FileReader();
            reader.onload = function (e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview-img-header").src = e.target.result;
            };

            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });


    });

</script>
@endsection
