<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.admin.newsletter.index')); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->yieldSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-body">
                <table id="dataTable" class="table table-striped table-bordered table-hover table-checkable order-column" id="contactusTable">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>status</th>
                            <th>created_at</th>
                            <th>actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $subscribers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="odd gradeX">
                            <td><?php echo e($element->id); ?></td>
                            <td><?php echo e($element->name); ?></td>
                            <td><?php echo e($element->email); ?></td>
                            <td><label class="label label-sm <?php echo e(($element->active) ? 'label-success' : 'label-danger'); ?>"><?php echo e(($element->active) ? 'active' : 'active'); ?></label></td>
                            <td><?php echo e($element->created_at->format('Y-m-d')); ?></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="<?php echo e(route('backend.admin.newsletter.edit',$element->id)); ?>">
                                                <i class="fa fa-eye"></i> edit subscirber</a>
                                        </li>


                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>