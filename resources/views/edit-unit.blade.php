@extends('layouts.myapp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><strong>Edit Unit</strong></div>

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
                        <form method="post" action="{{ action('UnitController@edit', $unit->id) }}">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <input type="hidden" class="form-control" name="emp_id" value="{{ $unit-> employee_id }}">
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" class="form-control" name="price" id="price"
                                       placeholder="Price" value="{{ $unit-> price }}">
                            </div>
                            <div class="form-group">
                                <label for="available">Availability</label>
                                <select class="form-control" id="available" name="available">
                                    @if($unit-> available == 'available')
                                        <option selected value="available">Available</option>
                                        <option value="occupied">Occupied</option>
                                    @elseif($unit-> available == 'occupied')
                                        <option selected value="occupied">Occupied</option>
                                        <option value="available">Available</option>
                                    @endif
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" style="width: 100%;">Save
                                Unit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
