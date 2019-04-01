<?php $__env->startSection('content'); ?>
<div class="portlet box blue">
    <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="portlet-body form">
        <form class="horizontal-form" role="form" method="POST" action="<?php echo e(route('backend.admin.user.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="api_token" value="<?php echo e(str_random(rand(10,99))); ?>">
            <div class="form-body">
                <h3 class="form-section"><?php echo e(trans('general.create_user')); ?></h3>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group <?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name_ar" class="control-label"><?php echo e(trans('general.name')); ?>*</label>
                            <input id="name_ar" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" placeholder="<?php echo e(trans('general.name')); ?>" required autofocus>
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
                    <div class="col-md-4">
                        <div class="form-group <?php echo e($errors->has('slug_en') ? ' has-error' : ''); ?>">
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
                    <div class="col-md-4">
                        <div class="form-group <?php echo e($errors->has('description_en') ? ' has-error' : ''); ?>">
                            <label for="description_en" class="control-label"><?php echo e(trans('general.description_en')); ?>*</label>
                            <input id="description_en" type="text" class="form-control" name="description_en" value="<?php echo e(old('description_en')); ?>" placeholder="<?php echo e(trans('general.description_en')); ?>" required autofocus>
                            <?php if($errors->has('description_en')): ?>
                            <span class="help-block">
                                <strong>
                                    <?php echo e($errors->first('description_en')); ?>

                                </strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group <?php echo e($errors->has('description_ar') ? ' has-error' : ''); ?>">
                            <label for="description_ar" class="control-label"><?php echo e(trans('general.description_ar')); ?>*</label>
                            <input id="description_ar" type="text" class="form-control" name="description_ar" value="<?php echo e(old('description_ar')); ?>" placeholder="<?php echo e(trans('general.description_ar')); ?>" required autofocus>
                            <?php if($errors->has('description_ar')): ?>
                            <span class="help-block">
                                <strong>
                                    <?php echo e($errors->first('description_ar')); ?>

                                </strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group <?php echo e($errors->has('service_en') ? ' has-error' : ''); ?>">
                            <label for="service_en" class="control-label"><?php echo e(trans('general.service_en')); ?>*</label>
                            <input id="service_en" type="text" class="form-control" name="service_en" value="<?php echo e(old('service_en')); ?>" placeholder="<?php echo e(trans('general.service_en')); ?>" required autofocus>
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
                            <label for="service_ar" class="control-label"><?php echo e(trans('general.service_ar')); ?>*</label>
                            <input id="service_ar" type="text" class="form-control" name="service_ar" value="<?php echo e(old('service_ar')); ?>" placeholder="<?php echo e(trans('general.service_ar')); ?>" required autofocus>
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
                        <div class="form-group <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="control-label"><?php echo e(trans('general.password')); ?> *</label>
                            <input id="password" type="password" class="form-control" name="password" value="" placeholder="<?php echo e(trans('general.password')); ?>" required autofocus>
                            <?php if($errors->has('password')): ?>
                            <span class="help-block">
                                <strong>
                                    <?php echo e($errors->first('password')); ?>

                                </strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group <?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                            <label for="password_confirmation" class="control-label"><?php echo e(trans('general.password_confirmation')); ?> *</label>
                            <input id="password_confirmation" type="text" class="form-control" name="password_confirmation" value="" placeholder="<?php echo e(trans('general.password_confirmation')); ?>" required autofocus>
                            <?php if($errors->has('password_confirmation')): ?>
                            <span class="help-block">
                                <strong>
                                    <?php echo e($errors->first('password_confirmation')); ?>

                                </strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>


                    

                    <div class="col-md-4">
                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="control-label"><?php echo e(trans('general.email')); ?> *</label>
                            <input id="email" type="text" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(trans('general.email')); ?>" required autofocus>
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
                            <label for="mobile" class="control-label"><?php echo e(trans('general.mobile')); ?> *</label>
                            <input id="mobile" type="text" class="form-control" name="mobile" value="<?php echo e(old('mobile')); ?>" placeholder="<?php echo e(trans('general.mobile')); ?> " required autofocus>
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
                            <label for="phone" class="control-label"><?php echo e(trans('general.phone')); ?></label>
                            <input id="phone" type="text" class="form-control" name="phone" placeholder="<?php echo e(trans('general.phone')); ?>" value="<?php echo e(old('phone')); ?>" autofocus>
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
                            <label for="fax" class="control-label"><?php echo e(trans('general.fax')); ?></label>
                            <input id="fax" type="text" class="form-control" name="fax" placeholder="<?php echo e(trans('general.fax')); ?>" value="<?php echo e(old('fax')); ?>" autofocus>
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
                            <input type="file" class="form-control" name="image" placeholder="<?php echo e(trans('general.main_image')); ?>" required>
                            <div class="help-block text-left">
                                W * H - Best fit ['1080', '1440'] pixels
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="form_control_1"><?php echo e(trans('general.banner')); ?></label>
                            <input type="file" class="form-control" name="banner" placeholder="<?php echo e(trans('general.banner')); ?>" required>
                            <div class="help-block text-left">
                                W * H - Best fit ['1080', '1440'] pixels
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group <?php echo e($errors->has('bg') ? ' has-error' : ''); ?>">
                            <label for="demo" class="control-label"><?php echo e(trans('general.bg')); ?>*</label>
                            <input type="text" id="hue-demo" class="form-control demo" data-control="hue" name="bg" value="#ff6161">
                            <?php if($errors->has('demo')): ?>
                            <span class="help-block">
                                <strong>
                                    <?php echo e($errors->first('demo')); ?>

                                </strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group<?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
                            <label for="address" class="control-label"><?php echo e(trans('general.address')); ?></label>
                            <input id="address" type="text" class="form-control" name="address" placeholder="<?php echo e(trans('general.address')); ?>" value="<?php echo e(old('address')); ?>" autofocus>
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
                            <label for="area" class="control-label"><?php echo e(trans('general.area')); ?></label>
                            <input id="area" type="text" class="form-control" name="area" placeholder="<?php echo e(trans('general.area')); ?>" value="<?php echo e(old('area')); ?>" autofocus>
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
                            <label for="block" class="control-label"><?php echo e(trans('general.block')); ?></label>
                            <input id="block" type="text" class="form-control" name="block" placeholder="<?php echo e(trans('general.block')); ?>" value="<?php echo e(old('block')); ?>" autofocus>
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
                            <label for="street" class="control-label"><?php echo e(trans('general.street')); ?></label>
                            <input id="street" type="text" class="form-control" name="street" placeholder="<?php echo e(trans('general.street')); ?>" value="<?php echo e(old('street')); ?>" autofocus>
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
                            <label for="building" class="control-label"><?php echo e(trans('general.building')); ?></label>
                            <input id="building" type="text" class="form-control" name="building" placeholder="<?php echo e(trans('general.building')); ?>" value="<?php echo e(old('building')); ?>" autofocus>
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
                            <label for="floor" class="control-label"><?php echo e(trans('general.floor')); ?></label>
                            <input id="floor" type="text" class="form-control" name="floor" placeholder="<?php echo e(trans('general.floor')); ?>" value="<?php echo e(old('floor')); ?>" autofocus>
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
                            <label for="apartment" class="control-label"><?php echo e(trans('general.apartment')); ?></label>
                            <input id="apartment" type="text" class="form-control" name="apartment" placeholder="<?php echo e(trans('general.apartment')); ?>" value="<?php echo e(old('apartment')); ?>" autofocus>
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
                            <label for="single" class="control-label"><?php echo e(trans('general.country')); ?></label>
                            <select id="single" class="form-control select2">
                                <option></option>

                                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($country->slug_en); ?>"><?php echo e($country->slug_en); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="single" class="control-label"><?php echo e(trans('general.role')); ?></label>
                            <select id="single" class="form-control select2">
                                <option></option>

                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($country->slug_en); ?>"><?php echo e($role->slug_en); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group<?php echo e($errors->has('policy_ar') ? ' has-error' : ''); ?>">
                            <label for="policy_ar" class="control-label"><?php echo e(trans('general.policy_ar')); ?></label>
                            <input id="policy_ar" type="text" class="form-control" name="policy_ar" placeholder="<?php echo e(trans('general.policy_ar')); ?>" value="<?php echo e(old('policy_ar')); ?>" autofocus>
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
                            <label for="policy_en" class="control-label"><?php echo e(trans('general.policy_en')); ?></label>
                            <input id="policy_en" type="text" class="form-control" name="policy_en" placeholder="<?php echo e(trans('general.policy_en')); ?>" value="<?php echo e(old('policy_en')); ?>" autofocus>
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
                            <label for="cancellation_ar" class="control-label"><?php echo e(trans('general.cancellation_ar')); ?></label>
                            <input id="cancellation_ar" type="text" class="form-control" name="cancellation_ar" placeholder="<?php echo e(trans('general.cancellation_ar')); ?>" value="<?php echo e(old('cancellation_ar')); ?>" autofocus>
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
                            <label for="cancellation_en" class="control-label"><?php echo e(trans('general.cancellation_en')); ?></label>
                            <input id="cancellation_en" type="text" class="form-control" name="cancellation_en" placeholder="<?php echo e(trans('general.cancellation_en')); ?>" value="<?php echo e(old('cancellation_en')); ?>" autofocus>
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
                            <label for="keywords" class="control-label"><?php echo e(trans('general.keywords')); ?></label>
                            <input id="keywords" type="text" class="form-control" name="keywords" placeholder="<?php echo e(trans('general.keywords')); ?>" value="<?php echo e(old('keywords')); ?>" autofocus>
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
                            <label for="path" class="control-label"><?php echo e(trans('general.path')); ?></label>
                            <input id="path" type="text" class="form-control" name="path" placeholder="<?php echo e(trans('general.path')); ?>" value="<?php echo e(old('path')); ?>" autofocus>
                            <?php if($errors->has('path')): ?>
                            <span class="help-block">
                                <strong>
                                    <?php echo e($errors->first('path')); ?>

                                </strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group<?php echo e($errors->has('website') ? ' has-error' : ''); ?>">
                            <label for="website" class="control-label"><?php echo e(trans('general.website')); ?></label>
                            <input id="website" type="text" class="form-control" name="website" placeholder="<?php echo e(trans('general.website')); ?>" value="<?php echo e(old('website')); ?>" autofocus>
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
                            <label for="facebook" class="control-label"><?php echo e(trans('general.facebook')); ?></label>
                            <input id="facebook" type="text" class="form-control" name="facebook" placeholder="<?php echo e(trans('general.facebook')); ?>" value="<?php echo e(old('facebook')); ?>" autofocus>
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
                            <label for="instagram" class="control-label"><?php echo e(trans('general.instagram')); ?></label>
                            <input id="instagram" type="text" class="form-control" name="instagram" placeholder="<?php echo e(trans('general.instagram')); ?>" value="<?php echo e(old('instagram')); ?>" autofocus>
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
                            <label for="youtube" class="control-label"><?php echo e(trans('general.youtube')); ?></label>
                            <input id="youtube" type="text" class="form-control" name="youtube" placeholder="<?php echo e(trans('general.youtube')); ?>" value="<?php echo e(old('youtube')); ?>" autofocus>
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
                            <label for="twitter" class="control-label"><?php echo e(trans('general.twitter')); ?></label>
                            <input id="twitter" type="text" class="form-control" name="twitter" placeholder="<?php echo e(trans('general.twitter')); ?>" value="<?php echo e(old('twitter')); ?>" autofocus>
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
                            <label for="whatsapp" class="control-label"><?php echo e(trans('general.whatsapp')); ?></label>
                            <input id="whatsapp" type="text" class="form-control" name="whatsapp" placeholder="<?php echo e(trans('general.whatsapp')); ?>" value="<?php echo e(old('whatsapp')); ?>" autofocus>
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
                            <label for="iphone" class="control-label"><?php echo e(trans('general.iphone')); ?></label>
                            <input id="iphone" type="text" class="form-control" name="iphone" placeholder="<?php echo e(trans('general.iphone')); ?>" value="<?php echo e(old('iphone')); ?>" autofocus>
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
                            <label for="android" class="control-label"><?php echo e(trans('general.android')); ?></label>
                            <input id="android" type="text" class="form-control" name="android" placeholder="<?php echo e(trans('general.android')); ?>" value="<?php echo e(old('android')); ?>" autofocus>
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
                            <label for="longitude" class="control-label"><?php echo e(trans('general.longitude')); ?></label>
                            <input id="longitude" type="text" class="form-control" name="longitude" placeholder="<?php echo e(trans('general.longitude')); ?>" value="<?php echo e(old('longitude')); ?>" autofocus>
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
                            <label for="latitude" class="control-label"><?php echo e(trans('general.latitude')); ?></label>
                            <input id="latitude" type="text" class="form-control" name="latitude" placeholder="<?php echo e(trans('general.latitude')); ?>" value="<?php echo e(old('latitude')); ?>" autofocus>
                            <?php if($errors->has('latitude')): ?>
                            <span class="help-block">
                                <strong>
                                    <?php echo e($errors->first('latitude')); ?>

                                </strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group<?php echo e($errors->has('balance') ? ' has-error' : ''); ?>">
                            <label for="balance" class="control-label"><?php echo e(trans('general.balance')); ?></label>
                            <input id="balance" type="text" class="form-control" name="balance" placeholder="<?php echo e(trans('general.balance')); ?>" value="<?php echo e(old('balance')); ?>" autofocus>
                            <?php if($errors->has('balance')): ?>
                            <span class="help-block">
                                <strong>
                                    <?php echo e($errors->first('balance')); ?>

                                </strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>




                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label sbold"><?php echo e(trans('general.active')); ?></label></br>
                            <label class="radio-inline">
                                <input type="radio" name="active" id="optionsRadios1" value="1"> active </label>
                            <label class="radio-inline">
                                <input type="radio" name="active" id="optionsRadios2" checked value="0"> not_Active</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label sbold"><?php echo e(trans('general.on_home')); ?></label></br>
                            <label class="radio-inline">
                                <input type="radio" name="on_home" id="optionsRadios1" value="1"> on_home </label>
                            <label class="radio-inline">
                                <input type="radio" name="on_home" id="optionsRadios2" checked value="0"> not_on_home</label>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <?php echo $__env->make('backend.partials.forms._btn-group', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>

                </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>