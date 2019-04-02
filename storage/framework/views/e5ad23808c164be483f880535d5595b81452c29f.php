<?php $__env->startSection('breadcrumbs'); ?>
    <?php echo e(Breadcrumbs::render('frontend.user.index')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div class="container-indent nomargin">
        
        <div class="container-indent">
            
            <div class="container">
                <div class="row" style="padding-top: 20px;">
                    
                    
                    
                    
                    <div class="col-md-12">
                        <div class="content-indent">
                            </br>

                            <div class="tt-product-listing row">
                                <?php if(isset($elements) && $elements->isNotEmpty()): ?>
                                    <div class="row">
                                        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-lg-4 col-md-6 tt-col-item">
                                                <?php echo $__env->make('frontend.wokiee.four.partials._user_widget',['element' => $user], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="text-center tt_product_showmore">
                                <div class="col-lg-12">
                                    <?php echo $__env->make('frontend.wokiee.four.partials._pagination',['elements' => $elements], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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