@if($element)
    <script type="text/javascript">
        console.log('here from inside the scripts.');
        var lang = $('#lang').text();
        console.log('the lang', lang);
        var $dateContainer = $('[data-toggle="datepicker"]');
        $dateContainer.datepicker({
            language: '{{  app()->isLocal('ar') ? 'ar-EG': 'en-GB' }}',
            autoHide: true,
            autoShow: true,
            format: 'dd/mm/yyyy',
            transmissionFormat: 'mm/dd/yyyy',
            weekStart: 1,
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
                day_selected_format = moment(e.date).format('MM/DD/YYYY');
                dayName = moment(e.date).format('dddd');
                console.log('date_selecte', day_selected_format);
                console.log('date', e.date);
                console.log('dayNo', dayNo);
                // set Day No + Day Format Value
                $('#day_selected').attr('value', dayNo);
                $('#day_selected_format').attr('value', day_selected_format);
                $(`*[class^="timing-element-${dayNo}"]`).toggleClass('d-none');
                $('#chooseTimeModal').modal('show');
            },
            update: function(e) {
            }
        });


        // $('#timing_drop_id').on('change', function (e) {
        //     console.log('the e target form drop_id', e.target.value);
        //     val = $(e.target).data('test');
        //     console.log('the val',val);
        // });


        $('.timing-start-end').on('click', function(e) {
            console.log('timing choosen');
            timing_id = $(e.target).data('id');
            $('#timing_id').attr('value', timing_id);
            day_selected_format = $('#day_selected_format').attr('value');
            service_id = $(e.target).data('service-id');
            service_name = $(e.target).data('service-name');
            day_name = $(e.target).data('day-name');
            timing_start = $(e.target).data('timing-start');
            timing_end = $(e.target).data('timing-end');
            console.log('the timing id', timing_id);
            console.log('the day_name', day_name);
            console.log('the service_name', service_name);
            console.log('the day_selected', day_selected_format);
            $('.service_alert').removeClass('d-none');
            $('.cart-btn').removeClass('disabled');
            if (lang === 'ar') {
                $('#service-chosen-title').text('تم اختيار خدمة '
                    + service_name + ' يوم ' + day_name + ' الموافق ' + day_selected_format + 'من الساعة ' + timing_start + ' وحتى' + timing_end
                    + ' للتأكيد .. يرجى إضافة الخدمة إلى عربة التسوق'
                );
            } else {
                $('#service-chosen-title').text(`${service_name} is selected. Day : ${day_name} - ${day_selected_format}, starting from : ${timing_start} to ${timing_end}
                <br> Please kindly add service to Cart.
                `);
            }

        });
    </script>
@endif