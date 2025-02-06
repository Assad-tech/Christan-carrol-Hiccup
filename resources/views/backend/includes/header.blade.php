<!-- Top Bar Start -->
<div class="topbar">
    <!-- Navbar -->
    <nav class="navbar-custom">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="{{ route('admin.dashboard') }}" class="logo">
                <!-- <span>
                            <img src="{{ asset('public/backend/images/logo-black.png') }}" alt="logo-small" class="logo-sm">
                        </span> -->
                <span>
                    {{-- <img src="{{ asset('public/backend/images/logo-black.png') }}" alt="logo-large" class="logo-lg"> --}}
                    <h3>Hiccup</h3>
                </span>
            </a>
        </div>

        <ul class="list-unstyled topbar-nav float-right mb-0">

            <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                    href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{ asset('public/backend/images/male.png') }}" alt="profile-user"
                        class="rounded-circle" />
                    <span class="ml-1 nav-user-name hidden-sm"> <i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route('admin.profile') }}"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                    <a class="dropdown-item" href="{{ route('admin.logout') }}"><i
                            class="dripicons-exit text-muted mr-2"></i> Logout</a>
                </div>
            </li>
            <li class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle nav-link" id="mobileToggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li>
        </ul>

    </nav>
    <!-- end navbar-->
</div>
<!-- Top Bar End -->
<div class="page-wrapper-img">
    <div class="page-wrapper-img-inner">
        <div class="sidebar-user media">
            <img src="{{ asset('public/backend/images/male.png') }}" alt="user"
                class="rounded-circle img-thumbnail mb-1">
            <span class="online-icon"><i class="mdi mdi-record text-success"></i></span>
            <div class="media-body">
                <h5 class="text-light">{{ Auth::user()->full_name }}</h5>
                <ul class="list-unstyled list-inline mb-0 mt-2">

                    <li class="list-inline-item">
                        <a href="{{ route('admin.logout') }}" class=""><i
                                class="mdi mdi-power text-danger"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->
    </div><!--end page-wrapper-img-inner-->
</div><!--end page-wrapper-img-->
