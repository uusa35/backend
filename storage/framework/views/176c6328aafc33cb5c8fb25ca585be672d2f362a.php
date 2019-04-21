<?php $__env->startSection('content'); ?>
    <div class="portlet box blue">
        <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="portlet-body form">
            <form class="horizontal-form" role="form" method="POST"
                  action="<?php echo e(route('backend.color.update', $element->id)); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="_method" value="put">
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group <?php echo e($errors->has('name_ar') ? ' has-error' : ''); ?>">
                                <label for="name_ar" class="control-label">Name Arabic*</label>
                                <input id="name_ar"
                                       type="text"
                                       class="form-control"
                                       name="name_ar"
                                       value="<?php echo e($element->name_ar); ?>"
                                       placeholder="name in arabic"
                                       required autofocus>
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
                                <label for="name_en" class="control-label">Name English*</label>
                                <input id="name_en"
                                       type="text"
                                       class="form-control"
                                       name="name_en"
                                       value="<?php echo e($element->name_en); ?>"
                                       placeholder="name in english"
                                       required autofocus>
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
                            <div class="form-group <?php echo e($errors->has('code') ? ' has-error' : ''); ?>">
                                <label for="code" class="control-label">code*</label>
                                <input type="text" id="hue-demo" class="form-control demo" data-control="hue"
                                       name="code"
                                       value="<?php echo e($element->code); ?>" required>
                                <?php if($errors->has('code')): ?>
                                    <span class="help-block">
                                        <strong>
                                            <?php echo e($errors->first('code')); ?>

                                        </strong>
                                    </span>
                                <?php endif; ?>
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