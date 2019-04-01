<?php $__env->startSection('content'); ?>
<div class="portlet box blue">
    <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="portlet-body form">
        <form class="horizontal-form" role="form" method="POST" action="<?php echo e(route('backend.admin.brand.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group <?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="control-label"><?php echo e(trans('general.name')); ?>*</label>
                            <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" placeholder="<?php echo e(trans('general.name')); ?>" required autofocus>
                            <?php if($errors->has('name')): ?>
                            <span class="help-block">
                                <strong>
                                    <?php echo e($errors->first('name')); ?>

                                </strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group <?php echo e($errors->has('slug_ar') ? ' has-error' : ''); ?>">
                            <label for="slug_ar" class="control-label"><?php echo e(trans('general.slug_ar')); ?>*</label>
                            <input id="slug_ar" type="text" class="form-control" name="slug_ar" value="<?php echo e(old('slug_ar')); ?>" placeholder="<?php echo e(trans('general.slug_ar')); ?>" required autofocus>
                            <?php if($errors->has('slug_ar')): ?>
                            <span class="help-block">
                                <strong>
                                    <?php echo e($errors->first('slug_ar')); ?>

                                </strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group<?php echo e($errors->has('slug_en') ? ' has-error' : ''); ?>">
                            <label for="slug_en" class="control-label"><?php echo e(trans('general.slug_en')); ?>*</label>
                            <input id="slug_en" type="text" class="form-control" name="slug_en" value="<?php echo e(old('slug_en')); ?>" placeholder="<?php echo e(trans('general.slug_en')); ?>" required autofocus>
                            <?php if($errors->has('slug_en')): ?>
                            <span class="help-block">
                                <strong>
                                    <?php echo e($errors->first('slug_en')); ?>

                                </strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group<?php echo e($errors->has('order') ? ' has-error' : ''); ?>">
                            <label for="order" class="control-label"><?php echo e(trans('general.order')); ?> *</label>
                            <input id="order" type="number" class="form-control" name="order" value="<?php echo e(old('order')); ?>" placeholder="<?php echo e(trans('general.order')); ?> " maxlength="2" autofocus>
                            <?php if($errors->has('order')): ?>
                            <span class="help-block">
                                <strong>
                                    <?php echo e($errors->first('order')); ?>

                                </strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="form_control_1"><?php echo e(trans('general.main_image')); ?>*</label>
                            <input type="file" class="form-control" name="image" placeholder="<?php echo e(trans('general.main_image')); ?>" required>
                            <div class="help-block text-left">
                                W * H - Best fit [1362 × 716] pixels
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label sbold"><?php echo e(trans('general.on_home')); ?></label></br>
                            <label class="radio-inline">
                                <input type="radio" name="is_home" id="optionsRadios3" value="1"> <?php echo e(trans('general.on_home')); ?></label>
                            <label class="radio-inline">
                                <input type="radio" name="is_home" id="optionsRadios4" checked value="0"> <?php echo e(trans('general.not_on_home')); ?></label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label sbold"><?php echo e(trans('general.active')); ?></label></br>
                            <label class="radio-inline">
                                <input type="radio" name="active" id="optionsRadios3" checked value="1"> <?php echo e(trans('general.active')); ?></label>
                            <label class="radio-inline">
                                <input type="radio" name="active" id="optionsRadios4" value="0"> <?php echo e(trans('general.not_active')); ?></label>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo $__env->make('backend.partials.forms._btn-group', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>