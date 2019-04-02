<?php $__env->startSection('breadcrumbs'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="portlet-body">
    <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>products/size/qty</th>
                <th>net price</th>
                <th>discount</th>
                <th>price</th>
                <th>shipment</th>
                <th>reference_id</th>
                <th>payment status</th>
                <th>address</th>
                <th>mobile</th>
                <th>created_at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>products/size/qty</th>
                <th>net price</th>
                <th>discount</th>
                <th>price</th>
                <th>shipment</th>
                <th>reference_id</th>
                <th>payment status</th>
                <th>address</th>
                <th>mobile</th>
                <th>created_at</th>
                <th>Action</th>
            </tr>
        </tfoot>
        <tbody>
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($element->id); ?></td>
                <td>
                    <?php if($element->order_metas->isNotEmpty()): ?>
                    <?php $__currentLoopData = $element->order_metas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($meta->product): ?>
                    <div class="alert alert-success">
                        id : <?php echo e($meta->product->id); ?> - <?php echo e($meta->product->name); ?> <br>
                        size : <?php echo e($meta->product_attribute->size->name_ar); ?> <br>
                        qty : <?php echo e($meta->qty); ?>

                    </div>
                    <?php else: ?>
                    <div class="alert alert-warning">Product No longer exists</div>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </td>
                <td><?php echo e($element->net_price); ?></td>
                <td>
                    <span class="label label-<?php echo e($element->discount ?  'warning' : null); ?>"><?php echo e($element->discount); ?></span>
                </td>
                <td><?php echo e($element->price); ?></td>
                <td><?php echo e($element->shipping_cost); ?></td>
                <td><?php echo e($element->reference_id); ?></td>
                <td><span class="label label-<?php echo e($element->status === 'success' ? 'success' : 'info'); ?>"><?php echo e($element->status); ?></span></td>
                <td><?php echo e($element->address); ?></td>
                <td><span class="label label-info"><?php echo e($element->mobile); ?></span></td>
                <td><span class="label label-info"><?php echo e($element->created_at->diffForHumans()); ?></span></td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn green btn-xs btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <a href="<?php echo e(route('backend.admin.order.show',$element->id)); ?>">
                                    <i class="fa fa-fw fa-edit"></i> View Order</a>
                            </li>
                            <li>
                                <a data-toggle="modal" href="#" data-target="#basic" data-title="Delete" data-content="Are you sure you want to delete order ? " data-form_id="delete-<?php echo e($element->id); ?>">
                                    <i class="fa fa-fw fa-recycle"></i> delete</a>
                                <form method="post" id="delete-<?php echo e($element->id); ?>" action="<?php echo e(route('backend.admin.order.destroy',$element->id)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="_method" value="delete" />
                                    <button type="submit" class="btn btn-del hidden">
                                        <i class="fa fa-fw fa-times-circle"></i> delete
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($elements->render()); ?>

</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>