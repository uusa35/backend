<div class="tt-collapse open">
    <h3 class="tt-collapse-title">{{ trans('general.filter_by_sizes') }}</h3>
    <div class="tt-collapse-content">
        <ul class="tt-options-swatch options-middle">
            @foreach($sizes as $size)
{{--                <li class="{{ request()->size_id === $size->id ? 'active' : null }}">--}}
                    {{--<a href=""></a>--}}
                    <a class="btn-border btn-small" href="{!! request()->fullUrlWithQuery(['size_id' => $size->id]) !!}">{{ $size->name }}</a>
                {{--</li>--}}
            @endforeach
        </ul>
    </div>
</div>