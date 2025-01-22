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

<div class="container mt-3">
  <h2>Striped Rows</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Name</th>
        <th>email</th>
        <th>phone</th>
        <th>address</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($data as $value )
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->phone }}</td>
            <td>{{ $value->address }}</td>
            <td>
                <a href="{{ route('employee.view', $value->id) }}" class="btn btn-primary">View</a>
                <a href="{{ route('employee.delete', $value->id) }}" class="btn btn-danger">Delete</a>
          </tr>

        @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
