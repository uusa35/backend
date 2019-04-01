<div class="element-item <?php echo e(isset($double) && $double ? 'double-size hidden-xs' : null); ?>">
    <div class="tt-product-design02 thumbprod-center">
        <div class="tt-image-box">
            <a href="<?php echo e(route('frontend.product.show',['collection_id' => $collection])); ?>">
                <span class="tt-img"><img src="<?php echo e($element->imageThumbLink); ?>" alt="<?php echo e($element->name); ?>"></span>
            </a>
            <?php if($element->isReallyHot): ?>
                <?php echo $__env->make('frontend.wokiee.four.partials._widget_is_really_hot', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endif; ?>
        </div>
        <?php echo $__env->make('frontend.wokiee.four.partials._product_widget_description', ['collection' => true], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('frontend.wokiee.four.partials._quick_view_product_btn', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(route('frontend.favorite.product.add', $element->id)); ?>" class="tt-btn-wishlist <?php echo e($element->isFavorited ? 'active' : null); ?>"
               data-tooltip="<?php echo e(trans('general.add_to_wish_list')); ?>"
               data-tposition="<?php echo e(app()->isLocale('ar') ? 'right' : 'left'); ?>"
            ></a>
        <?php endif; ?>
    </div>
</div>