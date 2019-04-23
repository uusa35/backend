<?php $__env->startSection('breadcrumbs'); ?>
    <?php echo e(Breadcrumbs::render('backend.service.index')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light ">
                <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <div class="portlet-body">
                    <?php echo $__env->make('backend.partials._admin_instructions',['title' => trans('general.services') ,'message' => trans('message.index_service')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0">
                        <thead>
                        <tr>
                            <th><?php echo e(trans('general.id')); ?></th>
                            <th><?php echo e(trans('general.sku')); ?></th>
                            <th><?php echo e(trans('general.name_ar')); ?></th>
                            <th><?php echo e(trans('general.name_en')); ?></th>
                            <th><?php echo e(trans('general.image')); ?></th>
                            <th><?php echo e(trans('general.price')); ?></th>
                            <th><?php echo e(trans('general.active')); ?></th>
                            <th><?php echo e(trans('general.actions')); ?></th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th><?php echo e(trans('general.id')); ?></th>
                            <th><?php echo e(trans('general.sku')); ?></th>
                            <th><?php echo e(trans('general.name_ar')); ?></th>
                            <th><?php echo e(trans('general.name_en')); ?></th>
                            <th><?php echo e(trans('general.image')); ?></th>
                            <th><?php echo e(trans('general.price')); ?></th>
                            <th><?php echo e(trans('general.active')); ?></th>
                            <th><?php echo e(trans('general.actions')); ?></th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td> <?php echo e($element->id); ?></td>
                                <td> <?php echo e($element->sku); ?> </td>
                                <td> <?php echo e($element->name_ar); ?> </td>
                                <td> <?php echo e($element->name_en); ?> </td>
                                <td>
                                    <img class="img-xs" src="<?php echo e($element->imageThumbLink); ?>" alt="">
                                </td>
                                <td> <?php echo e($element->price); ?> </td>
                                <td> <?php echo e($element->active); ?> </td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn green btn-xs btn-outline dropdown-toggle"
                                                data-toggle="dropdown"> <?php echo e(trans('general.actions')); ?>

                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li>
                                                <a href="<?php echo e(route('backend.service.edit',$element->id)); ?>">
                                                    <i class="fa fa-fw fa-edit"></i> <?php echo e(trans('general.edit')); ?></a>
                                            </li>
                                            <li>
                                                <a href="<?php echo e(route('backend.timing.index',['service_id' => $element->id])); ?>">
                                                    <i class="fa fa-fw fa-edit"></i> <?php echo e(trans('general.show_timings')); ?>

                                                </a>
                                            </li>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isAdminOrAbove')): ?>
                                                <li>
                                                    <a href="<?php echo e(route('backend.slide.create',['slidable_id' => $element->id, 'slidable_type' => 'service'])); ?>">
                                                        <i class="fa fa-fw fa-edit"></i> <?php echo e(trans('general.new_slide')); ?>

                                                    </a>
                                                </li>
                                                <?php if($element->slides->isNotEmpty()): ?>
                                                    <li>
                                                        <a href="<?php echo e(route('backend.slide.index',['slidable_id' => $element->id, 'slidable_type' => 'service'])); ?>">
                                                            <i class="fa fa-fw fa-edit"></i> <?php echo e(trans('general.list_of_slides')); ?>

                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('slide.create')): ?>
                                                    <li>
                                                        <a href="<?php echo e(route('backend.slide.create',['slidable_id' => $element->id, 'slidable_type' => 'service'])); ?>">
                                                            <i class="fa fa-fw fa-edit"></i> <?php echo e(trans('general.new_slide')); ?>

                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                                <?php if($element->slides->isNotEmpty()): ?>
                                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index','slide')): ?>
                                                        <li>
                                                            <a href="<?php echo e(route('backend.slide.index',['slidable_id' => $element->id, 'slidable_type' => 'service'])); ?>">
                                                                <i class="fa fa-fw fa-edit"></i> <?php echo e(trans('general.list_of_slides')); ?>

                                                            </a>
                                                        </li>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <li>
                                                <a href="<?php echo e(route('backend.activate',['model' => 'day','id' => $element->id])); ?>">
                                                    <i class="fa fa-fw fa-check-circle"></i> <?php echo e(trans('general.toggle_active')); ?>

                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="modal" href="#" data-target="#basic" data-title="Delete"
                                                   data-content="Are you sure you want to delete day <?php echo e($element->name); ?>? "
                                                   data-form_id="delete-<?php echo e($element->id); ?>">
                                                    <i class="fa fa-fw fa-recycle"></i> <?php echo e(trans('general.delete')); ?>

                                                </a>
                                                <form method="post" id="delete-<?php echo e($element->id); ?>"
                                                      action="<?php echo e(route('backend.service.destroy',$element->id)); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="delete"/>
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