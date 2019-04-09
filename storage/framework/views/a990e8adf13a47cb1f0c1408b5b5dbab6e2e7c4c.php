<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.admin.questionnaire.create')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="portlet box blue">
    <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="portlet-body form">
        <form class="horizontal-form" role="form" method="POST" action="<?php echo e(route('backend.admin.questionnaire.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-body">
                <div class="portlet box blue ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i> <?php echo e(trans('general.questionnaire_main_details')); ?>

                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
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
                                <div class="col-md-6">
                                    <div class="form-group<?php echo e($errors->has('mobile') ? ' has-error' : ''); ?>">
                                        <label for="mobile" class="control-label"><?php echo e(trans('general.mobile')); ?>*</label>
                                        <input id="mobile" type="number" class="form-control" name="mobile" value="<?php echo e(old('mobile')); ?>" placeholder="<?php echo e(trans('general.mobile')); ?>" required autofocus>
                                        <?php if($errors->has('mobile')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('mobile')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                        <label for="email" class="control-label"><?php echo e(trans('general.email')); ?>*</label>
                                        <input id="email" type="text" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(trans('general.email')); ?>" required autofocus>
                                        <?php if($errors->has('email')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('email')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>



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