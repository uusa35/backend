<div class="tt-desctop-parent-multi tt-parent-box">
    <div class="tt-multi-obj tt-dropdown-obj">
        <button class="tt-dropdown-toggle" data-tooltip="Settings" data-tposition="bottom"><i class="icon-f-79"></i>
        </button>
        <div class="tt-dropdown-menu">
            <div class="tt-mobile-add">
                <button class="tt-close"><?php echo e(trans('general.close')); ?></button>
            </div>
            <div class="tt-dropdown-inner">

                <?php echo $__env->make('frontend.wokiee.four.partials._nav_langauge_section', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->make('frontend.wokiee.four.partials._nav_currencies_section', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
</div>