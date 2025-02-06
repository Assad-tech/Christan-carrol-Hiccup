<div class="page-wrapper-inner">

    <!-- Navbar Custom Menu -->
    <div class="navbar-custom-menu">

        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu list-unstyled">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="mdi mdi-monitor"></i>
                            Dashboard
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{route('admin.users')}}">
                            <i class="mdi mdi-monitor"></i>
                            Users
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{route('admin.payments')}}">
                            <i class="mdi mdi-monitor"></i>
                            Payment Records
                        </a>
                    </li>

                    {{-- <li>
                        <a href="{{ route('admin.clicks') }}">
                            <i class="mdi mdi-monitor"></i>
                            User Clicks
                        </a>
                    </li> --}}
                </ul>
                <!-- End navigation menu -->
            </div> <!-- end navigation -->
        </div> <!-- end container-fluid -->
    </div>
    <!-- end left-sidenav-->
</div>
<!--end page-wrapper-inner -->
