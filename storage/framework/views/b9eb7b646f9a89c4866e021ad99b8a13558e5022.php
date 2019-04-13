<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.admin.answer.index')); ?>

<?php $__env->stopSection(); ?>
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
                        <?php echo e(trans('dashboard.message_answers')); ?>

                    </p>
                </div>
                <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0">
                    <thead>
                        <tr>
                            <th><?php echo e(trans('general.id')); ?></th>
                            <th><?php echo e(trans('general.name_ar')); ?></th>
                            <th><?php echo e(trans('general.name_en')); ?></th>
                            <th><?php echo e(trans('general.value')); ?></th>
                            <th><?php echo e(trans('general.icon')); ?></th>
                            <th><?php echo e(trans('general.active')); ?></th>
                            <th><?php echo e(trans('general.is_multi')); ?></th>
                            <th><?php echo e(trans('general.order')); ?></th>
                            <th><?php echo e(trans('general.actions')); ?></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th><?php echo e(trans('general.id')); ?></th>
                            <th><?php echo e(trans('general.name_ar')); ?></th>
                            <th><?php echo e(trans('general.name_en')); ?></th>
                            <th><?php echo e(trans('general.value')); ?></th>
                            <th><?php echo e(trans('general.icon')); ?></th>
                            <th><?php echo e(trans('general.active')); ?></th>
                            <th><?php echo e(trans('general.is_multi')); ?></th>
                            <th><?php echo e(trans('general.order')); ?></th>
                            <th><?php echo e(trans('general.actions')); ?></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($element->id); ?></td>
                            <td><?php echo e($element->name_ar); ?></td>
                            <td><?php echo e($element->name_en); ?></td>
                            <td><?php echo e($element->value); ?></td>
                            <td><i class="fa fa-fw fa-<?php echo e($element->icon); ?>"></i></td>
                            <td>
                                <span class="label <?php echo e(activeLabel($element->active)); ?>"><?php echo e(activeText($element->active)); ?></span>
                            </td>
                            <td>
                                <span class="label <?php echo e(activeLabel($element->is_multi)); ?>"><?php echo e(activeText($element->is_multi)); ?></span>
                            </td>
                            <td>
                                <span class="label label-warning"><?php echo e($element->order); ?></span>
                            </td>
                            <td>
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> <?php echo e(trans('general.actions')); ?>

                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li>
                                            <a href="<?php echo e(route('backend.admin.answer.edit',$element->id)); ?>">
                                                <i class="fa fa-fw fa-edit"></i> <?php echo e(trans('general.edit')); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('backend.activate',['model' => 'answer','id' => $element->id])); ?>">
                                                <i class="fa fa-fw fa-check-circle"></i> <?php echo e(trans('general.toggle_active')); ?></a>
                                        </li>
                                        <li>
                                            <a data-toggle="modal" href="#" data-target="#basic" data-title="Delete" data-content="Are you sure you want to delete <?php echo e($element->name); ?>? " data-form_id="delete-<?php echo e($element->id); ?>">
                                                <i class="fa fa-fw fa-recycle"></i> <?php echo e(trans('general.delete')); ?></a>
                                            <form method="post" id="delete-<?php echo e($element->id); ?>" action="<?php echo e(route('backend.admin.answer.destroy',$element->id)); ?>">
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
                <?php if($elements->render()): ?>
                <?php echo e($elements->render()); ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>