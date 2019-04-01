<div class="tt-collapse-block" style="border: none;">
    <?php if(!is_null($element->timings)): ?>
        <div class="tt-item active">
            <div class="tt-collapse-title"><?php echo e(trans('general.duty_timings')); ?></div>
            <div class="tt-collapse-content">
                <?php echo $__env->make('frontend.wokiee.four.partials._service_timings_table',['elements' => $element->timings], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    <?php endif; ?>
    <div class="tt-item active">
        <div class="tt-collapse-title"><?php echo e(trans('general.more_information')); ?></div>
        <div class="tt-collapse-content">
            <div class="col-sm-12 col-md-6">
                <?php echo $__env->make('frontend.wokiee.four.partials._service_more_information', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>

        </div>
    </div>
</div>