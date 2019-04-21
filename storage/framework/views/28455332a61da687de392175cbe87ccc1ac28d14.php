<?php $__env->startSection('content'); ?>
    <div class="portlet box blue">
        <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="portlet-body form">
            <form class="horizontal-form" role="form" method="POST"
                  action="<?php echo e(route('backend.category.update', $element->id)); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="_method" value="put">
                <input type="hidden" name="parent_id" value="<?php echo e($element->parent_id); ?>">
                <input type="hidden" name="id" value="<?php echo e($element->id); ?>">
                <div class="form-body">
                    <h3 class="form-section">Edit category</h3>
                    
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
                            <div class="form-group <?php echo e($errors->has('caption_ar') ? ' has-error' : ''); ?>">
                                <label for="caption_ar" class="control-label">caption Arabic*</label>
                                <input id="caption_ar"
                                       type="text"
                                       class="form-control"
                                       name="caption_ar"
                                       value="<?php echo e($element->caption_ar); ?>"
                                       placeholder="name in arabic"
                                       required autofocus>
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
                                <label for="caption_en" class="control-label">caption English*</label>
                                <input id="caption_en"
                                       type="text"
                                       class="form-control"
                                       name="caption_en"
                                       value="<?php echo e($element->caption_en); ?>"
                                       placeholder="name in english"
                                       required autofocus>
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
                                <label for="description" class="control-label">description arabic</label>
                                <textarea type="text" class="form-control" id="description_ar" name="description_ar"
                                          aria-multiline="true" maxlength="500"><?php echo e($element->description_ar); ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description" class="control-label">description english</label>
                                <textarea type="text" class="form-control" id="description_en" name="description_en"
                                          aria-multiline="true" maxlength="500"><?php echo e($element->description_en); ?></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group<?php echo e($errors->has('order') ? ' has-error' : ''); ?>">
                                <label for="order" class="control-label">order *</label>
                                <input id="order"
                                       type="number"
                                       class="form-control"
                                       name="order"
                                       value="<?php echo e($element->order); ?>"
                                       placeholder="order"
                                       maxlength="2"
                                       autofocus>
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
                            <div class="form-group">
                                <input type="file" class="form-control" name="image" placeholder="image">
                                <label for="form_control_1">Main Image</label>
                                <div class="help-block text-left">
                                    W * H - Best fit ['2313', '1125'] pixels
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="<?php echo e(asset('storage/uploads/images/thumbnail/'.$element->image)); ?>" alt="" class="img-sm">
                        </div>
                    </div>

                    <div class="row">
                        <hr>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label sbold">active</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="active" id="optionsRadios3" <?php echo e($element->active ? 'checked' : null); ?>

                                           value="1"> active</label>
                                <label class="radio-inline">
                                    <input type="radio" name="active" id="optionsRadios4" <?php echo e(!$element->active ? 'checked' : null); ?>

                                           value="0">not active</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label sbold">is_featured</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="is_featured" id="optionsRadios3" <?php echo e($element->is_featured ? 'checked' : null); ?>

                                           value="1"> is_featured</label>
                                <label class="radio-inline">
                                    <input type="radio" name="is_featured" id="optionsRadios4" <?php echo e(!$element->is_featured ? 'checked' : null); ?>

                                           value="0">not is_featured</label>
                            </div>
                        </div>
                        
                            
                                
                                
                                    
                                           
                                
                                    
                                           
                            
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label sbold">is_home</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="is_home" id="optionsRadios3" <?php echo e($element->is_home ? 'checked' : null); ?>

                                           value="1"> is_home</label>
                                <label class="radio-inline">
                                    <input type="radio" name="is_home" id="optionsRadios4" <?php echo e(!$element->is_home ? 'checked' : null); ?>

                                           value="0">not is_home</label>
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