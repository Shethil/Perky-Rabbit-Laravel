@extends('inc.master')

@section('title')
    Employee List
@endsection

@section('content')
    <h1>Employee List</h1>

    <div class="row">
        <div class="col-12">
            <div class="d-flex align-items-center justify-content-end">
                <a class="btn btn-primary" href="{{ route('employee.create') }}"><i class="mdi mdi-plus me-2"></i>
                    Add Employee</a>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="table-responsive my-2">
            <table id="dataTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        {{--  <th>Email</th>  --}}
                        {{--  <th>Phone</th>  --}}
                        {{--  <th>Address</th>  --}}
                        <th>Department</th>
                        <th>Achievements</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $employee->name }}</td>
                            {{--  <td>{{ $employee->email }}</td>  --}}
                            {{--  <td>{{ $employee->phone }}</td>  --}}
                            {{--  <td>{{ $employee->address }}</td>  --}}
                            <td>{{ $employee->department->name }}</td>
                            <td>
                                @foreach ($employee->achievements as $achievement)
                                    {{ $achievement->name }},
                                @endforeach
                            </td>
                            <td class="d-flex">
                                <a type="button" class="btn btn-primary me-2" href="#">Edit</a>

                                <form action="#" method="post" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit"> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
