<div class="tt-wrapper <?php echo e($hidden ? 'd-none' : null); ?>" id="color">
    <div class="tt-title-options"><?php echo e(trans('general.colors')); ?>:</div>
    <ul class="tt-options-swatch options-large">
        <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $col): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="color-id-element" data-tooltip="<?php echo e(trans('general.choose_your_color')); ?>"><a class="options-color d-none" id="color-id-<?php echo e($col->id); ?>"
                   data-color-id="<?php echo e($col->id); ?>"
                   data-qty=""
                   data-product-attribute-id=""
                   style="background-color: <?php echo e($col->code); ?>;" href="#"></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>