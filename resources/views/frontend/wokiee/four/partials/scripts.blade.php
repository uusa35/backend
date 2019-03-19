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
            $('input[id^="day_selected"]').attr('value', dayNo);
            $('input[id^="day_selected_format"]').attr('value', day_selected_format);
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
            $('input[id^="day_selected"]').attr('value', dayNo);
            $('input[id^="day_selected_format"]').attr('value', day_selected_format);
            $(`*[class^="timing-element-${dayNo}"]`).toggleClass('d-none');
            $('#chooseTimeModal').modal('show');
        },
        update: function(e) {
        }
    });
    {{--jQuery.extend(jQuery.validator.messages, {--}}
        {{--required: '{{ trans('message.item_required') }}',--}}
        {{--remote: "Please fix this field.",--}}
        {{--email: "Please enter a valid email address.",--}}
        {{--url: "Please enter a valid URL.",--}}
        {{--date: "Please enter a valid date.",--}}
        {{--dateISO: "Please enter a valid date (ISO).",--}}
        {{--number: "Please enter a valid number.",--}}
        {{--digits: "Please enter only digits.",--}}
        {{--creditcard: "Please enter a valid credit card number.",--}}
        {{--equalTo: "Please enter the same value again.",--}}
        {{--accept: "Please enter a value with a valid extension.",--}}
        {{--maxlength: jQuery.validator.format("Please enter no more than {0} characters."),--}}
        {{--minlength: jQuery.validator.format("Please enter at least {0} characters."),--}}
        {{--rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),--}}
        {{--range: jQuery.validator.format("Please enter a value between {0} and {1}."),--}}
        {{--max: jQuery.validator.format("Please enter a value less than or equal to {0}."),--}}
        {{--min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")--}}
    {{--});--}}
</script>