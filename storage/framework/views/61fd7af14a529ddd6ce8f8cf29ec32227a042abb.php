<li class="dropdown tt-megamenu-col-01">
<?php $__currentLoopData = $categories->where('is_parent', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="dropdown tt-megamenu-col-01">
        <a href="<?php echo e(route('frontend.search',['category_id'])); ?>"><?php echo e($category->name); ?></a>
        <?php if($category->children->isNotEmpty()): ?>
            <div class="dropdown-menu">
                <div class="row tt-col-list">
                    <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col">
                            <h6 class="tt-title-submenu">
                                <a
                                        href="<?php echo e(route('frontend.search',['category_id' => $sub->id])); ?>">
                                    <?php echo e($sub->name); ?>

                                </a>
                            </h6>
                            <?php if($sub->children->isNotEmpty()): ?>
                                <ul class="tt-megamenu-submenu">
                                    <?php $__currentLoopData = $sub->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a href="<?php echo e(route('frontend.search',['category_id' => $child->name])); ?>"><?php echo e($child->name); ?></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php endif; ?>
    </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>