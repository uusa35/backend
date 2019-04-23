<?php $__env->startSection('body'); ?>
    <?php if(env('APP_CASE') === 'mallr'): ?>
        <?php echo $__env->make('frontend.wokiee.four.partials.slider', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('frontend.wokiee.four.partials._all_brands', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('frontend.wokiee.four.partials._products_metro_collection',['element' => $homeCollection, 'title' => trans('general.our_selection_from_collections')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('frontend.wokiee.four.partials._users_slider',['title' => trans('general.our_designers'), 'elements' => $designers], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('frontend.wokiee.four.partials._products_slider',['title' => trans('general.new_arrivals'), 'elements' => $newProducts], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('frontend.wokiee.four.partials._five_categories',['elements' => $categoriesHome], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('frontend.wokiee.four.partials._horizontal_three_categories',['elements' => $tipleCommercials], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('frontend.wokiee.four.partials._products_slider_hot_deal', ['elements' => $productHotDeals,'items' => 3], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('frontend.wokiee.four.partials._btn_info', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php elseif(env('APP_CASE') === 'evento'): ?>
        <?php echo $__env->make('frontend.wokiee.four.partials._btns_home', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('frontend.wokiee.four.partials._commercials_top', ['elements' => $topDoubleCommercials], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('frontend.wokiee.four.partials._services_slider_sm', ['elements' => $serviceHotDeals, 'title' => trans('general.hot_deals')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('frontend.wokiee.four.partials._commercials_top', ['elements' => $bottomDoubleCommercials], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php if(!session()->has('day_selected')): ?>
            <?php echo $__env->make('frontend.wokiee.four.partials._search_modal_home_page', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>
    <?php endif; ?>
    <?php echo $__env->make('frontend.wokiee.four.partials._country_modal', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.wokiee.four.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>