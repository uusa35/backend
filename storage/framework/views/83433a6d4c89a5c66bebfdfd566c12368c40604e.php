<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.admin.slide.index')); ?>

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
                        Roles are very important for the application.
                    </p>
                    <p> Some Information about roles.
                        <a class="btn red btn-outline" href="http://datatables.net/" target="_blank">the official
                            documentation</a>
                    </p>
                </div>
                <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>url</th>
                            <th>order</th>
                            <th>image</th>
                            <th>active</th>
                            <th>Created At</th>
                            <th>file path</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>url</th>
                            <th>order</th>
                            <th>active</th>
                            <th>image</th>
                            <th>Created At</th>
                            <th>file path</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($element->id); ?></td>
                            <td>
                                <?php echo e(str_limit($element->url,20,'..')); ?>

                            </td>
                            <td><?php echo e($element->order); ?></td>
                            <td>
                                <img src="<?php echo e(asset('storage/uploads/images/thumbnail/'.$element->image)); ?>" alt="" class="img-responsive" style="max-height: 80px; max-width:100px;">
                            </td>
                            <td>
                                <span class="label <?php echo e(activeLabel($element->active)); ?>"><?php echo e(activeText($element->active)); ?></span>
                            </td>
                            <td><?php echo e($element->created_at->diffForHumans()); ?></td>
                            <td>
                                <?php if($element->path): ?>
                                <a class="btn btn-info" href="<?php echo e(asset(env('FILES').$element->path)); ?>"><?php echo e($element->caption); ?></a>
                                <?php else: ?>
                                <div class="alert alert-info">No Path</div>
                                <?php endif; ?>
                            </td>
                            <td>
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li>
                                            <a href="<?php echo e(route('backend.admin.slide.edit',$element->id)); ?>">
                                                <i class="fa fa-fw fa-user"></i>edit</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('backend.activate',['model' => 'slide','id' => $element->id])); ?>">
                                                <i class="fa fa-fw fa-check-circle"></i> toggle active</a>
                                        </li>
                                        <li>
                                            <form method="post" action="<?php echo e(route('backend.admin.slide.destroy',$element->id)); ?>">
                                                <?php echo e(csrf_field()); ?>

                                                <input type="hidden" name="_method" value="delete" />
                                                <button type="submit" class="btn btn-outline btn-sm red">
                                                    <i class="fa fa-remove"></i>delete slide
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