<?php if($brands->isNotEmpty()): ?>
    <div class="container-indent">
        <div class="container container-fluid-custom-mobile-padding">
            <div class="tt-block-title">
                <h2 class="tt-title"><?php echo e(trans('general.brands')); ?></h2>
                <div class="tt-description"><?php echo e(trans('message.brands_on_home_page')); ?></div>
            </div>
            <div class="row tt-img-box-listing">
                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-6 col-sm-4 col-md-3">
                        <a href="<?php echo e(route('frontend.product.search',['brand_id' => $b->id])); ?>" class="tt-img-box">
                            <img src="<?php echo e(env('IMG_LOADER')); ?>" data-src="<?php echo e($b->imageThumbLink); ?>" class="img-sm" alt="<?php echo e($b->slug); ?>">
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php endif; ?>