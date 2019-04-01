<?php if(isset($element)): ?>
    <div class="container-fluid">
        <div class="row">
            <div class="tt-promo-fullwidth-02">
                <?php if($element->BgLargeLink): ?>
                    <img src="<?php echo e($element->BgLargeLink); ?>" alt="<?php echo e($element->description); ?>"
                         style="max-height : 300px; opacity: 0.5">
                <?php endif; ?>
                <div class="tt-description">
                    <div class="tt-description-wrapper">
                        <?php if($element->slug): ?>
                            <img src="<?php echo e($element->imageThumbLink); ?>" alt="<?php echo e($element->slug); ?>"
                                 class="img-responsive img-md">
                        <?php endif; ?>
                        <?php if($element->description): ?>
                            <div class="tt-title-large"><span class="tt-base-color"><?php echo e($element->slug); ?></span></div>
                            <p><?php echo e($element->description); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>