<div class="tt-btn-col-close">
    <a href="#"><?php echo e(trans("general.close")); ?></a>
</div>
<div class="tt-collapse open tt-filter-detach-option">
    <div class="tt-collapse-content">
        <div class="filters-mobile">
            <div class="filters-row-select">
            </div>
        </div>
    </div>
</div>
<div class="tt-content-aside">
    <a href="<?php echo e(request()->url()); ?>" class="tt-promo-03 btn btn-border">
        <?php echo e(trans('general.clear_all')); ?>

    </a>
</div>
<?php echo $__env->make('frontend.wokiee.four.partials._search_side_bar_prices', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('frontend.wokiee.four.partials._search_side_bar_vendors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('frontend.wokiee.four.partials._search_side_bar_areas', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php if(env('APP_CASE') === 'mallr'): ?>
    <?php echo $__env->make('frontend.wokiee.four.partials._search_side_bar_sizes', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('frontend.wokiee.four.partials._search_side_bar_colors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('frontend.wokiee.four.partials._search_side_bar_product_categories', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php else: ?>
    <?php echo $__env->make('frontend.wokiee.four.partials._search_side_bar_service_categories', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<?php echo $__env->make('frontend.wokiee.four.partials._search_side_bar_tags', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="tt-content-aside">
    <a href="listing-left-column.html" class="tt-promo-03">
        <img src="<?php echo e($settings->imageLargeLink); ?>" alt="">
    </a>
</div>