<div class="tt-price">
    <?php if($element->isOnSale): ?>
        <span class="new-price"><?php echo e($element->convertedSalePrice); ?><span><?php echo e($currency->symbol); ?></span></span>
        <span class="old-price d-none d-md-block"><?php echo e($element->convertedPrice); ?><span><?php echo e($currency->symbol); ?></span></span>
    <?php else: ?>
        <span class="sale-price"><?php echo e($element->convertedPrice); ?><span><?php echo e($currency->symbol); ?></span></span>
    <?php endif; ?>
</div>
<?php if($element->has_attributes && $element->colors->isNotEmpty()): ?>
    <div class="tt-option-block">
        
            
                
            
        
        <ul class="tt-options-swatch">
            <?php $__currentLoopData = $element->colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a class="options-color" style="background-color: <?php echo e($color->code); ?>;"
                       href="#"></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>