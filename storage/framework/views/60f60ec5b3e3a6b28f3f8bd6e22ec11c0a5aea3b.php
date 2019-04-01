<?php $__env->startSection('breadcrumbs'); ?>
    <?php echo e(Breadcrumbs::render('frontend.service.show', $element)); ?>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('body'); ?>
    <div class="container-indent">
        <!-- mobile product slider  -->
    <?php echo $__env->make('frontend.wokiee.four.partials._service_show_gallery_mobile', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- /mobile product slider  -->
        <div class="container  container-fluid-mobile">
            <div class="row">
                <div class="col-6 hidden-xs">
                    <?php echo $__env->make('frontend.wokiee.four.partials._service_show_gallery', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
                <div class="col-6">
                    
                    <?php echo $__env->make('frontend.wokiee.four.partials._service_show_service_service_information', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
                <div class="col-12">
                    

                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('frontend.wokiee.four.partials._show_page_social_icons', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('frontend.wokiee.four.partials._show_page_related_items',['elements' => $relatedItems], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('frontend.wokiee.four.partials._modal_page_show_video', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    ##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
    <?php echo $__env->make('frontend.wokiee.four.partials._service_show_js', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.wokiee.four.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>