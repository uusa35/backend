<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.admin.coupon.index')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="portlet-body">
    <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th><?php echo e(trans('general.id')); ?></th>
                <th><?php echo e(trans('general.is_percentage')); ?></th>
                <th><?php echo e(trans('general.is_consumed')); ?></th>
                <th><?php echo e(trans('general.is_permanent')); ?></th>
                <th><?php echo e(trans('general.code')); ?></th>
                <th><?php echo e(trans('general.minimum_charge')); ?></th>
                <th><?php echo e(trans('general.owner')); ?></th>
                <th><?php echo e(trans('general.due_date')); ?></th>
                <th><?php echo e(trans('general.active')); ?></th>
                <th><?php echo e(trans('general.actions')); ?></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th><?php echo e(trans('general.id')); ?></th>
                <th><?php echo e(trans('general.is_percentage')); ?></th>
                <th><?php echo e(trans('general.is_consumed')); ?></th>
                <th><?php echo e(trans('general.is_permanent')); ?></th>
                <th><?php echo e(trans('general.code')); ?></th>
                <th><?php echo e(trans('general.minimum_charge')); ?></th>
                <th><?php echo e(trans('general.owner')); ?></th>
                <th><?php echo e(trans('general.due_date')); ?></th>
                <th><?php echo e(trans('general.active')); ?></th>
                <th><?php echo e(trans('general.actions')); ?></th>
            </tr>
        </tfoot>
        <tbody>
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($element->id); ?></td>
                <td>
                    <span class="label <?php echo e(activeLabel($element->is_percentage)); ?>"><?php echo e(activeText($element->is_percentage,'Percentage')); ?></span>
                </td>
                <td>
                    <span class="label <?php echo e(activeLabel($element->consumed)); ?>"><?php echo e(activeText($element->consumed,'Consumed')); ?></span>
                </td>
                <td>
                    <span class="label <?php echo e(activeLabel($element->is_permanent)); ?>"><?php echo e(activeText($element->is_permanent,'is_permanent')); ?></span>
                </td>
                <td><?php echo e($element->code); ?></td>
                <td><?php echo e($element->minimum_charge); ?></td>
                <td><?php echo e($element->user->name); ?></td>
                <td>
                    <span class="label <?php echo e(activeLabel($element->active)); ?>"><?php echo e(activeText($element->active,$element->due_date->format('d-M-Y'))); ?></span>
                </td>
                <td>
                    <span class="label <?php echo e(activeLabel($element->active)); ?>"><?php echo e(activeText($element->active)); ?></span>
                </td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn green btn-xs btn-outline dropdown-toggle" data-toggle="dropdown"> <?php echo e(trans('general.actions')); ?>

                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <a href="<?php echo e(route('backend.admin.coupon.edit',$element->id)); ?>">
                                    <i class="fa fa-fw fa-edit"></i> <?php echo e(trans('general.edit')); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('backend.activate',['model' => 'coupon','id' => $element->id])); ?>">
                                    <i class="fa fa-fw fa-check-circle"></i> <?php echo e(trans('general.toggle_active')); ?></a>
                            </li>
                            <li>
                                <a data-toggle="modal" href="#" data-target="#basic" data-title="Delete" data-content="Are you sure you want to delete coupon for user : <?php echo e($element->user->name); ?>? " data-form_id="delete-<?php echo e($element->id); ?>">
                                    <i class="fa fa-fw fa-recycle"></i> delete</a>
                                <form method="post" id="delete-<?php echo e($element->id); ?>" action="<?php echo e(route('backend.admin.coupon.destroy',$element->id)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="_method" value="delete" />
                                    <button type="submit" class="btn btn-del hidden">
                                        <i class="fa fa-fw fa-times-circle"></i> <?php echo e(trans('general.delete')); ?>

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
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>