<div class="modal  fade" id="modalProductInfo" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                            class="icon icon-clear"></span></button>
            </div>
            <div class="modal-body">
                <div class="tt-layout-product-info">
                    <h6 class="tt-title"><?php echo e(trans('general.size_chart')); ?></h6>
                    <?php echo e(trans('message.size_chart')); ?>

                    <div class="tt-table-responsive-md">
                        <?php if($element->size_chart_image): ?>
                            <img src="<?php echo e(asset(env('LARGE').$element->size_chart_image)); ?>" alt="<?php echo e($element->name); ?>"
                                 class="img-responsive">
                        <?php else: ?>
                            <img src="<?php echo e(asset(env('LARGE').$settings->size_chart_image)); ?>" alt="<?php echo e($element->name); ?>"
                                 class="img-responsive">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>