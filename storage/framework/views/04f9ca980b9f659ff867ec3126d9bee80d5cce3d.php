<?php $__env->startSection('content'); ?>
<div class="portlet box blue">
    <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="portlet-body form">
        <form class="horizontal-form" role="form" method="POST" action="<?php echo e(route('backend.admin.role.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-body">
                <div class="portlet box blue ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i> <?php echo e(trans('general.user_main_details')); ?>

                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"><?php echo e(trans('general.name')); ?></label>
                                        <input type="text" id="name" class="form-control" placeholder="<?php echo e(trans('general.name')); ?>" value="<?php echo e(old('name_ar')); ?>" required>
                                        <span class="help-block"> Role Name must be unique </span>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"><?php echo e(trans('general.slug_ar')); ?></label>
                                        <input type="text" id="slug_ar" name="slug_ar" class="form-control" value="<?php echo e(old('slug_ar')); ?>" placeholder="<?php echo e(trans('general.slug_ar')); ?>" required>
                                        
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"><?php echo e(trans('general.slug_en')); ?></label>
                                        <input type="text" id="slug_en" name="slug_en" class="form-control" value="<?php echo e(old('slug_en')); ?>" placeholder="<?php echo e(trans('general.slug_en')); ?>" required>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"><?php echo e(trans('general.caption_ar')); ?></label>
                                        <input type="text" id="caption_ar" name="caption_ar" class="form-control" value="<?php echo e(old('caption_ar')); ?>" placeholder="<?php echo e(trans('general.caption_ar')); ?>" required>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"><?php echo e(trans('general.caption_en')); ?></label>
                                        <input type="text" id="caption_en" name="caption_en" class="form-control" value="<?php echo e(old('caption_en')); ?>" placeholder="<?php echo e(trans('general.caption_en')); ?>" required>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group<?php echo e($errors->has('order') ? ' has-error' : ''); ?>">
                                        <label for="order" class="control-label"><?php echo e(trans('general.order')); ?> *</label>
                                        <input id="order" type="number" class="form-control" name="order" value="<?php echo e(old('order')); ?>" placeholder="<?php echo e(trans('general.order')); ?>" maxlength="2" autofocus>
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
                                    <div class="form-group <?php echo e($errors->has('color') ? ' has-error' : ''); ?>">
                                        <label for="color" class="control-label"><?php echo e(trans('general.color')); ?>*</label>
                                        <input type="text" id="hue-demo" class="form-control demo" data-control="hue" name="color" value="#ff6161">
                                        <?php if($errors->has('color')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('color')); ?>

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
                            <i class="fa fa-gift"></i> <?php echo e(trans('general.user_main_details')); ?>

                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label sbold"><?php echo e(trans('general.active')); ?></label>
                                            <div class="radio-list">
                                                <label class="radio-inline">
                                                    <input type="radio" name="active" id="optionsRadios1" value="1" checked> <?php echo e(trans('general.active')); ?> </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="active" id="optionsRadios2" value="0">
                                                    <?php echo e(trans('general.not_active')); ?></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold"><?php echo e(trans('general.is_admin')); ?></label>
                                        <div class="radio-list">
                                            <label class="radio-inline">
                                                <input type="radio" name="is_admin" id="optionsRadios3" value="1">
                                                <?php echo e(trans('general.is_admin')); ?></label>
                                            <label class="radio-inline">
                                                <input type="radio" name="is_admin" id="optionsRadios4" value="0" checked> <?php echo e(trans('general.not_is_admin')); ?></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold"><?php echo e(trans('general.is_super')); ?></label>
                                        <div class="radio-list">
                                            <label class="radio-inline">
                                                <input type="radio" name="is_super" id="optionsRadios3" value="1">
                                                <?php echo e(trans('general.is_super')); ?></label>
                                            <label class="radio-inline">
                                                <input type="radio" name="is_super" id="optionsRadios4" value="0" checked> <?php echo e(trans('general.not_is_super')); ?></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold"><?php echo e(trans('general.is_client')); ?></label>
                                        <div class="radio-list">
                                            <label class="radio-inline">
                                                <input type="radio" name="is_client" id="optionsRadios3" value="1">
                                                <?php echo e(trans('general.is_client')); ?></label>
                                            <label class="radio-inline">
                                                <input type="radio" name="is_client" id="optionsRadios4" value="0" checked> <?php echo e(trans('general.not_is_client')); ?></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold"><?php echo e(trans('general.is_designer')); ?></label>
                                        <div class="radio-list">
                                            <label class="radio-inline">
                                                <input type="radio" name="is_designer" id="optionsRadios3" value="1">
                                                <?php echo e(trans('general.is_designer')); ?></label>
                                            <label class="radio-inline">
                                                <input type="radio" name="is_designer" id="optionsRadios4" value="0" checked> <?php echo e(trans('general.not_is_designer')); ?></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label sbold"><?php echo e(trans('general.is_visible')); ?></label>
                                            <div class="radio-list">
                                                <label class="radio-inline">
                                                    <input type="radio" name="visible" id="optionsRadios5" value="1" checked> <?php echo e(trans('general.is_visible')); ?> </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="visible" id="optionsRadios6" value="0"> <?php echo e(trans('general.not_is_visible')); ?></label>
                                            </div>
                                            <span class="help-block"> Visible Means that this role shall appear on Application (ex. admin is invisible)</span>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold"><?php echo e(trans('general.is_company')); ?></label>
                                        <div class="radio-list">
                                            <label class="radio-inline">
                                                <input type="radio" name="is_company" id="optionsRadios7" value="1">
                                                <?php echo e(trans('general.is_company')); ?></label>
                                            <label class="radio-inline">
                                                <input type="radio" name="is_company" id="optionsRadios8" value="0" checked> <?php echo e(trans('general.not_is_company')); ?></label>
                                        </div>
                                        <span class="help-block"> Role that has companies attributes (ex. branches) </span>
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