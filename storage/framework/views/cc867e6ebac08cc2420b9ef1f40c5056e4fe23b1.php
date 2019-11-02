<?php $__env->startSection('title'); ?> Trang chủ <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <div class="content-wrapper">
    <?php if ($__env->exists('page.partials.nav')) echo $__env->make('page.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="offset"></div>
    <?php if ($__env->exists('page.partials.slider')) echo $__env->make('page.partials.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php if ($__env->exists('page.partials.light_wrapper')) echo $__env->make('page.partials.light_wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="offset"></div>
    <?php if ($__env->exists('page.partials.product')) echo $__env->make('page.partials.product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php if ($__env->exists('page.partials.customer_say')) echo $__env->make('page.partials.customer_say', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if ($__env->exists('page.partials.contact')) echo $__env->make('page.partials.contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>

  <?php if ($__env->exists('page.partials.footer')) echo $__env->make('page.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\flower\resources\views/page/index.blade.php ENDPATH**/ ?>