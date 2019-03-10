<div class="tt-wrapper {{ $hidden ? 'd-none' : null }}">
    <div class="tt-title-options">{{ trans('general.colors') }}:</div>
    <ul class="tt-options-swatch options-large">
        @foreach($colors as $col)
            <li><a class="options-color" style="background-color: {{ $col->code }};" href="#"></a></li>
        @endforeach
    </ul>
</div>