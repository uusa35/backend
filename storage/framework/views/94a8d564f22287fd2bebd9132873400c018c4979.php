<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.admin.size.create')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="portlet box blue">
    <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="portlet-body">
        <?php echo $__env->make('backend.partials._admin_instructions',['title' => trans('general.sizes') ,'message' => trans('message.admin_size_message')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="portlet-body form">
            <form class="horizontal-form" role="form" method="POST" action="<?php echo e(route('backend.admin.size.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-body">
                    <h3 class="form-section"><?php echo e(trans('general.new_size')); ?></h3>
                    <div class="portlet box blue ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i> <?php echo e(trans('general.main_details')); ?>

                            </div>
                        </div>
                        <div class="portlet-body form">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group <?php echo e($errors->has('name_ar') ? ' has-error' : ''); ?>">
                                            <label for="name_ar" class="control-label"> <?php echo e(trans('general.name_ar')); ?>*</label>
                                            <input id="name_ar" type="text" class="form-control tooltips" data-container="body" data-placement="top" data-original-title="<?php echo e(trans('message.name_ar')); ?>" name="name_ar" value="<?php echo e(old('name_ar')); ?>" placeholder="<?php echo e(trans('general.name_ar')); ?>" required autofocus>
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
                                            <input id="name_en" type="text" class="form-control tooltips" data-container="body" data-placement="top" data-original-title="<?php echo e(trans('message.name_en')); ?>" name="name_en" value="<?php echo e(old('name_en')); ?>" placeholder="<?php echo e(trans('general.name_en')); ?>" required autofocus>
                                            <?php if($errors->has('name_en')): ?>
                                            <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('name_en')); ?>

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
                                <i class="fa fa-gift"></i> <?php echo e(trans('general.more_details')); ?>

                            </div>
                        </div>
                        <div class="portlet-body form">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label sbold tooltips" data-container="body" data-placement="top" data-original-title="<?php echo e(trans('message.active')); ?>"><?php echo e(trans('general.active')); ?></label></br>
                                            <label class="radio-inline">
                                                <input type="radio" name="active" id="optionsRadios3" checked value="1"> <?php echo e(trans('general.yes')); ?></label>
                                            <label class="radio-inline">
                                                <input type="radio" name="active" id="optionsRadios4" value="0"> <?php echo e(trans('general.no')); ?></label>
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