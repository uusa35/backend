<?php $__env->startSection('breadcrumbs'); ?>
    <?php echo e(Breadcrumbs::render('backend.product.index')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
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
                            <th>sku</th>
                            <th>name_ar</th>
                            <th>price</th>
                            <th>sale_price</th>
                            <th>weight</th>
                            <th>image</th>
                            <th>end_sale</th>
                            <th>active</th>
                            <th>attributes x/clr/qty</th>
                            <th>actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>id</th>
                            <th>sku</th>
                            <th>name_ar</th>
                            <th>price</th>
                            <th>sale_price</th>
                            <th>weight</th>
                            <th>image</th>
                            <th>end_sale</th>
                            <th>active</th>
                            <th>attributes</th>
                            <th>actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($element->id); ?></td>
                                <td><?php echo e($element->sku); ?></td>
                                <td><?php echo e($element->name_ar); ?></td>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <td>
                                    <?php echo e($element->price); ?>

                                </td>
                                <td>
                                    <?php echo e($element->sale_price); ?>

                                </td>
                                <td>
                                    <?php echo e($element->weight); ?>

                                </td>
                                <td>
                                    <img class="img-xs"
                                         src="<?php echo e(asset('storage/uploads/images/thumbnail/'.$element->image)); ?>" alt="">
                                </td>
                                <td><?php echo e(!is_null($element->end_sale) ? $element->end_sale->format('Y-m-d') : null); ?></td>
                                <td>
                                    <span class="label <?php echo e(activeLabel($element->active)); ?>"><?php echo e(activeText($element->active)); ?></span>
                                </td>

                                <td>
                                    <?php if(!$element->product_attributes->isEmpty()): ?>
                                        <?php $__currentLoopData = $element->product_attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="btn-group">

                                                <button type="button"
                                                        style="background-color: <?php echo e($attribute->color->name_en); ?>; color : black; font-weight: bolder"
                                                        class="btn green btn-sm btn-outline"
                                                        data-toggle="dropdown"> <?php echo e($attribute->color->name_en); ?>

                                                    - <?php echo e($attribute->size->name_en); ?> - <?php echo e($attribute->qty); ?>

                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="<?php echo e(route('backend.attribute.edit',$attribute->id)); ?>">
                                                            <i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="modal" href="#" data-target="#basic"
                                                           data-title="Delete"
                                                           data-content="Are you sure you want to delete attribute ? "
                                                           data-form_id="delete-<?php echo e($attribute->id); ?>">
                                                            <i class="fa fa-fw fa-recycle"></i> delete</a>
                                                        <form method="post" id="delete-<?php echo e($attribute->id); ?>"
                                                              action="<?php echo e(route('backend.attribute.destroy',$attribute->id)); ?>">
                                                            <?php echo csrf_field(); ?>
                                                            <input type="hidden" name="_method" value="delete"/>
                                                            <button type="submit" class="btn btn-del hidden">
                                                                <i class="fa fa-fw fa-times-circle"></i> delete
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                            <br>
                                            <br>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <span class="label label-danger">N/A</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn green btn-xs btn-outline dropdown-toggle"
                                                data-toggle="dropdown"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li>
                                                <a href="<?php echo e(route('backend.product.edit',$element->id)); ?>">
                                                    <i class="fa fa-fw fa-edit"></i> Edit</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo e(route('backend.activate',['model' => 'product','id' => $element->id])); ?>">
                                                    <i class="fa fa-fw fa-check-circle"></i> toggle active</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo e(route('backend.attribute.create',['product_id' => $element->id])); ?>">
                                                    <i class="fa fa-fw fa-plus-square"></i> assign new attribute</a>
                                            </li>
                                            <?php if(!$element->trashed()): ?>
                                                <li>
                                                    <a data-toggle="modal" href="#" data-target="#basic"
                                                       data-title="Delete"
                                                       data-content="Are you sure you want to delete <?php echo e($element->name); ?>? "
                                                       data-form_id="delete-<?php echo e($element->id); ?>"
                                                    >
                                                        <i class="fa fa-fw fa-recycle"></i> delete</a>
                                                    <form method="post" id="delete-<?php echo e($element->id); ?>"
                                                          action="<?php echo e(route('backend.product.destroy',$element->id)); ?>">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="_method" value="delete"/>
                                                        <button type="submit" class="btn btn-del hidden">
                                                            <i class="fa fa-fw fa-times-circle"></i> delete
                                                        </button>
                                                    </form>
                                                </li>
                                            <?php else: ?>
                                                <li>
                                                    <a href="<?php echo e(route('backend.product.restore',$element->id)); ?>">
                                                        <i class="fa fa-fw fa-window-restore"></i> restore</a>
                                                </li>
                                            <?php endif; ?>
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