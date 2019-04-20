<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.admin.area.create')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="portlet box blue">
    <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="portlet-body">
        <?php echo $__env->make('backend.partials._admin_instructions',['title' => trans('general.area') ,'message' =>
        trans('message.admin_area_message')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="portlet-body form">
            <form class="horizontal-form" role="form" method="POST" action="<?php echo e(route('backend.admin.area.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-body">
                    <h3 class="form-section"><?php echo e(trans('general.create_area')); ?></h3>
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
                                        <div class="form-group<?php echo e($errors->has('slug_ar') ? ' has-error' : ''); ?>">
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
                                        <div class="form-group <?php echo e($errors->has('slug_en') ? ' has-error' : ''); ?>">
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
                                    <div class="col-md-6">
                                        <?php if(!$countries->isEmpty()): ?>
                                        <div class="form-group">
                                            <label for="duration" class="control-label"><?php echo e(trans('general.country')); ?> *</label>
                                            <select class="form-control input-xlarge" name="country_id" id="country" required="required">
                                                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <?php else: ?>
                                        <span class="label label-danger">No Countries Listed, Please Create Country First -- All Countries exist already have currency.</span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group<?php echo e($errors->has('order') ? ' has-error' : ''); ?>">
                                            <label for="order" class="control-label"><?php echo e(trans('general.order')); ?>*</label>
                                            <input id="order" type="text" class="form-control" name="order" value="<?php echo e(old('order')); ?>" placeholder="<?php echo e(trans('general.order')); ?>" required autofocus>
                                            <?php if($errors->has('order')): ?>
                                            <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('order')); ?>

                                                </strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group<?php echo e($errors->has('longitude') ? ' has-error' : ''); ?>">
                                            <label for="longitude" class="control-label"><?php echo e(trans('general.longitude')); ?>*</label>
                                            <input id="longitude" type="text" class="form-control" name="longitude" value="<?php echo e(old('longitude')); ?>" placeholder="<?php echo e(trans('general.longitude')); ?>" required autofocus>
                                            <?php if($errors->has('longitude')): ?>
                                            <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('longitude')); ?>

                                                </strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group<?php echo e($errors->has('latitude') ? ' has-error' : ''); ?>">
                                            <label for="latitude" class="control-label"><?php echo e(trans('general.latitude')); ?>*</label>
                                            <input id="latitude" type="text" class="form-control" name="latitude" value="<?php echo e(old('latitude')); ?>" placeholder="<?php echo e(trans('general.latitude')); ?>" required autofocus>
                                            <?php if($errors->has('latitude')): ?>
                                            <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('latitude')); ?>

                                                </strong>
                                            </span>
                                            <?php endif; ?>
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