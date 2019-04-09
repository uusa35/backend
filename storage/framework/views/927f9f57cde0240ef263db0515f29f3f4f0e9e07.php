<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.admin.branch.create')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="portlet box blue">
    <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="portlet-body form">
        <form class="horizontal-form" role="form" method="POST" action="<?php echo e(route('backend.branch.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group<?php echo e($errors->has('name_ar') ? ' has-error' : ''); ?>">
                            <label for="name_ar" class="col-md-4 control-label"><?php echo e(trans('general.name_ar')); ?>*</label>

                            <input id="name_ar" type="text" class="form-control" name="name_ar" value="<?php echo e(old('name_ar')); ?>" placeholder="<?php echo e(trans('general.name_ar')); ?>" required autofocus>
                            <?php if($errors->has('name_ar')): ?>
                            <span class="help-block">
                                <strong>
                                    <?php echo e($errors->first('name_ar')); ?>

                                </strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group<?php echo e($errors->has('name_en') ? ' has-error' : ''); ?>">
                            <label for="name_en" class="col-md-4 control-label"><?php echo e(trans('general.name_en')); ?>*</label>

                            <input id="name_en" type="text" class="form-control" name="name_en" value="<?php echo e(old('name_en')); ?>" placeholder="<?php echo e(trans('general.name_en')); ?>" required autofocus>
                            <?php if($errors->has('name_en')): ?>
                            <span class="help-block">
                                <strong>
                                    <?php echo e($errors->first('name_en')); ?>

                                </strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group<?php echo e($errors->has('address_ar') ? ' has-error' : ''); ?>">
                            <label for="address_ar" class="col-md-4 control-label"><?php echo e(trans('general.address_ar')); ?>* </label>

                            <input id="address_ar" type="text" class="form-control" name="address_ar" value="<?php echo e(old('address_ar')); ?>" placeholder="<?php echo e(trans('general.address_ar')); ?>" required autofocus>
                            <?php if($errors->has('address_ar')): ?>
                            <span class="help-block">
                                <strong>
                                    <?php echo e($errors->first('address_ar')); ?>

                                </strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group<?php echo e($errors->has('address_en') ? ' has-error' : ''); ?>">
                            <label for="address_en" class="col-md-4 control-label"><?php echo e(trans('general.address_en')); ?>* </label>

                            <input id="address_en" type="text" class="form-control" name="address_en" value="<?php echo e(old('address_en')); ?>" placeholder="<?php echo e(trans('general.address_en')); ?>" required autofocus>
                            <?php if($errors->has('address_en')): ?>
                            <span class="help-block">
                                <strong>
                                    <?php echo e($errors->first('address_en')); ?>

                                </strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="form-group<?php echo e($errors->has('description_ar') ? ' has-error' : ''); ?>">
                            <label for="description_ar" class="col-md-4 control-label"><?php echo e(trans('general.description_ar')); ?>* </label>

                            <input id="description_ar" type="text" class="form-control" name="description_ar" value="<?php echo e(old('description_ar')); ?>" placeholder="<?php echo e(trans('general.description_ar')); ?>" required autofocus>
                            <?php if($errors->has('description_ar')): ?>
                            <span class="help-block">
                                <strong>
                                    <?php echo e($errors->first('description_ar')); ?>

                                </strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group<?php echo e($errors->has('description_en') ? ' has-error' : ''); ?>">
                            <label for="description_en" class="col-md-4 control-label"><?php echo e(trans('general.description_en')); ?>* </label>

                            <input id="description_en" type="text" class="form-control" name="description_en" value="<?php echo e(old('description_en')); ?>" placeholder="<?php echo e(trans('general.description_en')); ?>" required autofocus>
                            <?php if($errors->has('description_en')): ?>
                            <span class="help-block">
                                <strong>
                                    <?php echo e($errors->first('description_en')); ?>

                                </strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group<?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
                            <label for="phone" class="col-md-4 control-label"><?php echo e(trans('general.phone')); ?>*</label>

                            <input id="phone" type="text" class="form-control" name="phone" value="<?php echo e(old('phone')); ?>" placeholder="<?php echo e(trans('general.phone')); ?> " required autofocus>
                            <?php if($errors->has('phone')): ?>
                            <span class="help-block">
                                <strong>
                                    <?php echo e($errors->first('phone')); ?>

                                </strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group<?php echo e($errors->has('mobile') ? ' has-error' : ''); ?>">
                            <label for="mobile" class="col-md-4 control-label"><?php echo e(trans('general.mobile')); ?>*</label>

                            <input id="mobile" type="text" class="form-control" name="mobile" value="<?php echo e(old('mobile')); ?>" placeholder="<?php echo e(trans('general.mobile')); ?>" required autofocus>
                            <?php if($errors->has('mobile')): ?>
                            <span class="help-block">
                                <strong>
                                    <?php echo e($errors->first('mobile')); ?>

                                </strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group<?php echo e($errors->has('longitude') ? ' has-error' : ''); ?>">
                            <label for="longitude" class="col-md-4 control-label"><?php echo e(trans('general.longitude')); ?>*</label>

                            <input id="longitude" type="text" class="form-control" name="longitude" value="<?php echo e(old('longitude')); ?>" placeholder="<?php echo e(trans('general.longitude')); ?>" autofocus>
                            <?php if($errors->has('longitude')): ?>
                            <span class="help-block">
                                <strong>
                                    <?php echo e($errors->first('longitude')); ?>

                                </strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group<?php echo e($errors->has('latitude') ? ' has-error' : ''); ?>">
                            <label for="latitude" class="col-md-4 control-label"><?php echo e(trans('general.latitude')); ?>*</label>

                            <input id="latitude" type="text" class="form-control" name="latitude" value="<?php echo e(old('latitude')); ?>" placeholder="<?php echo e(trans('general.latitude')); ?>" autofocus>
                            <?php if($errors->has('latitude')): ?>
                            <span class="help-block">
                                <strong>
                                    <?php echo e($errors->first('latitude')); ?>

                                </strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="area_id"><?php echo e(trans('general.area')); ?></label>
                            <select name="area_id" id="area_id" class="form-control">
                                <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($area->id); ?>"><?php echo e($area->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="user_id"><?php echo e(trans('general.user')); ?></label>
                            <select name="user_id" id="user_id" class="form-control">
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label sbold"><?php echo e(trans('general.active')); ?></label></br>
                            <label class="radio-inline">
                                <input type="radio" name="active" id="optionsRadios1" value="1"> active </label>
                            <label class="radio-inline">
                                <input type="radio" name="active" id="optionsRadios2" checked value="0"> not_Active</label>
                        </div>
                    </div>
                </div>
                <?php echo $__env->make('backend.partials.forms._btn-group', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>