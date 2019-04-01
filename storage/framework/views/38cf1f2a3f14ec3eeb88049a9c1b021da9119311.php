<a href="<?php echo e($element->link); ?>" class="tt-promo-box">
    <img src="<?php echo e($element->imageLargeLink); ?>"
         data-src="<?php echo e($element->imageLargeLink); ?>"
         alt="<?php echo e($element->caption); ?>">
    <?php if($element->name): ?>
        <div class="tt-description">
            <div class="tt-description-wrapper">
                <div class="tt-background"></div>
                <div class="tt-title-small"><?php echo e($element->title); ?></div>
                <div class="tt-title-large"><?php echo e($element->caption); ?></span>
                </div>
            </div>
        </div>
    <?php endif; ?>
</a>