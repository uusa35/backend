<div class="col-sm-12 col-md-6">
    <div class="tt-table-responsive" style="margin-top : 20px;">
        <table class="table">
            <?php if(!is_null($element->settup_time) && $element->setup_time): ?>
                <tr>
                    <td><i class="fa fa-fw fa-clock-o"></i><span class="m-1"></span><?php echo e(trans('general.setup_time')); ?>:sss</td>
                    <td><?php echo e($element->setup_time); ?> <?php echo e(trans('general.hours')); ?></td>
                </tr>
            <?php endif; ?>
            <?php if(!is_null($element->duration) && $element->duration): ?>
                <tr>
                    <td><i class="fa fa-fw fa-clock-o"></i><span class="m-1"></span><?php echo e(trans('general.duration')); ?>:</td>
                    <td><?php echo e($element->duration); ?> <?php echo e(trans('general.hours')); ?></td>
                </tr>
            <?php endif; ?>
            <?php if(!is_null($element->delivery_time) && $element->delivery_time): ?>
                <tr>
                    <td><i class="fa fa-fw fa-clock-o"></i><span class="m-1"></span><?php echo e(trans('general.delivery_time')); ?>:sss</td>
                    <td><?php echo e($element->delivery_time); ?> <?php echo e(trans('general.hours')); ?></td>
                </tr>
            <?php endif; ?>
        </table>
    </div>
</div>