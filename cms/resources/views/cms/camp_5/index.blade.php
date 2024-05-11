@extends('cms.layouts.masterpage')
@section('title', 'Fifth Campaign')
@section('top-styles')
<link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/css/forms/switches.css">
<link href="{{ url('') }}/assets/css/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="{{ url('') }}/assets/css/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

@endsection
@section('header')
    @parent
@endsection
@section('leftside')
    @parent
@endsection
@section('content')
<div class="page-content mt-0">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row mt-0">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">First Campaign</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">First Campaign</li>
                        </ol>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="
                            border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead class="datatable">
                                <tr>
                                    <th class="no-sort text-center" width="3%">S.No</th>
                                    <th class="no-sort text-center" >Name</th>
                                    <th class="no-sort text-center">Phone</th>
                                    <th class="no-sort text-center">Email</th>
                                    <th class="no-sort text-center">Country</th>
                                    <th class="no-sort text-center">Emirate</th>
                                    <th class="no-sort text-center">Qty</th>
                                    <th class="no-sort text-center" width="5%">Amount</th>
                                    <th class="no-sort text-center" width="5%">Coupon Id</th>
                                    <th class="no-sort text-center" width="7%">Date & Time</th>
                                    <th class="no-sort text-center" width="5%">Payment Status</th>
                                   
                                    <th class="no-sort text-center" width="5%">WhatsApp Msg Sent</th>
                                    <th class="no-sort text-center" width="4%">Actions</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('bottom-mid-scripts')
<!-- Required datatable js -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/b-print-2.2.3/r-2.3.0/sc-2.0.7/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/b-print-2.2.3/r-2.3.0/sc-2.0.7/datatables.min.js"></script>

<script src="{{ url('') }}/assets/js/datatables/axios.min.js"></script>
@endsection
@section('bottom-bot-scripts')
@include('cms.camp_5.includes.camp_5-js')
@endsection