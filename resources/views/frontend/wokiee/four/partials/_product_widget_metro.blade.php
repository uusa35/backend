<div class="element-item {{ isset($double) && $double ? 'double-size' : null }}">
    <div class="tt-product-design02 thumbprod-center">
        <div class="tt-image-box">
            <a href="product.html">
                <span class="tt-img"><img src="{{ $element->imageThumbLink }}" alt="{{ $element->name }}"></span>
            </a>
            @if($element->isReallyHot)
                @include('frontend.wokiee.four.partials._widget_is_really_hot')
            @endif
        </div>
        @include('frontend.wokiee.four.partials._product_widget_description', ['collection' => true])
        <a href="#" class="tt-btn-quickview" data-toggle="modal"
           data-target="#ModalquickView"
           data-tooltip="{{ trans('general.quick_view') }}"
           data-tposition="{{ app()->isLocale('ar') ? 'right' : 'left' }}"
           data-name="{{ $element->name }}"
           data-id="{{ $element->id }}"
           data-image="{{ $element->imageLargeLink }}"
           data-description="{{ $element->description }}"
           data-sku="{{ $element->sku }}"
           data-qty="{{ $element->availableQty }}"
           data-price="{{ $element->convertedFinalPrice }}"
           data-currency-name="{{ $currency->symbol }}"
           data-url="{{ route('frontend.product.show.name', ['id' => $element->id, 'name' => $element->name]) }}"
        ></a>
        @auth
            <a href="{{ route('frontend.favorite.product.add', $element->id) }}" class="tt-btn-wishlist {{ $element->isFavorited ? 'active' : null }}"
               data-tooltip="{{ trans('general.add_to_wish_list') }}"
               data-tposition="{{ app()->isLocale('ar') ? 'right' : 'left' }}"
            ></a>
        @endauth
    </div>
</div>