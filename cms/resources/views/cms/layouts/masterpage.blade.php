<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    @php
        $abc= "LEGEND'S FOOTBAL LEAGUE"
    @endphp
    <title>@yield('title') | {{$abc ?? null}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="@yield('title') | {{$abc ?? null}}" name="description" />
    <meta content="Huzaifa Dev" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('')}}/assets/images/favicon_lfl.png">



    <!-- jquery.vectormap css -->
    <link
        href="{{ url('') }}/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css"
        rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="{{ url('') }}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link
        href="{{ url('') }}/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />

    @yield('top-styles')
    <!-- Bootstrap Css -->
    <link href="{{ url('') }}/assets/css/bootstrap.min.css" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url('') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url('') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    
</head>

<body data-sidebar="dark">
    <div id="layout-wrapper">
        @section('header')
        @include('cms.layouts.header')
        @show

        

        @section('leftside')
        @include('cms.layouts.leftside')
        @show

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            @yield('content')
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

            @include('cms.layouts.footer')
            @show
        </div>

    </div>

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center px-3 py-4">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="{{ url('') }}/assets/images/layouts/layout-1.jpg"
                        class="img-fluid img-thumbnail" alt="layout-1">
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="{{ url('') }}/assets/images/layouts/layout-2.jpg"
                        class="img-fluid img-thumbnail" alt="layout-2">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch"
                        data-bsStyle="{{ url('') }}/assets/css/bootstrap-dark.min.css"
                        data-appStyle="{{ url('') }}/assets/css/app-dark.min.css">
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>


            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{ url('') }}/assets/js/datatables/axios.min.js"></script>

    <!-- JAVASCRIPT -->
    <script src="{{ url('') }}/assets/libs/jquery/jquery.min.js"></script>
    <script src="{{ url('') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('') }}/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ url('') }}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ url('') }}/assets/libs/node-waves/waves.min.js"></script>

    @yield('bottom-mid-scripts')

    <!-- apexcharts -->
    <!-- <script src="/assets/libs/apexcharts/apexcharts.min.js"></script> -->

    <!-- jquery.vectormap map -->
    <script
        src="{{ url('') }}/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js">
    </script>
    <script
        src="{{ url('') }}/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js">
    </script>

    <!-- Responsive examples -->
    <script src="{{ url('') }}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js">
    </script>
    <script
        src="{{ url('') }}/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js">
    </script>

    <!-- App js -->
    <script src="{{ url('') }}/assets/js/app.js"></script>

    <script src="{{ url('') }}/assets/js/sweetalert2.min.js"></script>
    @yield('bottom-bot-scripts')
</body>

</html>

