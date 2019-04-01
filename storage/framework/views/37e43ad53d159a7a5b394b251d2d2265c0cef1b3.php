<?php if(str_contains(request()->route()->getPrefix(),'backend')): ?>
    <?php echo $__env->make('backend.partials.breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php else: ?>
    <?php if(count($breadcrumbs) > 0): ?>
        <div class="tt-breadcrumb">
            <div class="container">
                <ul>
                    <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($breadcrumb->url && !$loop->last): ?>
                            <li><a href="<?php echo e($breadcrumb->url); ?>"><?php echo e($breadcrumb->title); ?> </a></li>
                        <?php else: ?>
                            <li class="active"><?php echo e($breadcrumb->title); ?></li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>