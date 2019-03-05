@if($element)
    <script type="text/javascript">
        console.log('here from inside the scripts.');
        var $dateContainer = $('[data-toggle="datepicker"]');
        $dateContainer.datepicker({
            autoHide: true,
            autoShow: true,
            // mutedClass : 'muted-days',
            format: 'dd/mm/yyyy',
            transmissionFormat: 'mm/dd/yyyy',
            weekStart: 6,
            filter: function(date, view) {
                if (date.getDay() === 0 && view === 'day') {
                    return false; // Disable all Sundays, but still leave months/years, whose first day is a Sunday, enabled.
                }
            },
            date: '{{ \Carbon\Carbon::today()->format('d/m/Y') }}',
            startDate: '{{  \Carbon\Carbon::today()->format('d/m/Y') }}',
            endDate: '{{  \Carbon\Carbon::today()->addMonth(1)->format('d/m/Y') }}',
            trigger: '.docs-datepicker-trigger',
            show: function(e) {
                $('*[class^="timing-element-"]').addClass('d-none');
                console.log(e.type, e.namespace);
            },
            hide: function(e) {
                console.log(e.type, e.namespace);
            },
            pick: function(e) {
                dayNo = e.date.getDay();
                // set Day No Value
                $('#day-selected').attr('value', dayNo);
                $(`*[class^="timing-element-${dayNo}"]`).toggleClass('d-none');
                console.log(e.type, e.namespace, e.view);
            }
        });


        $('.timing-start-end').on('click', function(e) {
            console.log('timing choosen');
            id = $(e.target).data('id');
            console.log('the id', id);
        });
        // $('.btn-date').on('click', function () {
        //     console.log('cliecked btn');
        //     $dateContainer.show();
        // });
        // $('#picker').on('pick.datepicker', function (e) {
        //     if (e.date < new Date()) {
        //         e.preventDefault(); // Prevent to pick the date
        //     }
        //     console.log('the date', e.date);
        // });
    </script>
@endif