<?php $__env->startSection('breadcrumbs'); ?>
    <?php echo e(Breadcrumbs::render('frontend.product.show',$element)); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div class="container-indent">
        <!-- mobile product slider  -->
    <?php echo $__env->make('frontend.wokiee.four.partials._service_show_gallery_mobile', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- /mobile product slider  -->
        <div class="container  container-fluid-mobile">
            <div class="row">
                <div class="col-6 hidden-xs">
                    <?php echo $__env->make('frontend.wokiee.four.partials._service_show_gallery', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
                <div class="col-6">
                    <div class="tt-product-single-info">
                        <?php echo $__env->make('frontend.wokiee.four.partials._show_tags', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->make('frontend.wokiee.four.partials._show_page_item_title_description_and_prices', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->make('frontend.wokiee.four.partials._service_show_is_really_hot_element', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        <?php if($element->canOrder): ?>
                            <div class="tt-swatches-container">
                                <div class="tt-wrapper product-information-buttons text-center">
                                    <a data-toggle="modal" data-target="#modalProductInfo" href="#">
                                        <span class="align-content-center">
                                            <i class="fa fa-fw fa-lg icon-e-75"></i>
                                            <span>
                                        <?php echo e(trans('general.size_guide')); ?>

                                            </span>
                                        </span>
                                    </a>
                                    <a data-toggle="modal" data-target="#modalProductInfo-02" href="#">
                                        <span>
                                            <i class="fa fa-fw fa-lg icon-f-48"></i>
                                        <?php echo e(trans('general.shipping')); ?>

                                        </span>
                                    </a>
                                </div>
                                <?php if($element->has_attributes && $element->sizes->isNotEmpty()): ?>
                                    <?php echo $__env->make('frontend.wokiee.four.partials._page_show_sizes',['sizes' => $element->sizes], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    <?php echo $__env->make('frontend.wokiee.four.partials._page_show_colors',['colors' => $element->colors,'hidden' => true], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                <?php else: ?>
                                    <div class="row">
                                        <div class="col-12">
                                            <?php if($element->size_id): ?>
                                                <p><?php echo e(trans('general.size')); ?> : <?php echo e($element->size->name); ?></p>
                                            <?php endif; ?>
                                            <?php if($element->color_id): ?>
                                                <p><?php echo e(trans('general.color')); ?> : <?php echo e($element->color->name); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php echo $__env->make('frontend.wokiee.four.partials._product_show_add_to_cart_btn', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php endif; ?>
                        <?php if(auth()->guard()->check()): ?>
                            <div class="tt-wrapper">
                                <ul class="tt-list-btn">
                                    <li><a class="btn-link" href="#"><i
                                                    class="icon-n-072"></i><?php echo e(trans('general.add_to_wish_list')); ?></a>
                                    </li>
                                    
                                </ul>
                            </div>
                        <?php endif; ?>

                        <div class="tt-wrapper">
                            <?php echo $__env->make('frontend.wokiee.four.partials._product_show_information_widget', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('frontend.wokiee.four.partials._show_page_social_icons', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('frontend.wokiee.four.partials._show_page_related_items',['elements' => $relatedItems], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('frontend.wokiee.four.partials._modal_page_show_video', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('frontend.wokiee.four.partials._modal_size_chart', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('frontend.wokiee.four.partials._modal_page_show_shipment', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.wokiee.four.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>