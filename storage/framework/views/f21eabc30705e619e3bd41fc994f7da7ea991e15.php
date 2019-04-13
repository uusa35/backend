<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light ">
            <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="portlet-body">
                <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>product_id</th>
                        <th>product name</th>
                        <th>size_id</th>
                        <th>color_id</th>
                        <th>qty</th>
                        <th>notes_ar</th>
                        <th>notes_en</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>id</th>
                        <th>product_id</th>
                        <th>product name</th>
                        <th>size_id</th>
                        <th>color_id</th>
                        <th>qty</th>
                        <th>notes_ar</th>
                        <th>notes_en</th>
                        <th>actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php $__currentLoopData = $element->product_attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($element->id); ?></td>
                            <td><?php echo e($element->product_id); ?></td>
                            <td><?php echo e($element->product->name); ?></td>
                            <td><?php echo e($element->size->name); ?></td>
                            <td>
                                <span class="label"
                                      style="background-color: <?php echo e($element->color->name); ?>"><?php echo e($element->color->name); ?></span>
                            </td>
                            <td>
                                <?php echo e($element->qty); ?>

                            </td>
                            <td>
                                <?php echo e($element->notes_ar); ?>

                            </td>
                            <td>
                                <?php echo e($element->notes_en); ?>

                            </td>
                            <td>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(route('backend.attribute.edit',$element->id)); ?>">
                                            <i class="fa fa-fw fa-edit"></i> Edit</a>
                                    </li>
                                    <li>
                                        <a data-toggle="modal" href="#" data-target="#basic"
                                           data-title="Delete"
                                           data-content="Are you sure you want to delete attribute ? "
                                           data-form_id="delete-<?php echo e($element->id); ?>">
                                            <i class="fa fa-fw fa-recycle"></i> dhelete</a>
                                        <form method="post" id="delete-<?php echo e($element->id); ?>"
                                              action="<?php echo e(route('backend.attribute.destroy',$element->id)); ?>">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="_method" value="delete"/>
                                            <button type="submit" class="btn btn-del hidden">
                                                <i class="fa fa-fw fa-times-circle"></i> delete
                                            </button>
                                        </form>
                                    </li>
                                </ul>

                            </td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn green btn-xs btn-outline dropdown-toggle"
                                            data-toggle="dropdown"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li>
                                            <a href="<?php echo e(route('backend.attribute.edit',$element->id)); ?>">
                                                <i class="fa fa-fw fa-edit"></i> Edit</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('backend.activate',['model' => 'ProductAttribute','id' => $element->id])); ?>">
                                                <i class="fa fa-fw fa-check-circle"></i> toggle active</a>
                                        </li>
                                        <li>
                                            <a data-toggle="modal" href="#" data-target="#basic"
                                               data-title="Delete"
                                               data-content="Are you sure you want to delete <?php echo e($element->name); ?>? "
                                               data-form_id="delete-<?php echo e($element->id); ?>"
                                            >
                                                <i class="fa fa-fw fa-recycle"></i> delete</a>
                                            <form method="post" id="delete-<?php echo e($element->id); ?>"
                                                  action="<?php echo e(route('backend.attribute.destroy',$element->id)); ?>">
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