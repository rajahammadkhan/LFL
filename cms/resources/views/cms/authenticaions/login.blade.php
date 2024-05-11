<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Login | Legend's Football League</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Login | Legend's Football League" name="description" />
        <meta content="Huzaifa Dev" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('')}}/assets/images/favicon.png">
        <!-- Bootstrap Css -->
        <link href="{{ url('') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ url('') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ url('') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    </head>
    <body class="auth-body-bg">
        <div>
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4">
                        <div class="authentication-page-content p-4 d-flex align-items-center min-vh-100">
                            <div class="w-100">
                                <div class="row justify-content-center">
                                    <div class="col-lg-9">
                                        <div>
                                            <div class="text-center">
                                                <div>
                                                    <a href="" class="logo"><img src="{{url('')}}/assets/images/rpmhead-black.png" height="55" width="175" alt="logo"></a>
                                                </div>
    
                                                <h4 class="font-size-18 mt-4">Welcome Back !</h4>
                                                <p class="text-muted">Sign in to continue to Legend's Football League</p>
                                            </div>

                                            <div class="p-2 mt-2">
                                                @if(Session::has('error'))
                                                <p class="error text-center mt-2 text-danger">Invalid Login Credentials! Please Try Again</p>
                                                @endif

                                               <form  action="{{ route('login.store') }}" method="POST"  class="text-left">
                                                   @csrf
                    
                                                    <div class="mb-3 auth-form-group-custom mb-4">
                                                        <i class="ri-user-2-line auti-custom-input-icon"></i>
                                                        <label for="email">Email</label>
                                                        <input type="text" name="email" class="form-control" id="email" placeholder="Enter email" required>
                                                    </div>
                            
                                                    <div class="mb-3 auth-form-group-custom mb-4">
                                                        <i class="ri-lock-2-line auti-custom-input-icon"></i>
                                                        <label for="password">Password</label>
                                                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
                                                    </div>
                            
                                                    <div class="mt-4 text-center">
                                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                                    </div>

                                                </form>
                                            </div>

                                            <div class="mt-5 text-center">
                                                <p>Copyright © <script>document.write(new Date().getFullYear())</script> | <a href="{{route('login')}}" >Legend's Football League</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="authentication-bg">
                            <div class="bg-overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- JAVASCRIPT -->
        <script src="{{ url('') }}/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{ url('') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ url('') }}/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ url('') }}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ url('') }}/assets/libs/node-waves/waves.min.js"></script>
        <script src="{{ url('') }}/assets/js/app.js"></script>
    </body>
</html>