<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.admin.faq.create')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="portlet box blue">
    <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="portlet-body">
        <?php echo $__env->make('backend.partials._admin_instructions',['title' => trans('general.faq') ,'message' => trans('message.admin_faq_message')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="portlet-body form">
            <form class="horizontal-form" role="form" method="POST" action="<?php echo e(route('backend.admin.faq.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-body">
                    <h3 class="form-section"><?php echo e(trans('general.create_faq')); ?></h3>
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
                                        <div class="form-group <?php echo e($errors->has('title_ar') ? ' has-error' : ''); ?>">
                                            <label for="title_ar" class="control-label"><?php echo e(trans('general.title_ar')); ?>*</label>
                                            <input id="title_ar" type="text" class="form-control tooltips" data-container="body" data-placement="top" data-original-title="<?php echo e(trans('message.title_ar')); ?>" name="title_ar" value="<?php echo e(old('title_ar')); ?>" placeholder="<?php echo e(trans('general.title_ar')); ?>" required autofocus>
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
                                            <input id="title_en" type="text" class="form-control tooltips" data-container="body" data-placement="top" data-original-title="<?php echo e(trans('message.title_en')); ?>" name="title_en" value="<?php echo e(old('title_en')); ?>" placeholder="<?php echo e(trans('general.title_en')); ?>" required autofocus>
                                            <?php if($errors->has('title_en')): ?>
                                            <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('title_en')); ?>

                                                </strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>



                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="content_ar" class="control-label"><?php echo e(trans('general.content_ar')); ?></label>
                                            <textarea type="text" class="form-control tooltips" data-container="body" data-placement="top" data-original-title="<?php echo e(trans('message.content_ar')); ?>" id="content_ar" name="content_ar" aria-multiline="true" maxlength="500" <?php echo e(old('content_ar')); ?>></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="content_en" class="control-label"><?php echo e(trans('general.content_en')); ?></label>
                                            <textarea type="text" class="form-control tooltips" data-container="body" data-placement="top" data-original-title="<?php echo e(trans('message.content_en')); ?>" id="content_en" name="content_en" aria-multiline="true" maxlength="500"><?php echo e(old('content_en')); ?></textarea>
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