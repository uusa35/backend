<?php if(isset($vendors) && $vendors->isNotEmpty()): ?>
    <div class="tt-collapse open">
        <h3 class="tt-collapse-title"><?php echo e(trans('general.companies')); ?></h3>
        <div class="tt-collapse-content">
            <ul class="tt-list-row">
                <?php $__currentLoopData = $vendors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a class="<?php echo e(request('user_id') == $vendor->id ? 'text-warning' : null); ?>"
                                href="<?php echo request()->fullUrlWithQuery(['user_id' => $vendor->id]); ?>"><?php echo e($vendor->slug); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="<?php echo e(getRequestQueryUrlWithout('user_id')); ?>" class="btn-link-02"><?php echo e(trans('general.clear')); ?></a>
                </li>
            </ul>
        </div>
    </div>
<?php endif; ?>