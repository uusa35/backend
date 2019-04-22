<?php if($images->isNotEmpty()): ?>
    <div class="portlet box blue ">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gift"></i> <?php echo e(trans('general.more_details')); ?>

            </div>
        </div>
        <div class="portlet-body form">
            <div class="form-body">
                <div class="row">
                    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3"><img src="<?php echo e($image->imageThumbLink); ?>" alt=""
                                                   class="img-responsive img-sm">
                            <form action="<?php echo e(route('backend.image.destroy', $image->id)); ?>" method="post">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-danger"><?php echo e(trans('general.delete')); ?></button>
                            </form>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>