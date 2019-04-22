<?php $__env->startSection('breadcrumbs'); ?>
    <?php echo e(Breadcrumbs::render('backend.admin.country.create')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="portlet box blue">
        <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="portlet-body">
            <?php echo $__env->make('backend.partials._admin_instructions',['title' => trans('general.countries') ,'message' => trans('message.admin_country_message')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="<?php echo e(route('backend.admin.country.store')); ?>" role="form" method="post"
                      class="horizontal-form" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-body">
                        <h3 class="form-section"><?php echo e(trans('general.new_country')); ?></h3>
                        <div class="portlet box blue ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i> <?php echo e(trans('general.country_main_details')); ?>

                                </div>
                            </div>
                            <div class="portlet-body form">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label"><?php echo e(trans('general.name')); ?></label>
                                                <input type="text" id="name" name="name" class="form-control"
                                                       value="<?php echo e(old('name')); ?>"
                                                       placeholder="<?php echo e(trans('general.name')); ?>" required>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label"><?php echo e(trans('general.slug_ar')); ?></label>
                                                <input type="text" id="slug_ar" name="slug_ar" class="form-control"
                                                       value="<?php echo e(old('slug_ar')); ?>"
                                                       placeholder="<?php echo e(trans('general.slug_ar')); ?>" required>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label"><?php echo e(trans('general.slug_en')); ?></label>
                                                <input type="text" id="slug_en" name="slug_en" class="form-control"
                                                       value="<?php echo e(old('slug_en')); ?>"
                                                       placeholder="<?php echo e(trans('general.slug_en')); ?>" required>
                                                
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label"><?php echo e(trans('general.calling_code')); ?>

                                                    *</label>
                                                <input type="number" id="calling_code" name="calling_code" maxlength="3" max="999"
                                                       class="form-control" value="<?php echo e(old('calling_code')); ?>"
                                                       placeholder="<?php echo e(trans('general.calling_code')); ?>" required>
                                                <span class="help-block"> ex. 00965 </span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label"><?php echo e(trans('general.country_code')); ?></label>
                                                <input type="text" id="country_code" name="country_code"
                                                       class="form-control"
                                                       placeholder="<?php echo e(trans('general.country_code')); ?>"
                                                       value="<?php echo e(old('country_code')); ?>" required>
                                                <span class="help-block"> country_code ex. KWT </span>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label"><?php echo e(trans('general.shipment_packages')); ?>

                                                    *</label>
                                                <select name="packages[]" multiple="multiple" class="multi-select tooltips" data-container="body" data-placement="top" data-original-title="<?php echo e(trans('message.shipment_package')); ?>" id="my_multi_select1" required>
                                                    <option><?php echo e(trans('general.choose_shipment_package')); ?></option>
                                                    <?php $__currentLoopData = $shipmentPackages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($package->id); ?>"><?php echo e($package->slug); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <!--/span-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                        <div class="portlet box blue ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i> <?php echo e(trans('general.country_more_details')); ?>

                                </div>
                            </div>
                            <div class="portlet-body form">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label"><?php echo e(trans('general.flag_image')); ?> </label>
                                                <input id="flag" type="file" class="form-control" name="image">
                                                <span class="help-block"> flag size is 400 X 400 </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label"><?php echo e(trans('general.order')); ?></label>
                                                <input type="number" id="order" name="order" class="form-control"
                                                       maxlength="2"
                                                       max="99"
                                                       placeholder="<?php echo e(trans('general.order')); ?>"
                                                       value="<?php echo e(old('order')); ?>"
                                                       required>
                                                <span class="help-block"> ex. 1 (order is the sequence of the countries that shall appear on app List of Countries in Home Interface)</span>
                                            </div>
                                        </div>

                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label"><?php echo e(trans('general.currency_symbol_ar')); ?>

                                                    *</label>
                                                <input type="text" id="currency_symbol_ar" name="currency_symbol_ar"
                                                       class="form-control" value="<?php echo e(old('currency_symbol_ar')); ?>"
                                                       placeholder="<?php echo e(trans('general.currency_symbol_ar')); ?>" required>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label"><?php echo e(trans('general.currency_symbol_en')); ?>

                                                    *</label>
                                                <input type="text" id="currency_symbol_en" name="currency_symbol_en"
                                                       class="form-control" value="<?php echo e(old('currency_symbol_en')); ?>"
                                                       placeholder="<?php echo e(trans('general.currency_symbol_en')); ?>" required>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label"><?php echo e(trans('general.minimum_shipment_charge')); ?>

                                                    *</label>
                                                <input type="number" id="minimum_shipment_charge"
                                                       name="minimum_shipment_charge"
                                                       class="form-control" value="<?php echo e(old('minimum_shipment_charge')); ?>"
                                                       placeholder="<?php echo e(trans('general.minimum_shipment_charge')); ?>"
                                                       required>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label"><?php echo e(trans('general.fixed_shipment_charge')); ?>

                                                    *</label>
                                                <input type="number" id="fixed_shipment_charge"
                                                       name="fixed_shipment_charge"
                                                       class="form-control" value="<?php echo e(old('fixed_shipment_charge')); ?>"
                                                       placeholder="<?php echo e(trans('general.fixed_shipment_charge')); ?>"
                                                       required>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label"><?php echo e(trans('general.longitude')); ?></label>
                                                <input type="number" id="longitude" name="longitude"
                                                       class="form-control"
                                                       value="<?php echo e(old('longitude')); ?>"
                                                       placeholder="<?php echo e(trans('general.longitude')); ?>">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label"><?php echo e(trans('general.latitude')); ?></label>
                                                <input type="number" id="latitude" name="latitude" class="form-control"
                                                       value="<?php echo e(old('latitude')); ?>"
                                                       placeholder="<?php echo e(trans('general.latitude')); ?>">

                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>

                                </div>
                            </div>
                            <!--/span-->
                        </div>

                        <div class="portlet box blue ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i> <?php echo e(trans('general.country_attributes_details')); ?>

                                </div>
                            </div>
                            <div class="portlet-body form">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4" style="padding-left : 50px;">
                                            <div class="form-group">
                                                <label class="control-label sbold"><?php echo e(trans('general.active')); ?></label>
                                                <div class="radio-list">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="active" id="optionsRadios1"
                                                               value="1" <?php echo e(old('is_active') ? 'checked' : null); ?>> <?php echo e(trans('general.active')); ?>

                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="active" id="optionsRadios2" value="0"
                                                               <?php echo e(old('is_active')  ? 'checked' : null); ?> checked>
                                                        <?php echo e(trans('general.not_active')); ?></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4" style="padding-left : 50px;">
                                            <div class="form-group">
                                                <label class="control-label sbold"><?php echo e(trans('general.has_currency')); ?></label>
                                                <div class="radio-list">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="has_currency" id="optionsRadios1"
                                                               value="1" <?php echo e(old('has_currency') ? 'checked' : null); ?>> <?php echo e(trans('general.has_currency')); ?>

                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="has_currency" id="optionsRadios2"
                                                               value="0"
                                                               <?php echo e(old('has_currency')  ? 'checked' : null); ?>checked>
                                                        <?php echo e(trans('general.not_has_currency')); ?></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4" style="padding-left : 50px;">
                                            <div class="form-group">
                                                <label class="control-label sbold"><?php echo e(trans('general.is_local')); ?></label>
                                                <div class="radio-list">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="is_local" id="optionsRadios1"
                                                               value="1" <?php echo e(old('is_local') ? 'checked' : null); ?>> <?php echo e(trans('general.is_local')); ?>

                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="is_local" id="optionsRadios2"
                                                               value="0"
                                                               <?php echo e(old('is_local')  ? 'checked' : null); ?> checked>
                                                        <?php echo e(trans('general.not_is_local')); ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php echo $__env->make('backend.partials.forms._btn-group', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </form>
                <!-- END FORM-->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>