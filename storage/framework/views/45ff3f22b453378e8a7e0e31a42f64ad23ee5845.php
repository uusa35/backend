<?php if($elements->isNotEmpty()): ?>
    <div class="container-indent">
        <div class="container container-fluid-custom-mobile-padding">
            <div class="tt-block-title text-left">
                <h3 class="tt-title-small"><?php echo e(trans('general.related_products')); ?></h3>
            </div>
            <div class="tt-carousel-products row arrow-location-right-top tt-alignment-img tt-layout-product-item slick-animated-show-js"
                 data-item="<?php echo e(isset($items) ? $items : 4); ?>"
            >
                <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3">
                        <?php echo $__env->make('frontend.wokiee.four.partials._product_widget',['element' => $product], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php endif; ?>