<?php $__env->startSection('breadcrumbs'); ?>
    <?php echo e(Breadcrumbs::render('frontend.user.show',$element)); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div class="container-indent nomargin">
        <?php echo $__env->make('frontend.wokiee.four.partials._user_show_header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
        <div class="container-indent">
            
            <div class="container">
                <div class="row" style="padding-top: 20px;">
                    
                    <div class="col-md-4 col-lg-3 col-xl-3 leftColumn aside">
                        <?php echo $__env->make('frontend.wokiee.four.partials._search_side_bar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                    <div class="col-md-9">
                        <div class="content-indent">
                            </br>
                            <div class="tt-filters-options desctop-no-sidebar">
                                
                                
                                
                                <?php echo $__env->make('frontend.wokiee.four.partials._search_sort_by', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            </div>
                            <div class="tt-product-listing row">
                                <?php echo $__env->make('frontend.wokiee.four.partials._services_user_show', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                <?php echo $__env->make('frontend.wokiee.four.partials._products_user_show', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            </div>
                            <div class="text-center tt_product_showmore">
                                <div class="col-lg-12">
                                    <?php if(isset($products) && $products->isNotEmpty()): ?>
                                        <?php echo $__env->make('frontend.wokiee.four.partials._pagination',['elements' => $products], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    <?php endif; ?>
                                    <?php if(isset($services) && $services->isNotEmpty()): ?>
                                        <?php echo $__env->make('frontend.wokiee.four.partials._pagination',['elements' => $services], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    <?php endif; ?>
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