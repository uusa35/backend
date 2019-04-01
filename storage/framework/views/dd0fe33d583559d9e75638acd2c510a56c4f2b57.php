<h1 class="tt-title tt-title-border">
        <?php echo e($element->name); ?>

</h1>
<div class="tt-price tt-title-border">
    <?php if($element->isOnSale): ?>
        <span class="new-price"><?php echo e($element->convertedSalePrice); ?>

            <?php echo e($currency->symbol); ?></span>
        <span class="old-price"><?php echo e($element->convertedPrice); ?>

            <?php echo e($currency->symbol); ?></span>
    <?php else: ?>
        <span class="new-price"><?php echo e($element->convertedPrice); ?>

            <?php echo e($currency->symbol); ?></span>
    <?php endif; ?>
</div>
<div class="tt-wrapper">
    <?php echo e($element->description); ?>

</div>