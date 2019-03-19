<div class="tt-price">
    @if($element->isOnSale)
        <span class="new-price">{{ $element->convertedSalePrice}}<span>{{ $currency->symbol }}</span></span>
        <span class="old-price">{{ $element->convertedPrice }}<span>{{ $currency->symbol }}</span></span>
    @else
        <span class="sale-price">{{ $element->convertedPrice }}<span>{{ $currency->symbol }}</span></span>
    @endif
</div>
@if($element->has_attributes && $element->colors->isNotEmpty())
    <div class="tt-option-block">
        {{--<ul class="tt-options-swatch">--}}
            {{--@foreach($element->product_attributes as $productAttribute)--}}
                {{--<li><a href="#">{{ $productAttribute->size->name }}</a></li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
        <ul class="tt-options-swatch">
            @foreach($element->colors as $color)
                <li><a class="options-color" style="background-color: {{ $color->code }};"
                       href="#"></a></li>
            @endforeach
        </ul>
    </div>
@endif