<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.admin.newsletter.create')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="portlet box blue">
    <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="portlet-body">
        <?php echo $__env->make('backend.partials._admin_instructions',['title' => trans('general.newsletters') ,'message' => trans('message.admin_newsletter_message')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="portlet-body form">
            <form class="horizontal-form" role="form" method="POST" action="<?php echo e(route('backend.admin.newsletter.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-body">
                    <h3 class="form-section"><?php echo e(trans('general.create_newsletter')); ?></h3>
                    <div class="portlet box blue ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i> <?php echo e(trans('general.newsletter_main_details')); ?>

                            </div>
                        </div>
                        <div class="portlet-body form">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <label for="name" class="control-label"><?php echo e(trans('general.name')); ?></label>
                                        <input type="text" class="form-control" name="name" placeholder="<?php echo e(trans('general.name')); ?>" required="">
                                    </div>
                                    <div class="col-sm-5">
                                        <label for="email" class="control-label"><?php echo e(trans('general.email')); ?></label>
                                        <input type="text" class="form-control" name="email" placeholder="<?php echo e(trans('general.email')); ?>" required="">
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="menu" class="control-label"><?php echo e(trans('general.active')); ?></label><br>
                                        <input type="radio" name="active" value="1" checked> <?php echo e(trans('general.active')); ?><br>
                                        <input type="radio" name="active" value="0"> <?php echo e(trans('general.not_active')); ?><br>
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