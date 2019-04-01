<div class="tt-product-single-info">
    <?php echo $__env->make('frontend.wokiee.four.partials._show_tags', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('frontend.wokiee.four.partials._show_page_item_title_description_and_prices', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('frontend.wokiee.four.partials._service_show_is_really_hot_element', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php if($element->is_available): ?>
        
        
        <?php echo $__env->make('frontend.wokiee.four.partials._service_show_service_choose_date', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
        <div class="tt-wrapper service_alert d-none" id="service_form">
            <div class="tt-row-custom-01">
                <div class="col-12">
                    <div class="card text-center">
                        <div class="card-header">
                            <?php echo e(trans('general.choosen_service')); ?>

                        </div>
                        <div class="card-body">
                            <h5 id="service-chosen-title"></h5>
                            <div class="col-12">
                                <form action="<?php echo e(route('frontend.cart.add.service')); ?>" method="post" class="col-12">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                    <textarea name="notes" class="form-control" rows="3"
                                              placeholder="<?php echo e(trans('message.service_cart_add_item_notes')); ?>"
                                              data-tooltip="<?php echo e(trans('message.cart_notes')); ?>"
                                              id="textareaMessage"></textarea>
                                    </div>
                                    <?php echo $__env->make('frontend.wokiee.four.partials._select_element_timing_id', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    <input type="hidden" name="service_id" id="service_id"
                                           value="<?php echo e($element->id); ?>">
                                    <input type="hidden" name="user_id" value="<?php echo e($element->user_id); ?>">
                                    <input type="hidden" name="day_selected" id="day_selected" value="">
                                    <input type="hidden" name="day_selected_format" id="day_selected_format"
                                           value="<?php echo e(session()->has('day_selected_format') ? session()->get('day_selected_format') : null); ?>">
                                    <input type="hidden" name="type" value="service">
                                    <button type="submit"
                                            class="btn btn-lg cart-btn disabled"
                                            data-tooltip="<?php echo e(trans('message.cart_btn')); ?>"
                                    ><i class="icon-f-39"></i><?php echo e(trans('general.add_to_cart')); ?>

                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    
    <?php echo $__env->make('frontend.wokiee.four.partials._service_show_information_widget', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>