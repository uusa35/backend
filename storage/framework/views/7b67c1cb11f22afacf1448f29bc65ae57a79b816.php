<?php if($elements->isNotEmpty()): ?>
    <div class="tt-offset-small container-indent element-padding-bottom">
        <div class="container-fluid-custom">
            <div class="row">
                <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-6">
                        <?php echo $__env->make('frontend.wokiee.four.partials._commercial_widget',['element' => $element], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php endif; ?>