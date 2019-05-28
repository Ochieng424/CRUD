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
                        <td>Designation</td>
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
                                <input type="text" class="form-control" name="first_name" id="first_name"
                                       placeholder="Enter First Name">
                                <span class="text-danger"><strong id="first_name-error"></strong></span>
                            </div>
                            <div class="form-group">
                                <label for="middle_name">Middle Name</label>
                                <input type="text" class="form-control" name="middle_name" id="middle_name"
                                       placeholder="Enter Middle Name">
                                <span class="text-danger"><strong id="middle_name-error"></strong></span>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" name="last_name" id="last_name"
                                       placeholder="Enter Last Name">
                                <span class="text-danger"><strong id="last_name-error"></strong></span>
                            </div>
                            <div class="form-group">
                                <label for="designition">Designition</label>
                                <input type="text" class="form-control" name="designation" id="designation"
                                       placeholder="Designition">
                                <span class="text-danger"><strong id="designation-error"></strong></span>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Date of Joining</label>
                                <input type="date" class="form-control" name="doj" id="doj"
                                       placeholder="Date of Joining">
                                <span class="text-danger"><strong id="doj-error"></strong></span>
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
                    $('#createEmp').modal('hide');
                    window.location.href = "/employees"
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR.status);
                    data = jqXHR.responseJSON;
                    if (data.errors) {
                        if (data.errors.first_name) {
                            $('#first_name-error').html(data.errors.first_name[0]);
                        }
                        if (data.errors.first_name) {
                            $('#middle_name-error').html(data.errors.middle_name[0]);
                        }
                        if (data.errors.first_name) {
                            $('#last_name-error').html(data.errors.last_name[0]);
                        }
                        if (data.errors.first_name) {
                            $('#designation-error').html(data.errors.designation[0]);
                        }
                        if (data.errors.first_name) {
                            $('#doj-error').html(data.errors.doj[0]);
                        }
                    }

                }
            });
        });
    </script>
@endsection