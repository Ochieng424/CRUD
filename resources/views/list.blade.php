@extends('layouts.myapp')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Units</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach($units as $unit)
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Room No: {{ $unit-> room_no }}</h5>
                                <p class="card-text" style="margin: 5px 0;"><strong>Type:</strong> {{ $unit-> unit_type }}</p>
                                <p class="card-text" style="margin: 5px 0;"><strong>Price:</strong> ksh {{ $unit-> price }}</p>
                                <p class="card-text" style="margin: 5px 0;"><strong>Square Feet:</strong> {{ $unit-> square_feet }}</p>
                                <a href="#" class="btn btn-primary">
                                    <i class="fa fa-home" style="font-size: 17px;"></i>
                                    Book Unit
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>

    </script>
@endsection