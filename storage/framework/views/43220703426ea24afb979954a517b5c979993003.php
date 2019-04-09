<ul>
    <li>
        <strong class="border-bottom"><?php echo e(trans('general.currency')); ?></strong>
    </li>
    <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="<?php echo e(getCurrencySymbol() === $currency->currency_symbol_en ? 'active' : null); ?>">
            <a href="<?php echo e(route('frontend.currency.change',['currency' => strtolower($currency->currency_symbol_en)])); ?>">
                <img class="img-responsive img-xxs"
                     src="<?php echo e($currency->country->imageThumbLink); ?>" alt="<?php echo e($currency->name); ?>">
                <?php echo e($currency->name); ?>

            </a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>