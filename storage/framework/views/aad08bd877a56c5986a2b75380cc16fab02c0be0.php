<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<html lang="<?php echo e(app()->getLocale()); ?>" dir="<?php echo e(app()->isLocale('ar') ? 'rtl' : 'ltr'); ?>">

<head>
    <meta charset="utf-8" />
    <title><?php echo e(env('APP_NAME')); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <?php $__env->startSection('styles'); ?>
    <?php echo $__env->make('backend.partials.styles', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldSection(); ?>
    <link rel="shortcut icon" href="<?php echo e(asset('images/logo.ico')); ?>" />
    <link href="<?php echo e(asset('images/logo.png')); ?>" rel="shortcut icon" type="image/png">

</head>





<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
    <?php echo $__env->make('backend.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="clearfix"></div>
    <div class="page-container">
        <?php echo $__env->make('backend.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="page-content-wrapper">
            <div class="page-content" style="min-height: 800px;">
                <?php echo $__env->make('backend.partials.notifications', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->make('backend.partials._confirm_delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->make('backend.partials.breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php $__env->startSection('content'); ?>
                <?php echo $__env->yieldSection(); ?>
            </div>
        </div>
        <?php echo $__env->make('backend.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <?php $__env->startSection('scripts'); ?>
    <?php echo $__env->make('backend.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldSection(); ?>
</body>

</html> 