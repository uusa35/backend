<?php $__env->startSection('breadcrumbs'); ?>
    <?php echo e(Breadcrumbs::render('register')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <div class="container-indent">
        <div class="container">
            <h1 class="tt-title-subpages noborder"><?php echo e(trans('general.create_an_account')); ?></h1>
            <div class="tt-login-form">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6">
                        <div class="tt-item">
                            <h2 class="tt-title"><?php echo e(trans('general.information')); ?></h2>
                            <div class="form-default">
                                <form method="post" novalidate="novalidate"
                                      action="<?php echo e(route('register')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="name"><?php echo e(trans('general.name')); ?>*</label>
                                        
                                        <input id="name" type="text"
                                               class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>"
                                               name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                                        <?php if($errors->has('name')): ?>
                                            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>
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
                                    <div class="form-group">
                                        <label for="password"><?php echo e(trans('general.password')); ?> *</label>
                                        <input id="password" type="password"
                                               class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"
                                               name="password" required>
                                        <?php if($errors->has('password')): ?>
                                            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="password"><?php echo e(trans('general.password')); ?> *</label>
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="country"><?php echo e(trans('general.country')); ?> *</label>
                                        <select name="country_id" id="country" style="width: 100%; height: 40px;" required>
                                            <option value=""><?php echo e(trans('general.select_country')); ?></option>
                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="form-group">
                                                <button class="btn btn-border"
                                                        type="submit"><?php echo e(trans('general.create')); ?></button>
                                            </div>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="form-group">
                                                <ul class="additional-links">
                                                    <li>
                                                        <a class=""
                                                           href="<?php echo e(route('frontend.home')); ?>"><?php echo e(trans('general.return_home')); ?></a>
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