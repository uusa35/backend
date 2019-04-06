<?php $__env->startSection('content'); ?>
<div class="portlet box blue">
    <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="portlet-body form">
        <form class="horizontal-form" role="form" method="POST" action="<?php echo e(route('backend.admin.privilege.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-body">
                <div class="row">
                    <div class="col-md-6">
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
                    <div class="col-md-6">
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
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description_ar" class="control-label"><?php echo e(trans('general.description_ar')); ?></label>
                            <textarea type="text" class="form-control tinymce" id="description_ar" name="description_ar" aria-multiline="true" maxlength="500"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description_en" class="control-label"><?php echo e(trans('general.description_en')); ?></label>
                            <textarea type="text" class="form-control tinymce" id="description_en" name="description_en" aria-multiline="true" maxlength="500"></textarea>
                        </div>
                    </div>
                </div>
                <?php echo $__env->make('backend.partials.forms._btn-group', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>