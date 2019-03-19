<div class="tt-description">
    <div class="tt-row">
        <ul class="tt-add-info">
            <li>
                <a href="{{ route('frontend.product.search',['user_id' => $element->user_id]) }}">{{ str_limit($element->user->slug,60,'..') }}</a>
            </li>
        </ul>
        {{--@include('frontend.wokiee.four.partials._rating')--}}
    </div>
    <h2 class="tt-title">
        <a href="{{ route('frontend.product.show.name',['id' => $element->id , 'name' => $element->name]) }}">{{ str_limit($element->name,35,'..') }}</a>
    </h2>
    @include('frontend.wokiee.four.partials._widget_price_and_color')
    <div class="tt-product-inside-hover">
        @if(isset($collection) && !is_null($collection))
            <div class="tt-row-btn">
                <a href="{{ route('frontend.product.show.name',['id' => $element->id,'name'=> $element->name,'collection_id' => $collection]) }}"
                   class="btn btn-small">
                    <i class="fa fa-fw fa-lg fa-cart-plus"></i>
                    {{ trans('general.add_collection_item_to_cart') }}
                </a>
            </div>
        @else
            <br>
            <div class="tt-row-btn">
                <a href="{{ route('frontend.product.show.name', ['id' => $element->id, 'name' => $element->name]) }}"
                   class="btn btn-small">{{ trans('general.view_details') }}</a>
            </div>
        @endif
        <div class="tt-row-btn">
            <a href="#" class="tt-btn-quickview" data-toggle="modal"
               data-tooltip="{{ trans('general.quick_view') }}"
               data-tposition="{{ app()->isLocale('ar') ? 'right' : 'left' }}"
               data-target="#ModalquickView"
               data-name="{{ $element->name }}"
               data-id="{{ $element->id }}"
               data-qty="{{ $element->availableQty }}"
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