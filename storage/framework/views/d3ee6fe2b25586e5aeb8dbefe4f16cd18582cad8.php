<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.admin.survey.index')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light ">
            <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="portlet-body">
                <?php echo $__env->make('backend.partials._admin_instructions',['title' => trans('general.surveys') ,'message' => trans('message.index_survey')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0">
                    <thead>
                        <tr>
                            <th><?php echo e(trans('general.id')); ?></th>
                            <th><?php echo e(trans('general.name')); ?></th>
                            <th><?php echo e(trans('general.slug_ar')); ?></th>
                            <th><?php echo e(trans('general.slug_en')); ?></th>
                            <th><?php echo e(trans('general.is_home')); ?></th>
                            <th><?php echo e(trans('general.is_desktop')); ?></th>
                            <th><?php echo e(trans('general.is_footer')); ?></th>
                            <th><?php echo e(trans('general.active')); ?></th>
                            <th><?php echo e(trans('general.order')); ?></th>
                            <th><?php echo e(trans('general.url')); ?></th>
                            <th><?php echo e(trans('general.actions')); ?></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th><?php echo e(trans('general.id')); ?></th>
                            <th><?php echo e(trans('general.name')); ?></th>
                            <th><?php echo e(trans('general.slug_ar')); ?></th>
                            <th><?php echo e(trans('general.slug_en')); ?></th>
                            <th><?php echo e(trans('general.is_home')); ?></th>
                            <th><?php echo e(trans('general.is_desktop')); ?></th>
                            <th><?php echo e(trans('general.is_footer')); ?></th>
                            <th><?php echo e(trans('general.active')); ?></th>
                            <th><?php echo e(trans('general.order')); ?></th>
                            <th><?php echo e(trans('general.url')); ?></th>
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
                            <td>
                                <span class="label <?php echo e(activeLabel($element->is_home)); ?>"><?php echo e(activeText($element->is_home)); ?></span>
                            </td>
                            <td>
                                <span class="label <?php echo e(activeLabel($element->is_desktop)); ?>"><?php echo e(activeText($element->is_desktop)); ?></span>
                            </td>
                            <td>
                                <span class="label <?php echo e(activeLabel($element->is_footer)); ?>"><?php echo e(activeText($element->is_footer)); ?></span>
                            </td>
                            <td>
                                <span class="label <?php echo e(activeLabel($element->active)); ?>"><?php echo e(activeText($element->is_home)); ?></span>
                            </td>
                            <td>
                                <span class="label label-warning"><?php echo e($element->order); ?></span>
                            </td>
                            <td>
                                <span class="btn btn-success btn-circle">
                                    <a href="<?php echo e(url(config('app.url').'/survey/'.$element->id)); ?>"><?php echo e(config('app.url')); ?>

                                        /survey/<?php echo e($element->id); ?></a>
                                </span>
                            </td>
                            <td>
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> <?php echo e(trans('general.actions')); ?>

                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li>
                                            <a href="<?php echo e(route('frontend.survey.show',$element->id)); ?>">
                                                <i class="fa fa-fw fa-eye"></i><?php echo e(trans('general.view_survey')); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('backend.admin.survey.edit',$element->id)); ?>">
                                                <i class="fa fa-fw fa-edit"></i><?php echo e(trans('general.edit')); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('backend.activate',['model' => 'survey','id' => $element->id])); ?>">
                                                <i class="fa fa-fw fa-check-circle"></i> <?php echo e(trans('general.toggle_active')); ?></a>
                                        </li>
                                        <li>
                                            <a data-toggle="modal" href="#" data-target="#basic" data-title="Delete" data-content="Are you sure you want to delete <?php echo e($element->name); ?>? " data-form_id="delete-<?php echo e($element->id); ?>">
                                                <i class="fa fa-fw fa-recycle"></i> <?php echo e(trans('general.delete')); ?></a>
                                            <form method="post" id="delete-<?php echo e($element->id); ?>" action="<?php echo e(route('backend.admin.survey.destroy',$element->id)); ?>">
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