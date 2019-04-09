<nav class="panel-menu mobile-main-menu <?php echo e(app()->isLocale('ar') ? 'mm-right' : null); ?>">
    <ul>
        <li><a href="<?php echo e(route('frontend.home')); ?>"><?php echo e(trans('general.home')); ?></a></li>
        <li>
            <?php if(isset($categories) && $categories->isNotEmpty()): ?>
                <?php if($categories->isNotEmpty()): ?>
                    <?php if(env('APP_CASE') === 'evento'): ?>
                        <?php $__currentLoopData = $categories->where('is_parent', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('frontend.service.search',['service_category_id' => $cat->id])); ?>"><?php echo e($cat->name); ?></a>
                            <?php if($cat->children->isNotEmpty()): ?>
                                <ul>
                                    <?php $__currentLoopData = $cat->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a href="<?php echo e(route('frontend.service.search',['service_category_id' => $sub->id])); ?>"><?php echo e($sub->name); ?></a>
                                            <?php if($sub->children->isNotEmpty()): ?>
                                                <ul>
                                                    <?php $__currentLoopData = $cat->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li>
                                                            <a href="<?php echo e(route('frontend.service.search',['service_category_id' => $sub->id])); ?>"><?php echo e($sub->name); ?>

                                                                <?php if($sub->on_new): ?>
                                                                    <span class="tt-badge tt-fatured"><?php echo e(trans('genera.new')); ?></span>
                                                                <?php endif; ?>
                                                            </a>
                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <?php $__currentLoopData = $categories->where('is_parent', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('frontend.product.search',['product_category_id' => $cat->id])); ?>"><?php echo e($cat->name); ?></a>
                            <?php if($cat->children->isNotEmpty()): ?>
                                <ul>
                                    <?php $__currentLoopData = $cat->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a href="<?php echo e(route('frontend.product.search',['product_category_id' => $sub->id])); ?>"><?php echo e($sub->name); ?></a>
                                            <?php if($sub->children->isNotEmpty()): ?>
                                                <ul>
                                                    <?php $__currentLoopData = $cat->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li>
                                                            <a href="<?php echo e(route('frontend.product.search',['product_category_id' => $sub->id])); ?>"><?php echo e($sub->name); ?>

                                                                <?php if($sub->on_new): ?>
                                                                    <span class="tt-badge tt-fatured"><?php echo e(trans('genera.new')); ?></span>
                                                                <?php endif; ?>
                                                            </a>
                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
        </li>
        <li>
            <a href="<?php echo e(route('frontend.cart.index')); ?>"><?php echo e(trans('general.cart')); ?></a>
        </li>
        <?php if($pages->isNotEmpty()): ?>
            <li>
                <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($page->url); ?>"><?php echo e($page->title); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </li>
        <?php endif; ?>
        <li><a href="<?php echo e(route('frontend.language.change',['locale' => 'ar'])); ?>"><?php echo e(trans('general.arabic')); ?></a></li>
        <li><a href="<?php echo e(route('frontend.language.change',['locale' => 'en'])); ?>"><?php echo e(trans('general.english')); ?></a></li>
    </ul>
    <div class="mm-navbtn-names">
        <div class="mm-closebtn"><?php echo e(trans('general.close')); ?></div>
        <div class="mm-backbtn"><?php echo e(trans('general.back')); ?></div>
    </div>
</nav>