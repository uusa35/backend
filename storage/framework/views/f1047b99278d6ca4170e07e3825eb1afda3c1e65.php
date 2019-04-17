<div class="form-group">
    <label for="timing_start"><?php echo e(trans('general.select_timing')); ?>

        <sup>*</sup></label>
    <select name="timing_id" id="timing_select" class="form-control" required>
        <option value="0" selected="selected"><?php echo e(trans("general.timings_available_for_chosen_date_and_service")); ?></option>
        <?php $__currentLoopData = $element->timings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option
                    class="timing-element-<?php echo e($timing->day_no); ?> d-none"
                    value="<?php echo e($timing->id); ?>"><?php echo e(\Carbon\Carbon::parse($timing->start)->format('H:i A')); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
