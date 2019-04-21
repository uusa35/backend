<?php $__env->startSection('content'); ?>
    <div class="portlet box blue">
        <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="portlet-body form">
            <form role="form" method="post"
                  class="horizontal-form"
                  action="<?php echo e(route('backend.admin.setting.update',$element->id)); ?>" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <input type="hidden" name="_method" value="patch">
                <div class="form-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-body">
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" name="company_ar" placeholder="..."
                                           value="<?php echo e($element->company_ar); ?>">
                                    <label for="form_control_1">Name Ar*</label>
                                    <span class="help-block">Website or Company Name Ar</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-body">
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" name="company_en" placeholder="..."
                                           value="<?php echo e($element->company_en); ?>">
                                    <label for="form_control_1">Name En*</label>
                                    <span class="help-block">Website or Company Name En</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-body">
                                <div class="form-group form-md-line-input">
                                    <input type="file" class="form-control" name="logo" placeholder="...">
                                    <label for="form_control_1">Logo*</label>
                                    <span class="help-block">logo will appear in the website</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-body">
                                <div class="form-group form-md-line-input">
                                    <input type="file" class="form-control" name="size_chart" placeholder="...">
                                    <label for="form_control_1">Size Chart</label>
                                    <span class="help-block">size_chart will appear in the website 600 * 600 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-body">
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" name="instagram" placeholder="..."
                                           value="<?php echo e($element->instagram); ?>">
                                    <label for="form_control_1">instagram URL*</label>
                                    <span class="help-block">instagram</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-body">
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" name="snapchat" placeholder="..."
                                           value="<?php echo e($element->snapchat); ?>">
                                    <label for="form_control_1">snapchat URL*</label>
                                    <span class="help-block">snapchat</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-body">
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" name="twitter" placeholder="..."
                                           value="<?php echo e($element->twitter); ?>">
                                    <label for="form_control_1">URL twitter*</label>
                                    <span class="help-block">twitter</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <input type="text" class="form-control" name="youtube" placeholder="..."
                                       value="<?php echo e($element->youtube); ?>">
                                <label for="form_control_1">youtube</label>
                                <span class="help-block">youtube</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <input type="text" class="form-control" name="facebook" placeholder="..."
                                       value="<?php echo e($element->facebook); ?>">
                                <label for="form_control_1">facebook</label>
                                <span class="help-block">facebook</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <input type="text" class="form-control" name="phone" placeholder="..."
                                       value="<?php echo e($element->phone); ?>">
                                <label for="form_control_1">phone</label>
                                <span class="help-block">phone</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <input type="text" class="form-control" name="mobile" placeholder="..."
                                       value="<?php echo e($element->mobile); ?>">
                                <label for="form_control_1">mobile</label>
                                <span class="help-block">mobile</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <input type="text" class="form-control" name="whatsapp" placeholder="..."
                                       value="<?php echo e($element->whatsapp); ?>">
                                <label for="form_control_1">whatsapp</label>
                                <span class="help-block">whatsapp</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-2">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <input type="text" class="form-control" name="email" placeholder="..."
                                       value="<?php echo e($element->email); ?>">
                                <label for="form_control_1">email</label>
                                <span class="help-block">email</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <input type="text" class="form-control" name="address_ar" placeholder="..."
                                       value="<?php echo e($element->address_ar); ?>">
                                <label for="form_control_1">address_ar</label>
                                <span class="help-block">address_ar</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <input type="text" class="form-control" name="address_en" placeholder="..."
                                       value="<?php echo e($element->address_en); ?>">
                                <label for="form_control_1">address_en</label>
                                <span class="help-block">address_en</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <input type="text" class="form-control" name="country_ar" placeholder="..."
                                       value="<?php echo e($element->country_ar); ?>">
                                <label for="form_control_1">country_ar</label>
                                <span class="help-block">country_ar</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <input type="text" class="form-control" name="country_en" placeholder="..."
                                       value="<?php echo e($element->country_en); ?>">
                                <label for="form_control_1">country_en</label>
                                <span class="help-block">country_en</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <input type="text" class="form-control" name="longitude" placeholder="..."
                                       value="<?php echo e($element->longitude); ?>">
                                <label for="form_control_1">longitude</label>
                                <span class="help-block">longitude</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <input type="text" class="form-control" name="latitude" placeholder="..."
                                       value="<?php echo e($element->latitude); ?>">
                                <label for="form_control_1">latitude</label>
                                <span class="help-block">latitude</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <textarea type="text" class="form-control" id="code" name="code"
                                          aria-multiline="true"><?php echo e($element->code); ?></textarea>
                                <label for="form_control_1">Script Codes</label>
                            </div>
                        </div>
                    </div>

                </div>


                <?php echo $__env->make('backend.partials.forms._btn-group', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </form>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>