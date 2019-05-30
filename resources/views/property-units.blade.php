@extends('layouts.myapp')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Units</h2>
                <div class="card-tools">
                    <button type="button" class="btn btn-primary">
                        Back
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <td>Unit ID</td>
                        <td>Room Number</td>
                        <td>Availability</td>
                        <td>Unit Type</td>
                        <td>Square Feet</td>
                        <td>View Units</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($units as $unit)
                        <tr>
                            <td>{{ $unit-> id }}</td>
                            <td>{{ $unit-> room_no }}</td>
                            <td>{{ $unit-> available }}</td>
                            <td>{{ $unit-> unit_type }}</td>
                            <td>{{ $unit-> square_feet }}</td>
                            <td>{{ $unit-> price }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection