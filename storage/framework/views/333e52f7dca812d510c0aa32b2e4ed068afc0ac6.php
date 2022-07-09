<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Series Now </title>

    <link rel="icon" type="image/png" href="<?php echo e(asset('favicon.png')); ?>">
    <?php echo $__env->yieldContent('css'); ?>
    
    <?php echo $__env->yieldContent('script'); ?>
    
</head>
<body>
    <main>
            <?php echo $__env->yieldContent('content'); ?>
    </main>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel_proj\resources\views/layouts/guest.blade.php ENDPATH**/ ?>