<?php $__env->startSection('content'); ?>
    <div class="portlet box blue">
        <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="portlet-body form">
            <form class="horizontal-form" role="form" method="POST"
                  action="<?php echo e(route('backend.user.update', $element->id)); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="_method" value="put">
                <input type="hidden" name="api_token" value="<?php echo e(str_random(rand(10,99))); ?>">
                <div class="form-body">
                    <h3 class="form-section">Create User</h3>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group <?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                <label for="name_ar" class="control-label">Name*</label>
                                <input id="name_ar"
                                       type="text"
                                       class="form-control"
                                       name="name"
                                       value="<?php echo e($element->name); ?>"
                                       placeholder="name in arabic"
                                       required autofocus>
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
                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <label for="email" class="control-label">email *</label>
                                <input id="email"
                                       type="text"
                                       class="form-control"
                                       name="email"
                                       value="<?php echo e($element->email); ?>"
                                       placeholder="email"
                                       required autofocus>
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
                                <label for="mobile" class="control-label">mobile *</label>
                                <input id="mobile"
                                       type="text"
                                       class="form-control"
                                       name="mobile"
                                       value="<?php echo e($element->mobile); ?>"
                                       placeholder="mobile"
                                       required autofocus>
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
                                <label for="phone" class="control-label">phone</label>
                                <input id="phone"
                                       type="text"
                                       class="form-control"
                                       name="phone"
                                       placeholder="phone"
                                       value="<?php echo e($element->phone); ?>"
                                       autofocus>
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
                            <div class="form-group<?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
                                <label for="address" class="control-label">address</label>
                                <input id="address"
                                       type="text"
                                       class="form-control"
                                       name="address"
                                       placeholder="address"
                                       value="<?php echo e($element->address); ?>"
                                       autofocus>
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
                                <label for="area" class="control-label">area</label>
                                <input id="area"
                                       type="text"
                                       class="form-control"
                                       name="area"
                                       placeholder="area"
                                       value="<?php echo e($element->area); ?>"
                                       autofocus>
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
                                <label for="block" class="control-label">block</label>
                                <input id="block"
                                       type="text"
                                       class="form-control"
                                       name="block"
                                       placeholder="block"
                                       value="<?php echo e($element->block); ?>"
                                       autofocus>
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
                                <label for="street" class="control-label">street</label>
                                <input id="street"
                                       type="text"
                                       class="form-control"
                                       name="street"
                                       placeholder="street"
                                       value="<?php echo e($element->street); ?>"
                                       autofocus>
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
                                <label for="building" class="control-label">building</label>
                                <input id="building"
                                       type="text"
                                       class="form-control"
                                       name="building"
                                       placeholder="building"
                                       value="<?php echo e($element->building); ?>"
                                       autofocus>
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
                                <label for="floor" class="control-label">floor</label>
                                <input id="floor"
                                       type="text"
                                       class="form-control"
                                       name="floor"
                                       placeholder="floor"
                                       value="<?php echo e($element->floor); ?>"
                                       autofocus>
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
                                <label for="apartment" class="control-label">apartment</label>
                                <input id="apartment"
                                       type="text"
                                       class="form-control"
                                       name="apartment"
                                       placeholder="apartment"
                                       value="<?php echo e($element->apartment); ?>"
                                       autofocus>
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
                            <div class="form-group<?php echo e($errors->has('country') ? ' has-error' : ''); ?>">
                                <label for="single"
                                       class="control-label"><?php echo e(trans('general.owner')); ?>

                                    *</label>
                                <select name="country_id" class="form-control tooltips"
                                        data-container="body" data-placement="top"
                                        data-original-title="<?php echo e(trans('message.owner')); ?>">
                                    <option value=""><?php echo e(trans('general.choose_user')); ?></option>
                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($country->id); ?>" <?php echo e($country->id === $element->country_id ? 'selected' : null); ?>><?php echo e($country->slug); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php if($errors->has('country')): ?>
                                    <span class="help-block">
                                        <strong>
                                            <?php echo e($errors->first('country')); ?>

                                        </strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label sbold">active</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="active" id="optionsRadios1" <?php echo e($element->active ? 'checked' : null); ?>

                                           value="1"> active </label>
                                <label class="radio-inline">
                                    <input type="radio" name="active" id="optionsRadios2" <?php echo e(!$element->active ? 'checked' : null); ?>

                                           value="0"> not_Active</label>
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