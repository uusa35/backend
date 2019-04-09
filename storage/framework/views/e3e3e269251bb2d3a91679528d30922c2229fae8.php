<?php $__env->startSection('notification'); ?>
    <?php if(session()->has('success') || session()->has('error') || session()->has('warning') || session()->has('info')): ?>
        <div class="container-indent">
            <div class="container container-fluid-custom-mobile-padding">
                <div class="row">
                    <div class="col">
                        <?php if(isset($success) || $success = session()->get('success')): ?>
                            <div class="alert alert-success alert-block" role="alert">
                                <div class="row">
                                    <div class="col-lg-1">
                                        <i class="fa fa-2x fa-check-circle-o fa-fw"></i>
                                    </div>
                                    <div class="col-lg-11">
                                        <div class="row">
                                            <div class="col-11">
                                                <?php if(is_array($success)): ?>
                                                    <?php $__currentLoopData = $success; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php echo e($m); ?>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>
                                                    <?php echo e($success); ?>

                                                <?php endif; ?>
                                            </div>
                                            <div class="col-1">
                                                <button type="button" class="close" data-dismiss="alert"><i
                                                            class="fa fa-fw fa-lg icon-f-84"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if(isset($error) || $error = session()->get('error')): ?>
                            <div class="alert alert-danger alert-block">
                                <div class="row">
                                    <div class="col-1">
                                        <i class="fa fa-2x icon-h-08 fa-fw"></i>
                                    </div>
                                    <div class="col-10">
                                        <?php if(is_array($error)): ?>
                                            <?php $__currentLoopData = $error; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <h3><?php echo e($m); ?></h3>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <h6><?php echo e($error); ?></h6>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-1">
                                        <button type="button" class="close" data-dismiss="alert"><i
                                                    class="fa fa-fw fa-lg icon-f-84"></i></button>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if(isset($errors) && $errors->count() > 0): ?>
                            <div class="alert alert-danger alert-block">
                                <div class="row">
                                    <div class="col-lg-1">
                                        <i class="fa fa-2x fa-exclamation-triangle fa-fw"></i>
                                    </div>
                                    <div class="col-lg-11">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($m); ?>  </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if(isset($warning) || $warning = session()->get('warning')): ?>
                            <div class="alert alert-warning alert-block">
                                <div class="row">
                                    <div class="col-lg-1">
                                        <i class="fa fa-2x fa-exclamation fa-fw"></i>
                                    </div>
                                    <div class="col-lg-11">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <?php if(is_array($warning)): ?>
                                            <?php $__currentLoopData = $warning; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo e($m); ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <?php echo e($warning); ?>

                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if(isset($info) || $info = session()->get('info')): ?>
                            <div class="alert alert-info alert-block">
                                <div class="row">
                                    <div class="col-lg-1">
                                        <i class="fa fa-2x fa-info-circle fa-fw"></i>
                                    </div>
                                    <div class="col-lg-11">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <?php if(is_array($info)): ?>
                                            <?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo e($m); ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <?php echo e($info); ?>

                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php echo $__env->yieldSection(); ?>