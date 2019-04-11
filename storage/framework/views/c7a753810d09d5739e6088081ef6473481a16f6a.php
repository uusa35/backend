
<div class="modal  fade" id="Modalnewsletter" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true"
     data-pause=2000>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                            class="icon icon-clear"></span></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header">
                        <?php echo e(trans('general.search_your_occasion')); ?>

                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e(trans('general.sub_title_your_occasion')); ?></h5>
                        <p class="card-text">
                            <?php echo e(trans('message.search_your_occasion')); ?>

                        </p>
                        <br>


                        <?php if($countries->where('is_local',true)->first()): ?>
                            <form method="get" action="<?php echo e(route("frontend.service.search")); ?>">
                                <input type="hidden" name="save" value="1">
                                <input type="hidden" name="day_selected" id="day_selected" value="">
                                <input type="hidden" name="day_selected_format" id="day_selected_format" value="">
                                <div class="form-row justify-content-center align-items-center">
                                    <input type="hidden" name="country_id"
                                           value="<?php echo e($countries->where('is_local',true)->first()->id); ?>">
                                    <div class="form-group col-lg-3 col-xs-12">
                                        <label for="date_selected" class="sr-only"><?php echo e(trans('general.day')); ?>*</label>
                                        <input data-toggle="datepicker" type="text"
                                               value="<?php echo e(getDaySelected_format() ? getDaySelected_format() : trans('general.choose_date')); ?>*"
                                               class="form-control docs-datepicker-trigger-search"
                                               placeholder="<?php echo e(trans('general.choose_day')); ?>" required>
                                    </div>
                                    <div class="form-group col-lg-3 col-xs-12">
                                        <label for="area_id" class="sr-only"><?php echo e(trans('general.area')); ?>*</label>
                                        <select name="area_id" class="form-control" required>
                                            <option value=""><?php echo e(trans('general.choose_area')); ?>*</option>
                                            <?php $__currentLoopData = $countries->where('is_local', true)->first()->areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($area->id); ?>" <?php echo e(session()->has('area_id') && session()->get('area_id') == $area->id ? 'selected' : null); ?>><?php echo e($area->slug); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <?php if(isset($timings)): ?>
                                        <div class="form-group col-lg-3 col-xs-12">
                                            <label for="timings" class="sr-only"><?php echo e(trans('general.timing')); ?></label>
                                            <select name="timing_id" class="form-control">
                                                <option value="" selected><?php echo e(trans('general.choose_timing')); ?></option>
                                                <?php $__currentLoopData = $timings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e(Carbon\Carbon::parse($v)->format('h:i a')); ?>"><?php echo e($v); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <?php if(env('APP_CASE') === 'evento'): ?>
                                    <div class="row">
                                            <?php if($categoriesList->isNotEmpty()): ?>
                                                <?php $__currentLoopData = $categoriesList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="col-3">
                                                        <div class="form-check">
                                                            <input type="checkbox"
                                                                   name="categories[]"
                                                                   value="<?php echo e($category->id); ?>"
                                                                   class="orm-check-input"/>
                                                            <label class="form-check-label" for="categories"><?php echo e($category->name); ?></label>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                                <div class="form-group col-12 col-xs" style="padding: 20px;">
                                    <button type="submit"
                                            class="btn btn-primary"><?php echo e(trans('general.search')); ?></button>
                                </div>
                            </form>
                        <?php endif; ?>


                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>