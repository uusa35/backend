<?php $__env->startComponent('mail::message'); ?>
<div style="text-align: left;">
    <?php echo e(trans('general.date')); ?> : <?php echo e(Carbon\Carbon::today()->format('d/m/Y')); ?>

</div>
# <?php echo e(trans('general.order_number')); ?><?php echo e($order->id); ?>

<strong style="direction: rtl; float: right;"> <?php echo e(trans('general.gentlemen')); ?> / <?php echo e($user->name); ?></strong><br>
<strong style="direction: rtl; float: right;"> <?php echo e(trans('general.address')); ?>/ <?php echo e($user->address); ?></strong><br>
<strong style="direction: rtl; float: right;"> <?php echo e(trans('general.area')); ?>/ <?php echo e($order->area); ?></strong><br>
<strong style="direction: rtl; float: right;"> <?php echo e(trans('general.mobile')); ?> / <?php echo e($user->mobile); ?></strong>
<br>

</br>
<?php $__env->startComponent('mail::table'); ?>
| <?php echo e(trans('general.name')); ?>       | <?php echo e(trans('general.price')); ?>         | <?php echo e(trans('general.qty')); ?>  | <?php echo e(trans('general.size_or_date')); ?>  | <?php echo e(trans('general.color_or_time')); ?>  | <?php echo e(trans('general.sku')); ?>  |
| ------------- |:-------------:| --------:| --------:|
<?php $__currentLoopData = $order->order_metas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderMeta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($orderMeta->item_type === 'product'): ?>
| <?php echo e($orderMeta->product->name); ?>         | <?php echo e($orderMeta->price); ?>| <?php echo e($orderMeta->qty); ?>| <?php echo e($orderMeta->product_attribute->size->name); ?> | <?php echo e($orderMeta->product_attribute->color->name); ?> | <?php echo e($orderMeta->product->sku); ?>         |
<?php elseif($orderMeta->item_type === 'service'): ?>
| <?php echo e($orderMeta->service->name); ?>         | <?php echo e($orderMeta->price); ?>| <?php echo e($orderMeta->qty); ?>| <?php echo e($orderMeta->service_date); ?> | <?php echo e($orderMeta->service_time); ?> | <?php echo e($orderMeta->service->id); ?>         |
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php if($order->shipping_cost > 0): ?>
| shipment        |     <?php echo e($order->shipping_cost); ?>        |           |
<?php endif; ?>
| total        |     <?php echo e($order->net_price); ?>        |           |
<?php echo $__env->renderComponent(); ?>








<hr>

<?php $__env->startComponent('mail::panel'); ?>
<div style="font-size: large; font-weight: bold; direction: rtl !important;">
    <?php echo e(trans('message.we_received_your_order_order_shall_be_reviewed_thank_your_for_choosing_our_service')); ?>

</div>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startComponent('mail::button', ['url' => env('APP_URL'),'class' => 'button-black']); ?>
<strong><?php echo e(env('APP_NAME')); ?></strong>
<?php echo $__env->renderComponent(); ?>


<div style="text-align: center; width: 100%; float: left; font-weight: bolder;">
    مع تحيات,<br>
    <?php echo e(env('APP_NAME')); ?>

</div>
<?php echo $__env->renderComponent(); ?>