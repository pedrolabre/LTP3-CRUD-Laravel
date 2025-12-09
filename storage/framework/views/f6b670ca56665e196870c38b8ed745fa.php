<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Armário Virtual'); ?></title>
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <!-- Custom Styles - Modularizado -->
    <link rel="stylesheet" href="<?php echo e(asset('css/modules/_variables.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/modules/_navbar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/modules/_cards.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/modules/_forms.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
</head>
<body>
    <?php echo $__env->make('partials.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('partials.alerts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\LTP3-CRUD-Laravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>