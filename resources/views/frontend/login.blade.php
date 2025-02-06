<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Responsive Login and Signup Form </title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('public/loginAssets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/customBootstrap.css') }}">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <section class="container forms">

        <!-- Login Form -->
        <div class="form login">
            <div class="form-content">
                <header>Login</header>
                <div class="row">
                    <div style="margin: auto" class="col-md-7 p-2">
                        @if (session('success'))
                            <div class="text-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="text-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                </div>
                <form action="{{ route('login-process') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div style="margin: auto" class="col-md-7 p-2">
                            <div class="field input-field">
                                <input type="email" name="email" placeholder="Email" class="input">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div style="margin: auto" class="col-md-7 p-2">
                            <div class="field input-field">
                                <input type="password" name="password" placeholder="Password" class="password">
                                <i class='bx bx-hide eye-icon'></i>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-link">
                        <a href="#" class="forgot-pass">Forgot password?</a>
                    </div>
                    <div class="row">
                        <div style="margin: auto" class="col-md-7 p-2">
                            <div class="field button-field">
                                <button>Login</button>
                            </div>
                        </div>
                    </div>

                </form>

                <div class="form-link">
                    <span>Don't have an account? <a href="{{ route('register') }}"
                            class="link signup-link">Signup</a></span>
                </div>
            </div>


        </div>

    </section>

    <!-- JavaScript -->
    <script src="{{ asset('public/loginAssets/script.js') }}"></script>
</body>

</html>
