<div class="container-indent">
    
    
    
    
    
    <div class="container container-fluid-custom-mobile-padding">
        <?php if($title): ?>
            <div class="tt-block-title">
                <h1 class="tt-title"><?php echo e(trans('general.recent_services')); ?></h1>
                <div class="tt-description"><?php echo e(trans('message.recent_services')); ?></div>
            </div>
        <?php endif; ?>
        <div class="tt-carousel-products row arrow-location-tab arrow-location-tab01 tt-alignment-img tt-layout-product-item slick-animated-show-js">
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-2 col-md-4 col-lg-3">
                    <?php echo $__env->make('frontend.wokiee.four.partials._service_widget',['element' => $element], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    
    
    
    
    
</div>