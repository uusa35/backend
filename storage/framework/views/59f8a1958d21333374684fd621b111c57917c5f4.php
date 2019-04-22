<?php $__env->startSection('breadcrumbs'); ?>
    
    <?php echo e(Breadcrumbs::render('login')); ?>

    <?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
        <div class="container-indent">
            <div class="container">
                <h1 class="tt-title-subpages noborder"><?php echo e(trans('general.already_registered')); ?></h1>
                <div class="tt-login-form">
                    <div class="row">
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
                        <div class="col-xs-12 col-md-6">
                            <div class="tt-item">
                                <h2 class="tt-title"><?php echo e(trans('general.login')); ?></h2>
                                <?php echo e(trans('general.already_have_account')); ?>

                                <div class="form-default form-top">
                                    <form id="customer_login" method="post" novalidate="novalidate"
                                          action="<?php echo e(route('login')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <label for="loginInputName"><?php echo e(trans('general.email')); ?> *</label>
                                            <div class="tt-required">* <?php echo e(trans('general.required_fields')); ?></div>
                                            <input type="text" name="email"
                                                   class="form-control <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                                                   id="loginInputName"
                                                   value="<?php echo e(old('email')); ?>"
                                                   placeholder="<?php echo e(trans('general.enter_your_email')); ?>" required
                                                   autofocus>
                                            <?php if($errors->has('email')): ?>
                                                <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="password"><?php echo e(trans('general.password')); ?> *</label>
                                            <input type="password" name="password" class="form-control" id="password"
                                                   placeholder="<?php echo e(trans('general.enter_your_password')); ?>">
                                            <?php if($errors->has('password')): ?>
                                                <span class="invalid-feedback"
                                                      role="alert"><strong><?php echo e($errors->first('password')); ?></strong></span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label class="" for="remember">
                                                <?php echo e(trans('general.remember_me')); ?>

                                            </label>
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                   id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto mr-auto">
                                                <div class="form-group">
                                                    <button class="btn btn-border" type="submit"><?php echo e(trans('general.login')); ?></button>
                                                </div>
                                            </div>
                                            <div class="col-auto align-self-end">
                                                <div class="form-group">
                                                    <ul class="additional-links">
                                                        <li>
                                                            <a href="<?php echo e(route('password.request')); ?>"><?php echo e(trans('general.forgot_your_password')); ?></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.wokiee.four.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>