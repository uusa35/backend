<div class="tt-product-single-img">
    <div>
        <button class="tt-btn-zomm tt-top-right"><i class="icon-f-86"></i></button>
        <img class="zoom-product" src='<?php echo e($element->imageLargeLink); ?>'
             data-zoom-image="<?php echo e($element->imageLargeLink); ?>" alt="">
    </div>
</div>
<div class="product-images-carousel">
    <ul id="smallGallery" class="arrow-location-02  slick-animated-show-js">
        <li>
            <a class="zoomGalleryActive" href="#" data-image="<?php echo e($element->imageThumbLink); ?>"
               data-zoom-image="<?php echo e($element->imageLargeLink); ?>">
                    <span class="tt-label-location">
                    <img src="<?php echo e($element->imageLargeLink); ?>" alt=""/>
            </a>
        </li>
        <?php $__currentLoopData = $element->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="#" data-image="<?php echo e($img->imageLargeLink); ?>"
                   data-zoom-image="<?php echo e($img->imageLargeLink); ?>"><img
                            src="<?php echo e($img->imageThumbLink); ?>" alt=""/></a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if($element->video_url_one): ?>
            <li>
                <div class="video-link-product" data-toggle="modal" data-type="youtube"
                     data-target="#modalVideoProduct"
                     data-value="<?php echo e($element->video_url_one); ?>">
                    <img src="<?php echo e($element->imageLargeLink); ?>" alt="<?php echo e($element->name); ?>"/>
                    <div>
                        <i class="icon-f-32"></i>
                    </div>
                </div>
            </li>
        <?php endif; ?>
        <?php if($element->video_url_two): ?>
            <li>
                <div class="video-link-product" data-toggle="modal" data-type="youtube"
                     data-target="#modalVideoProduct"
                     data-value="<?php echo e($element->video_url_two); ?>">
                    <img src="<?php echo e($element->imageLargeLink); ?>" alt="<?php echo e($element->name); ?>"/>
                    <div>
                        <i class="icon-f-32"></i>
                    </div>
                </div>
            </li>
        <?php endif; ?>
        
        
        
        
        
        
        
        
        
        
    </ul>
</div>