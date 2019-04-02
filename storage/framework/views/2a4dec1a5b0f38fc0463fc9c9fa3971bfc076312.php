<?php echo $__env->make('frontend.wokiee.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script type="text/javascript">
    $('.docs-datepicker-trigger-search').datepicker({
        language: '<?php echo e(app()->isLocal('ar') ? 'ar-EG': 'en-GB'); ?>',
        autoHide: true,
        autoShow: false,
        format: 'dd/mm/yyyy',
        transmissionFormat: 'mm/dd/yyyy',
        weekStart: 1,
        disabledClass: 'dayOff',
        date: '<?php echo e(\Carbon\Carbon::today()->format('d/m/y')); ?>',
        startDate: '<?php echo e(\Carbon\Carbon::today()->format('d/m/y')); ?>',
        endDate: '<?php echo e(\Carbon\Carbon::today()->addMonth(1)->format('d/m/y')); ?>',
        show: function(e) {
        },
        hide: function(e) {
        },
        pick: function(e) {
            console.log('from the search form');
            dayNo = e.date.getDay();
            day_selected_format = moment(e.date).format('MM/DD/YYYY');
            dayName = moment(e.date).format('dddd');
            console.log('day namee', dayName);
            console.log('day no', dayNo);
            console.log('date_selected format', day_selected_format);
            // set Day No + Day Format Value
            $('input[id^="day_selected"]').attr('value', dayNo);
            $('input[id^="day_selected_format"]').attr('value', day_selected_format);
        },
        update: function(e) {
        }
    });

    var $dateContainer = $('[data-toggle="datepicker"]');
    $dateContainer.datepicker({
        language: '<?php echo e(app()->isLocal('ar') ? 'ar-EG': 'en-GB'); ?>',
        autoHide: true,
        autoShow: false,
        format: 'dd/mm/yyyy',
        transmissionFormat: 'mm/dd/yyyy',
        weekStart: 1,
        disabledClass: 'dayOff',
        filter: function(date, view) {
            <?php if(isset($workingDays)): ?>
            const workingDays = [<?php $__currentLoopData = $workingDays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($day); ?>, <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>];
            const dayOff = '<?php echo e($dayOff ? $dayOff->day_no : null); ?>';
            console.log('DayOff', dayOff);
            if (date.getDay() === dayOff && view === 'day') {
                return false; // Disable all Sundays, but still leave months/years, whose first day is a Sunday, enabled.
            }
            <?php endif; ?>
        },
        date: '<?php echo e(\Carbon\Carbon::today()->format('d/m/y')); ?>',
        startDate: '<?php echo e(\Carbon\Carbon::today()->format('d/m/y')); ?>',
        endDate: '<?php echo e(\Carbon\Carbon::today()->addMonth(1)->format('d/m/y')); ?>',
        // endDate: 'one month',
        trigger: '.docs-datepicker-trigger',
        show: function(e) {
            $('*[class^="timing-element-"]').addClass('d-none');
        },
        hide: function(e) {
        },
        pick: function(e) {
            $("#timing_select option[selected]").removeAttr("selected");
            $('#timing_select').find('option:first').attr('selected', 'selected');
            console.log('from the service Element Picker');
            dayNo = e.date.getDay();
            day_selected_format = moment(e.date).format('MM/DD/YYYY');
            dayName = moment(e.date).format('dddd');
            console.log('console.log the service Element :: date_selected', day_selected_format);
            // set Day No + Day Format Value
            $('input[id^="day_selected"]').attr('value', dayNo);
            $('input[id^="day_selected_format"]').attr('value', day_selected_format);


            // Modal Case
            $(`div[id^="service_form"]`).removeClass('d-none');
            $(`*[class^="timing-element-"]`).addClass('d-none');
            $(`*[class^="timing-element-${dayNo}"]`).removeClass('d-none');

            // only In Modal Case
            $('#chooseTimeModal').modal('show');
        },
        update: function(e) {
        }
    });
    
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    
</script>