<a href="#" class="tt-btn-quickview" data-toggle="modal"
   data-target="#ModalquickView"
   data-tooltip="<?php echo e(trans('general.quick_view')); ?>"
   data-tposition="<?php echo e(app()->isLocale('ar') ? 'right' : 'left'); ?>"
   data-name="<?php echo e($element->name); ?>"
   data-id="<?php echo e($element->id); ?>"
   data-image="<?php echo e($element->imageLargeLink); ?>"
   data-notes="<?php echo e($element->notes); ?>"
   data-description="<?php echo e($element->description); ?>"
   data-sku="<?php echo e($element->sku); ?>"
   data-qty="<?php echo e($element->availableQty); ?>"
   data-price="<?php echo e($element->convertedFinalPrice); ?>"
   data-currency-name="<?php echo e($currency->symbol); ?>"
   <?php if($element->has_attributes): ?>
   data-colors="<?php $__currentLoopData = $element->colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $col): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo $col->name; ?>, <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>"
   data-sizes="<?php $__currentLoopData = $element->sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo $size->name; ?>, <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>"
   <?php else: ?>
   <?php if($element->color): ?>
   data-colors="<?php echo $element->color->name; ?>"
   data-sizes="<?php echo $element->size->name; ?>"
   <?php endif; ?>
   <?php endif; ?>
   data-url="<?php echo e(route('frontend.product.show.name', ['id' => $element->id, 'name' => $element->name])); ?>"
></a>