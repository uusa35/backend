<?php $__env->startSection('content'); ?>
    <!-- Bootstrap 3 -->
    <div class="portlet box blue">
        <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form method="post" action="<?php echo e(route('backend.role.update', $element->id)); ?>" class="horizontal-form">
                <?php echo e(csrf_field()); ?>

                <input type="hidden" name="_method" value="patch">
                <div class="form-body">
                    <h3 class="form-section"><?php echo e($element->name); ?> Role</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Usama Ahmed"
                                       value="<?php echo e($element->name); ?>">
                                <span class="help-block"> Role Name must be unique </span>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Slug Arabic</label>
                                <input type="text" id="slug_ar" name="slug_ar" class="form-control"
                                       placeholder="slug ar" value="<?php echo e($element->slug_ar); ?>">
                                
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Slug English</label>
                                <input type="text" id="slug_ar" name="slug_en" class="form-control"
                                       placeholder="slug en" value="<?php echo e($element->slug_en); ?>">
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Icon</label>
                                <select class="form-control" name="icon">
                                    <?php $__currentLoopData = $icons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($v); ?>" <?php echo e($element->icon == $v ? 'selected' : null); ?>><?php echo e($v); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <span class="help-block"> <a target="_blank" href="https://fontawesome.com/cheatsheet"
                                                             class="">Check Visual Icons </a></span>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label sbold">Is Active</label>
                                    <div class="radio-list">
                                        <label class="radio-inline">
                                            <input type="radio" name="active" id="optionsRadios1"
                                                   value="1" <?php echo e($element->active ? 'checked' : null); ?>> Active </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="active" id="optionsRadios2"
                                                   value="0" <?php echo e($element->active  ? null : 'checked'); ?>> Not Active</label>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label sbold">Is Admin</label>
                                    <div class="radio-list">
                                        <label class="radio-inline">
                                            <input type="radio" name="is_admin" id="optionsRadios3"
                                                   value="1" <?php echo e($element->is_admin ? 'checked' : null); ?>> Admin
                                            Attributes</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_admin" id="optionsRadios4"
                                                   value="0" <?php echo e($element->is_admin  ? null : 'checked'); ?>> No Admin
                                            Attributes</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label sbold">Is Visible</label>
                                    <div class="radio-list">
                                        <label class="radio-inline">
                                            <input type="radio" name="visible" id="optionsRadios5"
                                                   value="1" <?php echo e($element->visible ? 'checked' : null); ?>> Visible </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="visible" id="optionsRadios6"
                                                   value="0" <?php echo e($element->visible  ? null : 'checked'); ?>> Not Visible</label>
                                    </div>
                                    <span class="help-block"> Visible Means that this role shall appear on Application (ex. admin is invisible)</span>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label sbold">Is Company</label>
                                    <div class="radio-list">
                                        <label class="radio-inline">
                                            <input type="radio" name="is_company" id="optionsRadios7"
                                                   value="1" <?php echo e($element->is_company ? 'checked' : null); ?>> Company
                                            Attributes</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_company" id="optionsRadios8"
                                                   value="0" <?php echo e($element->is_company  ? null : 'checked'); ?>> No Company
                                            Attributes</label>
                                    </div>
                                    <span class="help-block"> Role that has companies attributes (ex. branches) </span>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label>Caption</label>
                                <input type="text" name="caption" class="form-control" value="<?php echo e($element->caption); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Hue (default)</label>
                            
                                <input type="text" name="color" id="hue-demo" class="form-control demo" data-control="hue" value="<?php echo e($element->color); ?>">
                            
                        </div>
                        </div>
                    </div>
                    
                        
                        
                            
                        
                    
                <?php echo $__env->make('backend.partials.forms._btn-group', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </form>
            <!-- END FORM-->
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>