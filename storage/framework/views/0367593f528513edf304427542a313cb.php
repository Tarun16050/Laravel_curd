<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Properties Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<body>

    <h1>Hello Tarun</h1>

    <?php echo e(5 + 2); ?>


    <?php echo "<script>alert('Traun patidar');</script>"; ?>


    <?php
        $name = 'Tarun';
        $name_array = ['Tarun', 'Patidar', 'Rahul', 'Patidar'];
        $items = ['Item 1', 'Item 2', 'Item 3', 'Item 4'];
    ?>
    </br>
    <?php echo e($name); ?>

    </br></br>
    <h1>For Loop</h1>
    <ul>
        <?php $__currentLoopData = $name_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($nam); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <div class="container mt-5">
        <h2>Loop Properties Combined Table</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Property</th>
                    <th>Description</th>
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <th>Iteration <?php echo e($loop->iteration); ?> (<?php echo e($item); ?>)</th>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>$loop->index</td>
                    <td>The index of the current loop iteration (starts at 0).</td>
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($loop->index); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
                <tr>
                    <td>$loop->iteration</td>
                    <td>The current loop iteration (starts at 1).</td>
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($loop->iteration); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
                <tr>
                    <td>$loop->remaining</td>
                    <td>The iterations remaining in the loop.</td>
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($loop->remaining); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
                <tr>
                    <td>$loop->count</td>
                    <td>The total number of items in the array being iterated.</td>
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($loop->count); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
                <tr>
                    <td>$loop->first</td>
                    <td>Whether this is the first iteration through the loop.</td>
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($loop->first ? 'Yes' : 'No'); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
                <tr>
                    <td>$loop->last</td>
                    <td>Whether this is the last iteration through the loop.</td>
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($loop->last ? 'Yes' : 'No'); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
                <tr>
                    <td>$loop->even</td>
                    <td>Whether this is an even iteration through the loop.</td>
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($loop->even ? 'Yes' : 'No'); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
                <tr>
                    <td>$loop->odd</td>
                    <td>Whether this is an odd iteration through the loop.</td>
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($loop->odd ? 'Yes' : 'No'); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
                <tr>
                    <td>$loop->depth</td>
                    <td>The nesting level of the current loop.</td>
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($loop->depth); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
                <tr>
                    <td>$loop->parent</td>
                    <td>When in a nested loop, the parent's loop variable.</td>
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($loop->parent ? $loop->parent->index : 'N/A'); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container mt-5">
        <h2>Loop Properties Combined Table</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Property</th>
                    <th>Description</th>
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <th><?php echo e($item); ?></th>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            </thead>
            <tbody>
                <?php
                    $properties = [
                        'index' => 'The index of the current loop iteration (starts at 0).',
                        'iteration' => 'The current loop iteration (starts at 1).',
                        'remaining' => 'The iterations remaining in the loop.',
                        'count' => 'The total number of items in the array being iterated.',
                        'first' => 'Whether this is the first iteration through the loop.',
                        'last' => 'Whether this is the last iteration through the loop.',
                        'even' => 'Whether this is an even iteration through the loop.',
                        'odd' => 'Whether this is an odd iteration through the loop.',
                        'depth' => 'The nesting level of the current loop.',
                        'parent' => 'When in a nested loop, the parent’s loop variable.',
                    ];
                ?>

                <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property => $description): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e(ucfirst($property)); ?></td>
                        <td><?php echo e($description); ?></td>
                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td>
                                <?php switch($property):
                                    case ('index'): ?> <?php echo e($loop->index); ?> <?php break; ?>
                                    <?php case ('iteration'): ?> <?php echo e($loop->iteration); ?> <?php break; ?>
                                    <?php case ('remaining'): ?> <?php echo e($loop->remaining); ?> <?php break; ?>
                                    <?php case ('count'): ?> <?php echo e($loop->count); ?> <?php break; ?>
                                    <?php case ('first'): ?> <?php echo e($loop->first ? 'Yes' : 'No'); ?> <?php break; ?>
                                    <?php case ('last'): ?> <?php echo e($loop->last ? 'Yes' : 'No'); ?> <?php break; ?>
                                    <?php case ('even'): ?> <?php echo e($loop->even ? 'Yes' : 'No'); ?> <?php break; ?>
                                    <?php case ('odd'): ?> <?php echo e($loop->odd ? 'Yes' : 'No'); ?> <?php break; ?>
                                    <?php case ('depth'): ?> <?php echo e($loop->depth); ?> <?php break; ?>
                                    <?php case ('parent'): ?> <?php echo e($loop->parent ? $loop->parent->index : 'N/A'); ?> <?php break; ?>
                                <?php endswitch; ?>
                            </td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>


</body>

</html>
<?php /**PATH C:\wamp64\www\laravelCURD\resources\views/learnTemplate.blade.php ENDPATH**/ ?>