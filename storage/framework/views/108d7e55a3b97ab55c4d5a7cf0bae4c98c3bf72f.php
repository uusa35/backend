<div class="tt-shopcart-table-02">
    <?php if($elements->isNotEmpty()): ?>
        <table class="table-bordered">
            <tbody>
            <tr>
                <td><?php echo e(trans('general.item_cart_name')); ?></td>
                <td></td>
                <td><?php echo e(trans('general.company_name')); ?></td>
                <td><?php echo e(trans('general.total_price')); ?></td>
                <td><?php echo e(trans('general.remove')); ?></td>
            </tr>

            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <div class="tt-product-img">
                            <a href="<?php echo e(route('frontend.'.$element->options->type.'.show.name',['id' => $element->options->element_id,'name' => $element->options->element->name])); ?>">
                                <img src="<?php echo e(asset(env('IMG_LOADER'))); ?>"
                                     data-src="<?php echo e($element->options->element->imageThumbLink); ?>" alt="">
                            </a>
                        </div>
                    </td>
                    <td>
                        <h2 class="tt-title">
                            <a href="<?php echo e(route('frontend.'.$element->options->type.'.show.name',['id' => $element->options->element_id,'name' => $element->options->element->name])); ?>">
                                <?php echo e($element->options->element->name); ?>

                            </a>
                        </h2>
                        <ul class="tt-list-description">
                            <?php if($element->options->size): ?>
                                <li><?php echo e(trans('general.size')); ?>: <?php echo e($element->options->size->name); ?></li>
                            <?php endif; ?>
                            <?php if($element->options->color): ?>
                                <li><?php echo e(trans('general.color')); ?>: <?php echo e($element->options->color->name); ?></li>
                            <?php endif; ?>
                            <?php if($element->options->country_destination): ?>
                                <li><?php echo e(trans('general.shipment_destination')); ?>

                                    : <?php echo e($element->options->country_destination->slug); ?> ---
                                    PackageCharge : <?php echo e($element->options->element->shipment_package->charge); ?> ----
                                    ProductWeight : <?php echo e($element->options->element->weight); ?>

                                </li>
                            <?php endif; ?>
                            <?php if($element->options->day_selected): ?>
                                <li><?php echo e(trans('general.day_selected')); ?>

                                    : <?php echo e($element->options->day_selected->format('d/m/Y')); ?></li>
                            <?php endif; ?>
                            <?php if($element->options->timing): ?>
                                <li><?php echo e(trans('general.start_time')); ?>

                                    : <?php echo e($element->options->timing->start_time); ?></li>
                            <?php endif; ?>
                            <li>
                                <div class="tt-price">
                                    <?php echo e(trans('general.final_price')); ?>  <?php echo e($element->options->element->convertedFinalPrice); ?> <?php echo e($currency->symbol); ?>

                                </div>
                                <?php if($element->options->element->shipment_package): ?>
                                    <div class="tt-price">
                                        <?php echo e(trans('general.package_fee_price')); ?>  <?php echo e(getConvertedPrice($element->options->element->packageFeePrice)); ?> <?php echo e($currency->symbol); ?>

                                    </div>
                                <?php endif; ?>
                            </li>
                            <?php if($element->options->type === 'product'): ?>
                                <li>
                                    <div class="tt-price">
                                        <?php echo e(trans('general.qty')); ?> <?php echo e($element->qty); ?>

                                    </div>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </td>
                    <td>
                        <div class="detach-quantity-desctope">
                            <a href="<?php echo e(route('frontend.user.show.name',['user_id' => $element->options->element->user_id,'name' => $element->options->company])); ?>">
                                <?php echo e($element->options->company); ?>

                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="tt-price">
                            <?php echo e(getConvertedPrice($element->price)); ?> <?php echo e($currency->symbol); ?>

                        </div>
                    </td>
                    <td>
                        <a href="<?php echo e(route('frontend.cart.remove',$element->rowId)); ?>"
                           class="icon-h-02"></a>
                    </td>
                </tr>
                <?php if($element->options->notes): ?>
                    <td colspan="5">
                        <div class="title"><?php echo e(trans('general.notes')); ?></div>
                        <p>
                            <?php echo $element->options->notes; ?>

                        </p>
                    </td>
                <?php endif; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
    <?php else: ?>
        <div class="row">
            <div class="col-12">
                <div class="alert alert-warning"><?php echo e(trans('general.no_items_in_cart')); ?></div>
            </div>
        </div>
    <?php endif; ?>
    <div class="tt-shopcart-btn">
        <div class="col-left">
            <a class="btn-link" href="<?php echo e(route('frontend.home')); ?>"><i
                        class="icon-e-19"></i><?php echo e(trans('general.continue_shopping')); ?></a>
        </div>
        <div class="col-right">
            <?php if($elements->isNotEmpty()): ?>
                <a class="btn-link" href="<?php echo e(route('frontend.cart.clear')); ?>">
                    <i class="icon-h-02"></i>
                    <?php echo e(trans('general.clear_cart')); ?>

                </a>
                
            <?php endif; ?>
        </div>
    </div>
</div>