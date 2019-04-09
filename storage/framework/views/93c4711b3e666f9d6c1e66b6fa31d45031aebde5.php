<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.admin.color.create')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="portlet box blue">
    <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="portlet-body form">
        <form class="horizontal-form" role="form" method="POST" action="<?php echo e(route('backend.admin.color.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-body">
                <div class="portlet box blue ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i> <?php echo e(trans('general.color_main_details')); ?>

                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group <?php echo e($errors->has('name_ar') ? ' has-error' : ''); ?>">
                                        <label for="name_ar" class="control-label"><?php echo e(trans('general.name_ar')); ?>*</label>
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
                                <div class="col-md-6">
                                    <div class="form-group<?php echo e($errors->has('name_en') ? ' has-error' : ''); ?>">
                                        <label for="name_en" class="control-label"><?php echo e(trans('general.name_en')); ?>*</label>
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
                                <div class="col-md-6">
                                    <div class="form-group <?php echo e($errors->has('code') ? ' has-error' : ''); ?>">
                                        <label for="code" class="control-label"><?php echo e(trans('general.code')); ?>*</label>
                                        <input type="text" id="hue-demo" class="form-control demo" data-control="hue" name="code" value="#ff6161">
                                        <?php if($errors->has('code')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('code')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="portlet box blue ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i> <?php echo e(trans('general.color_attributes_details')); ?>

                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <div class="row">

                                <div class="col-md-6">
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
                    </div>
                </div>

                <?php echo $__env->make('backend.partials.forms._btn-group', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
    </div>
</div>
</form>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>