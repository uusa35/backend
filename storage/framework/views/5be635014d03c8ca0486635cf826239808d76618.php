<div class="tt-wrapper">
    <div class="tt-title-options"><?php echo e(trans('general.sizes')); ?> :</div>
    <form class="form-default">
        <div class="form-group" data-tooltip="<?php echo e(trans('general.choose_color_then_size')); ?>">
            <select class="form-control" id="size" required>
                <option value=""><?php echo e(trans('general.choose_size')); ?></option>
                <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($size->id); ?>"><?php echo e($size->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </form>
</div>











