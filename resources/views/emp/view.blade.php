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
  <h2>Employee Details </h2>
  <div class="container mt-4">
    {{-- @foreach ($web as $value) --}}
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Employee Details (ID: {{ $data->id }})</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Name:</strong> {{ $data->name }}</li>
                <li class="list-group-item"><strong>Email:</strong> {{ $data->email }}</li>
                <li class="list-group-item"><strong>Mobile No.:</strong> {{ $data->phone }}</li>
                <li class="list-group-item"><strong>City:</strong> {{ $data->City }}</li>
                <li class="list-group-item"><strong>Address:</strong> {{ $data->address }}</li>
                <li class="list-group-item"><strong>Age:</strong> {{ $data->age }}</li>
                <li class="list-group-item"><strong>Salary:</strong> {{ $data->salary }}</li>
                <li class="list-group-item"><strong>Designation:</strong> {{ $data->designation }}</li>
            </ul>
            <div class="mt-3">
                <a href="{{ route('emp.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    {{-- @endforeach --}}
</div>

</div>
</body>
</html>
