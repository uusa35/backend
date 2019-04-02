<div class="tt-add-info">
    <div class="tt-table-responsive">
        <table class="tt-table-shop-01">
            <tr>
                <td class="td-fixed-element"><i class="icon-f-02 fa fa-fw fa-lg"></i><span class="ml-1"></span><span><?php echo e(trans('general.sku')); ?> : </span>
                    <span class="ml-2"></span></td>
                <td>
                    <?php echo e($element->sku); ?>

                </td>
            </tr>
            <?php if(!is_null($element->user)): ?>
                <tr>
                    <td class="td-fixed-element">
                    <span style="min-width: 130px;"><i class="fa fa-fw icon-e-39 fa-lg"></i> <span
                                class="ml-2"></span> <?php echo e(trans('general.company_name')); ?>:</span>
                    </td>
                    <td>
                        <a class="theme-color"
                           href="<?php echo e(route('frontend.user.show.name',['id' => $element->user_id,'name' => $element->user->name])); ?>"><?php echo e($element->user->slug); ?></a>
                    </td>
                </tr>
            <?php endif; ?>
            <?php if($element->user->country): ?>
                <tr>
                    <td class="td-fixed-element">
                    <span style="min-width: 130px;"><i class="fa fa-fw icon-f-23 fa-lg"></i> <span
                                class="ml-2"></span> <?php echo e(trans('general.company_country')); ?>:</span>
                    </td>
                    <td>
                        <?php echo e($element->user->country->slug); ?>

                    </td>
                </tr>
            <?php endif; ?>
            <?php if($element->shipment_package->countries): ?>
                <tr>
                    <td class="td-fixed-element">
                    <span style="min-width: 130px;"><i class="fa fa-fw icon-f-48 fa-lg"></i> <span
                                class="ml-2"></span> <?php echo e(trans('general.countries_available_for_shipment')); ?>:</span>
                    </td>
                    <td>
                        <?php $__currentLoopData = $element->shipment_package->countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($country->slug); ?>,
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                </tr>
            <?php endif; ?>
            <?php if($element->user->country): ?>
                <tr>
                    <td class="td-fixed-element">
                    <span style="min-width: 130px;"><i class="fa fa-fw icon-g-45 fa-lg"></i> <span
                                class="ml-2"></span> <?php echo e(trans('general.weight')); ?>:</span>
                    </td>
                    <td>
                        <?php echo e($element->weight); ?> <?php echo e(trans('general.kg')); ?></li>
                    </td>
                </tr>
            <?php endif; ?>
            <?php if(!is_null($element->duration)): ?>
                <tr>
                    <td class="td-fixed-element"><span><i class="fa fa-fw fa-clock-o fa-lg"></i> <span
                                    class="ml-2"></span> <?php echo e(trans('general.duration')); ?>:</span>
                    </td>
                    <td>
                        <?php echo e($element->duration); ?> <?php echo e(trans("general.hours")); ?></li>
                    </td>
                </tr>
            <?php endif; ?>
            <?php if(!is_null($element->setup_time)): ?>
                <tr>
                    <td class="td-fixed-element">
                <span><i class="fa fa-fw fa-calendar-times-o fa-lg"></i> <span class="ml-2"></span><?php echo e(trans('general.setup_time')); ?>

                        :</span>
                    </td>
                    <td>
                        <?php echo e($element->setup_time); ?> <?php echo e(trans('general.hours')); ?>

                    </td>
                </tr>
            <?php endif; ?>
            <?php if(!is_null($element->individuals)): ?>
                <tr>
                    <td class="td-fixed-element">
                        <span><i class="fa fa-fw fa-lg icon-f-95"></i> <span class="ml-2"></span><?php echo e(trans('general.individuals_count')); ?>: </span>
                    </td>
                    <td>
                        <?php echo e($element->individuals); ?>

                    </td>
                </tr>
            <?php endif; ?>
            <?php if(!is_null($element->user->mobile)): ?>
                <tr>
                    <td class="td-fixed-element">
                        <span><i class="fa fa-fw fa-lg icon-f-93"></i> <span class="ml-2"></span><?php echo e(trans('general.mobile')); ?>:</span>
                    </td>
                    <td>
                        <?php echo e($element->user->mobile); ?>

                    </td>
                </tr>
            <?php endif; ?>
            <?php if(!is_null($element->user->phone)): ?>
                <tr>
                    <td class="td-fixed-element">
                        <span><i class="fa fa-fw fa-lg icon-h-35"></i> <span class="ml-2"></span><?php echo e(trans('general.phone')); ?>:</span>
                    </td>
                    <td>
                        <?php echo e($element->user->phone); ?>

                    </td>
                </tr>
            <?php endif; ?>
            <?php if(!is_null($element->product_attributes)): ?>
                <tr>
                    <td class="td-fixed-element">
                        <span><i class="fa fa-fw fa-lg icon-e-74"></i> <span class="ml-2"></span><?php echo e(trans('general.available_items')); ?>:</span>
                    </td>
                    <td>
                        <?php echo e($element->availableQty); ?> <?php echo e(trans('general.item')); ?>

                    </td>
                </tr>
            <?php endif; ?>
            <?php if($element->categories->isNotEmpty()): ?>
                <tr>
                    <td class="td-fixed-element"><span><i class="fa fa-fw icon-f-90 fa-lg"></i><span
                                    class="ml-2"></span></span><?php echo e(trans('general.categories')); ?>:
                    </td>
                    <td>
                        <?php $__currentLoopData = $element->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="theme-color"
                               href="<?php echo e(route('frontend.product.search',['product_category_id' => $cat->id])); ?>">
                                <?php echo e($cat->name); ?>,
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                </tr>
            <?php endif; ?>
            <?php if($element->tags->isNotEmpty()): ?>
                <tr>
                    <td class="td-fixed-element"><i class="icon-f-07 fa fa-fw fa-lg"></i><span
                                class="ml-1"></span><?php echo e(trans("general.tags")); ?>

                        :
                    </td>
                    <td>
                        <?php $__currentLoopData = $element->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="theme-color" href="<?php echo e(route('frontend.product.search',['tag_id' => $tag->id])); ?>">
                                <?php echo e($tag->slug); ?>,
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                </tr>
            <?php endif; ?>
            <?php if(!is_null($element->brands) && $element->brands->isNotEmpty()): ?>
                <tr>
                    <td class="td-fixed-element"><i class="icon-f-09 fa fa-fw fa-lg"></i><?php echo e(trans("general.brands")); ?>:
                    </td>
                    <td>
                        <?php $__currentLoopData = $element->brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="theme-color"
                               href="<?php echo e(route('frontend.product.search',['brand_id' => $brand->id])); ?>">
                                <?php echo e($brand->slug); ?>,
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                </tr>
            <?php endif; ?>
            <?php if($element->has_attributes): ?>
                <?php if($element->colors->isNotEmpty()): ?>
                    <tr>
                        <td class="td-fixed-element"><i class="icon-e-87 fa fa-fw fa-lg"></i><?php echo e(trans('general.colors')); ?> :</td>
                        <td>
                            <?php $__currentLoopData = $element->colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $col): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span style="color: <?php echo e($col->code); ?>"><?php echo $col->name; ?></span>,
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                    </tr>
                <?php endif; ?>
                <?php if($element->sizes->isNotEmpty()): ?>
                    <tr>
                        <td class="td-fixed-element"><i class="icon-e-69 fa fa-fw fa-lg"></i><?php echo e(trans('general.sizes')); ?> :</td>
                        <td>
                            <?php $__currentLoopData = $element->sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo $size->name; ?>,
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php else: ?>
                <tr>
                    <td class="td-fixed-element"><i class="icon-e-69 fa fa-fw fa-lg"></i><?php echo e(trans('general.size')); ?> :</td>
                    <td>
                        <?php echo e($element->size->name); ?>

                    </td>
                </tr>
                <tr>
                    <td class="td-fixed-element"><i class="icon-e-69 fa fa-fw fa-lg"></i><?php echo e(trans('general.color')); ?> :</td>
                    <td>
                        <?php echo e($element->color->name); ?>

                    </td>
                </tr>
            <?php endif; ?>
            <?php if($element->notes): ?>
                <tr>
                    <td class="td-fixed-element"><i class="icon-f-07 fa fa-fw fa-lg"></i><span
                                class="ml-1"></span><span><?php echo e(trans('general.notes')); ?> : </span>
                        <span class="ml-2"></span></td>
                    <td>
                        <?php echo e($element->notes); ?>

                    </td>
                </tr>
            <?php endif; ?>
        </table>
    </div>
</div>

<div class="tt-wrapper">
    <ul class="tt-list-btn">
        <li><a class="btn-link" href="#">
                <i class="fa fa-fw fa-heart fa-lg"></i>
                <span class="ml-2"></span>
                <?php echo e(trans('general.add_to_wish_list')); ?>

            </a>
        </li>
        
    </ul>
</div>