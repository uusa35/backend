<li class="disabled">
    <a href="#" disabled="true" class="tooltips disabled" data-container="body" data-placement="<?php echo e(app()->isLocale('ar') ? 'left' : 'right'); ?>" data-original-title="<?php echo e(trans('message.create_your_new_items_list')); ?>">
        <i class="icon-note"></i> <?php echo e(trans('general.create_your_new_items_list')); ?></a>
</li>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service.create')): ?>
    <li>
        <a href="<?php echo e(route('backend.service.create')); ?>" class="tooltips" data-container="body" data-placement="<?php echo e(app()->isLocale('ar') ? 'left' : 'right'); ?>" data-original-title="<?php echo e(trans('message.new_service')); ?>">
            <i class="icon-plus"></i> <?php echo e(trans('general.new_service')); ?></a>
    </li>
<?php endif; ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('timing.create')): ?>
    <li>
        <a href="<?php echo e(route('backend.timing.create')); ?>" class="tooltips" data-container="body" data-placement="<?php echo e(app()->isLocale('ar') ? 'left' : 'right'); ?>" data-original-title="<?php echo e(trans('message.new_timing')); ?>">
            <i class="icon-plus"></i> <?php echo e(trans('general.new_timing')); ?></a>
    </li>
<?php endif; ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product.create')): ?>
    <li>
        <a href="<?php echo e(route('backend.product.create')); ?>" class="tooltips" data-container="body" data-placement="<?php echo e(app()->isLocale('ar') ? 'left' : 'right'); ?>" data-original-title="<?php echo e(trans('message.new_product')); ?>">
            <i class="icon-plus"></i> <?php echo e(trans('general.new_product')); ?></a>
    </li>
<?php endif; ?>