<?php $__env->startSection('content'); ?>
    <div class="portlet box blue">
        <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="portlet-body form">
            <?php echo $__env->make('backend.modules.product_attributes.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <form class="horizontal-form" role="form" method="POST"
                  action="<?php echo e(route('backend.attribute.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="product_id" value="<?php echo e(request()->product_id); ?>">
                <div class="form-body">
                    <h3 class="form-section">Create Attribute</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group<?php echo e($errors->has('qty') ? ' has-error' : ''); ?>">
                                <label for="qty" class="control-label">qty</label>
                                <input id="qty"
                                       type="number"
                                       minlength="1"
                                       maxlength="999"
                                       class="form-control"
                                       value="<?php echo e(old('qty')); ?>"
                                       name="qty"
                                       placeholder="qty arabic"
                                       autofocus>
                                <?php if($errors->has('qty')): ?>
                                    <span class="help-block">
                                        <strong>
                                            <?php echo e($errors->first('qty')); ?>

                                        </strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="size_id" class="control-label">size_id *</label>
                                <select class="form-control input-xlarge" name="size_id" id="size_id" required>
                                    <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($size->id); ?>"><?php echo e($size->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="color_id" class="control-label">color_id *</label>
                                <select class="form-control input-xlarge" name="color_id" id="color_id" required>
                                    <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($color->id); ?>"><?php echo e($color->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group<?php echo e($errors->has('notes_ar') ? ' has-error' : ''); ?>">
                                <label for="notes_ar" class="control-label">notes_ar arabic</label>
                                <input id="notes_ar"
                                       type="text"
                                       class="form-control"
                                       name="notes_ar"
                                       value="<?php echo e(old('name_ar')); ?>"
                                       placeholder="notes_ar arabic"
                                       autofocus>
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
                            <div class="form-group<?php echo e($errors->has('notes_en') ? ' has-error' : ''); ?>">
                                <label for="notes_en" class="control-label">notes_en english</label>
                                <input id="notes_en"
                                       type="text"
                                       class="form-control"
                                       name="notes_en"
                                       value="<?php echo e(old('name_en')); ?>"
                                       placeholder="notes_en arabic"
                                       autofocus>
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
                    
                    <div class="form-actions right">
                        <a href="<?php echo url()->previous(); ?>" class="btn default">Cancel</a>
                        <button type="submit" class="btn blue">
                            <i class="fa fa-check"></i> Save
                        </button>
                        <a href="<?php echo e(route('backend.gallery.create',['type' => 'product' , 'element_id' => request('product_id')])); ?>"
                           class="btn blue">
                            <i class="fa fa-check"></i> Next
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>