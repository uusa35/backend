<div class="modal  fade" id="chooseTimeModal" tabindex="-1" role="dialog" aria-label="chooseTimeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                            class="icon icon-clear"></span></button>
            </div>
            <div class="modal-body col">
                <h4><?php echo e(trans('general.available_timings')); ?></h4>
                <div class="tt-table-responsive">
                    <table class="tt-table-shop-01">
                        <tbody>
                        <?php $__currentLoopData = $element->timings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="timing-element-<?php echo e($timing->day_no); ?>" class="d-none">
                                
                                
                                
                                
                                <td
                                        data-tooltip="<?php echo e(trans('general.notes')); ?> : <?php echo e($timing->notes); ?>"
                                ><a href="#" class="btn timing-start-end-<?php echo e($element->id); ?> btn-small" data-dismiss="modal"
                                    style="color : white!important;"
                                    data-id="<?php echo e($timing->id); ?>"
                                    data-service-id="<?php echo e($element->id); ?>"
                                    data-service-name="<?php echo e($element->name); ?>"
                                    data-day-name="<?php echo e($timing->day_name); ?>"
                                    data-timing-start="<?php echo e($timing->start); ?>"
                                    data-timing-end="<?php echo e($timing->end); ?>"
                                    data-date=""
                                    >
                                        
                                        &nbsp;<?php echo e(trans('general.service_start_time')); ?> :
                                        <?php echo e(\Carbon\Carbon::parse($timing->start)->format('h:m A')); ?>

                                    </a></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>