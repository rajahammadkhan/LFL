@extends('cms.layouts.masterpage')
@section('title', 'Approved Camp Download')
@section('top-styles')
<<!-- link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/css/forms/switches.css">
<link href="{{ url('') }}/assets/css/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="{{ url('') }}/assets/css/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />


<link href="{{ url('') }}/assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('') }}/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="{{ url('') }}/assets/css/dashboard/dash_2.css" rel="stylesheet" type="text/css" />

    <link href="{{ url('') }}/assets/css/components/tabs-accordian/custom-tabs.css" rel="stylesheet" type="text/css" />

    <link href="{{ url('') }}/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/plugins/select2/select2.min.css"> -->
<link href="{{ url('') }}/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
                 <h4 class="mb-sm-0">Approved Campaign Summary</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Approved Campaign Summary</li>
                        </ol>
                        </div>
                </div>
            </div>
        </div>
         <div class="col-lg-12">
         <div class="card">
            <div class="card-body">
                <div id="progrss-wizard" class="twitter-bs-wizard">
                    <div class="col-md-12">
                        <div >
                            <div class="widget-heading">
                                <h5 class="">Approved Campaign Summary</h5>
                            </div>

                            <div class="widget-content widget-content-area border-tab" style="border: none;">
                                <div class="tab-content mb-4" id="border-tabsContent" style="border: none;">
                                    <div class="tab-pane fade show active" id="border-home" role="tabpanel" aria-labelledby="border-home-tab" style="padding: 0px;">
                                        <form id="date-form-download">
                                            @csrf
                                            <div class="widget-content widget-content-area" style="border: none;">
                                                <div class="row">
                                                    <div class="col-md-6 mb-2">
                                                        <label for="select_status">Select Status <span class="text-danger"> * </span></label>
                                                        <select class="form-control select2" id="select_status" name="status" required>
                                                            <option selected disabled>Select Status</option>      
                                                            <option value="All">All</option> 
                                                            <option value="Approved">Approved</option> 
                                                            <option value="Pending">Pending</option> 
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6 mb-2">
                                                        <label for="select_used">Select Used/Unused <span class="text-danger"> * </span></label>
                                                        <select class="form-control select2" id="select_used" name="used" required>
                                                            <option selected disabled>Select Used/Unused</option>      
                                                            <option value="All">All</option> 
                                                            <option value="Used">Used</option> 
                                                            <option value="Un Used">Un Used</option> 
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <div class="row">
                                                            <div class="form-group col-md-12">
                                                                <label for="start-date">Start Date <span class="text-danger"> * </span></label>
                                                                <input type="date" id="start-date" name="start_date" class="form-control" placeholder="Start Date" required value="{{ date('Y-m-d', strtotime('-1 day', strtotime($startDate))) }}" min="{{ date('Y-m-d', strtotime('-1 day', strtotime($startDate))) }}" max="{{ $lastDate }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <div class="row">
                                                            <div class="form-group col-md-12">
                                                                <label for="end-date">End Date <span class="text-danger"> * </span></label>
                                                                <input type="date" id="end-date" name="end_date" class="form-control" placeholder="End Date" required value="{{ date('Y-m-d', strtotime('+1 day', strtotime($lastDate))) }}" min="{{ $startDate }}" max="{{ date('Y-m-d', strtotime('+1 day', strtotime($lastDate))) }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12" style="justify-content: right;display: flex;">
                                                        <button type="submit" class="btn btn-danger mb-2 mr-4 ml-3 mt-2"> Fetch Data</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <p>Total Data Count: <span id="data-count">0</span></p>

                                        <table id="data-table" class="table table-bordered dt-responsive nowrap" style="
                                            border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead class="datatable">
                                                <tr>
                                                    <th class="no-sort text-center" width="5%">S.No</th>
                                                    <th class="no-sort text-center">Name</th>
                                                    <th class="no-sort text-center">Phone</th>
                                                    <th class="no-sort text-center">Email</th>
                                                    <th class="no-sort text-center">Country</th>
                                                    <th class="no-sort text-center">UAE State</th>
                                                    <th class="no-sort text-center" width="5%">QTY</th>
                                                    <th class="no-sort text-center" width="5%">Amount</th>
                                                    <th class="no-sort text-center" width="5%">Payment Status</th>
                                                    <th class="no-sort text-center">Date</th>
                                                    <th class="no-sort text-center" width="5%">Used Camp</th>
                                                </tr>
                                            </thead>
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
    </div>
    <!--  END CONTENT AREA  -->
    <!--  END CONTENT AREA  -->
@endsection
@section('bottom-mid-scripts')
<!-- Required datatable js -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/b-print-2.2.3/r-2.3.0/sc-2.0.7/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/b-print-2.2.3/r-2.3.0/sc-2.0.7/datatables.min.js"></script>

<script src="{{ url('') }}/assets/js/datatables/axios.min.js"></script>


<script>
$(document).ready(function() {
    var dataTable = $('#data-table').DataTable({
        processing: true,
        responsive: true,
        lengthMenu: [
            [30, 6000, 8000, -1],
            [30, 6000, 8000, 'All'],
        ],
        
    });

    $('#date-form-download').submit(function(e) {
        e.preventDefault();

        var status = $('#select_status').val();
        var campUsed = $('#select_used').val();
        var startDate = $('#start-date').val();
        var endDate = $('#end-date').val();

        // Display an error message or perform any desired action
        if (status === null) {
          alert('Please select a status');
          return;
        }

        if (campUsed === null) {
          alert('Please select a Used/Unused');
          return;
        }

        $.ajax({
            url: '/getDataDownloadBetweenDates',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                status: status,
                used: campUsed,
                start_date: startDate,
                end_date: endDate,
            },
            success: function(response) {
                var transactions = response.transactions;
                var count = response.count;

                $('#data-count').text(count);

                // Destroy the existing DataTable instance
                dataTable.clear().destroy();

                // Reinitialize the DataTable with the updated data
                dataTable = $('#data-table').DataTable({
                    processing: true,
                    responsive: true,
                    fixedHeader: true,
                    deferLoading: 57,
                    lengthMenu: [
                        [30, 6000, 8000, -1],
                        [30, 6000, 8000, 'All'],
                    ],
                    dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    buttons: [
                        'excel', 'pdf', 'print'
                    ],
                });

                // Add the updated data to the DataTable
                $.each(transactions, function(index, transaction) {
                    dataTable.row.add([
                        transaction.id,
                        transaction.name,
                        transaction.phone,
                        transaction.email,
                        transaction.country,
                        transaction.uae_state,
                        transaction.qty,
                        // '<span style="text-align: center; display: block;">'+transaction.camp_1 +'<br>'+ transaction.qty+'<span>',
                        // '<span style="text-align: center; display: block;">'+transaction.camp_2 +'<br>'+ transaction.qty2+'<span>',
                        transaction.p_amt,
                        transaction.p_stat,
                        transaction.date,
                        transaction.used_camp,
                    ]).draw();
                });
            },
            error: function(xhr, status, error) {
                console.log(error); // Log the error for debugging purposes
            }
        });
    });
});
</script>
<script src="{{url('')}}/assets/libs/select2/js/select2.min.js"></script>
<script src="{{url('')}}/assets/js/pages/ecommerce-add-product.init.js"></script>
<script src="{{url('')}}/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="{{url('')}}/assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
<script src="{{url('')}}/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="{{url('')}}/assets/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>
<script src="{{url('')}}/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
@endsection
@section('bottom-bot-scripts')
@endsection