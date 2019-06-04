@extends('layouts.myapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Complete Payment</strong></div>

                <div class="card-body">
                    @if(\Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <strong>{{ \Session::get('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if($errors->any())
                    <div>
                        @foreach($errors->all() as $error)
                        <div class="alert alert-warning alert-dismissible fade show">
                            <strong>{{ $error }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endforeach
                    </div>
                    @endif
                        <div class="alert alert-info text-center">
                            Make a payment of <strong>Ksh. {{ $UnitDetail->first()-> price }}</strong> to Paybill Number: 1234 and input the Transaction Number
                                in the form below:
                        </div>
                    <form method="post" action="{{ action('MpesaPaymentController@store') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="hidden" class="form-control" value="{{ Auth::user()->id }}" name="user_id" id="user_id">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" value="{{ $UnitDetail->first()-> id }}" name="unit_id" id="unit_id">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" value="Mpesa" name="payment_mode" id="payment_mode">
                        </div>
                        <div class="form-group">
                            <label for="transaction_id">Transaction ID</label>
                            <input type="text" class="form-control" name="mpesa_transaction_id" id="mpesa_transaction_id"
                                   placeholder="Transaction ID">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" value="{{ $UnitDetail->first()-> price }}" name="amount" id="amount">
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Complete Booking
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
