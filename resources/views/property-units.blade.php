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
                        <td><strong>Room Number</strong></td>
                        <td><strong>Unit Type</strong></td>
                        <td><strong>Square Feet</strong></td>
                        <td><strong>Price</strong></td>
                        <td><strong>Availability</strong></td>
                        <td><strong>Edit</strong></td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($units as $unit)
                        <tr>
                            <td>{{ $unit-> room_no }}</td>
                            <td>{{ $unit-> unit_type }}</td>
                            <td>{{ $unit-> square_feet }}</td>
                            <td>{{ $unit-> price }}</td>
                            <td>{{ $unit-> available }}</td>
                            <td>
                                <a href="{{ route('edit-unit', $unit-> id) }}">
                                    <button type="button" class="btn btn-primary btn-sm">Edit Unit</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection