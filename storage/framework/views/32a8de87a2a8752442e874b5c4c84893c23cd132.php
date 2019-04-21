<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.package.create')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="portlet box blue">
    <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="portlet-body">
        <?php echo $__env->make('backend.partials._admin_instructions',['title' => trans('general.packages') ,'message' => trans('message.admin_package_message')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="portlet-body form">
            <form class="horizontal-form" role="form" method="POST" action="<?php echo e(route('backend.package.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-body">
                    <h3 class="form-section"><?php echo e(trans('general.create_shipment_package')); ?></h3>
                    
                    <div class="portlet box blue ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i> <?php echo e(trans('general.shipment_main_details')); ?>

                            </div>
                        </div>
                        <div class="portlet-body form">
                            <div class="form-body">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group <?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                            <label for="name" class="control-label"><?php echo e(trans('general.name_ar')); ?> *</label>
                                            <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" placeholder="<?php echo e(trans('general.name_ar')); ?>" required autofocus>
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
                                        <div class="form-group<?php echo e($errors->has('charge') ? ' has-error' : ''); ?>">
                                            <label for="charge" class="control-label"><?php echo e(trans('general.charge')); ?> *</label>
                                            <input id="charge" type="text" class="form-control" name="charge" value="<?php echo e(old('charge')); ?>" placeholder="<?php echo e(trans('general.charge')); ?>" required autofocus>
                                            <?php if($errors->has('charge')): ?>
                                            <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('charge')); ?>

                                                </strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group <?php echo e($errors->has('notes_ar') ? ' has-error' : ''); ?>">
                                            <label for="notes_ar" class="control-label"><?php echo e(trans('general.notes_ar')); ?>*</label>
                                            <input id="notes_ar" type="text" class="form-control" name="notes_ar" value="<?php echo e(old('notes_ar')); ?>" placeholder="<?php echo e(trans('general.notes_ar')); ?>" required autofocus>
                                            <?php if($errors->has('notes_ar')): ?>
                                            <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('notes_ar')); ?>

                                                </strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group <?php echo e($errors->has('notes_en') ? ' has-error' : ''); ?>">
                                            <label for="notes_en" class="control-label"><?php echo e(trans('general.notes_en')); ?>*</label>
                                            <input id="notes_en" type="text" class="form-control" name="notes_en" value="<?php echo e(old('notes_en')); ?>" placeholder="<?php echo e(trans('general.notes_en')); ?>" required autofocus>
                                            <?php if($errors->has('notes_en')): ?>
                                            <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('notes_en')); ?>

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
                                <i class="fa fa-gift"></i> <?php echo e(trans('general.shipment_attributes_details')); ?>

                            </div>
                        </div>
                        <div class="portlet-body form">
                            <div class="form-body">
                                <div class="row">
                                    <hr>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label sbold"><?php echo e(trans('general.active')); ?></label></br>
                                            <label class="radio-inline">
                                                <input type="radio" name="active" id="optionsRadios3" value="1"> <?php echo e(trans('general.active')); ?></label>
                                            <label class="radio-inline">
                                                <input type="radio" name="active" id="optionsRadios4" checked value="0"> <?php echo e(trans('general.not_active')); ?></label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label sbold"><?php echo e(trans('general.is_available')); ?></label></br>
                                            <label class="radio-inline">
                                                <input type="radio" name="is_available" id="optionsRadios3" value="1"> <?php echo e(trans('general.is_available')); ?></label>
                                            <label class="radio-inline">
                                                <input type="radio" name="is_available" id="optionsRadios4" checked value="0"> <?php echo e(trans('general.not_is_available')); ?></label>
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