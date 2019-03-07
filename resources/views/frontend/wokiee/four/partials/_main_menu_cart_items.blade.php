
<div class="tt-cart-content">
    <div class="tt-cart-list">
        @foreach(Cart::content() as $item)
            <div class="tt-item">
                <a href="product.html">
                    <div class="tt-item-img">
                        <img src="{{ $item->options->service->imageThumbLink}}"
                             data-src="{{ $item->options->service->imageThumbLink}}" alt="">
                    </div>
                    @if($item->options->type === 'service')
                        <div class="tt-item-descriptions">
                            <h2 class="tt-title">{{ $item->name }}</h2>
                            <ul class="tt-add-info">
                                <li>{{ trans('general.day_selected') }} : {{ $item->options->day_selected->format('d/m/Y') }}</li>
                                <li>{{ trans('general.company_name') }}: {{ $item->options->company }}</li>
                                <li>{{ trans('general.start_time') }}: {{ $item->options->timing->start_time }}</li>
                            </ul>
                            <div class="tt-price">{{ getConvertedPrice($item->price) }} {{ $currency->symbol }}</div>
                        </div>
                    @else
                        <div class="tt-item-descriptions">
                            <h2 class="tt-title">{{ $item->name }}</h2>
                            <ul class="tt-add-info">
                                <li>Yellow, Material 2, Size 58,</li>
                                <li>Vendor: Addidas</li>
                            </ul>
                            <div class="tt-quantity">1 X</div>
                            <div class="tt-price">$12</div>
                        </div>
                    @endif
                </a>
                <div class="tt-item-close">
                    <a href="{{ route('frontend.cart.remove',$item->rowId) }}" class="tt-btn-close"></a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="tt-cart-total-row">
        <div class="tt-cart-total-title">{{ trans('general.sub_total') }}:</div>
        <div class="tt-cart-total-price">{{ getConvertedPrice(getCartNetTotal()) }} {{ $currency->symbol }}</div>
    </div>
    <div class="tt-cart-btn">
        <div class="tt-item">
            <a href="#" class="btn">{{ trans('general.proceed_to_checkout') }}</a>
        </div>
        <div class="tt-item">
            <a href="shopping_cart_02.html"
               class="btn-link-02 tt-hidden-mobile">{{ trans('general.view-cart') }}</a>
            <a href="shopping_cart_02.html"
               class="btn btn-border tt-hidden-desctope">{{ trans('general.view_cart') }}</a>
        </div>
    </div>
</div>