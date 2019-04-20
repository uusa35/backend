<?php $__env->startSection('breadcrumbs'); ?>
    <?php echo e(Breadcrumbs::render('backend.timing.create')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="portlet box blue">
        <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="portlet-body">
            <?php echo $__env->make('backend.partials._admin_instructions',['title' => trans('general.timings') ,'message' => trans('message.new_timing')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="portlet-body form">
                <form class="horizontal-form" role="form" method="POST" action="<?php echo e(route('backend.timing.store')); ?>"
                      enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-body">
                        <h3 class="form-section"><?php echo e(trans('general.new_timing')); ?></h3>
                        <div class="portlet box blue">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i> <?php echo e(trans('general.timing_main_details')); ?>

                                </div>
                            </div>
                            <div class="portlet-body form">
                                <div class="form-body">
                                    <div class="row">
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        <div class="col-md-4">
                                            <div class="form-group <?php echo e($errors->has('start') ? ' has-error' : ''); ?>">
                                                <label for="start" class="control-label"><?php echo e(trans('general.start')); ?>

                                                    *</label>
                                                <div class="col">
                                                    <div class="input-group">
                                                        <input id="start" type="text"
                                                               class="form-control timepicker timepicker-24"
                                                               name="start" value="<?php echo e(old('start')); ?>"
                                                               placeholder="<?php echo e(trans('general.start')); ?>" required
                                                               autofocus>
                                                        <span class="input-group-btn">
                                                        <button class="btn default" type="button">
                                                            <i class="fa fa-clock-o"></i>
                                                        </button>
                                                    </span>
                                                    </div>
                                                </div>
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
                                                <label for="end" class="control-label"><?php echo e(trans('general.end')); ?>

                                                    *</label>
                                                <div class="col">
                                                    <div class="input-group">
                                                        <input id="end" type="text"
                                                               class="form-control timepicker timepicker-24" name="end"
                                                               value="<?php echo e(old('end')); ?>"
                                                               placeholder="<?php echo e(trans('general.end')); ?>" required
                                                               autofocus>
                                                        <span class="input-group-btn">
                                                        <button class="btn default" type="button">
                                                            <i class="fa fa-clock-o"></i>
                                                        </button>
                                                    </span>
                                                    </div>
                                                </div>
                                                <?php if($errors->has('end')): ?>
                                                    <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('end')); ?>

                                                </strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group <?php echo e($errors->has('notes_ar') ? ' has-error' : ''); ?>">
                                                <label for="notes_ar"
                                                       class="control-label"><?php echo e(trans('general.notes_ar')); ?>

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
                                                <label for="notes_en"
                                                       class="control-label"><?php echo e(trans('general.notes_en')); ?>

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
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        


                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="portlet box blue ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i> <?php echo e(trans('general.timing_details')); ?>

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
                                                            <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="single"
                                                           class="control-label"><?php echo e(trans('general.service')); ?></label>
                                                    <select id="single" class="form-control select2" name="service_id">
                                                        <option value=""><?php echo e(trans('general.choose_service')); ?></option>
                                                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($service->id); ?>"><?php echo e($service->name_ar); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <input type="hidden" value="<?php echo e(auth()->user()->id); ?>" name="user_id">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="single"
                                                           class="control-label"><?php echo e(trans('general.service')); ?></label>
                                                    <select id="single" class="form-control select2" name="service_id">
                                                        <option value=""><?php echo e(trans('general.choose_service')); ?></option>

                                                        <?php $__currentLoopData = $services->where('user_id', auth()->id()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($service->id); ?>"><?php echo e($service->name_ar); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="single"
                                                       class="control-label"><?php echo e(trans('general.day')); ?></label>
                                                <select id="single" class="form-control select2" name="day_id">
                                                    <option value=""><?php echo e(trans('general.choose_day_of_service')); ?></option>
                                                    <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($day->id); ?>"><?php echo e($day->day); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portlet-body form">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label sbold"><?php echo e(trans('general.is_off')); ?></label></br>
                                            <label class="radio-inline">
                                                <input type="radio" name="is_off"
                                                       id="optionsRadios1" value="1">
                                                is_off
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="is_off"
                                                       id="optionsRadios2" checked
                                                       value="0">
                                                not_is_off</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label sbold"><?php echo e(trans('general.allow_multi_select')); ?></label></br>
                                            <label class="radio-inline">
                                                <input type="radio" name="allow_multi_select"
                                                       id="optionsRadios1"
                                                       value="1"> <?php echo e(trans('general.yes')); ?></label>
                                            <label class="radio-inline">
                                                <input type="radio" name="allow_multi_select"
                                                       id="optionsRadios2"
                                                       checked value="0"> <?php echo e(trans('general.no')); ?></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label sbold"><?php echo e(trans('general.is_available')); ?></label></br>
                                            <label class="radio-inline">
                                                <input type="radio" name="is_available"
                                                       id="optionsRadios1"
                                                       value="1">
                                                <?php echo e(trans('general.yes')); ?> </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="is_available"
                                                       id="optionsRadios2" checked
                                                       value="0"> <?php echo e(trans('general.no')); ?></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <?php echo $__env->make('backend.partials.forms._btn-group', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    ##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
    <script src="<?php echo e(mix('js/datepicker.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/bootstrap-timepicker.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/clockface.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>