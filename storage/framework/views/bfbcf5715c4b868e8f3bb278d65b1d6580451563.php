<?php $__env->startSection('breadcrumbs'); ?>
    <?php echo e(Breadcrumbs::render('backend.admin.setting.index')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="portlet light ">
        <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="portlet-body">
            <div class="row">
                <div class="col-lg-12">
                    <?php echo $__env->make('backend.partials._admin_instructions',['title' => trans('general.settings') ,'message' => trans('message.settings')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <div class="col-lg-12">
                        <h3 class="text-uppercase">info Setting </h3>
                        <hr>
                        <div class="col-md-6">
                            <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <td>name arabic</td>
                                    <td><?php echo e($element->company_ar); ?></td>
                                </tr>
                                <tr>
                                    <td>name english</td>
                                    <td><?php echo e($element->company_en); ?></td>
                                </tr>
                                <tr>
                                    <td>phone</td>
                                    <td><?php echo e($element->phone); ?></td>
                                </tr>
                                <tr>
                                    <td>mobile</td>
                                    <td><?php echo e($element->mobile); ?></td>
                                </tr>
                                <tr>
                                    <td>whatsapp</td>
                                    <td><?php echo e($element->whatsapp); ?></td>
                                </tr>
                                <tr>
                                    <td>email</td>
                                    <td><?php echo e($element->email); ?></td>
                                </tr>
                                <tr>
                                    <td>address arabic</td>
                                    <td><?php echo e($element->address_ar); ?></td>
                                </tr>
                                <tr>
                                    <td>address en</td>
                                    <td><?php echo e($element->address_en); ?></td>
                                </tr>
                                <tr>
                                    <td>instagram</td>
                                    <td><?php echo e($element->instagram); ?></td>
                                </tr>
                                <tr>
                                    <td>facebook</td>
                                    <td><?php echo e($element->facebook); ?></td>
                                </tr
                                <tr>
                                    <td>twitter</td>
                                    <td><?php echo e($element->twitter); ?></td>
                                </tr>
                                <tr>
                                    <td>snapchat</td>
                                    <td><?php echo e($element->snapchat); ?></td>
                                </tr>
                                <tr>
                                    <td>youtube</td>
                                    <td><?php echo e($element->youtube); ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-3">
                            <h5>logo</h5>
                            <img src="<?php echo e(asset('storage/uploads/images/large/'.$element->logo)); ?>"
                                 alt="" class="img-responsive img-thumbnail">
                        </div>
                        <div class="col-lg-3 img-responsive">
                            <h5>size chart</h5>
                            <img src="<?php echo e(asset('storage/uploads/images/large/'.$element->size_chart)); ?>"
                                 alt="" class="img-responsive img-thumbnail">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>