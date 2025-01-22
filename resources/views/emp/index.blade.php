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
            <div class="col-md-10">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
            <div class="col-md-2">
                <a href="{{ route('emp.create') }}" class="btn btn-primary">Add Employee</a>
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
                        {{-- <td>
                            <a href="{{ route('emp.show', $value->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('emp.edit', $value->id) }}" class="btn btn-secondary">Edit</a>
                            <form action="{{ route('emp.destroy', $value->id) }}" method="DELETE">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td> --}}
                        <td>
                            <a href="{{ route('emp.show', $value->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('emp.edit', $value->id) }}" class="btn btn-secondary">Edit</a>
                            <form action="{{ route('emp.destroy', $value->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-5">
            {{-- {{ $webs->links('pagination::bootstrap-5') }} --}}
        </div>
    </div>

</body>

</html>
