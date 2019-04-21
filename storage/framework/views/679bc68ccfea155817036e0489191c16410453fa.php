<?php $__env->startSection('content'); ?>
    <div class="portlet box blue">
        <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="portlet-body form">
            <form class="horizontal-form" role="form" method="POST"
                  action="<?php echo e(route('backend.survey.update', $element->id)); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="_method" value="put">
                <div class="form-body">
                    <h3 class="form-section">Edit Survey</h3>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group <?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                <label for="name" class="control-label">name *</label>
                                <input id="name"
                                       type="text"
                                       class="form-control"
                                       name="name"
                                       value="<?php echo e($element->name); ?>"
                                       placeholder="name in arabic"
                                       required autofocus>
                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong>
                                            <?php echo e($errors->first('name')); ?>

                                        </strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group <?php echo e($errors->has('slug_ar') ? ' has-error' : ''); ?>">
                                <label for="slug_ar" class="control-label">Slug Arabic*</label>
                                <input id="slug_ar"
                                       type="text"
                                       class="form-control"
                                       name="slug_ar"
                                       value="<?php echo e($element->slug_ar); ?>"
                                       placeholder="name in arabic"
                                       required autofocus>
                                <?php if($errors->has('slug_ar')): ?>
                                    <span class="help-block">
                                        <strong>
                                            <?php echo e($errors->first('slug_ar')); ?>

                                        </strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group<?php echo e($errors->has('slug_en') ? ' has-error' : ''); ?>">
                                <label for="slug_en" class="control-label">Slug English*</label>
                                <input id="slug_en"
                                       type="text"
                                       class="form-control"
                                       name="slug_en"
                                       value="<?php echo e($element->slug_en); ?>"
                                       placeholder="name in english"
                                       required autofocus>
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
                        <div class="col-md-4">
                            <div class="form-group<?php echo e($errors->has('order') ? ' has-error' : ''); ?>">
                                <label for="order" class="control-label">order *</label>
                                <input id="order"
                                       type="text"
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
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description" class="control-label">description arabic</label>
                                <textarea type="text" class="form-control" id="description_ar" name="description_ar"
                                          aria-multiline="true"
                                          maxlength="500"<?php echo e($element->description_ar); ?>></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description" class="control-label">description english</label>
                                <textarea type="text" class="form-control" id="description_en" name="description_en"
                                          aria-multiline="true"
                                          maxlength="500"><?php echo e($element->description_en); ?></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <hr>
                        <?php if($questions->isNotEmpty()): ?>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Questions List*</label>
                                    <select multiple="multiple" class="multi-select" id="my_multi_select1"
                                            name="questions[]">
                                        <?php $__currentLoopData = $questions->where('active', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="#" disabled="disabled">Question</option>
                                            <option value="<?php echo e($question->id); ?>"
                                                    <?php echo e(in_array($question->id,$element->questions->pluck('id')->toArray()) ? 'selected' : null); ?>

                                            ><?php echo e($question->name_ar); ?></option>
                                            <?php if($question->answers->isNotEmpty()): ?>
                                                <option value="#" disabled="disabled"><strong>Answers</strong></option>
                                                <option value="#" disabled="disabled" style="background-color: #0d638f">
                                                    <?php $__currentLoopData = $question->answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php echo e($a->name); ?>,
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </option>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="row">
                        <hr>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label sbold">active</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="active" id="optionsRadios3" checked
                                           value="1"> active</label>
                                <label class="radio-inline">
                                    <input type="radio" name="active" id="optionsRadios4"
                                           value="0">not active</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label sbold">is_home</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="is_home" id="optionsRadios3"
                                           value="1"> is_home</label>
                                <label class="radio-inline">
                                    <input type="radio" name="is_home" id="optionsRadios4" checked
                                           value="0">not is_home</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label sbold">is_desktop</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="is_desktop" id="optionsRadios3"
                                           value="1"> is_desktop</label>
                                <label class="radio-inline">
                                    <input type="radio" name="is_desktop" id="optionsRadios4" checked
                                           value="0">not is_desktop</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label sbold">is_footer</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="is_footer" id="optionsRadios7" checked
                                           value="1"> is_footer</label>
                                <label class="radio-inline">
                                    <input type="radio" name="is_footer" id="optionsRadios8"
                                           value="0">not is_footer</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions right">
                        <a class="btn btn-warning" data-toggle="modal" href="#" data-target="#new-question"
                           data-title="New Question/Answer"
                                
                                
                        >Create New Question/Answer</a>
                        
                        <a href="<?php echo url()->previous(); ?>" class="btn default">Cancel</a>
                        <button type="submit" class="btn btn-info">
                            <i class="fa fa-save"></i> Save Survey
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php echo $__env->make('backend.partials.forms._modal_question_answer_create', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>