<div class="tt-price">
    @if($element->isOnSale)
        <span class="new-price">{{ $element->convertedSalePrice}}<span>{{ $currency->symbol }}</span></span>
        <span class="old-price">{{ $element->convertedPrice }}<span>{{ $currency->symbol }}</span></span>
    @else
        <span class="sale-price">{{ $element->convertedPrice }}<span>{{ $currency->symbol }}</span></span>
    @endif
</div>
@if($element->has_attributes && $element->product_attributes->isNotEmpty())
    <div class="tt-option-block">
        <ul class="tt-options-swatch">
            @foreach($element->product_attributes as $productAttribute)
                <li><a class="options-color" style="background-color: {{ $productAttribute->color->code }};" href="#"></a></li>
            @endforeach
        </ul>
    </div>
@endif