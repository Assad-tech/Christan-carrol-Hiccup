<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiccup | @yield('title') </title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('public/loginAssets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/customBootstrap.css') }}">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    @yield('customCSS')
</head>

<body>
    <section class="container ">

        {{-- content here --}}

        @yield('content')


        </div>
    </section>

    <!-- JavaScript -->
    <script src="{{ asset('public/loginAssets/script.js') }}"></script>
    @yield('customJS')
</body>

</html>
