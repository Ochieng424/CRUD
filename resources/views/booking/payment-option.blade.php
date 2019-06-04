@extends('layouts.myapp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Payment Option</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    {{--<div class="card-header">--}}
                                        {{--<h2 class="card-title">Mpesa</h2>--}}
                                    {{--</div>--}}
                                    <div class="card-body">
                                        <a href="{{ route('mpesa-payment', $unit) }}" class="btn btn-primary">
                                            <i class="fa fa-mobile" style="font-size: 17px;"></i> Mpesa
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    {{--<div class="card-header">--}}
                                        {{--<h2 class="card-title">Mpesa</h2>--}}
                                    {{--</div>--}}
                                    <div class="card-body">
                                        <div class="col-sm-10 offset-sm-1">
                                            <a href="" class="btn btn-primary">
                                                <i class="fa fa-paypal" style="font-size: 17px;"></i> Paypal
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection