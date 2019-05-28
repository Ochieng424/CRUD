@extends('layouts.myapp')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Employees</h2>
                <div class="card-tools">
                    <button type="button" class="btn btn-primary">Add Employee</button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <td>Employee ID</td>
                        <td>First Name</td>
                        <td>Designtion</td>
                        <td>Hire Date</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Derrick</td>
                        <td>Developer</td>
                        <td>01-Jan-2010</td>
                        <td>Edit/Delete</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection