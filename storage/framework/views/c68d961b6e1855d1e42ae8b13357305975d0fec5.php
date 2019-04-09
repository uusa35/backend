<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.admin.notification.create')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="portlet box blue">
    <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="portlet-body form">
        <form class="horizontal-form" role="form" method="POST" action="<?php echo e(route('backend.admin.notification.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="notifiable_id" value="1">
            <input type="hidden" name="notifiable_type" value="Product">
            <div class="form-body">
                <div class="portlet box blue ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i> <?php echo e(trans('general.notification_main_details')); ?>

                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group <?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
                                        <label for="title" class="control-label"><?php echo e(trans('general.title')); ?> *</label>
                                        <input id="title" type="text" class="form-control" name="title" value="<?php echo e(old('title')); ?>" placeholder="name in arabic" required autofocus>
                                        <?php if($errors->has('title')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('title')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group<?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
                                        <label for="description" class="control-label"><?php echo e(trans('general.description')); ?>*</label>
                                        <input id="description" type="text" class="form-control" name="description" value="<?php echo e(old('description')); ?>" placeholder="name in english" required autofocus>
                                        <?php if($errors->has('description')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('description')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group<?php echo e($errors->has('type') ? ' has-error' : ''); ?>">
                                        <label for="type" class="control-label"><?php echo e(trans('general.type')); ?></label>
                                        <input id="type" type="text" class="form-control" name="type" value="<?php echo e(old('type')); ?>" placeholder="name in english" autofocus>
                                        <?php if($errors->has('type')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('type')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_control_1"><?php echo e(trans('general.image_path')); ?></label>
                                        <input type="file" class="form-control" name="path" placeholder="path">
                                        <div class="help-block text-left">
                                            only pdf
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_control_1"><?php echo e(trans('general.url')); ?></label>
                                        <input type="text" class="form-control" name="url" placeholder="<?php echo e(trans('general.url')); ?>">
                                        <div class="help-block text-left">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_control_1"><?php echo e(trans('general.main_image')); ?></label>
                                        <input type="file" class="form-control" name="image" placeholder="image">
                                        <div class="help-block text-left">
                                            W * H - Best fit ['500', '500'] pixels
                                        </div>
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