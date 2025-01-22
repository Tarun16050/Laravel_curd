<?php $__env->startSection('content'); ?>
    <h1 class="text-center">This is a content Page</h1>
    <h3>content</h3>
    <h4>Content is the information and experiences that are directed towards an end-user or audience. Content is "something that is to be expressed through some medium, as speech, writing or any of various arts". Content can be delivered via many different media including the Internet, television, audio CDs, books, magazines, and live events, such as conferences and stage performances.
        Content is the information and experiences that are directed towards an end-user or audience. Content is "something that is to be expressed through some medium, as speech, writing or any of various arts". Content can be delivered via many different media including the Internet, television, audio CDs, books, magazines, and live events, such as conferences and stage performances.
        Content is the information and experiences that are directed towards an end-user or audience. Content is "something that is to be expressed through some medium, as speech, writing or any of various arts". Content can be delivered via many different media including the Internet, television, audio CDs, books, magazines, and live events, such as conferences and stage performances.
        Content is the information and experiences that are directed towards an end-user or audience. Content is "something that is to be expressed through some medium, as speech, writing or any of various arts". Content can be delivered via many different media including the Internet, television, audio CDs, books, magazines, and live events, such as conferences and stage performances.
        Content is the information and experiences that are directed towards an end-user or audience. Content is "something that is to be expressed through some medium, as speech, writing or any of various arts". Content can be delivered via many different media including the Internet, television, audio CDs, books, magazines, and live events, such as conferences and stage performances.
        Content is the information and experiences that are directed towards an end-user or audience. Content is "something that is to be expressed through some medium, as speech, writing or any of various arts". Content can be delivered via many different media including the Internet, television, audio CDs, books, magazines, and live events, such as conferences and stage performances.
        Content is the information and experiences that are directed towards an end-user or audience. Content is "something that is to be expressed through some medium, as speech, writing or any of various arts". Content can be delivered via many different media including the Internet, television, audio CDs, books, magazines, and live

    </h4>
    <h1>
        Using Javascript in Laravel Blade
    </h1>

<div id="app">{{ message }}</div>


    <?php
        $name = 'Tarun Patidar';
    ?>
    
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>


    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>



<script>
  const { createApp, ref } = Vue

  createApp({
    setup() {
      const message = ref('Hello from Vue 3! this message is coming from the vue js')
      return {
        message
      }
    }
  }).mount('#app')
</script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('learn_layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravelCURD\resources\views/learn_layout/content.blade.php ENDPATH**/ ?>