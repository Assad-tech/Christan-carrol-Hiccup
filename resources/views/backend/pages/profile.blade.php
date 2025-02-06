@extends('backend.layouts.master')

@section('page_description')
    <meta charset="utf-8" />
    <title>Hiccup | Admin Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Admin Profile</h4>
                        <!-- Update Profile Form -->
                        <div class="form signup container">
                            <div class="form-content bg-light p-4 rounded">
                                <header class="text-center mb-4 h4">Update Profile</header>
                                <div class="row">
                                    <div class="col-md-7 mx-auto mb-3">
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
                                <form action="{{ route('admin.update-profile') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $user->id ?? '' }}">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label for="full_name">Full Name</label>
                                                <input type="text" id="full_name" name="full_name" class="form-control"
                                                    placeholder="Full Name" value="{{ $user->full_name ?? '' }}">
                                                @error('full_name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" id="email" name="email" class="form-control"
                                                    placeholder="Email" readonly value="{{ $user->email ?? '' }}">
                                                @error('email')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input type="text" id="phone" name="phone" class="form-control"
                                                    placeholder="Phone" value="{{ $user->phone ?? '' }}">
                                                @error('phone')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label for="password">Update Password</label>
                                                <input type="password" id="password" name="password" class="form-control"
                                                    placeholder="Update Password">
                                                @error('password')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label for="password_confirmation">Confirm Password</label>
                                                <input type="password" id="password_confirmation"
                                                    name="password_confirmation" class="form-control"
                                                    placeholder="Confirm Password">
                                                @error('password_confirmation')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8 mx-auto">
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Update Profile</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div><!-- container -->
@endsection
