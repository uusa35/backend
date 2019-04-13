<?php $__env->startSection('breadcrumbs'); ?>
    <?php echo e(Breadcrumbs::render('backend.admin.timing.create')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="portlet box blue">
        <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="portlet-body form">
            <form class="horizontal-form" role="form" method="POST" action="<?php echo e(route('backend.admin.timing.store')); ?>"
                  enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" day="api_token" value="<?php echo e(str_random(rand(10,99))); ?>">
                <div class="form-body">
                    <h3 class="form-section"><?php echo e(trans('general.create_timing')); ?></h3>
                    
                    <div class="portlet box blue ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i> <?php echo e(trans('general.timing_main_details')); ?>

                            </div>
                        </div>
                        <div class="portlet-body form">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group <?php echo e($errors->has('day') ? ' has-error' : ''); ?>">
                                            <label for="day" class="control-label"><?php echo e(trans('general.day')); ?>*</label>
                                            <input id="day" type="text" class="form-control" day="day"
                                                   value="<?php echo e(old('day')); ?>" placeholder="<?php echo e(trans('general.day')); ?>"
                                                   required autofocus>
                                            <?php if($errors->has('day')): ?>
                                                <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('day')); ?>

                                            </strong>
                                        </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group <?php echo e($errors->has('day_name_ar') ? ' has-error' : ''); ?>">
                                            <label for="day_name_ar"
                                                   class="control-label"><?php echo e(trans('general.day_name_ar')); ?>*</label>
                                            <input id="day_name_ar" type="text" class="form-control" day="day_name_ar"
                                                   value="<?php echo e(old('day_name_ar')); ?>"
                                                   placeholder="<?php echo e(trans('general.day_name_ar')); ?>" required autofocus>
                                            <?php if($errors->has('day_name_ar')): ?>
                                                <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('day_name_ar')); ?>

                                            </strong>
                                        </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group <?php echo e($errors->has('day_name_en') ? ' has-error' : ''); ?>">
                                            <label for="day_name_en"
                                                   class="control-label"><?php echo e(trans('general.day_name_en')); ?>*</label>
                                            <input id="day_name_en" type="text" class="form-control" day="day_name_en"
                                                   value="<?php echo e(old('day_name_en')); ?>"
                                                   placeholder="<?php echo e(trans('general.day_name_en')); ?>" required autofocus>
                                            <?php if($errors->has('day_name_en')): ?>
                                                <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('day_name_en')); ?>

                                            </strong>
                                        </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group <?php echo e($errors->has('start') ? ' has-error' : ''); ?>">
                                            <label for="start" class="control-label"><?php echo e(trans('general.start')); ?>

                                                *</label>
                                            <input id="start" type="text" class="form-control" day="start"
                                                   value="<?php echo e(old('start')); ?>" placeholder="<?php echo e(trans('general.start')); ?>"
                                                   required autofocus>
                                            <?php if($errors->has('start')): ?>
                                                <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('start')); ?>

                                            </strong>
                                        </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group <?php echo e($errors->has('end') ? ' has-error' : ''); ?>">
                                            <label for="end" class="control-label"><?php echo e(trans('general.end')); ?>*</label>
                                            <input id="end" type="text" class="form-control" day="end"
                                                   value="<?php echo e(old('end')); ?>" placeholder="<?php echo e(trans('general.end')); ?>"
                                                   required autofocus>
                                            <?php if($errors->has('end')): ?>
                                                <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('end')); ?>

                                            </strong>
                                        </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group <?php echo e($errors->has('type') ? ' has-error' : ''); ?>">
                                            <label for="type" class="control-label"><?php echo e(trans('general.type')); ?>*</label>
                                            <input id="type" type="text" class="form-control" day="type"
                                                   value="<?php echo e(old('type')); ?>" placeholder="<?php echo e(trans('general.type')); ?>"
                                                   required autofocus>
                                            <?php if($errors->has('type')): ?>
                                                <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('type')); ?>

                                            </strong>
                                        </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group <?php echo e($errors->has('notes_ar') ? ' has-error' : ''); ?>">
                                            <label for="notes_ar" class="control-label"><?php echo e(trans('general.notes_ar')); ?>

                                                *</label>
                                            <input id="notes_ar" type="text" class="form-control" name="notes_ar"
                                                   value="<?php echo e(old('notes_ar')); ?>"
                                                   placeholder="<?php echo e(trans('general.notes_ar')); ?>" required autofocus>
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
                                        <div class="form-group <?php echo e($errors->has('notes_en') ? ' has-error' : ''); ?>">
                                            <label for="notes_en" class="control-label"><?php echo e(trans('general.notes_en')); ?>

                                                *</label>
                                            <input id="notes_en" type="text" class="form-control" name="notes_en"
                                                   value="<?php echo e(old('notes_en')); ?>"
                                                   placeholder="<?php echo e(trans('general.notes_en')); ?>" required autofocus>
                                            <?php if($errors->has('notes_en')): ?>
                                                <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('notes_en')); ?>

                                            </strong>
                                        </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group <?php echo e($errors->has('week_start') ? ' has-error' : ''); ?>">
                                            <label for="week_start"
                                                   class="control-label"><?php echo e(trans('general.week_start')); ?>*</label>
                                            <input id="week_start" type="text" class="form-control" day="week_start"
                                                   value="<?php echo e(old('week_start')); ?>"
                                                   placeholder="<?php echo e(trans('general.week_start')); ?>" required autofocus>
                                            <?php if($errors->has('week_start')): ?>
                                                <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('week_start')); ?>

                                            </strong>
                                        </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group <?php echo e($errors->has('day_no') ? ' has-error' : ''); ?>">
                                            <label for="day_no" class="control-label"><?php echo e(trans('general.day_no')); ?>

                                                *</label>
                                            <input id="day_no" type="day_no" class="form-control" day="day_no" value=""
                                                   placeholder="<?php echo e(trans('general.day_no')); ?>" required autofocus>
                                            <?php if($errors->has('day_no')): ?>
                                                <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('day_no')); ?>

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
                                <i class="fa fa-gift"></i> <?php echo e(trans('general.user_role_details')); ?>

                            </div>
                        </div>
                        <div class="portlet-body form">
                            <div class="form-body">
                                <div class="row">
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isAdminOrAbove')): ?>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="single"
                                                       class="control-label"><?php echo e(trans('general.user')); ?></label>
                                                <select id="single" class="form-control select2" name="user_id">
                                                    <option value=""><?php echo e(trans('general.choose_company')); ?></option>
                                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($user->name); ?>"><?php echo e($user->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                                </select>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <input type="hidden" value="<?php echo e(auth()->user()->id); ?>" name="user_id">
                                    <?php endif; ?>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="single"
                                                   class="control-label"><?php echo e(trans('general.service')); ?></label>
                                            <select id="single" class="form-control select2">
                                                <option value=""><?php echo e(trans('general.choose_service')); ?></option>

                                                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($service->name_ar); ?>"><?php echo e($service->name_ar); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="single"
                                                   class="control-label"><?php echo e(trans('general.day')); ?></label>
                                            <select id="single" class="form-control select2" name="day_id">
                                                <option value=""><?php echo e(trans('general.choose_day_of_service')); ?></option>
                                                <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($day->day); ?>"><?php echo e($day->day); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                            </select>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="portlet box blue ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i> <?php echo e(trans('general.product_main_details')); ?>

                            </div>
                        </div>
                        <div class="portlet-body form">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label sbold"><?php echo e(trans('general.is_off')); ?></label></br>
                                            <label class="radio-inline">
                                                <input type="radio" day="is_off" id="optionsRadios1" value="1"> is_off
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" day="is_off" id="optionsRadios2" checked value="0">
                                                not_is_off</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label sbold"><?php echo e(trans('general.allow_multiselect')); ?></label></br>
                                            <label class="radio-inline">
                                                <input type="radio" day="allow_multiselect" id="optionsRadios1"
                                                       value="1"> allow_multiselect </label>
                                            <label class="radio-inline">
                                                <input type="radio" day="allow_multiselect" id="optionsRadios2" checked
                                                       value="0"> not_allow_multiselect</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label sbold"><?php echo e(trans('general.is_available')); ?></label></br>
                                            <label class="radio-inline">
                                                <input type="radio" day="is_available" id="optionsRadios1" value="1">
                                                is_available </label>
                                            <label class="radio-inline">
                                                <input type="radio" day="is_available" id="optionsRadios2" checked
                                                       value="0"> not_is_available</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <?php echo $__env->make('backend.partials.forms._btn-group', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>