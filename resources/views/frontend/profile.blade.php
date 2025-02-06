@extends('frontend.layouts.master')

@section('title', 'Profile')
@section('customCSS')
    <style>
        .profileImage {
            width: 76px;
            height: 76px;
            border-radius: 50%;
        }
    </style>
@endsection
@section('content')
    <!-- Update Profile Form -->
    <div class="form signup">
        <div class="form-content">
            <header>Update Profile</header>
            <div style="text-align: center">
                <img class="profileImage" src="{{ asset('public/profileImages/' . $user->image) }}" alt="">
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
            <div class="row">
            </div>
            <form action="{{ route('user.update-profile') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $user->id ?? '' }}">
                <div class="row">
                    <div class="col-md-6 p-2">
                        <div class="field input-field">
                            <input type="text" name="full_name" placeholder="Full Name" class="input"
                                value="{{ $user->full_name ?? '' }}">
                            @error('full_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 p-2">
                        <div class="field input-field">
                            <input type="email" name="email" placeholder="Email" class="input" readonly
                                value="{{ $user->email ?? '' }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 p-2">
                        <div class="field input-field">
                            <input type="text" name="phone" placeholder="Phone" class="input"
                                value="{{ $user->phone ?? '' }}">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 p-2">
                        <div class="field input-field">
                            <input type="file" name="image" placeholder="Profile Image" class="input"
                                value="{{ $user->image ?? '' }}">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 p-2">
                        <div class="field input-field">
                            <input type="password" name="password" placeholder="Update password" class="password">
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
                            <button>Update Profile</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('customJS')

@endsection
