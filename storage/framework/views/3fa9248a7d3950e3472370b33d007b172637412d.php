<?php if(isset($colors) && $colors->isNotEmpty()): ?>
    <div class="tt-collapse open">
        <h3 class="tt-collapse-title"><?php echo e(trans('general.filter_by_sizes')); ?></h3>
        <div class="tt-collapse-content">
            <ul class="tt-options-swatch options-middle">
                <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo request()->fullUrlWithQuery(['color_id' => $color->id]); ?>">
                        <i style="color : <?php echo e($color->code); ?>;"
                           class="fa fa-fw <?php echo e(request('color_id') == $color->id ? 'fa-circle-o' : 'fa-circle'); ?> fa-2x"></i>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
<?php endif; ?>