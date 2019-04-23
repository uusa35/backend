<!doctype html>

<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php $__env->startSection('head'); ?>
        <?php echo $__env->make('frontend.wokiee.four.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldSection(); ?>
    <?php $__env->startSection('styles'); ?>
        <?php echo $__env->make('frontend.wokiee.four.partials.styles', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldSection(); ?>
</head>

<body>
<?php if(!app()->isLocal()): ?>
    <?php echo $__env->make('frontend.wokiee.four.partials.loader', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('frontend.wokiee.four.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('breadcrumbs'); ?>
<?php echo $__env->yieldSection(); ?>
<div id="tt-pageContent">
    <?php echo $__env->make('frontend.wokiee.four.partials.notifications', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <h1><?php echo e(getClientCountry()->name); ?></h1>
    <?php echo $__env->yieldContent('body'); ?>
</div>
<?php echo $__env->yieldSection(); ?>

<!--footer start-->
<?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('frontend.wokiee.four.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldSection(); ?>
<!--footer end-->
<?php $__env->startSection('models'); ?>
    <?php echo $__env->make('frontend.wokiee.four.partials.modals', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo $__env->make('frontend.wokiee.four.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldSection(); ?>
</body>
</html>
