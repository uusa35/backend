<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.branch.create')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="portlet box blue">
    <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="portlet-body">
        <?php echo $__env->make('backend.partials._admin_instructions',['title' => trans('general.branches') ,'message' => trans('message.admin_branch_message')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="portlet-body form">
            <form class="horizontal-form" role="form" method="POST" action="<?php echo e(route('backend.branch.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-body">
                    <h3 class="form-section"><?php echo e(trans('general.create_branch')); ?></h3>
                    <div class="portlet box blue ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i> <?php echo e(trans('general.main_details')); ?>

                            </div>
                        </div>
                        <div class="portlet-body form">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group<?php echo e($errors->has('name_ar') ? ' has-error' : ''); ?>">
                                            <label for="name_ar" class="control-label"><?php echo e(trans('general.name_ar')); ?>*</label>

                                            <input id="name_ar" type="text" class="form-control tooltips" data-container="body" data-placement="top" data-original-title="<?php echo e(trans('message.name_ar')); ?>" name=" name_ar" value="<?php echo e(old('name_ar')); ?>" placeholder="<?php echo e(trans('general.name_ar')); ?>" required autofocus>
                                            <?php if($errors->has('name_ar')): ?>
                                            <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('name_ar')); ?>

                                                </strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group<?php echo e($errors->has('name_en') ? ' has-error' : ''); ?>">
                                            <label for="name_en" class="control-label"><?php echo e(trans('general.name_en')); ?>*</label>

                                            <input id="name_en" type="text" class="form-control tooltips" data-container="body" data-placement="top" data-original-title="<?php echo e(trans('message.name_en')); ?>" name=" name_en" value="<?php echo e(old('name_en')); ?>" placeholder="<?php echo e(trans('general.name_en')); ?>" required autofocus>
                                            <?php if($errors->has('name_en')): ?>
                                            <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('name_en')); ?>

                                                </strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group<?php echo e($errors->has('address_ar') ? ' has-error' : ''); ?>">
                                            <label for="address_ar" class="control-label"><?php echo e(trans('general.address_ar')); ?>*
                                            </label>

                                            <input id="address_ar" type="text" class="form-control tooltips" data-container="body" data-placement="top" data-original-title="<?php echo e(trans('message.address_ar')); ?>" name=" address_ar" value="<?php echo e(old('address_ar')); ?>" placeholder="<?php echo e(trans('general.address_ar')); ?>" required autofocus>
                                            <?php if($errors->has('address_ar')): ?>
                                            <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('address_ar')); ?>

                                                </strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group<?php echo e($errors->has('address_en') ? ' has-error' : ''); ?>">
                                            <label for="address_en" class="control-label"><?php echo e(trans('general.address_en')); ?>*
                                            </label>

                                            <input id="address_en" type="text" class="form-control tooltips" data-container="body" data-placement="top" data-original-title="<?php echo e(trans('message.address_en')); ?>" name=" address_en" value="<?php echo e(old('address_en')); ?>" placeholder="<?php echo e(trans('general.address_en')); ?>" required autofocus>
                                            <?php if($errors->has('address_en')): ?>
                                            <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('address_en')); ?>

                                                </strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                    <div class="col-lg-6">
                                        <div class="form-group<?php echo e($errors->has('description_ar') ? ' has-error' : ''); ?>">
                                            <label for="description_ar" class="control-label"><?php echo e(trans('general.description_ar')); ?>* </label>

                                            <input id="description_ar" type="text" class="form-control tooltips" data-container="body" data-placement="top" data-original-title="<?php echo e(trans('message.description_ar')); ?>" name=" description_ar" value="<?php echo e(old('description_ar')); ?>" placeholder="<?php echo e(trans('general.description_ar')); ?>" required autofocus>
                                            <?php if($errors->has('description_ar')): ?>
                                            <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('description_ar')); ?>

                                                </strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group<?php echo e($errors->has('description_en') ? ' has-error' : ''); ?>">
                                            <label for="description_en" class="control-label"><?php echo e(trans('general.description_en')); ?>* </label>

                                            <input id="description_en" type="text" class="form-control tooltips" data-container="body" data-placement="top" data-original-title="<?php echo e(trans('message.description_en')); ?>" name=" description_en" value="<?php echo e(old('description_en')); ?>" placeholder="<?php echo e(trans('general.description_en')); ?>" required autofocus>
                                            <?php if($errors->has('description_en')): ?>
                                            <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('description_en')); ?>

                                                </strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group<?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
                                            <label for="phone" class="control-label"><?php echo e(trans('general.phone')); ?>*</label>

                                            <input id="phone" type="text" class="form-control tooltips" data-container="body" data-placement="top" data-original-title="<?php echo e(trans('message.phone')); ?>" name=" phone" value="<?php echo e(old('phone')); ?>" placeholder="<?php echo e(trans('general.phone')); ?> " required autofocus>
                                            <?php if($errors->has('phone')): ?>
                                            <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('phone')); ?>

                                                </strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group<?php echo e($errors->has('mobile') ? ' has-error' : ''); ?>">
                                            <label for="mobile" class="control-label"><?php echo e(trans('general.mobile')); ?>*</label>

                                            <input id="mobile" type="text" class="form-control tooltips" data-container="body" data-placement="top" data-original-title="<?php echo e(trans('message.mobile')); ?>" name=" mobile" value="<?php echo e(old('mobile')); ?>" placeholder="<?php echo e(trans('general.mobile')); ?>" required autofocus>
                                            <?php if($errors->has('mobile')): ?>
                                            <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('mobile')); ?>

                                                </strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group<?php echo e($errors->has('longitude') ? ' has-error' : ''); ?>">
                                            <label for="longitude" class="control-label"><?php echo e(trans('general.longitude')); ?>*</label>

                                            <input id="longitude" type="text" class="form-control tooltips" data-container="body" data-placement="top" data-original-title="<?php echo e(trans('message.longitude')); ?>" name=" longitude" value="<?php echo e(old('longitude')); ?>" placeholder="<?php echo e(trans('general.longitude')); ?>" autofocus>
                                            <?php if($errors->has('longitude')): ?>
                                            <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('longitude')); ?>

                                                </strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group<?php echo e($errors->has('latitude') ? ' has-error' : ''); ?>">
                                            <label for="latitude" class="control-label"><?php echo e(trans('general.latitude')); ?>*</label>

                                            <input id="latitude" type="text" class="form-control tooltips" data-container="body" data-placement="top" data-original-title="<?php echo e(trans('message.latitude')); ?>" name=" latitude" value="<?php echo e(old('latitude')); ?>" placeholder="<?php echo e(trans('general.latitude')); ?>" autofocus>
                                            <?php if($errors->has('latitude')): ?>
                                            <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('latitude')); ?>

                                                </strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="area_id"><?php echo e(trans('general.area')); ?></label>
                                            <select name="area_id" id="area_id" class="form-control tooltips" data-container="body" data-placement="top" data-original-title="<?php echo e(trans('message.are')); ?>">
                                                <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value=" <?php echo e($area->id); ?>"><?php echo e($area->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="user_id"><?php echo e(trans('general.user')); ?></label>
                                            <select name="user_id" id="user_id" class="form-control tooltips" data-container="body" data-placement="top" data-original-title="<?php echo e(trans('message.user')); ?>">
                                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value=" <?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
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
                                <i class="fa fa-gift"></i> <?php echo e(trans('general.more_details')); ?>

                            </div>
                        </div>
                        <div class="portlet-body form">
                            <div class="form-body">
                                <div class="row">
                                    <hr>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label sbold tooltips" data-container="body" data-placement="top" data-original-title="<?php echo e(trans('message.active')); ?>"><?php echo e(trans('general.active')); ?></label></br>
                                            <label class="radio-inline">
                                                <input type="radio" name="active" id="optionsRadios3" value="1"> <?php echo e(trans('general.yes')); ?></label>
                                            <label class="radio-inline">
                                                <input type="radio" name="active" id="optionsRadios4" checked value="0"> <?php echo e(trans('general.no')); ?></label>
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