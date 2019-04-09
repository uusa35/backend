<!-- tt-mobile-header -->
<div class="tt-mobile-header">
    <div class="container-fluid">
        <div class="header-tel-info">
            
            <?php if (app('mobile-detect')->isMobile() && !app('mobile-detect')->isTablet()) : ?>
            <?php echo $__env->make('frontend.wokiee.four.partials._search_form', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="container-fluid tt-top-line">
        <div class="tt-header-row">
            <div class="tt-mobile-parent-menu">
                <div class="tt-menu-toggle stylization-02">
                    <i class="icon-03"></i>
                </div>
            </div>
            
                
                    
                
            
            <!-- search -->
            
            <!-- /search -->
            <!-- cart -->
            <div class="tt-mobile-parent-cart tt-parent-box"></div>
            <!-- /cart -->
            <!-- account -->
            <div class="tt-mobile-parent-account tt-parent-box"></div>
            <!-- /account -->
            <!-- currency -->
            <div class="tt-mobile-parent-multi tt-parent-box"></div>
            <!-- /currency -->
        </div>
    </div>
    <div class="container-fluid tt-top-line">
        <div class="row">
            <div class="tt-logo-container">
                <!-- mobile logo -->
                <a class="tt-logo tt-logo-alignment" style="margin-top: 20px;" href="<?php echo e(route('frontend.home')); ?>">
                    <img class="text-center" src="<?php echo e($settings->logoThumb); ?>" alt="<?php echo e($settings->description); ?>">
                </a>
                <!-- /mobile logo -->
            </div>
        </div>
    </div>
</div>
<!-- tt-desktop-header -->