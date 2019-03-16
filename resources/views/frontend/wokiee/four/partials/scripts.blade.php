@include('frontend.wokiee.partials.scripts')
<script type="text/javascript">
    $('.docs-datepicker-trigger-search').datepicker({
        language: '{{  app()->isLocal('ar') ? 'ar-EG': 'en-GB' }}',
        autoHide: true,
        autoShow: false,
        format: 'dd/mm/yyyy',
        transmissionFormat: 'mm/dd/yyyy',
        weekStart: 1,
        disabledClass: 'dayOff',
        date: '{{ \Carbon\Carbon::today()->format('d/m/Y') }}',
        startDate: '{{  \Carbon\Carbon::today()->format('d/m/Y') }}',
        endDate: '{{  \Carbon\Carbon::today()->addMonth(1)->format('d/m/Y') }}',
        show: function(e) {
        },
        hide: function(e) {
        },
        pick: function(e) {
            dayNo = e.date.getDay();
            day_selected_format = moment(e.date).format('MM/DD/YYYY');
            dayName = moment(e.date).format('dddd');
            console.log('day namee', dayName);
            console.log('day no', dayNo);
            console.log('date_selected format', day_selected_format);
            // set Day No + Day Format Value
            $('#day_selected').attr('value', dayNo);
            $('#day_selected_format').attr('value', day_selected_format);
        },
        update: function(e) {
        }
    });

    var $dateContainer = $('[data-toggle="datepicker"]');
    $dateContainer.datepicker({
        language: '{{  app()->isLocal('ar') ? 'ar-EG': 'en-GB' }}',
        autoHide: true,
        autoShow: false,
        format: 'dd/mm/yyyy',
        transmissionFormat: 'mm/dd/yyyy',
        weekStart: 1,
        disabledClass: 'dayOff',
        filter: function(date, view) {
            @if(isset($workingDays))
            const workingDays = [@foreach($workingDays as $day) {{ $day }}, @endforeach];
            const dayOff = '{{ $dayOff ? $dayOff->day_no : null }}';
            console.log('DayOff', dayOff);
            if (date.getDay() === dayOff && view === 'day') {
                return false; // Disable all Sundays, but still leave months/years, whose first day is a Sunday, enabled.
            }
            @endif
        },
        date: '{{ \Carbon\Carbon::today()->format('d/m/Y') }}',
        startDate: '{{  \Carbon\Carbon::today()->format('d/m/Y') }}',
        endDate: '{{  \Carbon\Carbon::today()->addMonth(1)->format('d/m/Y') }}',
        trigger: '.docs-datepicker-trigger',
        show: function(e) {
            $('*[class^="timing-element-"]').addClass('d-none');
        },
        hide: function(e) {
        },
        pick: function(e) {
            dayNo = e.date.getDay();
            day_selected_format = moment(e.date).format('MM/DD/YYYY');
            dayName = moment(e.date).format('dddd');
            console.log('date_selected', day_selected_format);
            // set Day No + Day Format Value
            $('#day_selected').attr('value', dayNo);
            $('#day_selected_format').attr('value', day_selected_format);
            $(`*[class^="timing-element-${dayNo}"]`).toggleClass('d-none');
            $('#chooseTimeModal').modal('show');
        },
        update: function(e) {
        }
    });
</script>





