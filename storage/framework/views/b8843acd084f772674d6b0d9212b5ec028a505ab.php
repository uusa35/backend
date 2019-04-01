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
                    <span style="min-width: 130px;"><i class="fa fa-fw fa-building-o fa-lg"></i> <span
                                class="ml-2"></span> <?php echo e(trans('general.company_name')); ?>:</span>
                    </td>
                    <td>
                        <a class="theme-color"
                           href="<?php echo e(route('frontend.user.show.name',['id' => $element->user_id,'name' => $element->user->name])); ?>"><?php echo e($element->user->name); ?></a>
                    </td>
                </tr>
                <?php if($element->user->areas->isNotEmpty()): ?>
                    <tr>
                        <td class="td-fixed-element">
                    <span style="min-width: 130px;"><i class="fa fa-fw icon-f-24 fa-lg"></i> <span
                                class="ml-2"></span> <?php echo e(trans('general.areas_served_by_user')); ?>:</span>
                        </td>
                        <td>
                            <ul>
                                <?php $__currentLoopData = $element->user->areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a class="theme-color"
                                           href="<?php echo e(route('frontend.service.search',['user_id' => $element->user_id,'area_id' => $area->id])); ?>"><?php echo e($area->slug); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </td>
                    </tr>
                <?php endif; ?>
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
            <?php if($element->categories->isNotEmpty()): ?>
                <tr>
                    <td class="td-fixed-element"><span><i class="fa fa-fw fa-filter fa-lg"></i><span
                                    class="ml-2"></span></span><?php echo e(trans('general.categories')); ?>:
                    </td>
                    <td>
                        <?php $__currentLoopData = $element->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="theme-color"
                               href="<?php echo e(route('frontend.service.search',['service_category_id' => $cat->id])); ?>">
                                <?php echo e($cat->name); ?>,
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                </tr>
            <?php endif; ?>
            <?php if($element->tags->isNotEmpty()): ?>
                <tr>
                    <td class="td-fixed-element">
                        <i class="icon-f-07 fa fa-fw fa-lg"></i>
                        <span class="ml-1"></span><?php echo e(trans("general.tags")); ?>:
                    </td>
                    <td>
                        <?php $__currentLoopData = $element->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="theme-color" href="<?php echo e(route('frontend.service.search',['tag_id' => $tag->id])); ?>">
                                <?php echo e($tag->slug); ?>,
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                </tr>
            <?php endif; ?>
            <?php if(!is_null($element->brands) && $element->brands->isNotEmpty()): ?>
                <tr>
                    <td class="td-fixed-element"><?php echo e(trans("general.brands")); ?>:</td>
                    <td>
                        <?php $__currentLoopData = $element->brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="theme-color"
                               href="<?php echo e(route('frontend.service.search',['brand_id' => $brand->id])); ?>">
                                <?php echo e($brand->slug); ?>,
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
        <li><a class="btn-link" href="<?php echo e(route('frontend.favorite.service.add', $element->id)); ?>">
                <i class="fa fa-fw fa-heart fa-lg"></i>
                <span class="ml-2"></span>
                <?php echo e(trans('general.add_to_wish_list')); ?>

            </a>
        </li>
        
    </ul>
</div>