<?php if(env('APP_CASE') === 'mallr'): ?>
    <?php echo $__env->make('frontend.wokiee.four.partials._search_menu_products', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php else: ?>
    <?php echo $__env->make('frontend.wokiee.four.partials._search_menu_services', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
