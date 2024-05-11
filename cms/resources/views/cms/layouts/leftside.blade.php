<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title {{ (request()->segment(1) == 'dashboard' ) ? 'active' : '' }}">Menu</li>
                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                                {{-- <li>
                    <a href="{{ route('ticket') }}">
                         <i class="ri-profile-line"></i>
                        <span>Tickets</span>
                   </a>
           </li> --}}
                 <li>
                         <a href="javascript: void(0);" class="has-arrow waves-effect">
                              <i class="ri-profile-line"></i>
                            <span>Booking List</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li>  
                                <a href="{{ route('camp_1') }}" class=" waves-effect">
                                <span>Booking List</span>
                                </a>
                            </li>
                        </ul>
                </li>
                 {{-- <li>
                         <a href="javascript: void(0);" class="has-arrow waves-effect">
                              <i class="ri-table-2"></i>
                            <span>Approved List</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li>  
                                <a href="{{route('approvedcamps')}}" class=" waves-effect">
                                <span>Approved List</span>
                                </a>
                            </li>
                        </ul>
                </li> --}}
                <li>
                         <a href="{{ route('contact') }}">
                              <i class="ri-globe-line"></i>
                             <span>Contact List</span>
                        </a>
                </li>

                <li>
                         <a href="{{ route('seo') }}">
                              <i class="ri-table-2"></i>
                            <span>SEO</span>
                        </a>
                </li>
                
                <li>
                         <a href="{{ route('settings') }}">
                              <i class="ri-bar-chart-line"></i>
                             <span>Setting Website</span>
                        </a>
                </li>

              </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>



