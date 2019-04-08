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
                            <th>id</th>
                            <th>day</th>
                            <th>day_name_ar</th>
                            <th>day_name_en</th>
                            <th>start</th>
                            <th>end</th>
                            <th>is_off</th>
                            <th>is_available</th>
                            <th>allow_multi_select</th>
                            <th>type</th>
                            <th>notes_ar</th>
                            <th>notes_en</th>
                            <th>week_start</th>
                            <th>day_no</th>
                            <th>user_id</th>
                            <th>service_id</th>
                            <th>day_id</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>id</th>
                            <th>day</th>
                            <th>day_name_ar</th>
                            <th>day_name_en</th>
                            <th>start</th>
                            <th>end</th>
                            <th>is_off</th>
                            <th>is_available</th>
                            <th>allow_multi_select</th>
                            <th>type</th>
                            <th>notes_ar</th>
                            <th>notes_en</th>
                            <th>week_start</th>
                            <th>day_no</th>
                            <th>user_id</th>
                            <th>service_id</th>
                            <th>day_id</th>
                            <th>action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td> <?php echo e($element->id); ?></td>
                            <td> <?php echo e($element->day); ?> </td>
                            <td> <?php echo e($element->day_name_ar); ?> </td>
                            <td> <?php echo e($element->day_name_en); ?> </td>
                            <td> <?php echo e($element->start); ?> </td>
                            <td> <?php echo e($element->end); ?> </td>
                            <td> <?php echo e($element->is_off); ?> </td>
                            <td> <?php echo e($element->is_available); ?> </td>
                            <td> <?php echo e($element->allow_multi_select); ?> </td>
                            <td> <?php echo e($element->type); ?> </td>
                            <td> <?php echo e($element->notes_ar); ?> </td>
                            <td> <?php echo e($element->notes_en); ?> </td>
                            <td> <?php echo e($element->week_start); ?> </td>
                            <td> <?php echo e($element->day_no); ?> </td>
                            <td> <?php echo e($element->user_id); ?> </td>
                            <td> <?php echo e($element->day_id); ?> </td>
                            <td> <?php echo e($element->service_id); ?> </td>

                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn green btn-xs btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
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
                                            <a data-toggle="modal" href="#" data-target="#basic" data-title="Delete" data-content="Are you sure you want to delete day <?php echo e($element->name); ?>? " data-form_id="delete-<?php echo e($element->id); ?>">
                                                <i class="fa fa-fw fa-recycle"></i> delete</a>
                                            <form method="post" id="delete-<?php echo e($element->id); ?>" action="<?php echo e(route('backend.admin.day.destroy',$element->id)); ?>">
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
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>