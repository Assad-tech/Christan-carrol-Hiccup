@extends('backend.layouts.master')

@section('page_description')
    <meta charset="utf-8" />
    <title>Hiccup | Admin Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                {{-- <a href="{{ route('brands') }}"> --}}
                <a href="#">
                    <div class="card">
                        <div class="card-body mb-0">
                            <div class="row">
                                <div class="col-8 align-self-center">
                                    <div class="">
                                        <h4 class="mt-0 header-title">Users</h4>
                                        <h2 class="mt-0 font-weight-bold text-dark">{{ $users->count() }}</h2>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                    <!--end card-->
                </a>
            </div>
            <!--end col-->

            <div class="col-lg-4">
                {{-- <a href="{{ route('models') }}"> --}}
                <a href="#">
                    <div class="card">
                        <div class="card-body mb-0">
                            <div class="row">
                                <div class="col-8 align-self-center">
                                    <div class="">
                                        <h4 class="mt-0 header-title">Payments</h4>
                                        <h2 class="mt-0 font-weight-bold text-dark">{{ $payments->count() }}</h2>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                    <!--end card-->
                </a>
            </div>
            <!--end col-->

            {{-- <div class="col-lg-4">
                <a href="{{ '#' }}">
                <a href="#">
                    <div class="card">
                        <div class="card-body mb-0">
                            <div class="row">
                                <div class="col-8 align-self-center">
                                    <div class="">
                                        <h4 class="mt-0 header-title">Total Clicks</h4>
                                        <h2 class="mt-0 font-weight-bold text-dark">{{ $clicks->count() }}</h2>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                    <!--end card-->
                </a>
            </div> --}}
            <!--end col-->

        </div>
        <!--end row-->
    </div>
    <!-- container -->
@endsection
