<?php if(auth()->guard()->check()): ?>
    <div class="tt-desctop-parent-account tt-parent-box">
        <div class="tt-account tt-dropdown-obj">
            <button class="tt-dropdown-toggle" data-tooltip="My Account" data-tposition="bottom"><i
                        class="icon-f-94"></i></button>
            <div class="tt-dropdown-menu">
                <div class="tt-mobile-add">
                    <button class="tt-close"><?php echo e(trans('general.close')); ?></button>
                </div>
                <div class="tt-dropdown-inner">
                    <ul>
                        <li><a href="<?php echo e(route('frontend.order.index')); ?>">
                                <i class="icon-f-94 fa fa-fw fa-lg"></i>
                                <?php echo e(trans('general.hello')); ?> <?php echo e(auth()->user()->name); ?>

                            </a>
                        </li>
                        <li><a href="<?php echo e(route('backend.home')); ?>">
                                <i class="icon-f-81 fa fa-fw fa-lg"></i>
                                <?php echo e(trans('general.control_panel')); ?>

                            </a>
                        </li>
                        <li><a href="<?php echo e(route('frontend.order.index')); ?>">
                                <i class="icon-f-45 fa fa-fw fa-lg"></i>
                                <?php echo e(trans('general.history_orders')); ?>

                            </a>
                        </li>
                        <li><a href="<?php echo e(route('frontend.favorite.index')); ?>">
                                <i class="icon-h-13 fa fa-fw fa-lg"></i>
                                <?php echo e(trans('general.wish_list')); ?>

                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/logout')); ?>" class="dropdown-toggle"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="icon-h-24 fa fa-fw fa-lg"></i>
                                <?php echo e(trans('general.sign_out')); ?>

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>