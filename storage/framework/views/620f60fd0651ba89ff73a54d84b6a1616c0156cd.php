<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.admin.service.create')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="portlet box blue">
    <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="portlet-body form">
        <form class="horizontal-form" role="form" method="POST" action="<?php echo e(route('backend.admin.service.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <input type="hidden" sku="api_token" value="<?php echo e(str_random(rand(10,99))); ?>">
            <div class="form-body">
                <h3 class="form-section"><?php echo e(trans('general.create_service')); ?></h3>
                
                <div class="portlet box blue ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i> <?php echo e(trans('general.service_main_details')); ?>

                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group <?php echo e($errors->has('sku') ? ' has-error' : ''); ?>">
                                        <label for="sku" class="control-label"><?php echo e(trans('general.sku')); ?>

                                            *</label>
                                        <input id="sku" type="text" class="form-control" sku="sku" value="<?php echo e(old('sku')); ?>" placeholder="<?php echo e(trans('general.sku')); ?>" required autofocus>
                                        <?php if($errors->has('sku')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('sku')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group <?php echo e($errors->has('name_ar') ? ' has-error' : ''); ?>">
                                        <label for="name_ar" class="control-label"><?php echo e(trans('general.name_ar')); ?>

                                            *</label>
                                        <input id="name_ar" type="text" class="form-control" sku="name_ar" value="<?php echo e(old('name_ar')); ?>" placeholder="<?php echo e(trans('general.name_ar')); ?>" required autofocus>
                                        <?php if($errors->has('name_ar')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('name_ar')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group <?php echo e($errors->has('name_en') ? ' has-error' : ''); ?>">
                                        <label for="name_en" class="control-label"><?php echo e(trans('general.name_en')); ?>

                                            *</label>
                                        <input id="name_en" type="text" class="form-control" sku="name_en" value="<?php echo e(old('name_en')); ?>" placeholder="<?php echo e(trans('general.name_en')); ?>" required autofocus>
                                        <?php if($errors->has('name_en')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('name_en')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group <?php echo e($errors->has('duration') ? ' has-error' : ''); ?>">
                                        <label for="duration" class="control-label"><?php echo e(trans('general.duration')); ?>*</label>
                                        <input id="duration" type="text" class="form-control" name="duration" value="<?php echo e(old('duration')); ?>" placeholder="<?php echo e(trans('general.duration')); ?>" required autofocus>
                                        <?php if($errors->has('duration')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('duration')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group <?php echo e($errors->has('setup_time') ? ' has-error' : ''); ?>">
                                        <label for="setup_time" class="control-label"><?php echo e(trans('general.setup_time')); ?>*</label>
                                        <input id="setup_time" type="number" maxlength="1" max="10" class="form-control" name="setup_time" value="<?php echo e(old('setup_time')); ?>" placeholder="<?php echo e(trans('general.setup_time')); ?>" required autofocus>
                                        <?php if($errors->has('setup_time')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('setup_time')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group <?php echo e($errors->has('individuals') ? ' has-error' : ''); ?>">
                                        <label for="individuals" class="control-label"><?php echo e(trans('general.individuals')); ?>

                                            *</label>
                                        <input id="individuals" type="individuals" class="form-control" sku="individuals" value="" placeholder="<?php echo e(trans('general.individuals')); ?>" required autofocus>
                                        <?php if($errors->has('individuals')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('individuals')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group <?php echo e($errors->has('delivery_charge') ? ' has-error' : ''); ?>">
                                        <label for="delivery_charge" class="control-label"><?php echo e(trans('general.delivery_charge')); ?>

                                            *</label>
                                        <input id="delivery_charge" type="text" class="form-control" sku="delivery_charge" value="" placeholder="<?php echo e(trans('general.delivery_charge')); ?>" required autofocus>
                                        <?php if($errors->has('delivery_charge')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('delivery_charge')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>




                                <div class="col-md-4">
                                    <div class="form-group<?php echo e($errors->has('price') ? ' has-error' : ''); ?>">
                                        <label for="price" class="control-label"><?php echo e(trans('general.price')); ?>

                                            *</label>
                                        <input id="price" type="text" class="form-control" sku="price" value="<?php echo e(old('price')); ?>" placeholder="<?php echo e(trans('general.price')); ?>" required autofocus>
                                        <?php if($errors->has('price')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('price')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group<?php echo e($errors->has('sale_price') ? ' has-error' : ''); ?>">
                                        <label for="sale_price" class="control-label"><?php echo e(trans('general.sale_price')); ?>

                                            *</label>
                                        <input id="sale_price" type="text" class="form-control" sku="sale_price" value="<?php echo e(old('sale_price')); ?>" placeholder="<?php echo e(trans('general.sale_price')); ?> " required autofocus>
                                        <?php if($errors->has('sale_price')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('sale_price')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description" class="control-label"><?php echo e(trans('general.description_arabic')); ?></label>
                                        <textarea type="text" class="form-control" id="description_ar" sku="description_ar" aria-multiline="true" maxlength="500" <?php echo e(old('description_ar')); ?>></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description" class="control-label"><?php echo e(trans('general.description_english')); ?></label>
                                        <textarea type="text" class="form-control" id="description_en" sku="description_en" aria-multiline="true" maxlength="500"><?php echo e(old('description_en')); ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="notes_ar" class="control-label"><?php echo e(trans('general.notes_ar')); ?></label>
                                        <textarea type="text" class="form-control" id="notes_ar" sku="notes_ar" aria-multiline="true" maxlength="500" <?php echo e(old('notes_ar')); ?>></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="notes_en" class="control-label"><?php echo e(trans('general.notes_en')); ?></label>
                                        <textarea type="text" class="form-control" id="notes_en" sku="notes_en" aria-multiline="true" maxlength="500"><?php echo e(old('notes_en')); ?></textarea>
                                    </div>
                                </div>
                                

                                <div class="col-md-4">
                                    <div class="form-group<?php echo e($errors->has('keywords') ? ' has-error' : ''); ?>">
                                        <label for="keywords" class="control-label"><?php echo e(trans('general.keywords')); ?></label>
                                        <input id="keywords" type="text" class="form-control" sku="keywords" placeholder="<?php echo e(trans('general.keywords')); ?>" value="<?php echo e(old('keywords')); ?>" autofocus>
                                        <?php if($errors->has('keywords')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('keywords')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="form_control_1"><?php echo e(trans('general.main_image')); ?></label>
                                        <input type="file" class="form-control" sku="image" placeholder="<?php echo e(trans('general.main_image')); ?>" required>
                                        <div class="help-block text-left">
                                            W * H - Best fit ['1080', '1440'] pixels
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group<?php echo e($errors->has('video_url_one') ? ' has-error' : ''); ?>">
                                        <label for="video_url_one" class="control-label"><?php echo e(trans('general.video_url_one')); ?></label>
                                        <input id="video_url_one" type="text" class="form-control" sku="video_url_one" placeholder="<?php echo e(trans('general.video_url_one')); ?>" value="<?php echo e(old('video_url_one')); ?>" autofocus>
                                        <?php if($errors->has('video_url_one')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('video_url_one')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group<?php echo e($errors->has('video_url_two') ? ' has-error' : ''); ?>">
                                        <label for="video_url_two" class="control-label"><?php echo e(trans('general.video_url_two')); ?></label>
                                        <input id="video_url_two" type="text" class="form-control" sku="video_url_two" placeholder="<?php echo e(trans('general.video_url_two')); ?>" value="<?php echo e(old('video_url_two')); ?>" autofocus>
                                        <?php if($errors->has('video_url_two')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('video_url_two')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group<?php echo e($errors->has('start_sale') ? ' has-error' : ''); ?>">
                                        <label for="start_sale" class="control-label"><?php echo e(trans('general.start_sale_date')); ?></label>
                                        <div class="input-group date form_datetime">
                                            <input type="text" readonly style="direction: ltr !important;" class="form-control" name="start_sale" value="<?php echo e(old('start_sale') ? old('start_sale') : '01 January 2019 - 07:55'); ?>" required>
                                            <span class="input-group-btn"><button class="btn default date-set" type="button"><i class="fa fa-calendar"></i></button></span>
                                        </div>
                                        <span class="help-block">
                                            <strong><?php echo e(trans('message.start_sale_date')); ?></strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label"><?php echo e(trans('general.end_sale_date')); ?></label>
                                        <div class="input-group date form_datetime">
                                            <input type="text" class="form-control" readonly style="direction: ltr !important;" name="end_sale" value="<?php echo e(old('end_sale') ? old('end_sale') : '01 January 2019 - 07:55'); ?>" required>
                                            <span class="input-group-btn"><button class="btn default date-set" type="button"><i class="fa fa-calendar"></i></button></span>
                                        </div>
                                        <span class="help-block">
                                            <strong><?php echo e(trans('message.end_sale_date')); ?></strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group<?php echo e($errors->has('booking_limit') ? ' has-error' : ''); ?>">
                                        <label for="booking_limit" class="control-label"><?php echo e(trans('general.booking_limit')); ?></label>
                                        <input id="booking_limit" type="text" class="form-control" sku="booking_limit" placeholder="<?php echo e(trans('general.booking_limit')); ?>" value="<?php echo e(old('booking_limit')); ?>" autofocus>
                                        <?php if($errors->has('booking_limit')): ?>
                                        <span class="help-block">
                                            <strong>
                                                <?php echo e($errors->first('booking_limit')); ?>

                                            </strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="single" class="control-label"><?php echo e(trans('general.owner')); ?>*</label>
                                        <select id="" class="form-control select2">
                                            <option value=""><?php echo e(trans('general.choose_user')); ?></option>
                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($user->slug_en); ?>"><?php echo e($user->slug_en); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                        </select>
                                        <span class="help-block">
                                            <strong><?php echo e(trans('message.owner_instructions')); ?></strong>
                                        </span>
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
                                        <label class="control-label sbold"><?php echo e(trans('general.active')); ?></label></br>
                                        <label class="radio-inline">
                                            <input type="radio" sku="active" id="optionsRadios1" value="1">
                                            active </label>
                                        <label class="radio-inline">
                                            <input type="radio" sku="active" id="optionsRadios2" checked value="0"> not_Active</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold"><?php echo e(trans('general.on_sale')); ?></label></br>
                                        <label class="radio-inline">
                                            <input type="radio" sku="on_sale" id="optionsRadios1" value="1">
                                            on_sale </label>
                                        <label class="radio-inline">
                                            <input type="radio" sku="on_sale" id="optionsRadios2" checked value="0"> not_on_sale</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold"><?php echo e(trans('general.exclusive')); ?></label></br>
                                        <label class="radio-inline">
                                            <input type="radio" sku="exclusive" id="optionsRadios1" value="1">
                                            exclusive </label>
                                        <label class="radio-inline">
                                            <input type="radio" sku="exclusive" id="optionsRadios2" checked value="0"> not_exclusive</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold"><?php echo e(trans('general.on_new')); ?></label></br>
                                        <label class="radio-inline">
                                            <input type="radio" sku="on_new" id="optionsRadios1" value="1">
                                            on_new </label>
                                        <label class="radio-inline">
                                            <input type="radio" sku="on_new" id="optionsRadios2" checked value="0"> not_on_new</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold"><?php echo e(trans('general.is_available')); ?></label></br>
                                        <label class="radio-inline">
                                            <input type="radio" sku="is_available" id="optionsRadios1" value="1">
                                            is_available </label>
                                        <label class="radio-inline">
                                            <input type="radio" sku="is_available" id="optionsRadios2" checked value="0"> not_is_available</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold"><?php echo e(trans('general.is_hot_deal')); ?></label></br>
                                        <label class="radio-inline">
                                            <input type="radio" sku="is_hot_deal" id="optionsRadios1" value="1">
                                            is_hot_deal </label>
                                        <label class="radio-inline">
                                            <input type="radio" sku="is_hot_deal" id="optionsRadios2" checked value="0"> not_is_hot_deal</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold"><?php echo e(trans('general.multi_booking')); ?></label></br>
                                        <label class="radio-inline">
                                            <input type="radio" sku="multi_booking" id="optionsRadios1" value="1">
                                            multi_booking </label>
                                        <label class="radio-inline">
                                            <input type="radio" sku="multi_booking" id="optionsRadios2" checked value="0"> not_multi_booking</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold"><?php echo e(trans('general.multi_booking')); ?></label></br>
                                        <label class="radio-inline">
                                            <input type="radio" sku="multi_booking" id="optionsRadios1" value="1">
                                            multi_booking </label>
                                        <label class="radio-inline">
                                            <input type="radio" sku="multi_booking" id="optionsRadios2" checked value="0"> not_multi_booking</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold"><?php echo e(trans('general.on_home')); ?></label></br>
                                        <label class="radio-inline">
                                            <input type="radio" sku="on_home" id="optionsRadios1" value="1"> on_home </label>
                                        <label class="radio-inline">
                                            <input type="radio" sku="on_home" id="optionsRadios2" checked value="0"> not_on_home</label>
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