<?php echo $__env->make('learn_layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <h1 class="text-center">Hello Tarun Patidar</h1>
    <?php echo $__env->make('learn_layout.nav_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
<?php echo $__env->make('learn_layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldPushContent('scripts'); ?>
<?php /**PATH C:\wamp64\www\laravelCURD\resources\views/learn_layout/layout.blade.php ENDPATH**/ ?>