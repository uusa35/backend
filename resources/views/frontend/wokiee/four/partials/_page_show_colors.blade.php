<div class="tt-wrapper {{ $hidden ? 'd-none' : null }}" id="color">
    <div class="tt-title-options">{{ trans('general.colors') }}:</div>
    <ul class="tt-options-swatch options-large">
        @foreach($colors as $col)
            <li><a class="options-color d-none" id="color-id-{{ $col->id }}"
                   data-color-id="{{ $col->id }}"
                   data-qty=""
                   data-product-attribute-id=""
                   style="background-color: {{ $col->code }};" href="#"></a></li>
        @endforeach
    </ul>
</div>