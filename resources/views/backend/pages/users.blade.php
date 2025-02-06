@extends('backend.layouts.master')

@section('page_description')
    <meta charset="utf-8" />
    <title>Hiccup | Admin View Users</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Users Record</h4>
                        {{-- @dd($users) --}}
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                @if (count($users) > 0)
                                    @foreach ($users as $row)
                                        <tr>
                                            <td width="7%">
                                                <img src="{{ asset('public/profileImages/' . $row->image) }}" alt=""
                                                    class="ml-3 rounded-circle w-50">
                                            </td>
                                            <td>{{ $row->full_name }}</td>
                                            <td>{{ $row->email }}</td>
                                            <td>{{ $row->phone }}</td>
                                            <td></td>
                                        </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="5" class="text-center">No Record Found</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div><!-- container -->


@endsection
