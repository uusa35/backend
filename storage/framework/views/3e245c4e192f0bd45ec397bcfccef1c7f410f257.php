

<link rel="stylesheet" href="<?php echo e(mix('css/wokiee-theme-sass.css')); ?>">
<?php if(app()->isLocale('ar')): ?>
    <link rel="stylesheet" href="<?php echo e(mix('css/wokiee-theme-sass-rtl.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(mix('css/frontend-custom-ar.css')); ?>">
<?php else: ?>
    <link rel="stylesheet" href="<?php echo e(mix('css/frontend-custom-en.css')); ?>">
<?php endif; ?>
<link rel="stylesheet" href="<?php echo e(mix('css/plugins.css')); ?>">

