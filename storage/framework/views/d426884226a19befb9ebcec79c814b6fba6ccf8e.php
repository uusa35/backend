<?php if(app()->isLocale('ar')): ?>
<link href="<?php echo e(mix('css/backend-rtl.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/bootstrap-timepicker.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/clockface.css')); ?>" rel="stylesheet">
<?php else: ?>
<link href="<?php echo e(mix('css/backend.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/bootstrap-timepicker.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/clockface.css')); ?>" rel="stylesheet">
<?php endif; ?>