<div class="tt-description text-center">
    <div class="tt-row">
        <ul class="tt-add-info">
            <li>
                <a href="<?php echo e(route('frontend.product.search',['user_id' => $element->user_id])); ?>"><?php echo e(str_limit($element->user->slug,60,'..')); ?></a>
            </li>
            <?php if($element->brand): ?>
                <li>
                    <a href="<?php echo e(route('frontend.product.search', ['brand_id' => $element->brand->id])); ?>"><?php echo e($element->brand->slug); ?></a>
                </li>
            <?php endif; ?>
        </ul>
        
    </div>
    <h2 class="tt-title">
        <a href="<?php echo e(route('frontend.product.show.name',['id' => $element->id , 'name' => $element->name])); ?>"><?php echo e(str_limit($element->name,35,'..')); ?></a>
    </h2>
    <?php echo $__env->make('frontend.wokiee.four.partials._widget_price_and_color', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="tt-product-inside-hover text-center">
        <?php if(isset($collection) && !is_null($collection)): ?>
            <div class="tt-row-btn">
                <a href="<?php echo e(route('frontend.product.show.name',['id' => $element->id,'name'=> $element->name,'collection_id' => $collection])); ?>"
                   class="btn btn-small">
                    <i class="fa fa-fw fa-lg icon-f-46"></i>
                    <?php echo e(trans('general.add_collection_item_to_cart')); ?>

                </a>
            </div>
        <?php else: ?>
            <br>
            <div class="tt-row-btn">
                <a href="<?php echo e(route('frontend.product.show.name', ['id' => $element->id, 'name' => $element->name])); ?>"
                   class="btn btn-small"><?php echo e(trans('general.view_details')); ?></a>
            </div>
        <?php endif; ?>
        <div class="tt-row-btn">
            <?php echo $__env->make('frontend.wokiee.four.partials._quick_view_product_btn', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php if(auth()->guard()->check()): ?>
                <a href="#" class="tt-btn-wishlist"></a>
            <?php endif; ?>
            
        </div>
    </div>
</div>