<?php $__env->startSection('breadcrumbs'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div class="container">
        <h1 class="tt-title-subpages noborder"><?php echo e(trans('general.shopping_cart')); ?></h1>
        <?php echo $__env->make('frontend.wokiee.four.partials._cart_items_table', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php if($elements->isNotEmpty()): ?>
            <div class="tt-shopcart-col">
                <div class="row">
                    <?php echo $__env->make('frontend.wokiee.four.partials._cart_order_user_info_confirmation', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.wokiee.four.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>