<div class="tt-wrapper">
    <div class="tt-label">
        <?php if($element->exclusive): ?>
            <div class="tt-label tt-label-out-stock"><?php echo e(trans('general.exclusive')); ?></div>
        <?php endif; ?>
        <?php if($element->on_new): ?>
            <div class="tt-label-new"><?php echo e(trans('general.new')); ?></div>
        <?php endif; ?>
        <?php if($element->isOnSale): ?>
            <div class="tt-label tt-label-sale"><?php echo e(trans('general.on_sale')); ?></div>
        <?php endif; ?>
        <?php if($element->canOrder): ?>
            <span class="tt-label tt-label-new"
                  style="background-color: #978d2f;"><?php echo e(trans('general.available')); ?></span>
        <?php else: ?>
            <span class="tt-label tt-label-new"
                  style="background-color: #972500;"><?php echo e(trans('general.not_available')); ?></span>
        <?php endif; ?>
        <?php if($element->is_featured): ?>
            <div class="tt-label tt-label-our-fatured"><?php echo e(trans('general.featured')); ?></div>
        <?php endif; ?>
        <?php if($element->user->country): ?>
            <div class="tt-label tt-label-new"><?php echo e($element->user->country->slug); ?></div>
        <?php endif; ?>
    </div>
</div>