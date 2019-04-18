<?php $__env->startSection('content'); ?>
    <div class="portlet box blue">
        <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="portlet-body form">
            <form class="horizontal-form" role="form" method="POST"
                  action="<?php echo e(route('backend.aboutus.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group <?php echo e($errors->has('title_ar') ? ' has-error' : ''); ?>">
                                <label for="title_ar" class="control-label">title Arabic*</label>
                                <input id="title_ar"
                                       type="text"
                                       class="form-control"
                                       name="title_ar"
                                       value="<?php echo e(old('title_ar')); ?>"
                                       placeholder="name in arabic"
                                       required autofocus>
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
                                <label for="title_en" class="control-label">title English*</label>
                                <input id="title_en"
                                       type="text"
                                       class="form-control"
                                       name="title_en"
                                       value="<?php echo e(old('title_en')); ?>"
                                       placeholder="name in english"
                                       required autofocus>
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
                            <div class="form-group">
                                <label for="description" class="control-label">content arabic</label>
                                <textarea type="text" class="form-control tinymce" id="content_ar" name="content_ar"
                                          aria-multiline="true" maxlength="500"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description" class="control-label">content english</label>
                                <textarea type="text" class="form-control tinymce" id="content_en" name="content_en"
                                          aria-multiline="true" maxlength="500"></textarea>
                            </div>
                        </div>
                    </div>
                <?php echo $__env->make('backend.partials.forms._btn-group', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>