@if(isset($areas) && $areas->isNotEmpty())
    <div class="tt-collapse open">
        <h3 class="tt-collapse-title">{{ trans('general.areas') }}</h3>
        <div class="tt-collapse-content">
            <ul class="tt-list-row">
                @foreach($areas as $area)
                    <li>
                        <a href="{!! request()->fullUrlWithQuery(['area_id' => $area->id]) !!}">{{ $area->slug }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif