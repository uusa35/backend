<?php if($elements->isNotEmpty()): ?>
    <div class="container-indent0">
        <div class="container">
            <div class="row flex-sm-row tt-layout-promo-box">
                <?php $__currentLoopData = $elements->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-6">
                        <a href="listing-left-column.html"
                           class="tt-promo-box tt-one-child hover-type-2">
                            <img src="<?php echo e(asset(env('IMG_LOADER'))); ?>"
                                 data-src="<?php echo e($element->imageLargeLink); ?>"
                                 class="img-responsive img-category"
                                 alt="<?php echo e($element->caption); ?>">
                            <div class="tt-description">
                                <div class="tt-description-wrapper">
                                    <div class="tt-background"></div>
                                    <div class="tt-title-small"><?php echo e($element->name); ?></div>
                                    <div class="tt-title-small"><?php echo e($element->caption); ?></div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php endif; ?>