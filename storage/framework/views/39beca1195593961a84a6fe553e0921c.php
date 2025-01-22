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
        <th colspan="2">
            <a href="<?php echo e(route('employee')); ?>" class="btn btn-primary">Back</a>
        </th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo e($data->name); ?></td>
            <td><?php echo e($data->email); ?></td>
            <td><?php echo e($data->phone); ?></td>
            <td><?php echo e($data->address); ?></td>
          </tr>
    </tbody>
  </table>
</div>

</body>
</html>
<?php /**PATH C:\wamp64\www\laravelCURD\resources\views/employee/view.blade.php ENDPATH**/ ?>