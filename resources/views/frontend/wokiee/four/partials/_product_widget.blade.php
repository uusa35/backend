<div class="tt-product thumbprod-center">
    <div class="tt-image-box">
        <a href="#" class="tt-btn-quickview" data-toggle="modal"
           data-target="#ModalquickView"
           data-tooltip="{{ trans('general.quick_view') }}"
           data-tposition="{{ app()->isLocale('ar') ? 'right' : 'left' }}"
           data-name="{{ $element->name }}"
           data-id="{{ $element->id }}"
           data-image="{{ $element->imageLargeLink }}"
           data-description="{{ $element->description }}"
           data-sku="{{ $element->sku }}"
           data-price="{{ $element->convertedFinalPrice }}"
           data-currency-name="{{ $currency->symbol }}"
           data-url="{{ route('frontend.product.show.name', ['id' => $element->id, 'name' => $element->name]) }}"
        ></a>
        @auth
            <a href="#" class="tt-btn-wishlist" data-tooltip="{{ trans('general.add_to_wish_list') }}"
               data-tposition="{{ app()->isLocale('ar') ? 'right' : 'left' }}"
            ></a>
        @endauth
        {{--<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare"--}}
        {{--data-tposition="{{ app()->isLocale('ar') ? 'right' : 'left' }}"--}}
        {{--></a>--}}
        <a href="{{ route('frontend.product.show.name', ['id' => $element->id, 'name' => $element->name]) }}">
            @include('frontend.wokiee.four.partials._widget_tags')
        </a>
        @if($element->isReallyHot)
            @include('frontend.wokiee.four.partials._widget_is_really_hot')
        @endif
    </div>
    <div class="tt-description">
        <div class="tt-row">
            <ul class="tt-add-info">
                <li>
                    <a href="{{ route('frontend.product.search',['user_id' => $element->user_id ]) }}">{{ $element->user->name }}</a>
                </li>
            </ul>
            {{--@include('frontend.wokiee.four.partials._rating')--}}
        </div>
        <h2 class="tt-title"><a
                    href="{{ route('frontend.service.show.name',['id' => $element->id , 'name' => $element->user->slug ]) }}">{{ $element->user->slug }}</a>
        </h2>
        <div class="tt-price">
            @if($element->isOnSale)
                <span class="new-price">{{ $element->convertedSalePrice}}<span>{{ $currency->symbol }}</span></span>
                <span class="old-price">{{ $element->convertedPrice }}<span>{{ $currency->symbol }}</span></span>
            @else
                <span class="new-price">{{ $element->convertedPrice }}<span>{{ $currency->symbol }}</span></span>
            @endif
        </div>
        @if($element->has_attributes && $element->colors->isNotEmpty())
            <div class="tt-option-block">
                <ul class="tt-options-swatch">
                    @foreach($element->colors as $color)
                        <li><a class="options-color" style="background-color: {{ $color->code }};" href="#"></a></li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if($element->has_attributes)
            <div class="tt-option-block">
                <ul class="tt-options-swatch">
                    @if($element->colors->isNotEmpty())
                        @foreach($element->colors as $color)
                            <li><a class="options-color"
                                   style="background-color: {{ $color->code }}"
                                   href="#"></a></li>
                        @endforeach
                    @endif
                </ul>
            </div>
        @endif
        <div class="tt-product-inside-hover">
            {{--<div class="tt-row-btn">--}}
            {{--<a href="{{ route('frontend.product.show', $element->id) }}"--}}
            {{--class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal"--}}
            {{--data-target="#modalAddToCartProduct">{{ trans('general.view') }}</a>--}}
            {{--</div>--}}
            <div class="tt-row-btn">
                <a href="{{ route('frontend.product.show.name', ['id' => $element->id, 'name' => $element->name]) }}"
                   class="tt-btn-addtocart thumbprod-button-bg">{{ trans('general.view') }}</a>
            </div>
            <div class="tt-row-btn">
                <a href="#" class="tt-btn-quickview" data-toggle="modal"
                   data-tooltip="{{ trans('general.quick_view') }}"
                   data-tposition="{{ app()->isLocale('ar') ? 'right' : 'left' }}"
                   data-target="#ModalquickView"
                   data-name="{{ $element->name }}"
                   data-id="{{ $element->id }}"
                   data-image="{{ $element->imageLargeLink }}"
                   data-description="{{ $element->description }}"
                   data-sku="{{ $element->sku }}"
                   data-price="{{ $element->convertedFinalPrice }}"
                   data-currency-name="{{ $currency->symbol }}"
                   data-url="{{ route('frontend.product.show.name', ['id' => $element->id, 'name' => $element->name]) }}"
                ></a>
                @auth
                    <a href="#" class="tt-btn-wishlist"></a>
                @endauth
                {{--<a href="#" class="tt-btn-compare"></a>--}}
            </div>
        </div>
    </div>
</div>