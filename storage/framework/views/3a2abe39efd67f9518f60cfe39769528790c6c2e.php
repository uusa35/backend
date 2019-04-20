<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.admin.category.index')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light ">
            <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="portlet-body">
                <?php echo $__env->make('backend.partials._admin_instructions',['title' => trans('general.categories') ,'message' => trans('message.index_category')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0">
                    <thead>
                        <tr>
                            <th><?php echo e(trans('general.id')); ?></th>
                            <th><?php echo e(trans('general.name')); ?></th>
                            <th><?php echo e(trans('general.name_en')); ?></th>
                            <th><?php echo e(trans('general.name_ar')); ?></th>
                            <th><?php echo e(trans('general.active')); ?></th>
                            <th><?php echo e(trans('general.image')); ?></th>
                            <th width="300"><?php echo e(trans('general.subcategories')); ?></th>
                            <th><?php echo e(trans('general.actions')); ?></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th><?php echo e(trans('general.id')); ?></th>
                            <th><?php echo e(trans('general.name')); ?></th>
                            <th><?php echo e(trans('general.name_en')); ?></th>
                            <th><?php echo e(trans('general.name_ar')); ?></th>
                            <th><?php echo e(trans('general.active')); ?></th>
                            <th><?php echo e(trans('general.image')); ?></th>
                            <th width="300"><?php echo e(trans('general.subcategories')); ?></th>
                            <th><?php echo e(trans('general.actions')); ?></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($element->id); ?></td>
                            <td><?php echo e($element->name); ?></td>
                            <td>
                                <span class="label label-lg <?php echo e(activeLabel($element->active)); ?> text-uppercase"><?php echo e($element->name_en); ?></span>
                            </td>
                            <td>
                                <span class="label label-lg <?php echo e(activeLabel($element->active)); ?> text-uppercase"><?php echo e($element->name_ar); ?></span>
                            </td>
                            <td>
                                <span class="label label-lg <?php echo e(activeLabel($element->active)); ?> text-uppercase"><?php echo e(activeText($element->active)); ?></span>
                            </td>
                            <td>
                                <img src="<?php echo e(asset('storage/uploads/images/thumbnail/'.$element->image)); ?>" alt="" class="img-sm">
                            </td>
                            <td>
                                <?php if(!$element->children->isEmpty()): ?>
                                <ul>
                                    <?php $__currentLoopData = $element->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <div class="btn-group">
                                            <button type="button" class="btn <?php echo e($child->active ? 'green' : 'red'); ?>  dropdown-toggle" data-toggle="dropdown"> <?php echo e($child->id); ?> - <?php echo e($child->name); ?>

                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li>
                                                    <a href="<?php echo e(route('backend.admin.category.create',['parent_id' => $child->id])); ?>">
                                                        <i class="fa fa-fw fa-edit"></i> <?php echo e(trans('general.assign_child')); ?></a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo e(route('backend.admin.category.edit',$child->id)); ?>">
                                                        <i class="fa fa-fw fa-edit"></i> <?php echo e(trans('general.edit')); ?></a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo e(route('backend.activate',['model' => 'category','id' => $child->id])); ?>">
                                                        <i class="fa fa-fw fa-check-circle"></i> <?php echo e(trans('general.toggle_active')); ?>

                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-toggle="modal" href="#" data-target="#basic" data-title="Delete" data-content="Are you sure you want to delete <?php echo e($child->name); ?>? " data-form_id="delete-<?php echo e($child->id); ?>">
                                                        <i class="fa fa-fw fa-recycle"></i> <?php echo e(trans('general.delete')); ?></a>
                                                    <form method="post" id="delete-<?php echo e($child->id); ?>" action="<?php echo e(route('backend.admin.category.destroy',$child->id)); ?>">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="_method" value="delete" />
                                                        <button type="submit" class="btn btn-del hidden">
                                                            <i class="fa fa-fw fa-times-circle"></i> <?php echo e(trans('general.delete')); ?>

                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                        <br>
                                        <br>
                                        <?php if(!$child->children->isEmpty()): ?>
                                        <ul>
                                            <?php $__currentLoopData = $child->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <div class="btn-group">
                                                    <button type="button" class="btn <?php echo e($sub->active ? 'green' : 'red'); ?> btn-outline dropdown-toggle" data-toggle="dropdown"> <?php echo e($sub->id); ?> - <?php echo e($sub->name); ?>

                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right" role="menu">
                                                        <li>
                                                            <a href="<?php echo e(route('backend.admin.category.edit',$sub->id)); ?>">
                                                                <i class="fa fa-fw fa-edit"></i>
                                                                <?php echo e(trans('general.edit')); ?></a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo e(route('backend.activate',['model' => 'category','id' => $sub->id])); ?>">
                                                                <i class="fa fa-fw fa-check-circle"></i>
                                                                <?php echo e(trans('general.toggle_active')); ?></a>
                                                        </li>
                                                        <li>
                                                            <a data-toggle="modal" href="#" data-target="#basic" data-title="Delete" data-content="Are you sure you want to delete <?php echo e($sub->name); ?>? " data-form_id="delete-<?php echo e($sub->id); ?>">
                                                                <i class="fa fa-fw fa-recycle"></i>
                                                                <?php echo e(trans('general.delete')); ?></a>
                                                            <form method="post" id="delete-<?php echo e($sub->id); ?>" action="<?php echo e(route('backend.admin.category.destroy',$sub->id)); ?>">
                                                                <?php echo csrf_field(); ?>
                                                                <input type="hidden" name="_method" value="delete" />
                                                                <button type="submit" class="btn btn-del hidden">
                                                                    <i class="fa fa-fw fa-times-circle"></i>
                                                                    <?php echo e(trans('general.delete')); ?>

                                                                </button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                        <?php endif; ?>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <?php else: ?>
                                <span class="label label-info">no sub categories</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn green btn-xs btn-outline dropdown-toggle" data-toggle="dropdown"> <?php echo e(trans('general.actions')); ?>

                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li>
                                            <a href="<?php echo e(route('backend.admin.category.edit',$element->id)); ?>">
                                                <i class="fa fa-fw fa-edit"></i> <?php echo e(trans('general.edit')); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('backend.admin.category.create',['parent_id' => $element->id])); ?>">
                                                <i class="fa fa-fw fa-edit"></i> <?php echo e(trans('general.assign_child')); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('backend.activate',['model' => 'product','id' => $element->id])); ?>">
                                                <i class="fa fa-fw fa-check-circle"></i> <?php echo e(trans('general.toggle_active')); ?></a>
                                        </li>
                                        <li>
                                            <a data-toggle="modal" href="#" data-target="#basic" data-title="Delete" data-content="Are you sure you want to delete <?php echo e($element->name); ?>? " data-form_id="delete-<?php echo e($element->id); ?>">
                                                <i class="fa fa-fw fa-recycle"></i> <?php echo e(trans('general.delete')); ?></a>
                                            <form method="post" id="delete-<?php echo e($element->id); ?>" action="<?php echo e(route('backend.admin.category.destroy',$element->id)); ?>">
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