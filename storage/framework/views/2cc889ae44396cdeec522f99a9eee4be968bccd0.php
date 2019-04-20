<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.admin.user.index')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light ">
            <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="portlet-body">
                <?php echo $__env->make('backend.partials._admin_instructions',['title' => trans('general.users') ,'message' => trans('message.index_user')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                
                <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0">
                    <thead>
                        <tr>
                            <th><?php echo e(trans('general.id')); ?></th>
                            <th><?php echo e(trans('general.name')); ?></th>
                            <th><?php echo e(trans('general.email')); ?></th>
                            <th><?php echo e(trans('general.mobile')); ?></th>
                            <th><?php echo e(trans('general.phone')); ?></th>
                            <th><?php echo e(trans('general.address')); ?></th>
                            <th><?php echo e(trans('general.area')); ?></th>
                            <th><?php echo e(trans('general.country')); ?></th>
                            <th><?php echo e(trans('general.active')); ?></th>
                            <th><?php echo e(trans('general.actions')); ?></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th><?php echo e(trans('general.id')); ?></th>
                            <th><?php echo e(trans('general.name')); ?></th>
                            <th><?php echo e(trans('general.email')); ?></th>
                            <th><?php echo e(trans('general.mobile')); ?></th>
                            <th><?php echo e(trans('general.phone')); ?></th>
                            <th><?php echo e(trans('general.address')); ?></th>
                            <th><?php echo e(trans('general.area')); ?></th>
                            <th><?php echo e(trans('general.country')); ?></th>
                            <th><?php echo e(trans('general.active')); ?></th>
                            <th><?php echo e(trans('general.actions')); ?></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($element->id); ?></td>
                            <td><?php echo e($element->name); ?></td>
                            <td><?php echo e($element->email); ?></td>
                            <td><?php echo e($element->mobile); ?></td>
                            <td><?php echo e($element->phone); ?></td>
                            <td><?php echo e($element->address); ?></td>
                            <td><?php echo e($element->area); ?></td>
                            <td><?php echo e($element->country->name); ?></td>
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
                                            <a href="<?php echo e(route('backend.reset.password',['email' => $element->email])); ?>">
                                                <i class="fa fa-fw fa-edit"></i> Reset Password</a>
                                        </li>
                                        <?php if(auth()->user()->isAdmin): ?>
                                        <li>
                                            <a href="<?php echo e(route('backend.user.edit',$element->id)); ?>">
                                                <i class="fa fa-fw fa-check-circle"></i> <?php echo e(trans('general.edit')); ?></a>
                                        </li>
                                        <?php endif; ?>
                                        <li>
                                            <a href="<?php echo e(route('backend.activate',['model' => 'user','id' => $element->id])); ?>">
                                                <i class="fa fa-fw fa-check-circle"></i> <?php echo e(trans('general.toggle_active')); ?></a>
                                        </li>
                                        <li>
                                            <a data-toggle="modal" href="#" data-target="#basic" data-title="Delete" data-content="Are you sure you want to delete <?php echo e($element->name); ?>?
                                                   </br> <h3 class='text-danger'>please note that all favorites / coupons shall be deleted accordingly.</h3>
                                                    " data-form_id="delete-<?php echo e($element->id); ?>">
                                                <i class="fa fa-fw fa-recycle"></i> <?php echo e(trans('general.delete')); ?></a>
                                            <form method="post" id="delete-<?php echo e($element->id); ?>" action="<?php echo e(route('backend.admin.user.destroy',$element->id)); ?>">
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
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>