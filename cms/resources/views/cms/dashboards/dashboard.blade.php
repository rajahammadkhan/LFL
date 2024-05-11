@extends('cms.layouts.masterpage')
@section('title', 'Dashboard')
@section('top-styles')
<!-- <link href="{{url('')}}/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
<link href="{{url('')}}/assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
<link href="{{url('')}}/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
<link href="{{ url('') }}/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" /> -->

<link href="{{ url('') }}/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="{{ url('') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

<style type="text/css">
    .price_code {
        color: #ec3c49;
        font-size: 15px;
    }

    .currentMonth {
        color: #ec3c49;
        font-size: 15px;
        font-variant-caps: small-caps;
    }

    .country {
        display: flex;
        gap: 4px;
        align-items: center;
    }
    #card_special{
        width: 100%;
        height: 180px;
    }
    #card{
        width: 100%;
        height: 180px;
    }
    #card_2{
        height: 460px;
    }
    #card_3{
        height: 460px;
    }
    @media only screen and (min-width: 300px) and (max-width: 767px){
        #card_special{
            width: 100%;
            height: 100%;
        }
        #card_3{
            margin-top: 20px;
            height: 100%;
        }
        #card_2{
            margin-top: 40px;
            height: 100%;
        }
        #card_5{
            margin-top: 60px;
        }
    }
</style>
@endsection
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">{{ Auth::user()->name }}</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">LEGEND'S FOOTBAL LEAGUE</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-1 overflow-hidden">
                                        <p class="text-truncate font-size-14 mb-2">Contact List</p>
                                        <h4 class="mb-0">{{$contact}}</h4>
                                    </div>
                                    <div class="text-primary ms-auto">
                                      <img src="{{url('')}}/assets/images/users/customer-list.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-1 overflow-hidden">
                                        <p class="text-truncate font-size-14 mb-2">Booking List</p>
                                        <h4 class="mb-0">{{$booking}}</h4>
                                    </div>
                                    <div class="text-primary ms-auto">
                                          <img src="{{url('')}}/assets/images/users/pending-invoice.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-1 overflow-hidden">
                                        <p class="text-truncate font-size-14 mb-2">Seo List</p>
                                        <h4 class="mb-0">{{$menu}}</h4>
                                    </div>
                                    <div class="text-primary ms-auto">
                                        <img src="{{url('')}}/assets/images/users/approved-invoice.png">
                                    </div>
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


@section('bottom-mid-scripts')
<script src="{{url('')}}/assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="{{url('')}}/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{url('')}}/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>
<script src="{{url('')}}/assets/libs/select2/js/select2.min.js"></script>
<script src="{{url('')}}/assets/js/pages/ecommerce-add-product.init.js"></script>
<script src="{{url('')}}/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="{{url('')}}/assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
<script src="{{url('')}}/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="{{url('')}}/assets/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>
<script src="{{url('')}}/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
@endsection

@section('bottom-bot-scripts')

<script>
    // $(document).ready(function() {
    //     $('#date-form').submit(function(e) {
    //         e.preventDefault();
    //         $.ajax({
    //             type: 'POST',
    //             url: '{{ route("getDataBetweenDates") }}',
    //             data: $(this).serialize(),
    //             success: function(response) {
    //                 $('#data').html('<table>' + response + '</table>');
    //             }
    //         });
    //     });
    // });

    // $(document).ready(function() {
    //     $('#date-form2').submit(function(e) {
    //         e.preventDefault();
    //         $.ajax({
    //             type: 'POST',
    //             url: '{{ route("getDataBetweenDates2") }}',
    //             data: $(this).serialize(),
    //             success: function(response) {
    //                 $('#data2').html('<table>' + response + '</table>');
    //             }
    //         });
    //     });
    // });

    // $(document).ready(function() {
    //     $('#date-form3').submit(function(e) {
    //         e.preventDefault();
    //         $.ajax({
    //             type: 'POST',
    //             url: '{{ route("getDataBetweenDates3") }}',
    //             data: $(this).serialize(),
    //             success: function(response) {
    //                 $('#data3').html('<table>' + response + '</table>');
    //             }
    //         });
    //     });
    // });

    // $(document).ready(function() {
    //     $('#date-form4').submit(function(e) {
    //         e.preventDefault();
    //         $.ajax({
    //             type: 'POST',
    //             url: '{{ route("getDataBetweenDates4") }}',
    //             data: $(this).serialize(),
    //             success: function(response) {
    //                 $('#data4').html('<table>' + response + '</table>');
    //             }
    //         });
    //     });
    // });

    // $(document).ready(function() {
    //     $('#date-form5').submit(function(e) {
    //         e.preventDefault();
    //         $.ajax({
    //             type: 'POST',
    //             url: '{{ route("getDataBetweenDates5") }}',
    //             data: $(this).serialize(),
    //             success: function(response) {
    //                 $('#data5').html('<table>' + response + '</table>');
    //             }
    //         });
    //     });
    // });
</script>
@endsection