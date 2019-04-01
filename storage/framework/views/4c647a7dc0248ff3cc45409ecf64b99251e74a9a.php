<?php $__env->startSection('content'); ?>
<<<<<<< HEAD
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light ">

                <div class="portlet box blue">

                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <h3 class="form-section"><?php echo e(trans('general.create_role')); ?></h3>
                        <form action="<?php echo e(route('backend.admin.role.store')); ?>" class="horizontal-form">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="_method" value="patch">
                            <div class="form-body">
                                <h3 class="form-section">Create New Role</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Name</label>
                                            <input type="text" id="name" class="form-control" placeholder="Usama Ahmed" value="<?php echo e(old('name_ar')); ?>"
                                                   required>
                                            <span class="help-block"> Role Name must be unique </span>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Slug Arabic</label>
                                            <input type="text" id="slug_ar" name="slug_ar" class="form-control" value="<?php echo e(old('slug_ar')); ?>"
                                                   placeholder="slug ar" required>
                                            
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Slug Arabic</label>
                                    <input type="text" id="slug_ar" name="slug_ar" class="form-control" value="<?php echo e(old('slug_ar')); ?>" placeholder="slug ar" required>
                                    
                                </div>
                            </div>
                            <!--/span-->
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Slug English</label>
                                    <input type="text" id="slug_en" name="slug_en" class="form-control" value="<?php echo e(old('slug_en')); ?>" placeholder="slug en" required>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Icon</label>
                                    <select class="form-control" name="icon" required>
                                        <?php $__currentLoopData = $icons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($v); ?>"><?php echo e($v); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <span class="help-block"> <a target="_blank" href="https://fontawesome.com/cheatsheet" class="">Check Visual Icons </a></span>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label sbold">Is Active</label>
                                        <div class="radio-list">
                                            <label class="radio-inline">
                                                <input type="radio" name="active" id="optionsRadios1" value="1" checked> Active </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="active" id="optionsRadios2" value="0">
                                                Not Active</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label sbold">Is Admin</label>
                                    <div class="radio-list">
                                        <label class="radio-inline">
                                            <input type="radio" name="is_admin" id="optionsRadios3" value="1">
                                            Admin Attributes</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_admin" id="optionsRadios4" value="0" checked> No Admin Attributes</label>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label sbold">Is Visible</label>
                                        <div class="radio-list">
                                            <label class="radio-inline">
                                                <input type="radio" name="visible" id="optionsRadios5" value="1" checked> Visible </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="visible" id="optionsRadios6" value="0"> Not Visible</label>
                                        </div>
                                        <span class="help-block"> Visible Means that this role shall appear on Application (ex. admin is invisible)</span>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label sbold">Is Company</label>
                                    <div class="radio-list">
                                        <label class="radio-inline">
                                            <input type="radio" name="is_company" id="optionsRadios7" value="1">
                                            Company Attributes</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_company" id="optionsRadios8" value="0" checked> No Company Attributes</label>
                                    </div>
                                    <span class="help-block"> Role that has companies attributes (ex. branches) </span>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label>Caption</label>
                                    <input type="text" name="caption" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-actions right">
                            <button type="button" class="btn default">Cancel</button>
                            <button type="submit" class="btn blue">
                                <i class="fa fa-check"></i> Save
                            </button>
                        </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>