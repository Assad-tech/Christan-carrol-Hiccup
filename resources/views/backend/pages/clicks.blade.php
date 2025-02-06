@extends('backend.layouts.master')

@section('page_description')

<meta charset="utf-8" />
<title>Hiccup | Admin Count Clicks</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

@endsection

@section('content')
<div class="container-fluid">
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Count Clicks</h4>
                    {{-- @dd($clicks) --}}
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Count</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @if(count($clicks) > 0)
                            @foreach($clicks as $row)
                            {{-- @dd($row) --}}
                            <tr>
                                <td>{{ $row->user->full_name }}</td>
                                <td>{{ $row->count }}</td>
                                <td></td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div><!-- container -->


@endsection
