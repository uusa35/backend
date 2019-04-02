<div class="tt-collapse open">
    <h3 class="tt-collapse-title"><?php echo e(trans('general.filter_by_categories')); ?></h3>
    <div class="tt-collapse-content">
        <ul class="tt-filter-list">
            <?php $__currentLoopData = $categoriesList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="active">
                    <a href="<?php echo request()->fullUrlWithQuery(['category_id' => $category->id]); ?>"><?php echo e($category->name); ?></a>
                </li>
                <?php if($category->children->isNotEmpty()): ?>
                    <ul>
                        <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo request()->fullUrlWithQuery(['category_id' => $child->id]); ?>"><?php echo e($child->name); ?></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <a href="#" class="btn-link-02">Clear All</a>
    </div>
</div>