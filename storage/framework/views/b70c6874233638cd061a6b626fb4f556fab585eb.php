<?php $__env->startSection('breadcrumbs'); ?>
    <?php echo e(Breadcrumbs::render('backend.admin.user.create')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="portlet box blue">
        <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="portlet-body">
            <?php echo $__env->make('backend.partials._admin_instructions',['title' => trans('general.users') ,'message' => trans('message.admin_user_message')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="portlet-body form">
                <form class="horizontal-form" role="form" method="POST" action="<?php echo e(route('backend.admin.user.store')); ?>"
                      enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="api_token" value="<?php echo e(str_random(rand(10,99))); ?>">
                    <input type="hidden" name="password" value="<?php echo e(bcrypt('secret')); ?>">
                    <div class="form-body">
                        <h3 class="form-section"><?php echo e(trans('general.new_user')); ?></h3>
                        
                        <div class="portlet box blue ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i> <?php echo e(trans('general.main_details')); ?>

                                </div>
                            </div>
                            <div class="portlet-body form">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group <?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                                <label for="name_ar" class="control-label"><?php echo e(trans('general.name')); ?>

                                                    *</label>
                                                <input id="name_ar" type="text" class="form-control tooltips"
                                                       data-container="body" data-placement="top"
                                                       data-original-title="<?php echo e(trans('message.name')); ?>" name="name"
                                                       value="<?php echo e(old('name')); ?>"
                                                       placeholder="<?php echo e(trans('general.name')); ?>" required autofocus>
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
                                                <label for="slug_ar"
                                                       class="control-label"><?php echo e(trans('general.slug_ar')); ?>

                                                    *</label>
                                                <input id="slug_ar" type="text" class="form-control tooltips"
                                                       data-container="body" data-placement="top"
                                                       data-original-title="<?php echo e(trans('message.slug_ar')); ?>"
                                                       name="slug_ar" value="<?php echo e(old('slug_ar')); ?>"
                                                       placeholder="<?php echo e(trans('general.slug_ar')); ?>" required autofocus>
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
                                            <div class="form-group <?php echo e($errors->has('slug_en') ? ' has-error' : ''); ?>">
                                                <label for="slug_en"
                                                       class="control-label"><?php echo e(trans('general.slug_en')); ?>

                                                    *</label>
                                                <input id="slug_en" type="text" class="form-control tooltips"
                                                       data-container="body" data-placement="top"
                                                       data-original-title="<?php echo e(trans('message.slug_en')); ?>"
                                                       name="slug_en" value="<?php echo e(old('slug_en')); ?>"
                                                       placeholder="<?php echo e(trans('general.slug_en')); ?>" required autofocus>
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
                                                <label for="description"
                                                       class="control-label"><?php echo e(trans('general.description_arabic')); ?></label>
                                                <textarea type="text" class="form-control tooltips"
                                                          data-container="body" data-placement="top"
                                                          data-original-title="<?php echo e(trans('message.description_arabic')); ?>"
                                                          id="description_ar" name="description_ar"
                                                          aria-multiline="true"
                                                          maxlength="500" <?php echo e(old('description_ar')); ?>></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="description"
                                                       class="control-label"><?php echo e(trans('general.description_english')); ?></label>
                                                <textarea type="text" class="form-control tooltips"
                                                          data-container="body" data-placement="top"
                                                          data-original-title="<?php echo e(trans('message.description_english')); ?>"
                                                          id="description_en" name="description_en"
                                                          aria-multiline="true"
                                                          maxlength="500"><?php echo e(old('description_en')); ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group <?php echo e($errors->has('service_en') ? ' has-error' : ''); ?>">
                                                <label for="service_en"
                                                       class="control-label"><?php echo e(trans('general.service_en')); ?>*</label>
                                                <input id="service_en" type="text" class="form-control tooltips"
                                                       data-container="body" data-placement="top"
                                                       data-original-title="<?php echo e(trans('message.service_en')); ?>"
                                                       name="service_en" value="<?php echo e(old('service_en')); ?>"
                                                       placeholder="<?php echo e(trans('general.service_en')); ?>" required
                                                       autofocus>
                                                <?php if($errors->has('service_en')): ?>
                                                    <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('service_en')); ?>

                                                </strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group <?php echo e($errors->has('service_ar') ? ' has-error' : ''); ?>">
                                                <label for="service_ar"
                                                       class="control-label"><?php echo e(trans('general.service_ar')); ?>*</label>
                                                <input id="service_ar" type="text" class="form-control tooltips"
                                                       data-container="body" data-placement="top"
                                                       data-original-title="<?php echo e(trans('message.service_ar')); ?>"
                                                       name="service_ar" value="<?php echo e(old('service_ar')); ?>"
                                                       placeholder="<?php echo e(trans('general.service_ar')); ?>" required
                                                       autofocus>
                                                <?php if($errors->has('service_ar')): ?>
                                                    <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('service_ar')); ?>

                                                </strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        

                                        <div class="col-md-4">
                                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                                <label for="email" class="control-label"><?php echo e(trans('general.email')); ?>

                                                    *</label>
                                                <input id="email" type="text" class="form-control tooltips"
                                                       data-container="body" data-placement="top"
                                                       data-original-title="<?php echo e(trans('message.email')); ?>" name="email"
                                                       value="<?php echo e(old('email')); ?>"
                                                       placeholder="<?php echo e(trans('general.email')); ?>" required autofocus>
                                                <?php if($errors->has('email')): ?>
                                                    <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('email')); ?>

                                                </strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group<?php echo e($errors->has('mobile') ? ' has-error' : ''); ?>">
                                                <label for="mobile" class="control-label"><?php echo e(trans('general.mobile')); ?>

                                                    *</label>
                                                <input id="mobile" type="text" class="form-control tooltips"
                                                       data-container="body" data-placement="top"
                                                       data-original-title="<?php echo e(trans('message.mobile')); ?>" name="mobile"
                                                       value="<?php echo e(old('mobile')); ?>"
                                                       placeholder="<?php echo e(trans('general.mobile')); ?> " required autofocus>
                                                <?php if($errors->has('mobile')): ?>
                                                    <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('mobile')); ?>

                                                </strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>


                                        

                                        <div class="col-md-4">
                                            <div class="form-group<?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
                                                <label for="phone"
                                                       class="control-label"><?php echo e(trans('general.phone')); ?></label>
                                                <input id="phone" type="text" class="form-control tooltips"
                                                       data-container="body" data-placement="top"
                                                       data-original-title="<?php echo e(trans('message.phone')); ?>" name="phone"
                                                       placeholder="<?php echo e(trans('general.phone')); ?>"
                                                       value="<?php echo e(old('phone')); ?>" autofocus>
                                                <?php if($errors->has('phone')): ?>
                                                    <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('phone')); ?>

                                                </strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group<?php echo e($errors->has('fax') ? ' has-error' : ''); ?>">
                                                <label for="fax"
                                                       class="control-label"><?php echo e(trans('general.fax')); ?></label>
                                                <input id="fax" type="text" class="form-control tooltips"
                                                       data-container="body" data-placement="top"
                                                       data-original-title="<?php echo e(trans('message.fax')); ?>" name="fax"
                                                       placeholder="<?php echo e(trans('general.fax')); ?>" value="<?php echo e(old('fax')); ?>"
                                                       autofocus>
                                                <?php if($errors->has('fax')): ?>
                                                    <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('fax')); ?>

                                                </strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="form_control_1"><?php echo e(trans('general.main_image')); ?></label>
                                                <input type="file" class="form-control tooltips" data-container="body"
                                                       data-placement="top"
                                                       data-original-title="<?php echo e(trans('message.main_image')); ?>"
                                                       name="image" placeholder="<?php echo e(trans('general.main_image')); ?>"
                                                       required>
                                                <div class="help-block text-left">
                                                    W * H - Best fit ['1080', '1440'] pixels
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="form_control_1"><?php echo e(trans('general.banner')); ?></label>
                                                <input type="file" class="form-control tooltips" data-container="body"
                                                       data-placement="top"
                                                       data-original-title="<?php echo e(trans('message.banner')); ?>" name="banner"
                                                       placeholder="<?php echo e(trans('general.banner')); ?>">

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group <?php echo e($errors->has('bg') ? ' has-error' : ''); ?>">
                                                <label for="demo" class="control-label"><?php echo e(trans('general.bg')); ?>

                                                    *</label>
                                                <input type="text" id="hue-demo" class="form-control tooltips demo"
                                                       data-container="body" data-placement="top"
                                                       data-original-title="<?php echo e(trans('message.bg')); ?>"
                                                       data-control="hue" name="bg" value="#ff6161">
                                                <?php if($errors->has('demo')): ?>
                                                    <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('demo')); ?>

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
                                    <i class="fa fa-gift"></i> <?php echo e(trans('general.more_details')); ?>

                                </div>
                            </div>
                            <div class="portlet-body form">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group<?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
                                                <label for="address"
                                                       class="control-label"><?php echo e(trans('general.address')); ?></label>
                                                <input id="address" type="text" class="form-control tooltips"
                                                       data-container="body" data-placement="top"
                                                       data-original-title="<?php echo e(trans('message.address')); ?>"
                                                       name="address" placeholder="<?php echo e(trans('general.address')); ?>"
                                                       value="<?php echo e(old('address')); ?>" autofocus>
                                                <?php if($errors->has('address')): ?>
                                                    <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('address')); ?>

                                                </strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group<?php echo e($errors->has('area') ? ' has-error' : ''); ?>">
                                                <label for="area"
                                                       class="control-label"><?php echo e(trans('general.area')); ?></label>
                                                <input id="area" type="text" class="form-control tooltips"
                                                       data-container="body" data-placement="top"
                                                       data-original-title="<?php echo e(trans('message.area')); ?>" name="area"
                                                       placeholder="<?php echo e(trans('general.area')); ?>"
                                                       value="<?php echo e(old('area')); ?>" autofocus>
                                                <?php if($errors->has('area')): ?>
                                                    <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('area')); ?>

                                                </strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group<?php echo e($errors->has('block') ? ' has-error' : ''); ?>">
                                                <label for="block"
                                                       class="control-label"><?php echo e(trans('general.block')); ?></label>
                                                <input id="block" type="text" class="form-control tooltips"
                                                       data-container="body" data-placement="top"
                                                       data-original-title="<?php echo e(trans('message.block')); ?>" name="block"
                                                       placeholder="<?php echo e(trans('general.block')); ?>"
                                                       value="<?php echo e(old('block')); ?>" autofocus>
                                                <?php if($errors->has('block')): ?>
                                                    <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('block')); ?>

                                                </strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group<?php echo e($errors->has('street') ? ' has-error' : ''); ?>">
                                                <label for="street"
                                                       class="control-label"><?php echo e(trans('general.street')); ?></label>
                                                <input id="street" type="text" class="form-control tooltips"
                                                       data-container="body" data-placement="top"
                                                       data-original-title="<?php echo e(trans('message.street')); ?>" name="street"
                                                       placeholder="<?php echo e(trans('general.street')); ?>"
                                                       value="<?php echo e(old('street')); ?>" autofocus>
                                                <?php if($errors->has('street')): ?>
                                                    <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('street')); ?>

                                                </strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group<?php echo e($errors->has('building') ? ' has-error' : ''); ?>">
                                                <label for="building"
                                                       class="control-label"><?php echo e(trans('general.building')); ?></label>
                                                <input id="building" type="text" class="form-control tooltips"
                                                       data-container="body" data-placement="top"
                                                       data-original-title="<?php echo e(trans('message.building')); ?>"
                                                       name="building" placeholder="<?php echo e(trans('general.building')); ?>"
                                                       value="<?php echo e(old('building')); ?>" autofocus>
                                                <?php if($errors->has('building')): ?>
                                                    <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('building')); ?>

                                                </strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group<?php echo e($errors->has('floor') ? ' has-error' : ''); ?>">
                                                <label for="floor"
                                                       class="control-label"><?php echo e(trans('general.floor')); ?></label>
                                                <input id="floor" type="text" class="form-control tooltips"
                                                       data-container="body" data-placement="top"
                                                       data-original-title="<?php echo e(trans('message.floor')); ?>" name="floor"
                                                       placeholder="<?php echo e(trans('general.floor')); ?>"
                                                       value="<?php echo e(old('floor')); ?>" autofocus>
                                                <?php if($errors->has('floor')): ?>
                                                    <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('floor')); ?>

                                                </strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group<?php echo e($errors->has('apartment') ? ' has-error' : ''); ?>">
                                                <label for="apartment"
                                                       class="control-label"><?php echo e(trans('general.apartment')); ?></label>
                                                <input id="apartment" type="text" class="form-control tooltips"
                                                       data-container="body" data-placement="top"
                                                       data-original-title="<?php echo e(trans('message.apartment')); ?>"
                                                       name="apartment" placeholder="<?php echo e(trans('general.apartment')); ?>"
                                                       value="<?php echo e(old('apartment')); ?>" autofocus>
                                                <?php if($errors->has('apartment')): ?>
                                                    <span class="help-block">
                                                <strong>
                                                    <?php echo e($errors->first('apartment')); ?>

                                                </strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="single"
                                                       class="control-label"><?php echo e(trans('general.country')); ?></label>
                                                <select id="single" class="form-control tooltips select2"
                                                        data-container="body" data-placement="top"
                                                        data-original-title="<?php echo e(trans('message.country_id')); ?>"
                                                        name="country_id" required>
                                                    <option><?php echo e(trans('general.choose_country')); ?></option>
                                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($country->id); ?>"><?php echo e($country->slug_en); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                                </select>
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
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="single"
                                                               class="control-label"><?php echo e(trans('general.role')); ?></label>
                                                        <select id="single" class="form-control tooltips select2"
                                                                data-container="body" data-placement="top"
                                                                data-original-title="<?php echo e(trans('message.role_id')); ?>"
                                                                name="role_id">
                                                            <option><?php echo e(trans('general.choose_role')); ?></option>
                                                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($role->id); ?>"><?php echo e($role->slug_en); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group<?php echo e($errors->has('policy_ar') ? ' has-error' : ''); ?>">
                                                        <label for="policy_ar"
                                                               class="control-label"><?php echo e(trans('general.policy_ar')); ?></label>
                                                        <input id="policy_ar" type="text" class="form-control tooltips"
                                                               data-container="body" data-placement="top"
                                                               data-original-title="<?php echo e(trans('message.policy_ar')); ?>"
                                                               name="policy_ar"
                                                               placeholder="<?php echo e(trans('general.policy_ar')); ?>"
                                                               value="<?php echo e(old('policy_ar')); ?>" autofocus>
                                                        <?php if($errors->has('policy_ar')): ?>
                                                            <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('policy_ar')); ?>

                                                        </strong>
                                                    </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group<?php echo e($errors->has('policy_en') ? ' has-error' : ''); ?>">
                                                        <label for="policy_en"
                                                               class="control-label"><?php echo e(trans('general.policy_en')); ?></label>
                                                        <input id="policy_en" type="text" class="form-control tooltips"
                                                               data-container="body" data-placement="top"
                                                               data-original-title="<?php echo e(trans('message.policy_en')); ?>"
                                                               name="policy_en"
                                                               placeholder="<?php echo e(trans('general.policy_en')); ?>"
                                                               value="<?php echo e(old('policy_en')); ?>" autofocus>
                                                        <?php if($errors->has('policy_en')): ?>
                                                            <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('policy_en')); ?>

                                                        </strong>
                                                    </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group<?php echo e($errors->has('cancellation_ar') ? ' has-error' : ''); ?>">
                                                        <label for="cancellation_ar"
                                                               class="control-label"><?php echo e(trans('general.cancellation_ar')); ?></label>
                                                        <input id="cancellation_ar" type="text"
                                                               class="form-control tooltips" data-container="body"
                                                               data-placement="top"
                                                               data-original-title="<?php echo e(trans('message.cancellation_ar')); ?>"
                                                               name="cancellation_ar"
                                                               placeholder="<?php echo e(trans('general.cancellation_ar')); ?>"
                                                               value="<?php echo e(old('cancellation_ar')); ?>" autofocus>
                                                        <?php if($errors->has('cancellation_ar')): ?>
                                                            <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('cancellation_ar')); ?>

                                                        </strong>
                                                    </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group<?php echo e($errors->has('cancellation_en') ? ' has-error' : ''); ?>">
                                                        <label for="cancellation_en"
                                                               class="control-label"><?php echo e(trans('general.cancellation_en')); ?></label>
                                                        <input id="cancellation_en" type="text"
                                                               class="form-control tooltips" data-container="body"
                                                               data-placement="top"
                                                               data-original-title="<?php echo e(trans('message.cancellation_en')); ?>"
                                                               name="cancellation_en"
                                                               placeholder="<?php echo e(trans('general.cancellation_en')); ?>"
                                                               value="<?php echo e(old('cancellation_en')); ?>" autofocus>
                                                        <?php if($errors->has('cancellation_en')): ?>
                                                            <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('cancellation_en')); ?>

                                                        </strong>
                                                    </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group<?php echo e($errors->has('keywords') ? ' has-error' : ''); ?>">
                                                        <label for="keywords"
                                                               class="control-label"><?php echo e(trans('general.keywords')); ?></label>
                                                        <input id="keywords" type="text" class="form-control tooltips"
                                                               data-container="body" data-placement="top"
                                                               data-original-title="<?php echo e(trans('message.keywords')); ?>"
                                                               name="keywords"
                                                               placeholder="<?php echo e(trans('general.keywords')); ?>"
                                                               value="<?php echo e(old('keywords')); ?>" autofocus>
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
                                                    <div class="form-group<?php echo e($errors->has('path') ? ' has-error' : ''); ?>">
                                                        <label for="path"
                                                               class="control-label"><?php echo e(trans('general.path')); ?></label>
                                                        <input id="path" type="file" class="form-control tooltips"
                                                               data-container="body" data-placement="top"
                                                               data-original-title="<?php echo e(trans('message.path')); ?>"
                                                               name="path" placeholder="<?php echo e(trans('general.path')); ?>"
                                                               value="<?php echo e(old('path')); ?>" autofocus>
                                                        <?php if($errors->has('path')): ?>
                                                            <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('path')); ?>

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
                                            <i class="fa fa-gift"></i> <?php echo e(trans('general.more_details')); ?>

                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group<?php echo e($errors->has('website') ? ' has-error' : ''); ?>">
                                                        <label for="website"
                                                               class="control-label"><?php echo e(trans('general.website')); ?></label>
                                                        <input id="website" type="url" class="form-control tooltips"
                                                               data-container="body" data-placement="top"
                                                               data-original-title="<?php echo e(trans('message.website')); ?>"
                                                               name="website"
                                                               placeholder="<?php echo e(trans('general.website')); ?>"
                                                               value="<?php echo e(old('website')); ?>" autofocus>
                                                        <?php if($errors->has('website')): ?>
                                                            <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('website')); ?>

                                                        </strong>
                                                    </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group<?php echo e($errors->has('facebook') ? ' has-error' : ''); ?>">
                                                        <label for="facebook"
                                                               class="control-label"><?php echo e(trans('general.facebook')); ?></label>
                                                        <input id="facebook" type="url" class="form-control tooltips"
                                                               data-container="body" data-placement="top"
                                                               data-original-title="<?php echo e(trans('message.facebook')); ?>"
                                                               name="facebook"
                                                               placeholder="<?php echo e(trans('general.facebook')); ?>"
                                                               value="<?php echo e(old('facebook')); ?>" autofocus>
                                                        <?php if($errors->has('facebook')): ?>
                                                            <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('facebook')); ?>

                                                        </strong>
                                                    </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group<?php echo e($errors->has('instagram') ? ' has-error' : ''); ?>">
                                                        <label for="instagram"
                                                               class="control-label"><?php echo e(trans('general.instagram')); ?></label>
                                                        <input id="instagram" type="url" class="form-control tooltips"
                                                               data-container="body" data-placement="top"
                                                               data-original-title="<?php echo e(trans('message.instagram')); ?>"
                                                               name="instagram"
                                                               placeholder="<?php echo e(trans('general.instagram')); ?>"
                                                               value="<?php echo e(old('instagram')); ?>" autofocus>
                                                        <?php if($errors->has('instagram')): ?>
                                                            <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('instagram')); ?>

                                                        </strong>
                                                    </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group<?php echo e($errors->has('youtube') ? ' has-error' : ''); ?>">
                                                        <label for="youtube"
                                                               class="control-label"><?php echo e(trans('general.youtube')); ?></label>
                                                        <input id="youtube" type="url" class="form-control tooltips"
                                                               data-container="body" data-placement="top"
                                                               data-original-title="<?php echo e(trans('message.youtube')); ?>"
                                                               name="youtube"
                                                               placeholder="<?php echo e(trans('general.youtube')); ?>"
                                                               value="<?php echo e(old('youtube')); ?>" autofocus>
                                                        <?php if($errors->has('youtube')): ?>
                                                            <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('youtube')); ?>

                                                        </strong>
                                                    </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group<?php echo e($errors->has('twitter') ? ' has-error' : ''); ?>">
                                                        <label for="twitter"
                                                               class="control-label"><?php echo e(trans('general.twitter')); ?></label>
                                                        <input id="twitter" type="url" class="form-control tooltips"
                                                               data-container="body" data-placement="top"
                                                               data-original-title="<?php echo e(trans('message.twitter')); ?>"
                                                               name="twitter"
                                                               placeholder="<?php echo e(trans('general.twitter')); ?>"
                                                               value="<?php echo e(old('twitter')); ?>" autofocus>
                                                        <?php if($errors->has('twitter')): ?>
                                                            <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('twitter')); ?>

                                                        </strong>
                                                    </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group<?php echo e($errors->has('whatsapp') ? ' has-error' : ''); ?>">
                                                        <label for="whatsapp"
                                                               class="control-label"><?php echo e(trans('general.whatsapp')); ?></label>
                                                        <input id="whatsapp" type="text" class="form-control tooltips"
                                                               data-container="body" data-placement="top"
                                                               data-original-title="<?php echo e(trans('message.whatsapp')); ?>"
                                                               name="whatsapp"
                                                               placeholder="<?php echo e(trans('general.whatsapp')); ?>"
                                                               value="<?php echo e(old('whatsapp')); ?>" autofocus>
                                                        <?php if($errors->has('whatsapp')): ?>
                                                            <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('whatsapp')); ?>

                                                        </strong>
                                                    </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group<?php echo e($errors->has('iphone') ? ' has-error' : ''); ?>">
                                                        <label for="iphone"
                                                               class="control-label"><?php echo e(trans('general.iphone')); ?></label>
                                                        <input id="iphone" type="url" class="form-control tooltips"
                                                               data-container="body" data-placement="top"
                                                               data-original-title="<?php echo e(trans('message.iphone')); ?>"
                                                               name="iphone" placeholder="<?php echo e(trans('general.iphone')); ?>"
                                                               value="<?php echo e(old('iphone')); ?>" autofocus>
                                                        <?php if($errors->has('iphone')): ?>
                                                            <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('iphone')); ?>

                                                        </strong>
                                                    </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group<?php echo e($errors->has('android') ? ' has-error' : ''); ?>">
                                                        <label for="android"
                                                               class="control-label"><?php echo e(trans('general.android')); ?></label>
                                                        <input id="android" type="url" class="form-control tooltips"
                                                               data-container="body" data-placement="top"
                                                               data-original-title="<?php echo e(trans('message.android')); ?>"
                                                               name="android"
                                                               placeholder="<?php echo e(trans('general.android')); ?>"
                                                               value="<?php echo e(old('android')); ?>" autofocus>
                                                        <?php if($errors->has('android')): ?>
                                                            <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('android')); ?>

                                                        </strong>
                                                    </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group<?php echo e($errors->has('longitude') ? ' has-error' : ''); ?>">
                                                        <label for="longitude"
                                                               class="control-label"><?php echo e(trans('general.longitude')); ?></label>
                                                        <input id="longitude" type="text" class="form-control tooltips"
                                                               data-container="body" data-placement="top"
                                                               data-original-title="<?php echo e(trans('message.longitude')); ?>"
                                                               name="longitude"
                                                               placeholder="<?php echo e(trans('general.longitude')); ?>"
                                                               value="<?php echo e(old('longitude')); ?>" autofocus>
                                                        <?php if($errors->has('longitude')): ?>
                                                            <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('longitude')); ?>

                                                        </strong>
                                                    </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group<?php echo e($errors->has('latitude') ? ' has-error' : ''); ?>">
                                                        <label for="latitude"
                                                               class="control-label"><?php echo e(trans('general.latitude')); ?></label>
                                                        <input id="latitude" type="text" class="form-control tooltips"
                                                               data-container="body" data-placement="top"
                                                               data-original-title="<?php echo e(trans('message.latitude')); ?>"
                                                               name="latitude"
                                                               placeholder="<?php echo e(trans('general.latitude')); ?>"
                                                               value="<?php echo e(old('latitude')); ?>" autofocus>
                                                        <?php if($errors->has('latitude')): ?>
                                                            <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('latitude')); ?>

                                                        </strong>
                                                    </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isAdminOrAbove')): ?>
                                                    <div class="col-md-4">
                                                        <div class="form-group<?php echo e($errors->has('balance') ? ' has-error' : ''); ?>">
                                                            <label for="balance"
                                                                   class="control-label"><?php echo e(trans('general.balance')); ?></label>
                                                            <input id="balance" type="number"
                                                                   class="form-control tooltips" data-container="body"
                                                                   data-placement="top"
                                                                   data-original-title="<?php echo e(trans('message.balance')); ?>"
                                                                   name="balance"
                                                                   placeholder="<?php echo e(trans('general.balance')); ?>"
                                                                   value="<?php echo e(old('balance')); ?>" autofocus>
                                                            <?php if($errors->has('balance')): ?>
                                                                <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('balance')); ?>

                                                        </strong>
                                                    </span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                                <div class="col-md-4">
                                                    <div class="form-group<?php echo e($errors->has('merchant_id') ? ' has-error' : ''); ?>">
                                                        <label for="merchant_id"
                                                               class="control-label"><?php echo e(trans('general.merchant_id')); ?></label>
                                                        <input id="merchant_id" type="text"
                                                               class="form-control tooltips" data-container="body"
                                                               data-placement="top"
                                                               data-original-title="<?php echo e(trans('message.merchant_id')); ?>"
                                                               name="merchant_id"
                                                               placeholder="<?php echo e(trans('general.merchant_id')); ?>"
                                                               value="<?php echo e(old('merchant_id')); ?>" autofocus>
                                                        <?php if($errors->has('merchant_id')): ?>
                                                            <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('merchant_id')); ?>

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
                                            <i class="fa fa-gift"></i> <?php echo e(trans('general.more_details')); ?>

                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label sbold tooltips"
                                                               data-container="body" data-placement="top"
                                                               data-original-title="<?php echo e(trans('message.active')); ?>"><?php echo e(trans('general.active')); ?></label></br>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="active" id="optionsRadios1"
                                                                   checked value="1">
                                                            <?php echo e(trans('general.yes')); ?> </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="active" id="optionsRadios2"
                                                                   value="0"> <?php echo e(trans('general.no')); ?></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label sbold tooltips"
                                                               data-container="body" data-placement="top"
                                                               data-original-title="<?php echo e(trans('message.on_home')); ?>"><?php echo e(trans('general.on_home')); ?></label></br>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="on_home" id="optionsRadios1"
                                                                   value="1"> <?php echo e(trans('general.yes')); ?> </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="on_home" id="optionsRadios2"
                                                                   checked value="0"> <?php echo e(trans('general.no')); ?>

                                                        </label>
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
                        </div>
                </form>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>