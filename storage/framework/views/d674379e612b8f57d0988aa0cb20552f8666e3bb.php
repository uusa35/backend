<div class="tt-product thumbprod-center">
    <div class="tt-image-box">
        <a href="#" class="tt-btn-quickview" data-toggle="modal"
           data-target="#ModalquickView"
           data-name="<?php echo e($element->name); ?>"
           data-id="<?php echo e($element->id); ?>"
           data-image="<?php echo e($element->imageLargeLink); ?>"
           data-description="<?php echo e($element->description); ?>"
           data-sku="<?php echo e($element->sku); ?>"
           data-price="<?php echo e($element->convertedFinalPrice); ?>"
           data-currency-name="<?php echo e($currency->symbol); ?>"
           data-url="<?php echo e(route('frontend.service.show.name', ['id' => $element->id, 'name' => $element->name])); ?>"
           data-tooltip="<?php echo e(trans('general.quick_view')); ?>"
           data-tposition="<?php echo e(app()->isLocale('ar') ? 'right' : 'left'); ?>"
        ></a>
        <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(route('frontend.favorite.service.add', $element->id)); ?>" class="tt-btn-wishlist" data-tooltip="<?php echo e(trans('general.add_to_wish_list')); ?>"
               data-tposition="<?php echo e(app()->isLocale('ar') ? 'right' : 'left'); ?>"
            ></a>
        <?php endif; ?>
        
        
        
        <a href="<?php echo e(route('frontend.service.show.name', ['id' => $element->id, 'name' => $element->name])); ?>">
            <?php echo $__env->make('frontend.wokiee.four.partials._widget_tags_and_images', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </a>
        <?php if($element->isReallyHot): ?>
            <?php echo $__env->make('frontend.wokiee.four.partials._widget_is_really_hot', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>
    </div>
    <div class="tt-description">
        <div class="tt-row">
            <ul class="tt-add-info">
                <li>
                    <a href="<?php echo e(route('frontend.service.search',['user_id' => $element->user_id])); ?>">
                        <?php echo e($element->user->slug); ?>

                    </a>
                </li>
            </ul>
            
        </div>
        <h2 class="tt-title">
            <a href="<?php echo e(route('frontend.service.show.name',['id' => $element->id , 'name' => $element->name ])); ?>"><?php echo e($element->name); ?></a>
        </h2>
        
        <div class="tt-product-inside-hover">
            
            
            
            
            
            <div class="tt-row-btn">
                <a href="<?php echo e(route('frontend.service.show.name',['id' => $element->id, 'name' => $element->name ])); ?>"
                   class="btn btn-small"><?php echo e(trans('general.view_details')); ?></a>
            </div>
            <div class="tt-row-btn">
                <a href="#" class="tt-btn-quickview" data-toggle="modal"
                   data-target="#ModalquickView"
                   data-tooltip="<?php echo e(trans('general.quick_view')); ?>"
                   data-tposition="<?php echo e(app()->isLocale('ar') ? 'right' : 'left'); ?>"
                   data-name="<?php echo e($element->name); ?>"
                   data-id="<?php echo e($element->id); ?>"
                   data-image="<?php echo e($element->imageLargeLink); ?>"
                   data-description="<?php echo e($element->description); ?>"
                   data-sku="<?php echo e($element->sku); ?>"
                   data-price="<?php echo e($element->convertedFinalPrice); ?>"
                   data-currency-name="<?php echo e($currency->symbol); ?>"
                   data-url="<?php echo e(route('frontend.service.show.name', ['id' => $element->id, 'name' => $element->name])); ?>"
                ></a>
                <?php if(auth()->guard()->check()): ?>
                    <a href="#" class="tt-btn-wishlist"></a>
                <?php endif; ?>
                
            </div>
        </div>
    </div>
</div>