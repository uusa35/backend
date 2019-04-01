<div class="page-bar">
    <ul class="page-breadcrumb">
        <?php $__env->startSection('breadcrumbs'); ?>
            <?php if(isset($breadcrumbs) && $breadcrumbs->isNotEmpty()): ?>
                <ol class="breadcrumb">
                    <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($breadcrumb->url && !$loop->last): ?>
                            <li class="breadcrumb-item">
                                <a href="<?php echo e($breadcrumb->url); ?>"><?php echo e($breadcrumb->title); ?></a>
                            </li>
                        <?php else: ?>
                            <li class="breadcrumb-item active">
                                <?php echo e($breadcrumb->title); ?></li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ol>
            <?php endif; ?>
        <?php echo $__env->yieldSection(); ?>
    </ul>
    <div class="page-toolbar">
        <div class="btn-group pull-right">
            <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown"
                    data-hover="dropdown" data-delay="1000" data-close-others="true"> Actions
                <i class="fa fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
                <li>
                    <a href="<?php echo e(route('backend.home')); ?>">
                        <i class="icon-user-following"></i> <?php echo e(trans('general.dashboard')); ?></a>
                </li>
                <li>
                    <a href="<?php echo e(route('frontend.home')); ?>">
                        <i class="icon-home"></i> <?php echo e(trans('general.home')); ?></a>
                </li>
                <li class="divider"></li>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isSuper')): ?>
                    <li>
                        <a href="<?php echo e(route('backend.admin.setting.edit',1)); ?>">
                            <i class="icon-settings"></i><?php echo e(trans('general.edit_settings')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('backend.admin.setting.index')); ?>">
                            <i class="icon-settings"></i> <?php echo e(trans('general.settings')); ?></a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
<!-- END PAGE HEADER-->