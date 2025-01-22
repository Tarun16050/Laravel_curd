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
    
    <div class="container mt-3 border border-rounded border-black">
        <div class="row mt-3">
            <div class="col-md-10">
                <h2>Employee Details</h2>
            </div>
            <div class="col-md-2">
                <a href="<?php echo e(route('employeeData.create')); ?>" class="btn btn-primary">Add Employee</a>
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
                    
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $web; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($value->id); ?></td>
                        <td><?php echo e($value->name); ?></td>
                        <td><?php echo e($value->email); ?></td>
                        <td><?php echo e($value->phone); ?></td>
                        <td><?php echo e($value->City); ?></td>
                        <td><?php echo e($value->age); ?></td>
                        <td><?php echo e($value->salary); ?></td>
                        <td><?php echo e($value->designation); ?></td>
                        
                        <td>
                            <a href="<?php echo e(route('employeeData.view', $value->id)); ?>" class="btn btn-primary">View</a>
                            <a href="<?php echo e(route('employeeData.edit', $value->id)); ?>" class="btn btn-secondary">Edit</a>
                            <a href="<?php echo e(route('employeeData.destroy', $value->id)); ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="mt-5">
            <?php echo e($web->links('pagination::bootstrap-5')); ?>

        </div>
    </div>

    
    <div class="container mt-3 border border-rounded border-black">
        <div class="row mt-3">
            <div class="col-md-10">
                <h2>JOIN Data Employee & Task</h2>
            </div>
        </div>
        
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
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($value->id); ?></td>
                        <td><?php echo e($value->name); ?></td>
                        <td><?php echo e($value->email); ?></td>
                        <td><?php echo e($value->phone); ?></td>
                        <td><?php echo e($value->designation); ?></td>
                        <td><?php echo e($value->task); ?></td>
                        <td><?php echo e($value->description); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="mt-5">
            <?php echo e($web->links('pagination::bootstrap-5')); ?>

        </div>
    </div>

    
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
                <?php $__currentLoopData = $union; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($value->id); ?></td>
                        <td><?php echo e($value->name); ?></td>
                        <td><?php echo e($value->email); ?></td>
                        <td><?php echo e($value->phone); ?></td>
                        <td><?php echo e($value->City); ?></td>
                        <td><?php echo e($value->age); ?></td>
                        <td><?php echo e($value->salary); ?></td>
                        <td><?php echo e($value->designation); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="mt-5">
            <?php echo e($web->links('pagination::bootstrap-5')); ?>

        </div>
    </div>


</body>

</html>
<?php /**PATH C:\wamp64\www\laravelCURD\resources\views/EmployeeForm/index.blade.php ENDPATH**/ ?>