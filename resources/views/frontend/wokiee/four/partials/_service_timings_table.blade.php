@if($element->timings->isNotEmpty())
    <div class="tt-table-responsive">
        <table class="tt-table-shop-01">
            <thead>
            <tr style="background-color : #f7f7f7;">
                <th>{{ trans('general.day') }}</th>
                <th>{{ trans('general.start_timing') }}</th>
                <th>{{ trans('general.end_timing') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($elements as $element)
                <tr>
                    <td>{{ $element->day_name }}</td>
                    <td>{{ $element->startDuty }}</td>
                    <td>{{ $element->endDuty }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endif