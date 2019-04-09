<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.admin.page.create')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="portlet box blue">
    <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="portlet-body form">
        <form class="horizontal-form" role="form" method="POST" action="<?php echo e(route('backend.admin.page.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-body">
                <div class="portlet box blue ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i> <?php echo e(trans('general.page_main_details')); ?>

                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group <?php echo e($errors->has('title_ar') ? ' has-error' : ''); ?>">
                                        <label for="title_ar" class="control-label"><?php echo e(trans('general.title_ar')); ?>*</label>
                                        <input id="title_ar" type="text" class="form-control" name="title_ar" value="<?php echo e(old('title_ar')); ?>" placeholder="<?php echo e(trans('general.title_ar')); ?>" required autofocus>
                                        <?php if($errors->has('title_ar')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('title_ar')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group<?php echo e($errors->has('title_en') ? ' has-error' : ''); ?>">
                                        <label for="title_en" class="control-label"><?php echo e(trans('general.title_en')); ?>*</label>
                                        <input id="title_en" type="text" class="form-control" name="title_en" value="<?php echo e(old('title_en')); ?>" placeholder="<?php echo e(trans('general.title_en')); ?>" required autofocus>
                                        <?php if($errors->has('title_en')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('title_en')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
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
                                <div class="col-md-3">
                                    <div class="form-group<?php echo e($errors->has('url') ? ' has-error' : ''); ?>">
                                        <label for="url" class="control-label"><?php echo e(trans('general.url')); ?> *</label>
                                        <input id="url" type="text" class="form-control" name="url" value="<?php echo e(old('url')); ?>" placeholder="<?php echo e(trans('general.url')); ?>" autofocus>
                                        <?php if($errors->has('url')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('url')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
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
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="image" placeholder="<?php echo e(trans('general.main_image')); ?>">
                                        <label for="form_control_1"><?php echo e(trans('general.main_image')); ?>*</label>
                                        <div class="help-block text-left">
                                            W * H - Best fit 1024 x 800 pixels
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description" class="control-label"><?php echo e(trans('general.content_ar')); ?></label>
                                        <textarea type="text" class="form-control tinymce" id="content_ar" name="content_ar" aria-multiline="true" maxlength="500"><?php echo e(old('content_ar')); ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description" class="control-label"> <?php echo e(trans('general.content_en')); ?></label>
                                        <textarea type="text" class="form-control tinymce" id="content_en" name="content_en" aria-multiline="true" maxlength="500"><?php echo e(old('content_en')); ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portlet box blue ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i> <?php echo e(trans('general.page_attributes_details')); ?>

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
                                        <label class="control-label sbold"><?php echo e(trans('general.on_menu_desktop')); ?></label></br>
                                        <label class="radio-inline">
                                            <input type="radio" name="on_menu_desktop" id="optionsRadios3" value="1"> <?php echo e(trans('general.on_menu_desktop')); ?></label>
                                        <label class="radio-inline">
                                            <input type="radio" name="on_menu_desktop" id="optionsRadios4" checked value="0"><?php echo e(trans('general.not_on_menu_desktop')); ?></label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label sbold"><?php echo e(trans('general.on_menu_mobile')); ?></label></br>
                                        <label class="radio-inline">
                                            <input type="radio" name="on_menu_mobile" id="optionsRadios3" value="1"> <?php echo e(trans('general.on_menu_mobile')); ?></label>
                                        <label class="radio-inline">
                                            <input type="radio" name="on_menu_mobile" id="optionsRadios4" checked value="0"> <?php echo e(trans('general.not_on_menu_mobile')); ?></label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label sbold"><?php echo e(trans('general.on_footer')); ?></label></br>
                                        <label class="radio-inline">
                                            <input type="radio" name="on_footer" id="optionsRadios3" value="1"> <?php echo e(trans('general.on_footer')); ?></label>
                                        <label class="radio-inline">
                                            <input type="radio" name="on_footer" id="optionsRadios4" checked value="0"><?php echo e(trans('general.not_on_footer')); ?></label>
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