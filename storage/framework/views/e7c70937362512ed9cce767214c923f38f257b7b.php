<?php if($element->timings->isNotEmpty()): ?>
    <div class="tt-table-responsive">
        <table class="tt-table-shop-01">
            <thead>
            <tr style="background-color : #f7f7f7;">
                <th><?php echo e(trans('general.day')); ?></th>
                <th><?php echo e(trans('general.start_timing')); ?></th>
                <th><?php echo e(trans('general.end_timing')); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $element->timings->sortBy('day_no')->groupBy('day'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $set): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $set; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td style="border-top: <?php echo e(!$loop->first ? '1px solid white!important;' : null); ?>;"><strong><?php echo e($loop->first ? $timing->day_name : null); ?></strong></td>
                        <td><?php echo e($timing->startDuty); ?></td>
                        <td><?php echo e($timing->endDuty); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>