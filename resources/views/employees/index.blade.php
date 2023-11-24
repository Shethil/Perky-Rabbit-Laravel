<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href=" https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <style>
        .dataTables_length {
            padding: 20px 0;
        }
    </style>
    <title>Employee Details</title>

</head>

<body class="container">

    <h1>Employee List</h1>

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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                pagingType: 'first_last_numbers',
            });
        });
    </script>

</body>

</html>
