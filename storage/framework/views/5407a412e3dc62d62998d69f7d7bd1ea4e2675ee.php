<div class="tt-wrapper">
    
    
    
    
    
    <div class="tt-row-custom-01">
        <div class="input-group">
            <div class="input-group-append">
                <button class="btn-date btn btn-outline-secondary docs-datepicker-trigger date-picker-element"
                        data-method="show"
                        data-tooltip="<?php echo e(trans('general.choose_date_for_your_service')); ?>"
                        type="button">
                    <i class="fa fa-fw fa-calendar" aria-hidden="true"></i>
                </button>
            </div>
            <input data-toggle="datepicker" class="form-control col-lg-12 docs-datepicker-trigger"
                   type="text"
                   aria-label="<?php echo e(trans('general.choose_date_for_your_service')); ?>"
                   data-tooltip="<?php echo e(trans('general.choose_date_for_your_service')); ?>"
                   placeholder="<?php echo e(trans('general.choose_date_for_your_service')); ?>"
                   value="<?php echo e(session()->has('day_selected_format') ? session()->get('day_selected_format') : trans('general.choose_date_for_your_service')); ?>"
                   name="day_selected_format">
            <div class="docs-datepicker-container" style="display: block;"></div>
        </div>
        <div class="col-item">
            <div class="docs-datepicker-container"></div>
        </div>
    </div>
</div>



