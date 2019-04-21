<div class="modal fade" id="new-question" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="portlet-body">
                            <?php echo $__env->make('backend.partials._admin_instructions',['title' => trans('general.questions') ,'message' => trans('message.question_message')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <div class="panel-heading">
                                <?php echo e(trans('general.new_question')); ?>

                            </div>
                            <div class="panel-body">
                                <form class="horizontal-form" role="form" method="POST" action="<?php echo e(route('backend.admin.question.store')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="col-md-12">
                                        <div class="form-group<?php echo e($errors->has('name_ar') ? ' has-error' : ''); ?>">
                                            <label for="name_ar" class="control-label"> <?php echo e(trans('general.name_ar')); ?></label>
                                            <input id="name_ar" type="text" class="form-control" name="name_ar" value="<?php echo e(old('name_ar')); ?>" placeholder="name_ar" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group<?php echo e($errors->has('name_en') ? ' has-error' : ''); ?>">
                                            <label for="name_en" class="control-label"> <?php echo e(trans('general.name_en')); ?></label>
                                            <input id="name_en" type="text" class="form-control" name="name_en" value="<?php echo e(old('name_en')); ?>" placeholder="name_en" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group<?php echo e($errors->has('notes_ar') ? ' has-error' : ''); ?>">
                                            <label for="notes_ar" class="control-label"> <?php echo e(trans('general.notes_ar')); ?></label>
                                            <input id="notes_ar" type="text" class="form-control" name="notes_ar" value="<?php echo e(old('notes_ar')); ?>" placeholder="notes_ar" autofocus>
                                            <?php if($errors->has('notes_ar')): ?>
                                            <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('notes_ar')); ?>

                                                </strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group<?php echo e($errors->has('notes_en') ? ' has-error' : ''); ?>">
                                            <label for="notes_en" class="control-label"> <?php echo e(trans('general.notes_en')); ?> </label>
                                            <input id="notes_en" type="text" class="form-control" name="notes_en" value="<?php echo e(old('notes_en')); ?>" placeholder="notes_en">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label sbold"> <?php echo e(trans('general.active')); ?></label></br>
                                            <label class="radio-inline">
                                                <input type="radio" name="active" id="optionsRadios3" checked value="1"> <?php echo e(trans('general.yes')); ?></label>
                                            <label class="radio-inline">
                                                <input type="radio" name="active" id="optionsRadios4" value="0"> <?php echo e(trans('general.no')); ?></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label sbold"><?php echo e(trans('general.is_multi')); ?></label></br>
                                            <label class="radio-inline">
                                                <input type="radio" name="is_multi" id="optionsRadios5" checked value="1"> <?php echo e(trans('general.is_multi')); ?></label>
                                            <label class="radio-inline">
                                                <input type="radio" name="is_multi" id="optionsRadios6" value="0"><?php echo e(trans('general.is_text')); ?></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group<?php echo e($errors->has('order') ? ' has-error' : ''); ?>">
                                            <label for="order" class="control-label"><?php echo e(trans('general.order')); ?> *</label>
                                            <input id="order" type="text" class="form-control" name="order" value="<?php echo e(old('order')); ?>" placeholder="order" maxlength="2" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn green modal-save"><?php echo e(trans('general.add_question')); ?></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    
                    <div class="panel panel-warning">
                        <div class="portlet-body">
                            <?php echo $__env->make('backend.partials._admin_instructions',['title' => trans('general.answers') ,'message' => trans('message.answer_message')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <div class="panel-heading">
                                <?php echo e(trans('general.create_answer')); ?>

                            </div>
                            <div class="panel-body">
                                <form class="horizontal-form" role="form" method="POST" action="<?php echo e(route('backend.admin.answer.store')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="control-label"> <?php echo e(trans('general.assigned_question')); ?> </label>
                                            <select class="form-control" name="question_id" required>
                                                <?php $__currentLoopData = $questions->where('is_multi', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($q->id); ?>"><?php echo e($q->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group<?php echo e($errors->has('name_ar') ? ' has-error' : ''); ?>">
                                            <label for="name_ar" class="control-label"> <?php echo e(trans('general.name_ar')); ?> </label>
                                            <input id="name_ar" type="text" class="form-control" name="name_ar" value="<?php echo e(old('name_ar')); ?>" placeholder="name_ar" required autofocus>
                                            <?php if($errors->has('name_ar')): ?>
                                            <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('name_ar')); ?>

                                                </strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group<?php echo e($errors->has('name_en') ? ' has-error' : ''); ?>">
                                            <label for="name_en" class="control-label"> <?php echo e(trans('general.name_en')); ?> *</label>
                                            <input id="name_en" type="text" class="form-control" name="name_en" value="<?php echo e(old('name_en')); ?>" placeholder="name_en" required autofocus>
                                        </div>
                                    </div>
                                    
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label sbold"> <?php echo e(trans('general.active')); ?></label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="active" id="optionsRadios3" checked value="1"> <?php echo e(trans('general.yes')); ?></label>
                                <label class="radio-inline">
                                    <input type="radio" name="active" id="optionsRadios4" value="0"> <?php echo e(trans('general.no')); ?></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label sbold"> <?php echo e(trans('general.is_multi')); ?></label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="is_multi" id="optionsRadios5" checked value="1"> <?php echo e(trans('general.yes')); ?></label>
                                <label class="radio-inline">
                                    <input type="radio" name="is_multi" id="optionsRadios6" value="0"> <?php echo e(trans('general.no')); ?></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label sbold"> <?php echo e(trans('general.value')); ?></label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="value" id="optionsRadios5" checked value="1"> <?php echo e(trans('general.yes')); ?></label>
                                <label class="radio-inline">
                                    <input type="radio" name="value" id="optionsRadios6" value="0"> <?php echo e(trans('general.no')); ?></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group<?php echo e($errors->has('order') ? ' has-error' : ''); ?>">
                                <label for="order" class="control-label"> <?php echo e(trans('general.order')); ?></label>
                                <input id="order" type="text" class="form-control" name="order" value="<?php echo e(old('order')); ?>" placeholder="order" maxlength="2">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn yellow modal-save"> <?php echo e(trans('general.add_answer')); ?></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn red btn-outline" data-dismiss="modal"> <?php echo e(trans('general.cancel')); ?></button>
    </div>
    </form>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>