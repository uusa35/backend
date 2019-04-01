<div class="tt-mobile-product-layout visible-xs">
    <div class="tt-mobile-product-slider arrow-location-center slick-animated-show-js">
        <div><img src="<?php echo e($element->imageLargeLink); ?>" alt="<?php echo e($element->slug); ?>"></div>
        <?php if($element->images->isNotEmpty()): ?>
            <?php $__currentLoopData = $element->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div><img src="<?php echo e($img->imageLargeLink); ?>" alt="<?php echo e($element->slug); ?>"></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <?php if($element->video_url): ?>
            <div>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="<?php echo e($element->video_url); ?>"
                            allowfullscreen></iframe>
                </div>
            </div>
        <?php endif; ?>
        <?php if($element->video_url_two): ?>
            <div>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="<?php echo e($element->video_url_two); ?>"
                            allowfullscreen></iframe>
                </div>
            </div>
        <?php endif; ?>
        
        
        
        
        
        
    </div>
</div>