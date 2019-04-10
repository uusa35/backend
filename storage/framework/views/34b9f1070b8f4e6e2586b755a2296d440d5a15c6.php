<div class="tt-shopcart-box tt-boredr-large">
    <table class="tt-shopcart-table01">
        <tbody>
        <?php if(!$currency->country->is_local): ?>
            <tr>
                <div class="alert alert-warning">
                    <i class="fa fa-fw fa-info-circle fa-lg"></i>
                    <?php echo e(trans('message.payment_will_be_in_kuwaiti_dinar_only')); ?>

                </div>
            </tr>
            <tr>
                <th><?php echo e(trans('general.total_price')); ?> (<?php echo e($currency->name); ?>)</th>
                <td><?php echo e(getConvertedPrice(Cart::total())); ?> <?php echo e($currency->symbol); ?></td>
            </tr>
        <?php endif; ?>
        </tbody>
        <tfoot>
        <?php if(session()->has('coupon')): ?>
            <tr>
                <th><?php echo e(trans('general.discount')); ?></th>
                <td><?php echo e(session()->get('coupon')->value); ?> <?php echo e(trans('general.kd')); ?></td>
            </tr>
        <?php endif; ?>
        <tr>
            <th><?php echo e(trans('general.total_price_in_kuwaiti_dinar')); ?></th>
            <td><?php echo e(Cart::total()); ?> <?php echo e(trans('general.kd')); ?></td>
        </tr>
        </tfoot>
    </table>
    <button type="submit" class="btn btn-lg"><span
                class="icon icon-check_circle"></span><?php echo e(trans('general.proceed_to_checkout')); ?>

    </button>
</div>