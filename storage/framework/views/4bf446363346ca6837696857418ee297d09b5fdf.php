<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.admin.privilege.create')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="portlet box blue">
    <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="portlet-body">
        <?php echo $__env->make('backend.partials._admin_instructions',['title' => trans('general.privileges') ,'message' => trans('message.admin_privilege_message')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="portlet-body form">
            <form class="horizontal-form" role="form" method="POST" action="<?php echo e(route('backend.admin.privilege.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-body">
                    <h3 class="form-section"><?php echo e(trans('general.new_privilege')); ?></h3>
                    <div class="portlet box blue ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i> <?php echo e(trans('general.privilege_main_details')); ?>

                            </div>
                        </div>
                        <div class="portlet-body form">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group <?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                            <label for="name" class="control-label"><?php echo e(trans('general.name')); ?>*</label>
                                            <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" placeholder="<?php echo e(trans('general.name')); ?>" required autofocus>
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
                                        <div class="form-group">
                                            <label for="single"
                                                   class="control-label"><?php echo e(trans('general.roles')); ?>

                                                *</label>
                                            <select name="role_id" class="form-control tooltips"
                                                    data-container="body" data-placement="top"
                                                    data-original-title="<?php echo e(trans('message.owner')); ?>">
                                                <option value=""><?php echo e(trans('general.choose_role')); ?></option>
                                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($role->id); ?>"><?php echo e($role->slug); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group <?php echo e($errors->has('slug_ar') ? ' has-error' : ''); ?>">
                                            <label for="slug_ar" class="control-label"><?php echo e(trans('general.slug_ar')); ?>*</label>
                                            <input id="slug_ar" type="text" class="form-control" name="slug_ar" value="<?php echo e(old('slug_ar')); ?>" placeholder="<?php echo e(trans('general.slug_ar')); ?>" required autofocus>
                                            <?php if($errors->has('slug_ar')): ?>
                                            <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('slug_ar')); ?>

                                                </strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group<?php echo e($errors->has('slug_en') ? ' has-error' : ''); ?>">
                                            <label for="slug_en" class="control-label"><?php echo e(trans('general.slug_en')); ?>*</label>
                                            <input id="slug_en" type="text" class="form-control" name="slug_en" value="<?php echo e(old('slug_en')); ?>" placeholder="<?php echo e(trans('general.slug_en')); ?>" required autofocus>
                                            <?php if($errors->has('slug_en')): ?>
                                            <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('slug_en')); ?>

                                                </strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description" class="control-label"><?php echo e(trans('general.description_arabic')); ?></label>
                                            <textarea type="text" class="form-control tooltips" data-container="body" data-placement="top" data-original-title="<?php echo e(trans('message.description_ar')); ?>" id="description_ar" name="description_ar" aria-multiline="true" maxlength="500" <?php echo e(old('description_ar')); ?>></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description" class="control-label"><?php echo e(trans('general.description_english')); ?></label>
                                            <textarea type="text" class="form-control tooltips" data-container="body" data-placement="top" data-original-title="<?php echo e(trans('message.description_en')); ?>" id="description_en" name="description_en" aria-multiline="true" maxlength="500"><?php echo e(old('description_en')); ?></textarea>
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label sbold"><?php echo e(trans('general.index')); ?></label></br>
                                            <label class="radio-inline">
                                                <input type="radio" name="index" id="optionsRadios3" value="1">
                                                <?php echo e(trans('general.index')); ?></label>
                                            <label class="radio-inline">
                                                <input type="radio" name="index" id="optionsRadios4" checked value="0">
                                                <?php echo e(trans('general.not_index')); ?></label>
                                        </div>
                                        <span class="help-block">
                                            <strong><?php echo e(trans('message.index_instructions')); ?></strong>
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label sbold"><?php echo e(trans('general.view')); ?></label></br>
                                            <label class="radio-inline">
                                                <input type="radio" name="view" id="optionsRadios3" value="1">
                                                <?php echo e(trans('general.view')); ?></label>
                                            <label class="radio-inline">
                                                <input type="radio" name="view" id="optionsRadios4" checked value="0">
                                                <?php echo e(trans('general.not_view')); ?></label>
                                        </div>
                                        <span class="help-block">
                                            <strong><?php echo e(trans('message.view_instructions')); ?></strong>
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label sbold"><?php echo e(trans('general.create')); ?></label></br>
                                            <label class="radio-inline">
                                                <input type="radio" name="create" id="optionsRadios3" value="1">
                                                <?php echo e(trans('general.create')); ?></label>
                                            <label class="radio-inline">
                                                <input type="radio" name="create" id="optionsRadios4" checked value="0">
                                                <?php echo e(trans('general.not_create')); ?>

                                            </label>
                                        </div>
                                        <span class="help-block">
                                            <strong><?php echo e(trans('message.create_instructions')); ?></strong>
                                        </span>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label sbold"><?php echo e(trans('general.update')); ?></label></br>
                                            <label class="radio-inline">
                                                <input type="radio" name="update" id="optionsRadios3" value="1">
                                                <?php echo e(trans('general.update')); ?></label>
                                            <label class="radio-inline">
                                                <input type="radio" name="update" id="optionsRadios4" checked value="0">
                                                <?php echo e(trans('general.not_update')); ?></label>
                                        </div>
                                        <span class="help-block">
                                            <strong><?php echo e(trans('message.update_instructions')); ?></strong>
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label sbold"><?php echo e(trans('general.delete')); ?></label></br>
                                            <label class="radio-inline">
                                                <input type="radio" name="delete" id="optionsRadios3" value="1">
                                                <?php echo e(trans('general.delete')); ?></label>
                                            <label class="radio-inline">
                                                <input type="radio" name="delete" id="optionsRadios4" checked value="0">
                                                <?php echo e(trans('general.not_delete')); ?></label>
                                        </div>
                                        <span class="help-block">
                                            <strong><?php echo e(trans('message.delete_instructions')); ?></strong>
                                        </span>
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