<div class="tt-collapse open">
    <h3 class="tt-collapse-title"><?php echo e(trans('general.filter_by_price')); ?></h3>
    <div class="tt-collapse-content">
        <ul class="tt-list-row">
            <li class=""><a href="<?php echo e(request()->fullUrlWithQuery(['min' => 0, 'max' => 100])); ?>">0 — 100 <?php echo e($currency->symbol); ?> </a></li>
            <li class=""><a href="<?php echo e(request()->fullUrlWithQuery(['min' => 100, 'max' => 150])); ?>">100 — 150 <?php echo e($currency->symbol); ?> </a></li>
            <li class=""><a href="<?php echo e(request()->fullUrlWithQuery(['min' => 150, 'max' => 200])); ?>">150 — 200 <?php echo e($currency->symbol); ?> </a></li>
            <li class=""><a href="<?php echo e(request()->fullUrlWithQuery(['min' => 200, 'max' => 250])); ?>">200 — 250 <?php echo e($currency->symbol); ?> </a></li>
        </ul>
    </div>
</div>