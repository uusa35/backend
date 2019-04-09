<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.admin.answer.create')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="portlet box blue">
    <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="portlet-body form">
        <form class="horizontal-form" role="form" method="POST" action="<?php echo e(route('backend.admin.answer.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-body">
                <div class="portlet box blue ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i> <?php echo e(trans('general.answer_main_details')); ?>

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
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group <?php echo e($errors->has('value') ? ' has-error' : ''); ?>">
                                        <label for="value" class="control-label"><?php echo e(trans('general.value')); ?>*</label>
                                        <input id="value" type="text" class="form-control" name="value" value="<?php echo e(old('value')); ?>" placeholder="<?php echo e(trans('general.value')); ?>" required autofocus>
                                        <?php if($errors->has('value')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('value')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label"><?php echo e(trans('general.icon')); ?></label>
                                        <select class="form-control" name="icon" required>
                                            <?php $__currentLoopData = $icons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($v); ?>"><?php echo e($v); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <span class="help-block"> <a target="_blank" href="https://fontawesome.com/cheatsheet" class="">Check Visual Icons </a></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group<?php echo e($errors->has('order') ? ' has-error' : ''); ?>">
                                        <label for="order" class="control-label"><?php echo e(trans('general.order')); ?>*</label>
                                        <input id="order" type="number" class="form-control" name="order" value="<?php echo e(old('order')); ?>" placeholder="<?php echo e(trans('general.order')); ?>" required autofocus>
                                        <?php if($errors->has('order')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('order')); ?>

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
                            <i class="fa fa-gift"></i> <?php echo e(trans('general.answer_main_details')); ?>

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
                                        <label class="control-label sbold"><?php echo e(trans('general.is_multi')); ?></label></br>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_multi" id="optionsRadios3" value="1"> <?php echo e(trans('general.is_multi')); ?></label>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_multi" id="optionsRadios4" checked value="0"><?php echo e(trans('general.not_is_multi')); ?></label>
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