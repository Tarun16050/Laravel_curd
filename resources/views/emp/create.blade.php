<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container mt-3">
        <h2>Employee Form</h2>
        {{-- @if(!empty($errors->all()))
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        <form action="{{ route('emp.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                        <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}">
                        <span class="text-danger">@error('phone'){{ $message }}@enderror</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="City" class="form-label">City</label>
                        <input type="City" class="form-control @error('City') is-invalid @enderror" id="City" name="City"   value="{{ old('City') }}">
                        <span class="text-danger">@error('City'){{ $message }}@enderror</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}">
                        <span class="text-danger">@error('address'){{ $message }}@enderror</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="text" class="form-control @error('age') is-invalid @enderror" id="age" name="age" value="{{ old('age') }}">
                        <span class="text-danger">@error('age'){{ $message }}@enderror</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="salary" class="form-label">Salary</label>
                        <input type="text" class="form-control @error('salary') is-invalid @enderror" id="salary" name="salary" value="{{ old('salary') }}">
                        <span class="text-danger">@error('salary'){{ $message }}@enderror</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="designation" class="form-label">Designation</label>
                        {{-- <input type="text" class="form-control" id="designation" name="designation"> --}}
                        <select name="designation" id="designation" class="form-control @error('designation') is-invalid @enderror" value="{{ old('designation') }}">
                            <option value="">Select Designation</option>
                            @foreach ($designations as $designation)
                                <option value="{{ $designation }}">{{ $designation}}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">@error('designation'){{ $message }}@enderror</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="photo" class="form-label" @error('photo') is-invalid @enderror>Photo</label>
                        <input type="file" class="form-control" id="photo" name="photo" value="{{ old('photo') }}">
                        <span class="text-danger">@error('photo'){{ $message }}@enderror</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}">
                        <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" id="confirm_password" name="confirm_password" value="{{ old('confirm_password') }}">
                        <span class="text-danger">@error('confirm_password'){{ $message }}@enderror</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <a href="{{ route('emp.index') }}" class="btn btn-info">Back</a>
                </div>
                <div class="col-md-6 text-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
