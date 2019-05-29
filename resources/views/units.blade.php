@extends('layouts.myapp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><strong>Add Units</strong></div>

                    <div class="card-body">
                        <form method="post">
                            <div class="form-group">
                                <label for="property">Select Property</label>
                                <select class="form-control" id="property">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="room_no">Room Number</label>
                                <input type="text" class="form-control" id="room_no" placeholder="Room Number">
                            </div>
                            <div class="form-group">
                                <label for="room_no">Square Feet</label>
                                <input type="number" class="form-control" id="square_feet" placeholder="Square Feet">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" rows="3"></textarea>
                            </div>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="available" id="available" value="true">
                                <label class="form-check-label" for="available">
                                    Available
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="available" id="available" value="false">
                                <label class="form-check-label" for="available">
                                    Occupied
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 20px;">Add Unit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
