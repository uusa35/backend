<div class="tt-cart-content">
    <div class="tt-cart-list">
        <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="tt-item">
                <?php if($element->options->type !== 'coupon'): ?>
                    <a href="<?php echo e(route('frontend.'.$element->options->type.'.show.name', ['id' => $element->options->element_id, 'name' => $element->name])); ?>">
                        <?php if($element->options->type === 'service'): ?>
                            <div class="tt-item-img">
                                <img src="<?php echo e(asset(env('IMG_LOADER'))); ?>"
                                     data-src="<?php echo e($element->options->element->imageThumbLink); ?>" alt="">
                            </div>
                            <div class="tt-item-descriptions">
                                <h2 class="tt-title"><?php echo e($element->name); ?></h2>
                                <ul class="tt-add-info">
                                    <li><?php echo e(trans('general.day_selected')); ?>

                                        : <?php echo e($element->options->day_selected->format('d/m/Y')); ?></li>
                                    <li><?php echo e(trans('general.company_name')); ?>: <?php echo e($element->options->company); ?></li>
                                    <li><?php echo e(trans('general.start_time')); ?>

                                        : <?php echo e($element->options->timing->start_time); ?></li>
                                </ul>
                                <div class="tt-price"><?php echo e(getConvertedPrice($element->price)); ?> <?php echo e($currency->symbol); ?></div>
                            </div>
                        <?php elseif($element->options->type === 'product'): ?>
                            <div class="tt-item-img">
                                <img src="<?php echo e(asset(env('IMG_LOADER'))); ?>"
                                     data-src="<?php echo e($element->options->element->imageThumbLink); ?>" alt="">
                            </div>
                            <div class="tt-item-descriptions">
                                <h2 class="tt-title"><?php echo e($element->name); ?></h2>
                                <ul class="tt-add-info">
                                    <li><?php echo e(trans('general.qty')); ?> : <?php echo e($element->qty); ?></li>
                                    <li><?php echo e(trans('general.company_name')); ?>: <?php echo e($element->options->company); ?></li>
                                    <?php if($element->options->color): ?>
                                        <li><?php echo e(trans('general.color')); ?>: <?php echo e($element->options->color->name); ?></li>
                                    <?php endif; ?>
                                    <?php if($element->options->size): ?>
                                        <li><?php echo e(trans('general.size')); ?>: <?php echo e($element->options->size->name); ?></li>
                                    <?php endif; ?>
                                </ul>
                                <div class="tt-price"><?php echo e(getConvertedPrice($element->price)); ?> <?php echo e($currency->symbol); ?></div>
                            </div>
                        <?php endif; ?>
                    </a>
                <?php endif; ?>
                <div class="tt-item-close">
                    <a href="<?php echo e(route('frontend.cart.remove',$element->rowId)); ?>" class="tt-btn-close"></a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="tt-cart-total-row">
        <div class="tt-cart-total-title"><?php echo e(trans('general.sub_total')); ?>:</div>
        <div class="tt-cart-total-price"><?php echo e(getConvertedPrice(getCartNetTotal())); ?> <?php echo e($currency->symbol); ?></div>
    </div>
    <div class="tt-cart-btn">
        <div class="tt-item">
            <a href="<?php echo e(route('frontend.cart.index')); ?>" class="btn"><?php echo e(trans('general.proceed_to_checkout')); ?></a>
        </div>
    </div>
</div>