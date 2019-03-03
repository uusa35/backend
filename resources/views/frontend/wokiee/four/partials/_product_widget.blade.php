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
                                        <span class="tt-img"><img src="{{ $element->imageLargeLink }}"
                                                                  alt="{{ $element->description }}"></span>
            <span class="tt-img-roll-over"><img
                        src="{{ $element->images->first()->imageLargeLink }}"
                        alt=""></span>
            <span class="tt-label-location">
                @if($element->on_new)
                    <span class="tt-label-new">{{ trans('general.new') }}</span>
                @endif
                @if($element->isOnSale)
                    <span class="tt-label-sale">{{ trans('general.on_sale') }}</span>
                @endif
            </span>
        </a>
        @if($element->isReallyHot)
            <div class="tt-countdown_box">
                <div class="tt-countdown_inner">
                    <div class="tt-countdown"
                         data-date="{{ $element->end_sale->format('Y-m-d') }}"
                         data-year="{{ trans('general.years') }}"
                         data-month="{{ trans('general.months') }}"
                         data-week="{{ trans('general.weeks') }}"
                         data-day="{{ trans('general.day') }}"
                         data-hour="{{ trans('general.hours') }}"
                         data-minute="{{ trans('general.minute') }}"
                         data-second="{{ trans('general.second') }}"
                    ></div>
                </div>
            </div>
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
        <h2 class="tt-title"><a href="product.html">{{ $element->name }}</a></h2>
        <div class="tt-price">
            @if($element->isOnSale)
                <span class="new-price">{{ $element->convertedSalePrice}}
                    <span>{{ $currency->symbol }}</span>
                    <span class="old-price">{{ $element->convertedPrice }}
                        <span>{{ $currency->symbol }}</span>
                        @else
                            <span class="new-price">{{ $element->convertedPrice }}
                                <span>{{ $currency->symbol }}</span>
            @endif
        </div>
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