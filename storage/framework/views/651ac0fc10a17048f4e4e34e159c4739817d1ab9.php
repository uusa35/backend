<div class="tt-desktop-header headerunderline">
    <div class="container">
        <div class="tt-header-holder">
            <div class="tt-col-obj tt-obj-logo">
                <!-- logo -->
                <a class="tt-logo tt-logo-alignment" href="<?php echo e(route('frontend.home')); ?>">
                    <img class="text-center" src="<?php echo e(asset(env('LARGE').$settings->logo)); ?>" alt="<?php echo e($settings->company); ?>"></a>
                <!-- /logo -->
            </div>
            <div class="tt-col-obj tt-obj-search-type2">
                <div class="tt-search-type2">
                    <?php echo $__env->make('frontend.wokiee.four.partials._search_form', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container small-header">
        <div class="tt-header-holder">
            
            <div class="tt-col-obj tt-obj-menu">
                <!-- tt-menu -->
                <div class="tt-desctop-parent-menu tt-parent-box">
                    <div class="tt-desctop-menu">
                        <nav>
                            <ul>
                                <li class="dropdown tt-megamenu-col-02 selected">
                                    <a href="<?php echo e(route('frontend.home')); ?>"><?php echo e(trans('general.home_page')); ?></a>
                                </li>
                                <?php echo $__env->make('frontend.wokiee.four.partials._categories_main_menu_element_with_images', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                <?php echo $__env->make('frontend.wokiee.four.partials._pages_main_menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                <li class="dropdown">
                                    <a href="<?php echo e(route('frontend.language.change',['locale' => 'ar'])); ?>"><?php echo e(trans('general.arabic')); ?></a>
                                    <a href="<?php echo e(route('frontend.language.change',['locale' => 'en'])); ?>"><?php echo e(trans('general.english')); ?></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /tt-menu -->
            </div>
            <div class="tt-col-obj tt-obj-options obj-move-right">
                <!-- tt-search -->
                <div class="tt-desctop-parent-search tt-parent-box tt-obj-desktop-hidden">
                    <div class="tt-search tt-dropdown-obj">
                        <button class="tt-dropdown-toggle" data-tooltip="Search" data-tposition="bottom">
                            <i class="icon-f-85"></i>
                        </button>
                        <div class="tt-dropdown-menu">
                            <div class="container">
                                <form>
                                    <div class="tt-col">
                                        <input type="text" class="tt-search-input" placeholder="Search Products...">
                                        <button class="tt-btn-search" type="submit"></button>
                                    </div>
                                    <div class="tt-col">
                                        <button class="tt-btn-close icon-g-80"></button>
                                    </div>
                                    <div class="tt-info-text">
                                        What are you Looking for?
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /tt-search -->
                <!-- tt-cart -->
                <div class="tt-desctop-parent-cart tt-parent-box">
                    <div class="tt-cart tt-dropdown-obj" data-tooltip="Cart" data-tposition="bottom">
                        <button class="tt-dropdown-toggle">
                            <i class="icon-f-39"></i>
                            <span class="tt-badge-cart"><?php echo e(Cart::count()); ?></span>
                        </button>
                        <div class="tt-dropdown-menu">
                            <div class="tt-mobile-add">
                                <h6 class="tt-title"><?php echo e(trans('general.shopping_cart')); ?></h6>
                                <button class="tt-close"><?php echo e(trans('general.close')); ?></button>
                            </div>
                            <div class="tt-dropdown-inner">
                                <div class="tt-cart-layout">
                                <?php if(Cart::count() > 0): ?>
                                    <?php echo $__env->make('frontend.wokiee.four.partials._main_menu_cart_items', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                <?php else: ?>
                                    <!-- layout emty cart -->
                                        <a href="empty-cart.html" class="tt-cart-empty">
                                            <i class="icon-f-39"></i>
                                            <p><?php echo e(trans('general.no_items_in_cart')); ?></p>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /tt-cart -->
                <!-- tt-account -->
            <?php echo $__env->make('frontend.wokiee.four.partials._menu_user_account', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- /tt-account -->
                <!-- tt-langue and tt-currency -->
            <?php echo $__env->make('frontend.wokiee.four.partials._menu_currency_lang', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- /tt-langue and tt-currency -->
            </div>
        </div>
    </div>
</div>