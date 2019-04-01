<span class="tt-img">
        <img src="<?php echo e($element->imageLargeLink); ?>" alt="<?php echo e($element->description); ?>">
</span>
<?php if($element->images->isNotEmpty()): ?>
    <span class="tt-img-roll-over">
        <img src="<?php echo e($element->images->first()->imageLargeLink); ?>" alt="<?php echo e($element->description); ?>">
</span>
<?php else: ?>
    <h1>No Images</h1>
<?php endif; ?>
<span class="tt-label-location">
        <?php if($element->on_new): ?>
        <span class="tt-label-new"><?php echo e(trans('general.new')); ?></span>
    <?php endif; ?>
    <?php if($element->isOnSale): ?>
        <span class="tt-label-sale"><?php echo e(trans('general.on_sale')); ?></span>
    <?php endif; ?>
    <?php if($element->is_available): ?>
        <span class="tt-label-new"
              style="background-color: #978d2f;"><?php echo e(trans('general.available_for_booking')); ?></span>
    <?php else: ?>
        <span class="tt-label-new"
              style="background-color: #972500;"><?php echo e(trans('general.not_available_for_booking')); ?></span>
    <?php endif; ?>
    <?php if($element->is_featured): ?>
        <span class=" tt-label-our-fatured"><?php echo e(trans('general.featured')); ?></span>
    <?php endif; ?>
</span>