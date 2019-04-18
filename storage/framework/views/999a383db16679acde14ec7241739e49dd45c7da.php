<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product.create')): ?>
    <li>
        <a href="<?php echo e(route('backend.product.create')); ?>">
            <i class="icon-plus"></i> <?php echo e(trans('general.new_product')); ?></a>
    </li>
<?php endif; ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service.create')): ?>
    <li>
        <a href="<?php echo e(route('backend.service.create')); ?>">
            <i class="icon-plus"></i> <?php echo e(trans('general.new_service')); ?></a>
    </li>
<?php endif; ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('timing.create')): ?>
    <li>
        <a href="<?php echo e(route('backend.timing.create')); ?>">
            <i class="icon-plus"></i> <?php echo e(trans('general.new_timing')); ?></a>
    </li>
<?php endif; ?>