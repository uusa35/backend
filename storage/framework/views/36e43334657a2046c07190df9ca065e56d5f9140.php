<div class="tt-product thumbprod-center" style="padding: 10px;">
    <div class="tt-image-box">
        <?php echo $__env->make('frontend.wokiee.four.partials._quick_view_product_btn', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(route('frontend.favorite.product.add', $element->id)); ?>" class="tt-btn-wishlist <?php echo e($element->isFavorited ? 'active' : null); ?>"
               data-tooltip="<?php echo e(trans('general.add_to_wish_list')); ?>"
               data-tposition="<?php echo e(app()->isLocale('ar') ? 'right' : 'left'); ?>"
            ></a>
        <?php endif; ?>
        
        
        
        <a href="<?php echo e(route('frontend.product.show.name', ['id' => $element->id, 'name' => $element->name])); ?>">
            <?php echo $__env->make('frontend.wokiee.four.partials._widget_tags_and_images', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </a>
        <?php if($element->isReallyHot): ?>
            <?php echo $__env->make('frontend.wokiee.four.partials._widget_is_really_hot', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>
    </div>
    <?php echo $__env->make('frontend.wokiee.four.partials._product_widget_description', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>