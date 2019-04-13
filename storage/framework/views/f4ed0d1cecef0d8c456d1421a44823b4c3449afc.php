<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.admin.commercial.index')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light ">
            <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="portlet-body">
                <div class="portlet-body">
                    <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th><?php echo e(trans('general.id')); ?></th>
                                <th><?php echo e(trans('general.splash')); ?></th>
                                <th><?php echo e(trans('general.show_on_home')); ?></th>
                                <th><?php echo e(trans('general.show_on_category')); ?></th>
                                <th><?php echo e(trans('general.show_on_company')); ?></th>
                                <th><?php echo e(trans('general.show_on_individual')); ?></th>
                                <th><?php echo e(trans('general.image')); ?></th>
                                <th><?php echo e(trans('general.active')); ?></th>
                                <th><?php echo e(trans('general.created_at')); ?></th>
                                <th><?php echo e(trans('general.actions')); ?></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th><?php echo e(trans('general.id')); ?></th>
                                <th><?php echo e(trans('general.splash')); ?></th>
                                <th><?php echo e(trans('general.show_on_home')); ?></th>
                                <th><?php echo e(trans('general.show_on_category')); ?></th>
                                <th><?php echo e(trans('general.show_on_company')); ?></th>
                                <th><?php echo e(trans('general.show_on_individual')); ?></th>
                                <th><?php echo e(trans('general.image')); ?></th>
                                <th><?php echo e(trans('general.active')); ?></th>
                                <th><?php echo e(trans('general.created_at')); ?></th>
                                <th><?php echo e(trans('general.actions')); ?></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $__currentLoopData = $commercials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($element->id); ?></td>
                                <td>
                                    <span class="label <?php echo e(activeLabel($element->is_splash)); ?>"><?php echo e(activeText($element->is_splash,'splash')); ?></span>
                                </td>
                                <td>
                                    <span class="label <?php echo e(activeLabel($element->is_home)); ?>"><?php echo e(activeText($element->is_home,'home')); ?></span>
                                </td>
                                <td>
                                    <span class="label <?php echo e(activeLabel($element->is_category)); ?>"><?php echo e(activeText($element->is_category,'category list')); ?></span>
                                </td>
                                <td>
                                    <span class="label <?php echo e(activeLabel($element->is_company)); ?>"><?php echo e(activeText($element->is_company,'company')); ?></span>
                                </td>
                                <td>
                                    <span class="label <?php echo e(activeLabel($element->is_individual)); ?>"><?php echo e(activeText($element->is_individual,'individual')); ?></span>
                                </td>
                                <td>
                                    <img src="<?php echo e(asset('storage/uploads/images/thumbnail/'.$element->image)); ?>" alt="" class="img-responsive img-xs img-rounded">
                                </td>
                                <td>
                                    <span class="label <?php echo e(activeLabel($element->active)); ?>"><?php echo e(activeText($element->active)); ?></span>
                                </td>
                                <td><?php echo e($element->created_at->diffForHumans()); ?></td>
                                <td>
                                    <div class="btn-group pull-right">
                                        <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> <?php echo e(trans('general.actions')); ?>

                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li>
                                                <a href="<?php echo e(route('backend.admin.commercial.edit',$element->id)); ?>">
                                                    <i class="fa fa-fw fa-user"></i><?php echo e(trans('general.edit')); ?></a>
                                            </li>
                                            
                                            <li>
                                                <form method="post" action="<?php echo e(route('backend.admin.commercial.destroy',$element->id)); ?>">
                                                    <?php echo e(csrf_field()); ?>

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
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>