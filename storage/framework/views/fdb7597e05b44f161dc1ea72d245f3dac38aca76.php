<?php $__env->startSection('breadcrumbs'); ?>
    <?php echo e(Breadcrumbs::render('frontend.product.index')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div class="container-indent nomargin">
        
        <div class="container-indent">
            
            <div class="container">
                <div class="row" style="padding-top: 20px;">
                    
                    <div class="col-md-4 col-lg-3 col-xl-3 leftColumn aside">
                        <?php echo $__env->make('frontend.wokiee.four.partials._search_side_bar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                    <div class="col-md-9">
                        <div class="content-indent">
                            </br>
                            <?php echo $__env->make('frontend.wokiee.four.partials._search_sort_by', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <div class="tt-product-listing row">
                                <?php echo $__env->make('frontend.wokiee.four.partials._products_user_show',['products' => $elements], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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