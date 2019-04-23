<?php $__env->startSection('breadcrumbs'); ?>
    <?php echo e(Breadcrumbs::render('backend.admin.notification.index')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light ">
                <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <div class="portlet-body">
                    <?php echo $__env->make('backend.partials._admin_instructions',['title' => trans('general.notifications') ,'message' => trans('message.index_notification')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0">
                        <thead>
                        <tr>
                            <th><?php echo e(trans('general.id')); ?></th>
                            <th><?php echo e(trans('general.title')); ?></th>
                            <th><?php echo e(trans('general.type')); ?></th>
                            <th><?php echo e(trans('general.description')); ?></th>
                            <th><?php echo e(trans('general.sent_at')); ?></th>
                            
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th><?php echo e(trans('general.id')); ?></th>
                            <th><?php echo e(trans('general.title')); ?></th>
                            <th><?php echo e(trans('general.type')); ?></th>
                            <th><?php echo e(trans('general.description')); ?></th>
                            <th><?php echo e(trans('general.sent_at')); ?></th>
                            
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td> <?php echo e($element->id); ?></td>
                                <td> <?php echo e($element->title); ?> </td>
                                <td> <?php echo e($element->type); ?> </td>
                                <td> <?php echo e($element->description); ?> </td>
                                <td> <?php echo e($element->created_at->diffForHumans()); ?> </td>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>