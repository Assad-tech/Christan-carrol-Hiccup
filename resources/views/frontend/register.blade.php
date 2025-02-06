<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiccup register Form </title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('public/loginAssets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/customBootstrap.css') }}">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <section class="container ">

        <!-- Signup Form -->

        <div class="form signup">
            <div class="form-content">
                <header>Signup</header>
                <div class="row">
                    <div style="margin: auto" class="col-md-7 p-2">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                </div>
                <form action="{{ route('register-process') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 p-2">
                            <div class="field input-field">
                                <input type="text" name="full_name" placeholder="Full Name" class="input">
                                @error('full_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 p-2">
                            <div class="field input-field">
                                <input type="email" name="email" placeholder="Email" class="input">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 p-2">
                            <div class="field input-field">
                                <input type="text" name="phone" placeholder="Phone" class="input">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 p-2">
                            <div class="field input-field">
                                <input type="text" name="name_on_card" placeholder="Name on Credit Card"
                                    class="input">
                                @error('name_on_card')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 p-2">
                            <div class="field input-field">
                                <input type="text" name="credit_card_number" placeholder="Credit Card Number"
                                    class="input">
                                @error('credit_card_number')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 p-2">
                            <div class="field input-field">
                                <input type="date" name="expiration_date" placeholder="Expiration Date"
                                    class="input">
                                @error('expiration_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 p-2">
                            <div class="field input-field">
                                <input type="text" name="cvv" placeholder="CVV" class="input">
                                @error('cvv')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 p-2">
                            <div class="field input-field">
                                <input type="text" name="amount" placeholder="Amount" class="input">
                                @error('amount')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 p-2">
                            <div class="field input-field">
                                <input type="password" name="password" placeholder="Create password" class="password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 p-2">
                            <div class="field input-field">
                                <input type="password" name="password_confirmation" placeholder="Confirm password"
                                    class="password">
                                <i class='bx bx-hide eye-icon'></i>
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-8" style="margin: auto">
                            <div class="field button-field">
                                <button>Signup</button>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="form-link">
                    <span>Already have an account? <a href="{{ route('login') }}"
                            class="link login-link">Login</a></span>
                </div>
            </div>
        </div>


        </div>
    </section>

    <!-- JavaScript -->
    <script src="{{ asset('public/loginAssets/script.js') }}"></script>
</body>

</html>
