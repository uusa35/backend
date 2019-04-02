<?php $__env->startSection('breadcrumbs'); ?>
    <?php echo e(Breadcrumbs::render('frontend.favorite.index')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div class="container-indent nomargin">
        <div class="container-indent">
            <div class="container">
                <div class="row" style="padding-top: 20px;">
                    <div class="col-lg-12">
                        <div class="content-indent">
                            <div class="tt-product-listing row">
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-4">
                                        <?php echo $__env->make('frontend.wokiee.four.partials._product_widget', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="tt-product-listing row">
                                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-4">
                                        <?php echo $__env->make('frontend.wokiee.four.partials._service_widget', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="text-center tt_product_showmore">
                                <div class="col-lg-12">
                                    <?php echo $__env->make('frontend.wokiee.four.partials._pagination',['elements' => $products], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.wokiee.four.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>