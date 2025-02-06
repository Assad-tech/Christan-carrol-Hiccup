<!doctype html>
<html>

<head>
    <title>Hiccup</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <link rel="stylesheet" href="{{ asset('public/assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/assets/css/video.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/assets/css/jquery.fancybox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        .profileImage {
            width: 65px !important;
            height: 60px;
            border-radius: 50%;
        }
    </style>

</head>

<body>


    <header>
        <div class="mobile-menu">
            <div class="circle" id="navbar"><i class="fa fa-bars" aria-hidden="true"></i></div>

            <div class="nveMenu text-left">
                <div class="mobile-cross close-btn-nav" id="navbar"><i class="fas fa-times" aria-hidden="true"></i>
                </div>
                <div>
                    <!-- <a href="index.php"><img src="images\logo.png" class="img-fluid"></a> -->
                </div>
                <ul class="navlinks p-0 mt-4">
                    @if (Auth::user())
                        <li><a href="{{ route('user.profile') }}">Profile</a></li>
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                    @endif
                    @if (Auth::user())
                        <li><a href="{{ route('user.logout') }}">Logout</a></li>
                    @else
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
                </ul>
            </div>
            <div class="overlay"></div>
        </div>


    </header>

    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                @if (Auth::user())
                    <div class="col-auto">
                        <img class="profileImage rounded-circle"
                            src="{{ asset('public/profileImages/' . Auth::user()->image) }}" alt="Profile Image"
                            style="object-fit: cover;">
                    </div>
                    <div class="col-auto">
                        <a href="{{ route('user.profile') }}" class="btn-top text-center">Profile</a>
                    </div>
                    <div class="col-auto">
                        <a href="{{ route('user.logout') }}" class="btn-top text-center">Logout</a>
                    </div>
                @else
                    <div class="col-auto">
                        <a href="{{ route('login') }}" class="btn-top text-center">Login</a>
                    </div>
                @endif
            </div>

            <div class="row">
                <div class="col-md-5 col-sm-12" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
                    <div class="heropart1">
                        <h1>Keep Touching <br><span style="color: #ffcc00;"> The Baloon <br> Dog</span></h1>
                        <p>Tap this Balloon Dog, it will explode itself into a mesmerizing colors of rainbow. Watch as
                            the magic unfolds with each touch!</p>
                        <div class="search-box">
                            <input type="search" placeholder="Search...">
                            <span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                        </div>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                            <a href="#"><i class="fab fa-x-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <!-- <div class="dog-random">
                <img src="assets/images/dogrgb.png" alt="">
            </div> -->
                    <div class="dog-random image-container" data-aos="fade-up" data-aos-easing="linear"
                        data-aos-duration="1500">
                        <img id="{{ Auth::check() ? 'balloonDog' : '' }}"
                            src="{{ asset('public/assets/images/dogrgb.png') }}" alt="Balloon Dog">
                    </div>
                </div>
                <div class="col-md-5 col-sm-12" data-aos="fade-right" data-aos-easing="linear"
                    data-aos-duration="1500">
                    <div class="heropart2">
                        <img src="assets/images/Layer_1.png" alt="">
                        <h3>Prizes Box | Gifts | Fun</h3>
                        <p>The more you touch, the bigger the reward will Get ready for a surprise!</p>
                        <!--<button>More info</button>-->

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="footer-content">
                        <h2>Hiccup</h2>
                        <p>Where Creativity Floats! A playful space featuring a mesmerizing rainbow balloon dog.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-dashed"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="footmenu">
                        <P>© Hiccup 2025. All Rights Reserved.</P>
                    </div>
                </div>

            </div>
        </div>
        </div>


        <!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <div class="footmenu">
                <ul>
                    <li>© Hiccup 2025. All Rights Reserved.</li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="social-icon">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <a href="#"><i class="fab fa-x-twitter"></i></a>
            </div>
        </div>
    </div>
</div> -->
    </section>



    <!-- rambow -->

    <script>
        // Rainbow colors using CSS filters
        const filters = [
            "invert(22%) sepia(100%) saturate(500%) hue-rotate(0deg)", // Red
            "invert(48%) sepia(70%) saturate(300%) hue-rotate(40deg)", // Orange
            "invert(70%) sepia(30%) saturate(250%) hue-rotate(80deg)", // Yellow
            "invert(40%) sepia(90%) saturate(400%) hue-rotate(160deg)", // Green
            "invert(30%) sepia(90%) saturate(300%) hue-rotate(240deg)", // Blue
            "invert(50%) sepia(80%) saturate(350%) hue-rotate(300deg)" // Violet
        ];

        let index = 0; // Track current color index
        const img = document.getElementById("balloonDog");

        img.addEventListener("click", function() {
            this.style.filter = filters[index]; // Apply next color
            index = (index + 1) % filters.length; // Loop back to start
        });
    </script>




    <script src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/aos.js') }}"></script>
    <script src="{{ asset('public/assets/js/anime.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/font.js') }}"></script>
    <script src="{{ asset('public/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/video.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/custom.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

</body>

</html>
