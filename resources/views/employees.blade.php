@extends('layouts.myapp')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Employees</h2>
                <div class="card-tools">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createEmp">Add
                        Employee
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <td>Employee ID</td>
                        <td>Employee Name</td>
                        <td>Designtion</td>
                        <td>Hire Date</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($employees as $emp)
                        <tr>
                            <td>{{ $emp-> id }}</td>
                            <td>{{ $emp-> first_name }} {{ $emp-> middle_name }} {{ $emp-> last_name }}</td>
                            <td>{{ $emp-> designation }}</td>
                            <td>{{ $emp-> doj }}</td>
                            <td>Edit/Delete</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="modal fade" id="createEmp" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Employee</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form role="form" id="empform" action="">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" placeholder="Enter First Name">
                            </div>
                            <div class="form-group">
                                <label for="middle_name">Middle Name</label>
                                <input type="text" class="form-control" id="middle_name"
                                       placeholder="Enter Middle Name">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name">
                            </div>
                            <div class="form-group">
                                <label for="designition">Designition</label>
                                <input type="text" class="form-control" id="designition" placeholder="Designition">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Date of Joining</label>
                                <input type="date" class="form-control" id="doj" placeholder="Date of Joining">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="btn_submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $('body').on('click', '#btn_submit', function (e) {
            e.preventDefault();
            var employeeForm = $("#empform");
            var formData = employeeForm.serialize();

            $.ajax({
                url: "/employees",
                type: 'POST',
                data: formData,
                success: function (data) {
                    console.log(data);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR.status);
                }
            });
        });
    </script>
@endsection