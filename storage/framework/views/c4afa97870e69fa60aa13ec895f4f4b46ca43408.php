<?php $__env->startSection('breadcrumbs'); ?>
    <?php echo e(Breadcrumbs::render('frontend.cart.index')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div class="container">
        <h1 class="tt-title-subpages noborder"><?php echo e(trans('general.shopping_cart')); ?></h1>
        <?php if($elements->isNotEmpty()): ?>
            <?php echo $__env->make('frontend.wokiee.four.partials._cart_items_table', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="tt-shopcart-col">
                <div class="row">
                    <?php if(in_array('product',$elements->pluck('options.type')->toArray())): ?>
                        <?php if(auth()->guard()->guest()): ?>
                            <div class="col-12">
                                <div class="alert alert-info alert-block">
                                    <div class="row" style="padding-top: 10px;">
                                        <div class="col-lg-1">
                                            <h6>
                                                <i class="fa fa-2x fa-exclamation-triangle fa-fw"></i>
                                            </h6>
                                        </div>
                                        <div class="col-lg-11">
                                            <h6>
                                                <a href="<?php echo e(route('register')); ?>" class="align-content-center">
                                                    <?php echo e(trans('message.change_address_for_destination')); ?>

                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>

                        <div class="col-md-12 col-lg-12">
                            <div class="tt-shopcart-box">
                                <h4 class="tt-title">
                                    <?php echo e(trans('general.add_your_coupon')); ?>

                                </h4>
                                <p><?php echo e(trans('message.have_a_coupon')); ?></p>
                                <form class="form-default" method="post" action="<?php echo e(route('frontend.cart.coupon')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="address_zip"><?php echo e(trans('general.have_a_coupon')); ?><sup></sup></label>
                                        <input type="text" name="code" class="form-control" id="code"
                                               placeholder="<?php echo e(trans('general.have_a_coupon')); ?>" required>
                                    </div>
                                    <button type="submit"
                                            class="btn btn-border"><?php echo e(trans('general.apply_coupon')); ?></button>
                                </form>
                            </div>
                        </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <?php echo $__env->make('frontend.wokiee.four.partials._cart_order_user_info', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.wokiee.four.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>