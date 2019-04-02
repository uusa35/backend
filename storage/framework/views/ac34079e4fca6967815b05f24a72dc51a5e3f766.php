<div class="container">
    <div class="tt-login-form">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="tt-item">
                    <h2 class="tt-title text-center border-bottom"><?php echo e(trans('general.personal_information_confirmation')); ?></h2>
                    <div class="form-default">
                        <form method="post"
                              action="<?php echo e(route('web.payment.create')); ?>">
                            <input type="hidden" name="order_id" value="<?php echo e($order->id); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="loginInputName"><?php echo e(trans('general.name')); ?> *</label>
                                        <input type="text" name="name" class="form-control disabled"
                                               value="<?php echo e(auth()->user()->name); ?>"
                                               required disabled
                                               placeholder="<?php echo e(trans('general.name')); ?>">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="loginInputEmail"><?php echo e(trans('general.email')); ?> *</label>
                                        <input type="text" name="email" class="form-control"
                                               value="<?php echo e(auth()->user()->email); ?>"
                                               required disabled
                                               placeholder="<?php echo e(trans('general.email')); ?>">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="loginLastName"><?php echo e(trans('general.mobile')); ?> *</label>
                                        <input type="text" name="mobile" class="form-control"
                                               value="<?php echo e(auth()->user()->mobile); ?>"
                                               required disabled
                                               placeholder="<?php echo e(trans('general.mobile')); ?>">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="loginInputPassword"><?php echo e(trans('general.full_address')); ?> *</label>
                                        <input type="text" name="address" class="form-control"
                                               value="<?php echo e(auth()->user()->address); ?>"
                                               required disabled
                                               placeholder="<?php echo e(trans('general.address')); ?>">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="address_country"><?php echo e(trans('general.country')); ?> <sup>*</sup></label>
                                        <select name="country_id" class="form-control" required disabled>
                                            <?php if(auth()->guard()->check()): ?>
                                                <option selected
                                                        value="<?php echo e(auth()->user()->country->id); ?>"><?php echo e(auth()->user()->country->slug); ?></option>
                                            <?php else: ?>
                                                <option value="<?php echo e(getClientCountry()->id); ?>"
                                                        selected><?php echo e(getClientCountry()->slug); ?></option>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="notes"><?php echo e(trans('general.notes')); ?></label>
                                        <textarea disabled name="notes" class="form-control" style="height: 150px;"
                                                  rows="1"
                                                  placeholder="<?php echo e(trans('general.notes')); ?>"><?php echo e(request('notes')); ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="tt-shopcart-box tt-boredr-large">
                                <table class="tt-shopcart-table01">
                                    <tbody>
                                    <tr>
                                        <div class="alert alert-warning">
                                            <i class="fa fa-fw fa-info-circle fa-lg"></i>
                                            <?php echo e(trans('message.payment_will_be_in_kuwaiti_dinar_only')); ?>

                                        </div>
                                    </tr>
                                    <tr>
                                        <th><?php echo e(trans('general.total_price')); ?> <?php echo e($currency->name); ?></th>
                                        <td><?php echo e(getConvertedPrice(Cart::total())); ?> <?php echo e($currency->symbol); ?></td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th><?php echo e(trans('general.total_price_in_kuwaiti_dinar')); ?></th>
                                        <td><?php echo e(Cart::total()); ?> <?php echo e(trans('general.kd')); ?></td>
                                    </tr>
                                    </tfoot>
                                </table>
                                <button type="submit" class="btn btn-lg"><span
                                            class="icon icon-check_circle"></span><?php echo e(trans('general.payment_confirm_go_to_payment')); ?>

                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>