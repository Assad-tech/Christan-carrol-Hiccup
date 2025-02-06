<!DOCTYPE html>
<html lang="en">

<head>
    @yield('page_description')

    @include('backend.includes.style')

    @yield('page_style')
</head>

<body>

    @include('backend.includes.header')
    <div class="page-wrapper">
        @include('backend.includes.navbar')
        <!-- Page Content-->
        <div class="page-content">
            @yield('content')

            @include('backend.includes.footer')
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    @include('backend.includes.script')

    @yield('page_script')

    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            <script>
                toastr.error("{{ e($error) }}");
            </script>
        @endforeach
    @endif

</body>

</html>
