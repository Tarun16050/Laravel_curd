<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>update</title>
</head>
<body>
    <div class="container mt-3">
        <h2>Employee Form</h2>
        <form action="<?php echo e(route('employeeData.update',$data->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo e($data->name); ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo e($data->email); ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo e($data->phone); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="City" class="form-label">City</label>
                        <input type="City" class="form-control" id="City" name="City"   value="<?php echo e($data->City); ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="<?php echo e($data->address); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="text" class="form-control" id="age" name="age" value="<?php echo e($data->age); ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="salary" class="form-label">Salary</label>
                        <input type="text" class="form-control" id="salary" name="salary" value="<?php echo e($data->salary); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="designation" class="form-label">Designation</label>
                        <input type="text" class="form-control" id="designation" name="designation" value="<?php echo e($data->designation); ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="department" class="form-label">Department</label>
                        <input type="text" class="form-control" id="department" name="department" value="<?php echo e($data->department); ?>">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo" value="<?php echo e($data->photo); ?>">
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <a href="<?php echo e(route('employeeData')); ?>" class="btn btn-info">Back</a>
                </div>
                <div class="col-md-6 text-end">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\wamp64\www\laravelCURD\resources\views/EmployeeForm/edit.blade.php ENDPATH**/ ?>