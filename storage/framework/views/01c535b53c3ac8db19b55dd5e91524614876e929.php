<div class="container">
    <div class="tt-login-form">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="tt-item">
                    <h2 class="tt-title text-center border-bottom"><?php echo e(trans('general.personal_information')); ?></h2>
                    <div class="form-default">
                        <form method="post"
                              action="<?php echo e(route('frontend.order.store')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="loginInputName"><?php echo e(trans('general.name')); ?> *</label>
                                        <input type="text" name="name" class="form-control" id="loginInputName"
                                               value="<?php echo e(auth()->guest() ? old('name') : auth()->user()->name); ?>"
                                               required
                                               placeholder="<?php echo e(trans('general.name')); ?>">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="loginInputEmail"><?php echo e(trans('general.email')); ?> *</label>
                                        <input type="text" name="email" class="form-control" id="loginInputEmail"
                                               value="<?php echo e(auth()->guest() ? old('email') : auth()->user()->email); ?>"
                                               required
                                               placeholder="<?php echo e(trans('general.email')); ?>">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="loginLastName"><?php echo e(trans('general.mobile')); ?> *</label>
                                        <input type="text" name="mobile" class="form-control" id="loginLastName"
                                               value="<?php echo e(auth()->guest() ? old('mobile') : auth()->user()->mobile); ?>"
                                               required
                                               placeholder="<?php echo e(trans('general.mobile')); ?>">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="loginInputPassword"><?php echo e(trans('general.full_address')); ?> *</label>
                                        <input type="text" name="address" class="form-control" id="loginInputPassword"
                                               value="<?php echo e(auth()->guest() ? old('address') : auth()->user()->address); ?>"
                                               required
                                               placeholder="<?php echo e(trans('general.address')); ?>">
                                    </div>
                                </div>
                                <?php if(getClientCountry()): ?>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="address_country"><?php echo e(trans('general.country')); ?>

                                                <sup>*</sup></label>
                                            <select name="country_id" class="form-control" required>
                                                
                                                <option value="<?php echo e(session()->get('country')->id); ?>"
                                                        selected><?php echo e(session()->get('country')->slug); ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <?php if(session()->get('country')->is_local): ?>
                                        <?php if(session()->has('area')): ?>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="address_country"><?php echo e(trans('general.area')); ?>

                                                        <sup>*</sup></label>
                                                    <select name="area" class="form-control" required>
                                                        
                                                        <option value="<?php echo e(session()->get('area')->slug); ?>"
                                                                selected><?php echo e(session()->get('area')->slug); ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="notes"><?php echo e(trans('general.notes')); ?></label>
                                        <textarea name="notes" class="form-control" style="height: 150px;" rows="1"
                                                  placeholder="<?php echo e(trans('general.notes')); ?>"><?php echo e(old('notes')); ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <?php echo $__env->make('frontend.wokiee.four.partials._cart_prices', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>