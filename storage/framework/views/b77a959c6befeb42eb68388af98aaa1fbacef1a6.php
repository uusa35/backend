<footer class="">
    
    <div class="tt-footer-default tt-color-scheme-02">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-9">
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                </div>
                <div class="col-md-auto">
                    <ul class="tt-social-icon">
                        <?php echo $__env->make('frontend.wokiee.four.partials._social_icons_home', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="tt-footer-col tt-color-scheme-01">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-2 col-xl-3">
                    <div class="tt-mobile-collapse">
                        <h4 class="tt-collapse-title">
                            <?php echo e(trans('general.find_us_on_stores')); ?>

                        </h4>
                        <div class="tt-collapse-content text-center">
                            <ul class="tt-list">
                                <?php if($settings->apple): ?>
                                    <li>
                                        <a href="<?php echo e(url($settings->apple)); ?>">
                                            <img src="<?php echo e(asset('images/apple.png')); ?>" alt="<?php echo e($settings->company); ?>"
                                                 class="img-responsive" style="max-width: 150px;">
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if($settings->android): ?>
                                    <li>
                                        <a href="<?php echo e(url($settings->android)); ?>">
                                            <img src="<?php echo e(asset('images/android.png')); ?>" alt="<?php echo e($settings->company); ?>"
                                                 class="img-responsive" style="max-width: 150px;">
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 col-xl-3">
                    <div class="tt-mobile-collapse">
                        <h4 class="tt-collapse-title">
                            <?php echo e(trans('general.my_account')); ?>

                        </h4>
                        <div class="tt-collapse-content">
                            <ul class="tt-list">
                                <?php $__currentLoopData = $pages->where('on_footer', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e($page->url); ?>"><?php echo e($page->slug); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php if(auth()->guard()->guest()): ?>
                                    <li><a href="<?php echo e(route('register')); ?>"><?php echo e(trans('general.register')); ?></a></li>
                                <?php endif; ?>
                                <?php if(auth()->guard()->check()): ?>
                                    <li>
                                        <a href="<?php echo e(route('frontend.favorite.index')); ?>"><?php echo e(trans('general.wish_list')); ?></a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="tt-mobile-collapse">
                        <h4 class="tt-collapse-title">
                            <?php echo e(trans("general.about_us")); ?>

                        </h4>
                        <div class="tt-collapse-content">
                            <p>
                                <?php echo e(trans('message.footer_about_us')); ?>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="tt-newsletter">
                        <div class="tt-mobile-collapse">
                            <h4 class="tt-collapse-title">
                                <?php echo e(trans('general.contact_us_info')); ?>

                            </h4>
                            <div class="tt-collapse-content">
                                <address>
                                    <p><i class="fa fa-fw fa-map-marker"></i> <?php echo e($settings->address); ?></p>
                                    <p><i class="fa fa-fw fa-phone"></i> <?php echo e($settings->phone); ?></p>
                                    <p><i class="fa fa-fw fa-mobile"></i> <?php echo e($settings->mobile); ?></p>
                                    <p><i class="fa fa-fw fa-whatsapp"></i> <a
                                                href="https://api.whatsapp.com/send?phone=<?php echo e($settings->whatsapp); ?>"><?php echo e($settings->whatsapp); ?></a>
                                    </p>
                                    <p><i class="fa fa-fw fa-location-arrow"></i> <a
                                                href="https://www.google.com/maps/search/?api=1&query=<?php echo e($settings->latitude); ?>,<?php echo e($settings->longitude); ?>">
                                            <?php echo e(trans('general.location')); ?>

                                        </a></p>
                                    <p><span><?php echo e(trans('general.mail')); ?>:</span> <a
                                                href="mailto:<?php echo e($settings->email); ?>"><?php echo e($settings->email); ?></a></p>
                                    <p>
                                        <span><?php echo e(trans('general.duty_time')); ?>:</span> <?php echo e(trans('message.duty_time_message')); ?>

                                    </p>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tt-footer-custom">
        <div class="container">
            <div class="tt-row">
                <div class="tt-col-left">
                    <div class="tt-col-item tt-logo-col">
                        <!-- logo -->
                        <a class="tt-logo tt-logo-alignment" href="<?php echo e(route('frontend.home')); ?>">
                            <img src="<?php echo e($settings->logoLarge); ?>" alt="">
                        </a>
                        <!-- /logo -->
                    </div>
                    <div class="tt-col-item">
                        <!-- copyright -->
                        <div class="tt-box-copyright">
                            &copy; <?php echo e(trans("message.copy_right")); ?>

                        </div>
                        <!-- /copyright -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="lang" class="d-none"><?php echo e(app()->getLocale()); ?></div>
    <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST"
          style="display: none;">
        <?php echo csrf_field(); ?>
    </form>
</footer>