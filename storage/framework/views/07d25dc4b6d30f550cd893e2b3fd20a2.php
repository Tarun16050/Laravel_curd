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
    
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Employee Details (ID: <?php echo e($data->id); ?>)</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Name:</strong> <?php echo e($data->name); ?></li>
                <li class="list-group-item"><strong>Email:</strong> <?php echo e($data->email); ?></li>
                <li class="list-group-item"><strong>Mobile No.:</strong> <?php echo e($data->phone); ?></li>
                <li class="list-group-item"><strong>City:</strong> <?php echo e($data->City); ?></li>
                <li class="list-group-item"><strong>Address:</strong> <?php echo e($data->address); ?></li>
                <li class="list-group-item"><strong>Age:</strong> <?php echo e($data->age); ?></li>
                <li class="list-group-item"><strong>Salary:</strong> <?php echo e($data->salary); ?></li>
                <li class="list-group-item"><strong>Designation:</strong> <?php echo e($data->designation); ?></li>
            </ul>
            <div class="mt-3">
                <a href="<?php echo e(route('emp.index')); ?>" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    
</div>

</div>
</body>
</html>
<?php /**PATH C:\wamp64\www\laravelCURD\resources\views/emp/view.blade.php ENDPATH**/ ?>