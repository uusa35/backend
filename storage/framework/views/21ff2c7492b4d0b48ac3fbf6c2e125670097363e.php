<?php $__env->startSection('breadcrumbs'); ?>
    <?php echo e(Breadcrumbs::render('frontend.page.show',$element)); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div class="container-indent">
        <div class="container container-fluid-custom-mobile-padding">
            <div class="row justify-content-center">
                <div class="col-xs-12 col-md-10 col-lg-8 col-md-auto">
                    <div class="tt-post-single">
                        <div class="tt-tag"><a href="#"><?php echo e($element->title); ?></a></div>
                        <h1 class="tt-title">
                            <?php echo e($element->slug); ?>

                        </h1>
                        <div class="tt-post-content">
                            <img src="images/loader.svg" data-src="<?php echo e($element->imageLargeLink); ?>" alt="">
                            <p>
                                <?php echo $element->content; ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.wokiee.four.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>