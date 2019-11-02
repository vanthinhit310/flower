<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale()), false); ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo e(config('general.site_name'), false); ?> | <?php if (! empty(trim($__env->yieldContent('title')))): ?> <?php echo $__env->yieldContent('title'); ?> <?php endif; ?></title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('style/css/plugins.css'), false); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('style/revolution/css/settings.css'), false); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('style/revolution/css/layers.css'), false); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('style/revolution/css/navigation.css'), false); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('style/css/style.css'), false); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('style/css/color/aqua.css'), false); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('style/type/icons.css'), false); ?>">
  <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>
<section class="main-wp">
  <?php if (! empty(trim($__env->yieldContent('content')))): ?> <?php echo $__env->yieldContent('content'); ?> <?php endif; ?>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js" integrity="sha256-rsPUGdUPBXgalvIj4YKJrrUlmLXbOb6Cp7cdxn1qeUc=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo e(asset('style/revolution/js/jquery.themepunch.tools.min.js?rev=5.0'), false); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('style/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0'), false); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('style/revolution/js/extensions/revolution.extension.slideanims.min.js'), false); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('style/revolution/js/extensions/revolution.extension.layeranimation.min.js'), false); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('style/revolution/js/extensions/revolution.extension.navigation.min.js'), false); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('style/revolution/js/extensions/revolution.extension.carousel.min.js'), false); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('style/revolution/js/extensions/revolution.extension.video.min.js'), false); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('style/js/plugins.js'), false); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('style/js/scripts.js'), false); ?>"></script>
<?php echo $__env->yieldPushContent('script'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\flower\resources\views/app.blade.php ENDPATH**/ ?>