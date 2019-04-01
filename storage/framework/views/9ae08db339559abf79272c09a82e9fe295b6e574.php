<?php $__env->startSection('breadcrumbs'); ?>
    <?php echo e(Breadcrumbs::render('frontend.order.index')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div class="container-indent">
        <div class="container container-fluid-custom-mobile-padding">
            <div class="row justify-content-center">
                <div class="col-xs-12 col-md-12 col-lg-12 col-md-auto">
                    <div class="tt-post-single">
                        <div class="tt-tag"><a href="#"><?php echo e(trans('general.history_orders')); ?></a></div>
                        <div class="tt-post-content">
                            <table id="dataTable" class="tt-table-shop-01" cellspacing="0"
                                   width="100%">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>products/size/qty</th>
                                    <th>net price</th>
                                    <th>discount</th>
                                    <th>price</th>
                                    <th>reference_id</th>
                                    <th>payment status</th>
                                    <th>address</th>
                                    <th>mobile</th>
                                    <th>created_at</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>products/size/qty</th>
                                    <th>net price</th>
                                    <th>discount</th>
                                    <th>price</th>
                                    <th>reference_id</th>
                                    <th>payment status</th>
                                    <th>address</th>
                                    <th>mobile</th>
                                    <th>created_at</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($element->id); ?></td>
                                        <td>
                                            <?php if(!$element->order_metas->isEmpty()): ?>
                                                <?php $__currentLoopData = $element->order_metas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li>
                                                        <?php if($meta->product): ?>

                                                            <?php echo e($meta->product->name_ar); ?>

                                                            - <?php echo e($meta->product_attribute->size->name_ar); ?>

                                                            - <?php echo e($meta->qty); ?>

                                                        <?php else: ?>
                                                            <span class="label label-warning">Product No longer exists</span>
                                                        <?php endif; ?>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($element->net_price); ?></td>
                                        <td><?php echo e($element->discount); ?></td>
                                        <td><?php echo e($element->price); ?></td>
                                        <td><?php echo e($element->reference_id); ?></td>
                                        <td>
                                            <button class="btn btn-<?php echo e($element->status === 'success' ? 'success' : 'info'); ?>"><?php echo e($element->status); ?></button>
                                        </td>
                                        <td><?php echo e($element->address); ?></td>
                                        <td>
                                            <button class="btn btn-info"><?php echo e($element->mobile); ?></button>
                                        </td>
                                        <td>
                                            <button class="btn btn-info"><?php echo e($element->created_at->diffForHumans()); ?></button>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.wokiee.four.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>