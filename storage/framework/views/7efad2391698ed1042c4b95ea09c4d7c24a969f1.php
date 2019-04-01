<?php if(app()->isLocale('ar')): ?>
<link href="<?php echo e(mix('css/backend-rtl.css')); ?>" rel="stylesheet">
<?php else: ?>
<link href="<?php echo e(mix('css/backend.css')); ?>" rel="stylesheet">
<?php endif; ?> 