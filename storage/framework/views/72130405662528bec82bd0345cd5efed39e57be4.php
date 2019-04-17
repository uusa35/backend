<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.admin.currency.create')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="portlet box blue">
    <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="portlet-body">
        <?php echo $__env->make('backend.partials._admin_instructions',['title' => trans('general.currencies') ,'message' => trans('message.admin_currency_message')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="portlet-body form">
            <form class="horizontal-form" role="form" method="POST" action="<?php echo e(route('backend.admin.currency.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-body">
                    <h3 class="form-section"><?php echo e(trans('general.create_currency')); ?></h3>
                    
                    <div class="portlet box blue ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i> <?php echo e(trans('general.currency_main_details')); ?>

                            </div>
                        </div>
                        <div class="portlet-body form">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group<?php echo e($errors->has('name_ar') ? ' has-error' : ''); ?>">
                                            <label for="name_ar" class="control-label"><?php echo e(trans('general.name_ar')); ?>*</label>
                                            <input id="name_ar" type="text" class="form-control" name="name_ar" value="<?php echo e(old('name_ar')); ?>" placeholder="<?php echo e(trans('general.name_ar')); ?>" required autofocus>
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
                                            <label for="name_en" class="control-label"><?php echo e(trans('general.name_en')); ?>*</label>
                                            <input id="name_en" type="text" class="form-control" name="name_en" value="<?php echo e(old('name_en')); ?>" placeholder="<?php echo e(trans('general.name_en')); ?>" required autofocus>
                                            <?php if($errors->has('name_en')): ?>
                                            <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('name_en')); ?>

                                                </strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group<?php echo e($errors->has('currency_symbol_ar') ? ' has-error' : ''); ?>">
                                            <label for="currency_symbol_ar" class="control-label"><?php echo e(trans('general.currency_symbol_ar')); ?>*</label>
                                            <input id="currency_symbol_ar" type="text" class="form-control" name="currency_symbol_ar" value="<?php echo e(old('currency_symbol_ar')); ?>" placeholder="<?php echo e(trans('general.currency_symbol_ar')); ?>" maxlength="4" required autofocus>
                                            <?php if($errors->has('currency_symbol_ar')): ?>
                                            <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('currency_symbol_ar')); ?>

                                                </strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group<?php echo e($errors->has('currency_symbol_en') ? ' has-error' : ''); ?>">
                                            <label for="currency_symbol_en" class="control-label"><?php echo e(trans('general.currency_symbol_en')); ?>*</label>
                                            <input id="currency_symbol_en" type="text" class="form-control" name="currency_symbol_en" value="<?php echo e(old('currency_symbol_en')); ?>" placeholder="<?php echo e(trans('general.currency_symbol_en')); ?>" maxlength="4" required autofocus>
                                            <?php if($errors->has('currency_symbol_en')): ?>
                                            <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('currency_symbol_en')); ?>

                                                </strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group<?php echo e($errors->has('exchange_rate') ? ' has-error' : ''); ?>">
                                            <label for="exchange_rate" class="control-label"><?php echo e(trans('general.exchange_rate')); ?>*</label>
                                            <input id="exchange_rate" type="text" class="form-control" name="exchange_rate" value="<?php echo e(old('exchange_rate')); ?>" placeholder="<?php echo e(trans('general.exchange_rate')); ?>" required autofocus>
                                            <?php if($errors->has('exchange_rate')): ?>
                                            <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('exchange_rate')); ?>

                                                </strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <?php if(!$allCountries->isEmpty()): ?>
                                        <div class="form-group">
                                            <label for="duration" class="control-label"><?php echo e(trans('general.country')); ?> *</label>
                                            <select class="form-control input-xlarge" name="country_id" id="country" required="required">
                                                <?php $__currentLoopData = $allCountries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <?php else: ?>
                                        <span class="label label-danger">No Countries Listed, Please Create Country First -- All Countries exist already have currency.</span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portlet box blue ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i> <?php echo e(trans('general.currency_attributes_details')); ?>

                            </div>
                        </div>
                        <div class="portlet-body form">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label sbold"><?php echo e(trans('general.active')); ?></label></br>
                                            <label class="radio-inline">
                                                <input type="radio" name="active" id="optionsRadios3" value="1"> active</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="active" id="optionsRadios4" checked value="0">not active</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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