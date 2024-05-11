<header id="page-topbar">
    <div class="navbar-header">

                      <div class="d-flex">
        <!-- LOGO -->
        <div class="navbar-brand-box" style="text-align: center;">
            <a href="{{route('dashboard')}}" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="{{ url('') }}/assets/images/logo-sm-dark.png" alt="logo-sm-dark" height="22">
                </span>
                <span class="logo-lg">
                    <img src="{{ url('') }}/assets/images/logo-dark.png" alt="logo-dark" height="20">
                </span>
            </a>

            <a href="{{route('dashboard')}}" class="logo logo-light">
                <span class="logo-sm">
                    <img src="{{url('')}}/assets/images/rpm-logo.png" alt="logo-sm-light" height="17">
                </span>
                <span class="logo-lg">
                    <img src="{{url('')}}/assets/images/rpm-logo.png" alt="logo-light">
                </span>
            </a>
        </div>

        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect"
            id="vertical-menu-btn">
            <i class="ri-menu-2-line align-middle"></i>
        </button>
        <!-- App Search-->
    </div>
      <div class="d-flex">
            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="ri-fullscreen-line"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ url('') }}/assets/images/users/lfl_logo.png"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1">{{ Auth::user()->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="{{ route('logout') }}"><i
                        class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="ri-settings-2-line"></i>
                </button>
            </div>

        </div>
    </div>
</header>   


