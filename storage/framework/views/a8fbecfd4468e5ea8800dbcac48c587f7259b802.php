<?php $__env->startSection('breadcrumbs'); ?>
    <?php echo e(Breadcrumbs::render('backend.admin.privilege.index')); ?>

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
                            <th> id</th>
                            <th>name</th>
                            <th>slug_ar</th>
                            <th>slug_en</th>
                            <th>description_ar</th>
                            <th>description_en</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th> id</th>
                            <th>name</th>
                            <th>slug_ar</th>
                            <th>slug_en</th>
                            <th>description_ar</th>
                            <th>description_en</th>
                            <th>action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td> <?php echo e($element->id); ?></td>
                                <td> <?php echo e($element->name); ?> </td>
                                <td> <?php echo e($element->slug_ar); ?> </td>
                                <td> <?php echo e($element->slug_en); ?> </td>
                                <td> <?php echo e($element->description_ar); ?> </td>
                                <td> <?php echo e($element->description_en); ?> </td>

                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn green btn-xs btn-outline dropdown-toggle"
                                                data-toggle="dropdown"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li>
                                                <a href="<?php echo e(route('backend.admin.day.edit',$element->id)); ?>">
                                                    <i class="fa fa-fw fa-edit"></i> Edit</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo e(route('backend.activate',['model' => 'day','id' => $element->id])); ?>">
                                                    <i class="fa fa-fw fa-check-circle"></i> toggle active</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo e(route('backend.admin.privilege.show',$element->id)); ?>">
                                                    <i class="fa fa-fw fa-check-circle"></i><?php echo e(trans('general.show_privilege_details')); ?>

                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="modal" href="#" data-target="#basic" data-title="Delete"
                                                   data-content="Are you sure you want to delete day <?php echo e($element->name); ?>? "
                                                   data-form_id="delete-<?php echo e($element->id); ?>">
                                                    <i class="fa fa-fw fa-recycle"></i> delete</a>
                                                <form method="post" id="delete-<?php echo e($element->id); ?>"
                                                      action="<?php echo e(route('backend.admin.day.destroy',$element->id)); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="delete"/>
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
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>