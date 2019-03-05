@if($element)
    <script type="text/javascript">
        console.log('here from inside the scripts.');
        var $dateContainer = $('[data-toggle="datepicker"]');
        $dateContainer.datepicker({
            language: '{{  app()->isLocal('ar') ? 'ar-EG': 'en-GB' }}',
            autoHide: true,
            autoShow: true,
            format: 'dd/mm/yyyy',
            transmissionFormat: 'mm/dd/yyyy',
            // weekStart: 0,
            disabledClass: 'dayOff',
            filter: function(date, view) {
                const workingDays = [@foreach($workingDays as $day) {{ $day }}, @endforeach];
                const dayOff = '{{ $dayOff ? $dayOff->day_no : null }}';
                console.log('DayOff', dayOff);
                if (date.getDay() === dayOff && view === 'day') {
                    return false; // Disable all Sundays, but still leave months/years, whose first day is a Sunday, enabled.
                }
            },
            {{--date: '{{ \Carbon\Carbon::today()->format('d/m/Y') }}',--}}
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
                date_selected = moment(e.date).format('DD/MM/YYYY');
                dayName = moment(e.date).format('dddd');
                console.log('date_selecte',date_selected);
                console.log('date',e.date);
                console.log('dayNo', dayNo);
                // set Day No Value
                $('#day-selected').attr('value', dayNo);
                $(`*[class^="timing-element-${dayNo}"]`).toggleClass('d-none');
                $('#chooseTimeModal').modal('show');
                console.log(e.type, e.namespace, e.view);
            },
            update: function(e) {
            }
        });

        $('.timing-start-end').on('click', function(e) {
            console.log('timing choosen');
            id = $(e.target).data('id');
            service_id = $(e.target).data('service_id');
            day_selected = $('#day-selected').attr('value', dayNo);
            console.log('the id', id);
            $('#service-chosen-title').text(``)
        });
    </script>
@endif