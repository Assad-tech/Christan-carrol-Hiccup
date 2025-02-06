@extends('backend.layouts.master')

@section('page_description')

<meta charset="utf-8" />
<title>Hiccup   | Admin Payment Records</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

@endsection

@section('content')
<div class="container-fluid">
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Payment Record</h4>
                    {{-- @dd($payments) --}}
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Name on Card</th>
                                <th>CC. No.</th>
                                <th>CVV</th>
                                <th>Exp. Date</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @if(count($payments) > 0)
                            @foreach($payments as $row)
                            <tr>
                                {{-- @dd($row) --}}
                                <td>{{ $row->user->full_name }}</td>
                                <td>{{ $row->name_on_card }}</td>
                                <td>{{ $row->credit_card_number }}</td>
                                <td>{{ $row->cvv }}</td>
                                <td>{{ $row->expiration_date }}</td>
                                <td>{{ $row->amount }}</td>
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
