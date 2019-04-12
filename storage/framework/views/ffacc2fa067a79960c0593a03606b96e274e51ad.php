<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.admin.category.create')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="portlet box blue">
    <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="portlet-body form">
        <form class="horizontal-form" role="form" method="POST" action="<?php echo e(route('backend.admin.category.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            
            <div class="form-body">
                <h3 class="form-section"><?php echo e(trans('general.create_category')); ?></h3>
                <div class="portlet box blue ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i> <?php echo e(trans('general.category_main_details')); ?>

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
                                    <div class="form-group <?php echo e($errors->has('caption_ar') ? ' has-error' : ''); ?>">
                                        <label for="caption_ar" class="control-label"><?php echo e(trans('general.caption_ar')); ?>*</label>
                                        <input id="caption_ar" type="text" class="form-control" name="caption_ar" value="<?php echo e(old('caption_ar')); ?>" placeholder="<?php echo e(trans('general.caption_ar')); ?>" required autofocus>
                                        <?php if($errors->has('caption_ar')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('caption_ar')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group<?php echo e($errors->has('caption_en') ? ' has-error' : ''); ?>">
                                        <label for="caption_en" class="control-label"><?php echo e(trans('general.caption_en')); ?>*</label>
                                        <input id="caption_en" type="text" class="form-control" name="caption_en" value="<?php echo e(old('caption_en')); ?>" placeholder="<?php echo e(trans('general.caption_en')); ?>" required autofocus>
                                        <?php if($errors->has('caption_en')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('caption_en')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description" class="control-label"><?php echo e(trans('general.description_ar')); ?></label>
                                        <textarea type="text" class="form-control" id="description_ar" name="description_ar" aria-multiline="true" maxlength="500"><?php echo e(old('description_ar')); ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description" class="control-label"><?php echo e(trans('general.description_en')); ?></label>
                                        <textarea type="text" class="form-control" id="description_en" name="description_en" aria-multiline="true" maxlength="500"><?php echo e(old('description_en')); ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="file" class="form-control" name="image" placeholder="image">
                                    <label for="form_control_1"><?php echo e(trans('general.main_image')); ?></label>
                                    <div class="help-block text-left">
                                        W * H - Best fit ['2313', '1125'] pixels
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
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

                            </div>
                        </div>
                    </div>

                </div>
                <div class="portlet box blue ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i> <?php echo e(trans('general.category_attributes_details')); ?>

                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <div class="row">
                                <hr>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold"><?php echo e(trans('general.active')); ?></label></br>
                                        <label class="radio-inline">
                                            <input type="radio" name="active" id="optionsRadios3" checked value="1"> <?php echo e(trans('general.active')); ?></label>
                                        <label class="radio-inline">
                                            <input type="radio" name="active" id="optionsRadios4" value="0"> <?php echo e(trans('general.not_active')); ?></label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold"><?php echo e(trans('general.is_featured')); ?></label></br>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_featured" id="optionsRadios3" value="1"> <?php echo e(trans('general.is_featured')); ?></label>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_featured" id="optionsRadios4" checked value="0"> <?php echo e(trans('general.not_is_featured')); ?></label>
                                    </div>
                                </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold"><?php echo e(trans('general.is_home')); ?></label></br>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_home" id="optionsRadios3" value="1"> <?php echo e(trans('general.is_home')); ?></label>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_home" id="optionsRadios4" checked value="0"> <?php echo e(trans('general.not_is_home')); ?></label>
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <hr>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold"><?php echo e(trans('general.on_new')); ?></label></br>
                                        <label class="radio-inline">
                                            <input type="radio" name="on_new" id="optionsRadios3" value="1"> <?php echo e(trans('general.on_new')); ?></label>
                                        <label class="radio-inline">
                                            <input type="radio" name="on_new" id="optionsRadios4" checked value="0"><?php echo e(trans('general.not_on_new')); ?></label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold"><?php echo e(trans('general.is_service')); ?></label></br>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_service" id="optionsRadios3" value="1"> <?php echo e(trans('general.is_service')); ?></label>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_service" id="optionsRadios4" checked value="0"> <?php echo e(trans('general.not_is_service')); ?></label>
                                    </div>
                                </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold"><?php echo e(trans('general.is_product')); ?></label></br>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_product" id="optionsRadios3" value="1"> <?php echo e(trans('general.is_product')); ?></label>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_product" id="optionsRadios4" checked value="0"> <?php echo e(trans('general.not_is_product')); ?></label>
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