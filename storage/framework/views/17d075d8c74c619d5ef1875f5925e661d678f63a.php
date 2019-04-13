<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.admin.role.index')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumbs'); ?>

<?php echo $__env->yieldSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light ">
            <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="portlet-body">
                <div class="m-heading-1 border-green m-bordered">
                    <h3>Important Information</h3>
                    <p>
                        Roles are very important for the application.
                    </p>
                    <p> Some Information about roles.
                        <a class="btn red btn-outline" href="http://datatables.net/" target="_blank">the official documentation</a>
                    </p>
                </div>
                <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th><?php echo e(trans('general.id')); ?></th>
                            <th><?php echo e(trans('general.name')); ?></th>
                            <th><?php echo e(trans('general.slug_ar')); ?></th>
                            <th><?php echo e(trans('general.slug_en')); ?></th>
                            <th><?php echo e(trans('general.icon')); ?></th>
                            <th><?php echo e(trans('general.color')); ?></th>
                            <th><?php echo e(trans('general.caption')); ?></th>
                            <th><?php echo e(trans('general.is_admin')); ?></th>
                            <th><?php echo e(trans('general.active')); ?></th>
                            <th><?php echo e(trans('general.visible')); ?></th>
                            <th><?php echo e(trans('general.is_company')); ?></th>
                            <th><?php echo e(trans('general.actions')); ?></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th><?php echo e(trans('general.id')); ?></th>
                            <th><?php echo e(trans('general.name')); ?></th>
                            <th><?php echo e(trans('general.slug_ar')); ?></th>
                            <th><?php echo e(trans('general.slug_en')); ?></th>
                            <th><?php echo e(trans('general.icon')); ?></th>
                            <th><?php echo e(trans('general.color')); ?></th>
                            <th><?php echo e(trans('general.caption')); ?></th>
                            <th><?php echo e(trans('general.is_admin')); ?></th>
                            <th><?php echo e(trans('general.active')); ?></th>
                            <th><?php echo e(trans('general.visible')); ?></th>
                            <th><?php echo e(trans('general.is_company')); ?></th>
                            <th><?php echo e(trans('general.actions')); ?></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($element->id); ?></td>
                            <td><?php echo e($element->name); ?></td>
                            <td><?php echo e($element->slug_ar); ?></td>
                            <td><?php echo e($element->slug_en); ?></td>
                            <td><i class="fa fa-fw fa-<?php echo e($element->icon); ?>"></i></td>
                            <td>
                                <span class="label" style="background-color: <?php echo e($element->color); ?>; color : white"><?php echo e($element->color); ?></span>
                            </td>
                            <td><?php echo e($element->caption); ?></td>
                            <td>
                                <span class="label <?php echo e(activeLabel($element->is_admin)); ?>"><?php echo e(activeText($element->is_admin,'is_admin')); ?></span>
                            </td>
                            <td>
                                <span class="label <?php echo e(activeLabel($element->active)); ?>"><?php echo e(activeText($element->active)); ?></span>
                            </td>
                            <td>
                                <span class="label <?php echo e(activeLabel($element->visible)); ?>"><?php echo e(activeText($element->visible,'visible on app')); ?></span>

                            </td>
                            <td>
                                <span class="label <?php echo e(activeLabel($element->is_company)); ?>"><?php echo e(activeText($element->is_company,'has company attributes')); ?></span>
                            </td>
                            <td>
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> <?php echo e(trans('general.actions')); ?>

                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li>
                                            <a href="<?php echo e(route('backend.admin.role.edit',$element->id)); ?>">
                                                <i class="fa fa-fw fa-user"></i><?php echo e(trans('general.edit')); ?></a>
                                        </li>
                                        
                                        <li>
                                            <form method="post" action="<?php echo e(route('backend.admin.role.destroy',$element->id)); ?>">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="_method" value="delete" />
                                                <button type="submit" class="btn btn-outline btn-sm red">
                                                    <i class="fa fa-remove"></i><?php echo e(trans('general.delete')); ?>

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
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>