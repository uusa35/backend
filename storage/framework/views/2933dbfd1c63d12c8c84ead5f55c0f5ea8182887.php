<div class="tt-countdown_box d-none d-md-block">
    <div class="tt-countdown_inner">
        <div class="tt-countdown"
             data-date="<?php echo e($element->end_sale->format('Y-m-d')); ?>"
             data-year="<?php echo e(trans('general.years')); ?>"
             data-month="<?php echo e(trans('general.months')); ?>"
             data-week="<?php echo e(trans('general.weeks')); ?>"
             data-day="<?php echo e(trans('general.days')); ?>"
             data-hour="<?php echo e(trans('general.hours')); ?>"
             data-minute="<?php echo e(trans('general.minutes')); ?>"
             data-second="<?php echo e(trans('general.seconds')); ?>"
        ></div>
    </div>
</div>