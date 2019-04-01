<div class="tt-wrapper">
    <div class="tt-row-custom-01">
        <div class="col-item">
            <div class="tt-input-counter style-01" data-tooltip="<?php echo e(trans('general.choose_color_first')); ?>"
                 data-tposition="bottom">
                <span class="minus-btn"></span>
                <?php if($element->has_attributes): ?>
                    <input id="max-qty" type="number" value="1" size="1"/>
                <?php else: ?>
                    <input id="max-qty" type="number" value="1" size="<?php echo e($element->qty); ?>"/>
                <?php endif; ?>
                <span class="plus-btn"></span>
            </div>
        </div>
        <div class="col-item">
            <form method="post" action="<?php echo e(route('frontend.cart.add.product')); ?>">
                <?php echo csrf_field(); ?>
                <?php if(request()->has('collection_id')): ?>
                    <input type="hidden" id="collection_id" name="collection_id" value="<?php echo e(request('collection_id')); ?>">
                <?php endif; ?>
                <input type="hidden" id="product_id" name="product_id" value="<?php echo e($element->id); ?>">
                <input type="hidden" name="size_id" value="">
                <input type="hidden" name="color_id" value="">
                <input type="hidden" name="qty" value="1">
                <input type="hidden" name="product_attribute_id" value="">
                <input type="hidden" name="type" value="product">
                <button type="submit" id="add_to_cart"
                        data-tooltip="<?php echo e(trans('general.choose_your_color')); ?>"
                        data-tposition="top"
                        role="tooltip"
                        class="btn btn-lg  tooltip" <?php echo e($element->has_attributes ? 'disabled="disabled"' : null); ?>

                        id="add_to_cart"><i class="icon-f-39"></i><?php echo e(trans('general.add_to_cart')); ?></button>
            </form>
        </div>
    </div>
</div>