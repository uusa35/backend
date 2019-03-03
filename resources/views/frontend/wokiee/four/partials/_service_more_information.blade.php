<div class="col-sm-12 col-md-6">
    <table>
        @if(!is_null($element->settup_time) && $element->setup_time)
            <tr>
                <td>{{ trans('general.setup_time') }}:</td>
                <td>{{ $element->setup_time }} {{ trans('general.hours') }}</td>
            </tr>
        @endif
        @if(!is_null($element->duration) && $element->duration)
            <tr>
                <td>{{ trans('general.duration') }}:</td>
                <td>{{ $element->duration }} {{ trans('general.hours') }}</td>
            </tr>
        @endif
        @if(!is_null($element->delivery_time) && $element->delivery_time)
            <tr>
                <td>{{ trans('general.delivery_time') }}:</td>
                <td>{{ $element->delivery_time }} {{ trans('general.hours') }}</td>
            </tr>
        @endif
    </table>
</div>