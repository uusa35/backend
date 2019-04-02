<div class="container-indent">
    <div class="container container-fluid-custom-mobile-padding">
        <div class="tt-block-title">
            <h2 class="tt-title"><?php echo e(trans('general.hot_deal_products')); ?></h2>
            <div class="tt-description"><?php echo e(trans('message.hot_deal_products')); ?></div>
        </div>
        <div class="tt-carousel-products row arrow-location-tab arrow-location-tab01 tt-alignment-img tt-layout-product-item slick-animated-show-js"
             data-item="<?php echo e(isset($items) ? $items : 4); ?>"
        >
            <?php $__currentLoopData = $productHotDeals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-xs-12">
                    <?php echo $__env->make('frontend.wokiee.four.partials._product_widget',['element' => $element], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>