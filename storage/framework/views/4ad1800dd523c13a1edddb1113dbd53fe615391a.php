<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.admin.page.index')); ?>

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
                            <th>id</th>
                            <th>title_ar</th>
                            <th>title_en</th>
                            <th>slug_ar</th>
                            <th>slug_en</th>
                            <th>image</th>
                            <th>url</th>
                            <th>order</th>
                            <th>active</th>
                            <th>on_menu_desktop</th>
                            <th>on_menu_mobile</th>
                            <th>on_footer</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>id</th>
                            <th>title_ar</th>
                            <th>title_en</th>
                            <th>slug_ar</th>
                            <th>slug_en</th>
                            <th>image</th>
                            <th>url</th>
                            <th>order</th>
                            <th>active</th>
                            <th>on_menu_desktop</th>
                            <th>on_menu_mobile</th>
                            <th>on_footer</th>
                            <th>action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td> <?php echo e($element->id); ?></td>
                            <td> <?php echo e($element->title_ar); ?> </td>
                            <td> <?php echo e($element->title_en); ?> </td>
                            <td> <?php echo e($element->slug_ar); ?> </td>
                            <td> <?php echo e($element->slug_en); ?> </td>
                            <td><img src="<?php echo e(asset('storage/uploads/images/thumbnail/'.$element->image)); ?>" alt="" class="img-sm"></td>
                            <td><a href="<?php echo e($element->url); ?>" class="btn btn-default"><?php echo e($element->title_en); ?></a>
                            </td>
                            <td><?php echo e($element->order); ?></td>
                            <td>
                                <span class="label <?php echo e(activeLabel($element->active)); ?>"><?php echo e(activeText($element->active)); ?></span>
                            </td>
                            <td>
                                <span class="label <?php echo e(activeLabel($element->on_menu_desktop)); ?>"><?php echo e(activeText($element->on_menu_desktop,'Desktop')); ?></span>
                            </td>
                            <td>
                                <span class="label <?php echo e(activeLabel($element->on_menu_mobile)); ?>"><?php echo e(activeText($element->on_menu_mobile,'Mobile')); ?></span>
                            </td>
                            <td>
                                <span class="label <?php echo e(activeLabel($element->on_footer)); ?>"><?php echo e(activeText($element->on_footer,'Footer')); ?></span>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn green btn-xs btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li>
                                            <a href="<?php echo e(route('backend.admin.page.edit',$element->id)); ?>">
                                                <i class="fa fa-fw fa-edit"></i> Edit</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('backend.activate',['model' => 'page','id' => $element->id])); ?>">
                                                <i class="fa fa-fw fa-check-circle"></i> toggle active</a>
                                        </li>
                                        <li>
                                            <a data-toggle="modal" href="#" data-target="#basic" data-title="Delete" data-content="Are you sure you want to delete page <?php echo e($element->title_ar); ?>? " data-form_id="delete-<?php echo e($element->id); ?>">
                                                <i class="fa fa-fw fa-recycle"></i> delete</a>
                                            <form method="post" id="delete-<?php echo e($element->id); ?>" action="<?php echo e(route('backend.admin.page.destroy',$element->id)); ?>">
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