<?php if(isset($sizes) && $sizes->isNotEmpty()): ?>
    <div class="tt-collapse open">
        <h3 class="tt-collapse-title"><?php echo e(trans('general.filter_by_sizes')); ?></h3>
        <div class="tt-collapse-content">
            <ul class="tt-options-swatch options-middle">
                <?php if(isset($sizes) && $sizes->isNotEmpty()): ?>
                    <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="badge <?php echo e(request('size_id') == $size->id ? 'badge-info' : 'badge-light'); ?>"
                           style="font-size: medium; margin: 3px;"
                           href="<?php echo request()->fullUrlWithQuery(['size_id' => $size->id]); ?>">
                            <?php echo e($size->name); ?>

                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>