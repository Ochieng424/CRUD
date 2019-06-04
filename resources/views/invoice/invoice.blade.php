@extends('layouts.myapp')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Invoice</h2>
            </div>
            <div class="card-body">
                @if(\Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <strong>{{ \Session::get('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <td>Transaction ID</td>
                        <td>Payment Mode</td>
                        <td>Amount</td>
                        <td>Apartment Name</td>
                        <td>Room No.</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($invoices as $inv)
                        <tr>
                            <td>{{ $inv['transaction_id'] }}</td>
                            <td>{{ $inv['payment_mode'] }}</td>
                            <td>{{ $inv['amount'] }}</td>
                            <td>{{ $inv['property_name'] }}</td>
                            <td>{{ $inv['room_no'] }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection