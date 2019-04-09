<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.admin.coupon.create')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="portlet box blue">
    <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="portlet-body form">
        <form class="horizontal-form" role="form" method="POST" action="<?php echo e(route('backend.coupon.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-body">
                <h3 class="form-section"><?php echo e(trans('general.create_coupon')); ?></h3>
                
                <div class="portlet box blue ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i> <?php echo e(trans('general.coupon_main_details')); ?>

                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group<?php echo e($errors->has('value') ? ' has-error' : ''); ?>">
                                        <label for="value" class="control-label"><?php echo e(trans('general.value')); ?>*</label>
                                        <input id="value" type="number" class="form-control" max="99" maxlength="3" name="value" value="<?php echo e(old('value')); ?>" placeholder="<?php echo e(trans('general.value')); ?>" required autofocus>
                                        <?php if($errors->has('value')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('value')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group<?php echo e($errors->has('code') ? ' has-error' : ''); ?>">
                                        <label for="code" class="control-label"><?php echo e(trans('general.code')); ?>*</label>
                                        <input id="code" type="text" class="form-control" name="code" value="<?php echo e(old('code')); ?>" placeholder="<?php echo e(trans('general.code')); ?>" required autofocus>
                                        <?php if($errors->has('code')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('code')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group<?php echo e($errors->has('minimum_charge') ? ' has-error' : ''); ?>">
                                        <label for="minimum_charge" class="control-label"><?php echo e(trans('general.minimum_charge')); ?>*</label>
                                        <input id="minimum_charge" type="number" class="form-control" name="minimum_charge" value="<?php echo e(old('minimum_charge')); ?>" placeholder="<?php echo e(trans('general.minimum_charge')); ?>" maxlength="3" max="999" required autofocus>
                                        <?php if($errors->has('minimum_charge')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('minimum_charge')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group<?php echo e($errors->has('due_date') ? ' has-error' : ''); ?>">
                                        <label for="due_date" class="control-label"><?php echo e(trans('general.due_date')); ?>*</label>
                                        <input id="due_date" type="date" class="form-control" name="due_date" value="<?php echo e(old('due_date')); ?>" placeholder="<?php echo e(trans('general.due_date')); ?>" maxlength="4" required autofocus>
                                        <?php if($errors->has('due_date')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('due_date')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="duration" class="control-label"><?php echo e(trans('general.user')); ?> *</label>
                                            <select class="form-control input-xlarge" name="user_id" id="user" required>
                                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portlet box blue ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i> <?php echo e(trans('general.coupon_attributes_details')); ?>

                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label sbold"><?php echo e(trans('general.active')); ?></label></br>
                                        <label class="radio-inline">
                                            <input type="radio" name="active" id="optionsRadios1" value="1" <?php echo e(old('active') ? 'checked' : null); ?>> <?php echo e(trans('general.active')); ?> </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="active" id="optionsRadios2" <?php echo e(!old('active') ? 'checked' : null); ?> value="0"> <?php echo e(trans('general.not_active')); ?></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label sbold"><?php echo e(trans('general.is_percentage')); ?></label></br>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_percentage" id="optionsRadios3" value="1" <?php echo e(old('is_percentage')  ? 'checked' : null); ?>>
                                            <?php echo e(trans('general.is_percentage')); ?></label>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_percentage" id="optionsRadios4" <?php echo e(!old('is_percentage') ? 'checked' : null); ?> value="0"> <?php echo e(trans('general.not_is_percentage')); ?></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label sbold"><?php echo e(trans('general.is_permanent')); ?></label></br>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_permanent" id="optionsRadios5" value="1" <?php echo e(old('is_permanent')  ? 'checked' : null); ?>>
                                            <?php echo e(trans('general.is_permanent')); ?></label>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_permanent" id="optionsRadios6" <?php echo e(!old('is_permanent') ? 'checked' : null); ?> value="0"> <?php echo e(trans('general.not_is_permanent')); ?></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label sbold"><?php echo e(trans('general.consumed')); ?></label></br>
                                        <label class="radio-inline">
                                            <input type="radio" name="consumed" id="optionsRadios5" value="1" <?php echo e(old('consumed')  ? 'checked' : null); ?>>
                                            <?php echo e(trans('general.consumed')); ?></label>
                                        <label class="radio-inline">
                                            <input type="radio" name="consumed" id="optionsRadios6" <?php echo e(!old('consumed') ? 'checked' : null); ?> value="0"> <?php echo e(trans('general.not_consumed')); ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
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