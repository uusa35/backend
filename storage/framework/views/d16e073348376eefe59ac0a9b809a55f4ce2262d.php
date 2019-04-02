<div class="tt-color-scheme-01">
    <div class="container">
        <div class="tt-header-row tt-top-row">
            <div class="tt-col-left">
                <div class="tt-box-info">
                    <ul>
                        <?php if(auth()->guard()->guest()): ?>
                            <li><i class="fa fa-fw fa-user"></i><a href="<?php echo e(route('register')); ?>"
                                                                   class=""><?php echo e(trans('general.register')); ?></a></li>
                            <li><i class="fa fa-fw fa-lock"></i><a href="<?php echo e(route('login')); ?>"
                                                                   class=""><?php echo e(trans('general.login')); ?></a></li>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>
            <?php if($settings): ?>
                <div class="tt-col-right ml-auto">
                    <ul class="tt-social-icon">
                        <?php echo $__env->make('frontend.wokiee.four.partials._social_icons_home', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- tt-mobile menu -->