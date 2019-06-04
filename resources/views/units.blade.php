@extends('layouts.myapp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><strong>Add Units</strong></div>

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
                        <form method="post" action="{{ action('UnitController@store') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="property">Select Property</label>
                                <select class="form-control" id="property" name="property">
                                    <option disabled selected>--Select--</option>
                                    @foreach($employees as $emp)
                                        <option value="{{ $emp-> id }}">{{ $emp-> first_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="available">Unit Type</label>
                                <select class="form-control" id="unit_type" name="unit_type">
                                    <option disabled selected>--Select--</option>
                                    <option value="Single Room">Single Room</option>
                                    <option value="Bedsitter">BedSitter</option>
                                    <option value="1 Bedroom">1 Bedroom</option>
                                    <option value="2 Bedroom">2 Bedroom</option>
                                    <option value="3 Bedroom">3 Bedroom</option>
                                    <option value="4 Bedroom">4 Bedroom</option>
                                    <option value="5 Bedroom">5 Bedroom</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="room_no">Room Number</label>
                                <input type="text" class="form-control" name="room_no" id="room_no"
                                       placeholder="Room Number">
                            </div>
                            <div class="form-group">
                                <label for="square_feet">Square Feet</label>
                                <input type="number" class="form-control" name="square_feet" id="square_feet"
                                       placeholder="Square Feet">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" class="form-control" name="price" id="price"
                                       placeholder="Price">
                            </div>
                            <div class="form-group">
                                <label for="available">Availability</label>
                                <select class="form-control" id="available" name="available">
                                    <option disabled selected>--Select--</option>
                                    <option value="available">Available</option>
                                    <option value="occupied">Occupied</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" style="width: 100%;">Add
                                Unit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
