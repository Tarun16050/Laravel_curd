<!DOCTYPE html>
<html lang="en">

<head>
    <title>Learning Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    {{-- simpale Listing  --}}
    <div class="container mt-3 border border-rounded border-black">
        <div class="row mt-3">
            <div class="col-md-10">
                <h2>Employee Details</h2>
            </div>
            <div class="col-md-2">
                <a href="{{ route('employeeData.create') }}" class="btn btn-primary">Add Employee</a>
            </div>
        </div>
        {{-- <h2>Employee Details </h2> --}}
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile No.</th>
                    <th>City</th>
                    <th>Age</th>
                    <th>Salary</th>
                    <th>Designation</th>
                    {{-- <th>Photo</th> --}}
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($web as $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->phone }}</td>
                        <td>{{ $value->City }}</td>
                        <td>{{ $value->age }}</td>
                        <td>{{ $value->salary }}</td>
                        <td>{{ $value->designation }}</td>
                        {{-- <td>{{ $value->photo }}</td> --}}
                        <td>
                            <a href="{{ route('employeeData.view', $value->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('employeeData.edit', $value->id) }}" class="btn btn-secondary">Edit</a>
                            <a href="{{ route('employeeData.destroy', $value->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-5">
            {{ $web->links('pagination::bootstrap-5') }}
        </div>
    </div>

    {{-- Join Listing  --}}
    <div class="container mt-3 border border-rounded border-black">
        <div class="row mt-3">
            <div class="col-md-10">
                <h2>JOIN Data Employee & Task</h2>
            </div>
        </div>
        {{-- <h2>Employee Details </h2> --}}
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile No.</th>
                    <th>Designation</th>
                    <th>Task</th>
                    <th>Task Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->phone }}</td>
                        <td>{{ $value->designation }}</td>
                        <td>{{ $value->task }}</td>
                        <td>{{ $value->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-5">
            {{ $web->links('pagination::bootstrap-5') }}
        </div>
    </div>

    {{-- Union Listing   --}}
    <div class="container mt-3 border border-rounded border-black">
        <div class="row mt-3">
            <div class="col-md-10">
                <h2>Union JOIN Data Employee & Student</h2>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile No.</th>
                    <th>City</th>
                    <th>Age</th>
                    <th>Salary</th>
                    <th>Designation</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($union as $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->phone }}</td>
                        <td>{{ $value->City }}</td>
                        <td>{{ $value->age }}</td>
                        <td>{{ $value->salary }}</td>
                        <td>{{ $value->designation }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-5">
            {{ $web->links('pagination::bootstrap-5') }}
        </div>
    </div>


</body>

</html>
