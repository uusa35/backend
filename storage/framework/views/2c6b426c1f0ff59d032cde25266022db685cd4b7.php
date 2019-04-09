<?php if(isset($categories) && $categories->isNotEmpty()): ?>
    <?php if($categories->isNotEmpty()): ?>
        <?php if(env('APP_CASE') === 'evento'): ?>
            <?php $__currentLoopData = $categories->where('is_parent', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="dropdown megamenu">
                    <a href="<?php echo e(route('frontend.service.search',['service_category_id' => $cat->id])); ?>"><?php echo e(str_limit($cat->name,12,'')); ?></a>
                    <?php if($cat->children->isNotEmpty()): ?>
                        <div class="dropdown-menu">
                            <div class="row">
                                <div class="col-sm-9">
                                    <div class="row tt-col-list">
                                        <?php $__currentLoopData = $cat->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-sm-4">
                                                <a href="<?php echo e(route('frontend.service.search',['service_category_id' => $sub->id])); ?>"
                                                   class="tt-title-submenu">
                                                    <?php if($sub->imageLargeLink): ?>
                                                        <?php echo e($sub->name); ?>

                                                        <img class="img-menu-category img-responsive"
                                                             src="<?php echo e(env('IMG_LOADER')); ?>"
                                                             data-src="<?php echo e($sub->imageThumbLink); ?>"
                                                             alt="<?php echo e($sub->name); ?>">
                                                    <?php endif; ?>
                                                </a>
                                                <?php if($sub->children->isNotEmpty()): ?>
                                                    <ul class="tt-megamenu-submenu">
                                                        <?php $__currentLoopData = $sub->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li>
                                                                <a href="<?php echo e(route('frontend.service.search',['service_category_id' => $child->id])); ?>"><?php echo e($child->name); ?>

                                                                    <?php if($child->on_new): ?>
                                                                        <span class="tt-badge tt-new"><?php echo e(trans('general.new')); ?></span>
                                                                    <?php endif; ?>
                                                                </a>
                                                            </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                <?php endif; ?>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                <?php if($cat->imageLargeLink): ?>
                                    <div class="col-sm-3">
                                        <div class="tt-offset-7">
                                            <a href="<?php echo e(route('frontend.service.search',['service_category_id' => $cat->id])); ?>"
                                               class="tt-promo-02">
                                                <img class="img-category img-responsive"
                                                     src="<?php echo e(env('IMG_LOADER')); ?>"
                                                     data-src="<?php echo e($cat->imageThumbLink); ?>"
                                                     alt="<?php echo e($cat->name); ?>">
                                                <div class="tt-description tt-point-h-l tt-point-v-t">
                                                    <div class="tt-description-wrapper">
                                                        <div class="tt-title-small tt-white-color"><?php echo e($cat->name); ?></div>
                                                        <?php if($cat->caption): ?>
                                                            <div class="tt-title-xlarge tt-white-color"><?php echo e($cat->caption); ?></div>
                                                        <?php endif; ?>
                                                        <?php if($cat->description): ?>
                                                            <p class="tt-white-color"><?php echo e($cat->description); ?></p>
                                                            <span class="btn-underline tt-obj-bottom tt-white-color"><?php echo e(trans('general.shop_now')); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <?php $__currentLoopData = $categories->where('is_parent', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="dropdown megamenu">
                    <a href="<?php echo e(route('frontend.product.search',['product_category_id' => $cat->id])); ?>"><?php echo e(str_limit($cat->name,12,'')); ?></a>
                    <?php if($cat->children->isNotEmpty()): ?>
                        <div class="dropdown-menu">
                            <div class="row">
                                <div class="col-sm-9">
                                    <div class="row tt-col-list">
                                        <?php $__currentLoopData = $cat->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-sm-4">
                                                <a href="<?php echo e(route('frontend.product.search',['product_category_id' => $sub->id])); ?>"
                                                   class="tt-title-submenu">
                                                    <?php if($sub->imageLargeLink): ?>
                                                        <?php echo e($sub->name); ?>

                                                        <img class="img-menu-category img-responsive"
                                                             src="<?php echo e(env('IMG_LOADER')); ?>"
                                                             data-src="<?php echo e($sub->imageThumbLink); ?>"
                                                             alt="<?php echo e($sub->name); ?>">
                                                    <?php endif; ?>
                                                </a>
                                                <?php if($sub->children->isNotEmpty()): ?>
                                                    <ul class="tt-megamenu-submenu">
                                                        <?php $__currentLoopData = $sub->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li>
                                                                <a href="<?php echo e(route('frontend.product.search',['product_category_id' => $child->id])); ?>"><?php echo e($child->name); ?>

                                                                    <?php if($child->on_new): ?>
                                                                        <span class="tt-badge tt-new"><?php echo e(trans('general.new')); ?></span>
                                                                    <?php endif; ?>
                                                                </a>
                                                            </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                <?php endif; ?>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                <?php if($cat->imageLargeLink): ?>
                                    <div class="col-sm-3">
                                        <div class="tt-offset-7">
                                            <a href="<?php echo e(route('frontend.product.search',['product_category_id' => $cat->id])); ?>"
                                               class="tt-promo-02">
                                                <img class="img-category img-responsive"
                                                     src="<?php echo e(env('IMG_LOADER')); ?>"
                                                     data-src="<?php echo e($cat->imageThumbLink); ?>"
                                                     alt="<?php echo e($cat->name); ?>">
                                                <div class="tt-description tt-point-h-l tt-point-v-t">
                                                    <div class="tt-description-wrapper">
                                                        <div class="tt-title-small tt-white-color"><?php echo e($cat->name); ?></div>
                                                        <?php if($cat->caption): ?>
                                                            <div class="tt-title-xlarge tt-white-color"><?php echo e($cat->caption); ?></div>
                                                        <?php endif; ?>
                                                        <?php if($cat->description): ?>
                                                            <p class="tt-white-color"><?php echo e($cat->description); ?></p>
                                                            <span class="btn-underline tt-obj-bottom tt-white-color"><?php echo e(trans('general.shop_now')); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>