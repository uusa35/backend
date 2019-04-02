<?php if($element): ?>
    <div class="tt-product thumbprod-center" style="padding: 10px;">
        <div class="tt-image-box">
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <?php if($element->isDesigner): ?>
                <a href="<?php echo e(route('frontend.product.search', ['designer_id' => $element->id])); ?>">
                    <?php else: ?>
                        <a href="<?php echo e(route('frontend.product.search', ['user_id' => $element->id])); ?>">
                            <?php endif; ?>
                            <span class="tt-img">
                <img src="<?php echo e($element->imageLargeLink); ?>" alt="<?php echo e($element->description); ?>">
            </span>
                        </a>
        </div>
        <div class="tt-description">
            <div class="tt-row">
                <ul class="tt-add-info">
                    <li>
                        <?php if($element->isDesigner): ?>
                            <a href="<?php echo e(route('frontend.product.search', ['designer_id' => $element->id])); ?>"><?php echo e($element->slug); ?></a>
                        <?php else: ?>
                            <a href="<?php echo e(route('frontend.product.search', ['user_id' => $element->id])); ?>"><?php echo e($element->slug); ?></a>
                        <?php endif; ?>
                    </li>
                </ul>
                
            </div>
            <h2 class="tt-title">
                <?php if($element->isDesigner): ?>
                    <a href="<?php echo e(route('frontend.product.search', ['designer_id' => $element->id])); ?>"><?php echo e(str_limit($element->description,100,'...')); ?></a>
                <?php else: ?>
                    <a href="<?php echo e(route('frontend.product.search', ['user_id' => $element->id])); ?>"><?php echo e(str_limit($element->description,100,'...')); ?></a>
                <?php endif; ?>
            </h2>
            
            <div class="tt-product-inside-hover">
                
                
                
                
                
                
                
                
                
                <div class="tt-row-btn">
                    <a href="#" class="tt-btn-quickview" data-toggle="modal"
                       data-tooltip="<?php echo e(trans('general.quick_view')); ?>"
                       data-tposition="<?php echo e(app()->isLocale('ar') ? 'right' : 'left'); ?>"
                       data-target="#ModalquickView"
                       data-name="<?php echo e($element->name); ?>"
                       data-id="<?php echo e($element->id); ?>"
                       data-image="<?php echo e($element->imageLargeLink); ?>"
                       data-description="<?php echo e($element->description); ?>"
                       data-sku="<?php echo e($element->sku); ?>"
                       data-url="<?php echo e(route('frontend.user.show.name', ['id' => $element->id, 'name' => $element->name])); ?>"
                    ></a>
                    <?php if(auth()->guard()->check()): ?>
                        <a href="#" class="tt-btn-wishlist"></a>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>