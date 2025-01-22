<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
        <th>Name</th>
        <th>email</th>
        <th>phone</th>
        <th>address</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($value->name); ?></td>
            <td><?php echo e($value->email); ?></td>
            <td><?php echo e($value->phone); ?></td>
            <td><?php echo e($value->address); ?></td>
            <td>
                <a href="<?php echo e(route('employee.view', $value->id)); ?>" class="btn btn-primary">View</a>
                <a href="<?php echo e(route('employee.delete', $value->id)); ?>" class="btn btn-danger">Delete</a>
          </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>

</body>
</html>
<?php /**PATH C:\wamp64\www\laravelCURD\resources\views/employee/list.blade.php ENDPATH**/ ?>