<?php $__env->startSection('breadcrumbs'); ?>
    
    <?php echo e(Breadcrumbs::render('password.email')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <div class="container-indent">
        <div class="container">
            <h1 class="tt-title-subpages noborder"><?php echo e(trans('general.already_registered')); ?></h1>
            <div class="tt-login-form">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="tt-item">
                            <h2 class="tt-title"><?php echo e(trans('general.forget_password')); ?></h2>
                            <p>
                            <?php if(session('status')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo e(session('status')); ?>

                                </div>
                                <?php endif; ?>
                            </p>
                            <div class="form-default form-top">
                                <form method="POST" action="<?php echo e(route('password.email')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="email"><?php echo e(trans('general.email')); ?>*</label>
                                        <input id="email" type="email"
                                               class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                                               name="email" value="<?php echo e(old('email')); ?>" required>
                                        <?php if($errors->has('email')): ?>
                                            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>

                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="form-group">
                                                <button class="btn btn-border"
                                                        type="submit"><?php echo e(trans('general.forget_password')); ?></button>
                                            </div>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="form-group">
                                                <ul class="additional-links">
                                                    <li>or
                                                        <a href="<?php echo e(route('frontend.home')); ?>"><?php echo e(trans('general.return_home')); ?></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="tt-item">
                            <h2 class="tt-title"><?php echo e(trans('general.new_user')); ?></h2>
                            <p>
                                <?php echo e(trans('message.new_user')); ?>

                            </p>
                            <div class="form-group">
                                <a href="<?php echo e(route('register')); ?>"
                                   class="btn btn-top btn-border"><?php echo e(trans('general.create_an_account')); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.wokiee.four.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>