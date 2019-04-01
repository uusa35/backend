<?php if(isset($element) && $element->products->isNotEmpty()): ?>
    <div class="container-indent">
        <div class="container container-fluid-custom-mobile-padding">
            <?php if($title): ?>
                <div class="tt-block-title">
                    <h1 class="tt-title"><?php echo e($title); ?></h1>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tt-product-listing-masonry">
                        <div class="tt-product-init tt-add-item">
                            <?php $__currentLoopData = $element->products->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo $__env->make('frontend.wokiee.four.partials._product_widget_metro',['element' => $element, 'double' => $loop->first,'collection' => $element->id], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>