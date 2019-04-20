<?php if($countries->where('is_local',true)->first()): ?>
    <form method="get" action="<?php echo e(route("frontend.service.search")); ?>">
        <input type="hidden" name="save" value="1">
        <input type="hidden" name="day_selected_format" id="day_selected_format"
               value="<?php echo e(getDaySelected_format()); ?>">
        <input type="hidden" name="day_selected" id="day_selected"
               value="<?php echo e(getDaySelected()); ?>">
        <input type="hidden" name="day_selected_format" id="day_selected_format" value="<?php echo e(session()->get("day_selected_format")); ?>">
        <div class="form-row justify-content-center align-items-center">
            <input type="hidden" name="country_id"
                   value="<?php echo e($countries->where('is_local',true)->first()->id); ?>">
            <div class="form-group col-lg-3 col-xs-12">
                <label for="date_selected" class="sr-only"><?php echo e(trans('general.day')); ?>*</label>
                <input data-toggle="datepicker" type="text"
                       value="<?php echo e(getDaySelected_format() ? getDaySelected_format() : trans('general.choose_date')); ?>*"
                       class="form-control docs-datepicker-trigger-search"
                       placeholder="<?php echo e(trans('general.choose_day')); ?>" required>
            </div>
            <div class="form-group col-lg-3 col-xs-12">
                <label for="area_id" class="sr-only"><?php echo e(trans('general.area')); ?>*</label>
                <select name="area_id" class="form-control" required>
                    <option value=""><?php echo e(trans('general.choose_area')); ?>*</option>
                    <?php $__currentLoopData = $countries->where('is_local', true)->first()->areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($area->id); ?>" <?php echo e(session()->has('area_id') && session()->get('area_id') == $area->id ? 'selected' : null); ?>><?php echo e($area->slug); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <?php if(isset($timings)): ?>
                <div class="form-group col-lg-3 col-xs-12">
                    <label for="timings" class="sr-only"><?php echo e(trans('general.timing')); ?></label>
                    <select name="timing_value" class="form-control">
                        <option value="" selected><?php echo e(trans('general.choose_timing')); ?></option>
                        <?php $__currentLoopData = $timings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e(Carbon\Carbon::parse($v)->format('h:i a')); ?>" <?php echo e(getTimingValue() === $v ? 'selected' : null); ?>><?php echo e($v); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            <?php endif; ?>
            <div class="form-group col-lg-3 col-xs-12">
                <button type="submit"
                        class="btn btn-primary"><?php echo e(trans('general.search')); ?></button>
            </div>
        </div>
    </form>
<?php endif; ?>