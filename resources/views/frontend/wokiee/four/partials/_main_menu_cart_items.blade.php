<div class="tt-cart-content">
    <div class="tt-cart-list">
        @foreach(Cart::content() as $element)
            <div class="tt-item">
                @if($element->options->type === 'service')
                    <a href="{{ route('frontend.service.show', $element->options->element_id) }}">
                        <div class="tt-item-img">
                            <img src="{{ asset(env('IMG_LOADER')) }}"
                                 data-src="{{ $element->options->element->imageThumbLink}}" alt="">
                        </div>
                        <div class="tt-item-descriptions">
                            <h2 class="tt-title">{{ $element->name }}</h2>
                            <ul class="tt-add-info">
                                <li>{{ trans('general.day_selected') }}
                                    : {{ $element->options->day_selected->format('d/m/Y') }}</li>
                                <li>{{ trans('general.company_name') }}: {{ $element->options->company }}</li>
                                <li>{{ trans('general.start_time') }}: {{ $element->options->timing->start_time }}</li>
                            </ul>
                            <div class="tt-price">{{ getConvertedPrice($element->price) }} {{ $currency->symbol }}</div>
                        </div>
                        @else
                            <div class="tt-item-img">
                                <img src="{{ asset(env('IMG_LOADER'))}}"
                                     data-src="{{ $element->options->element->imageThumbLink}}" alt="">
                            </div>
                            <div class="tt-item-descriptions">
                                <h2 class="tt-title">{{ $element->name }}</h2>
                                <ul class="tt-add-info">
                                    <li>{{ trans('general.qty') }} : {{ $element->qty }}</li>
                                    <li>{{ trans('general.company_name') }}: {{ $element->options->company }}</li>
                                    @if($element->options->color)
                                        <li>{{ trans('general.color') }}: {{ $element->options->color->name}}</li>
                                    @endif
                                    @if($element->options->size)
                                        <li>{{ trans('general.size') }}: {{ $element->options->size->name}}</li>
                                    @endif
                                </ul>
                                <div class="tt-price">{{ getConvertedPrice($element->price) }} {{ $currency->symbol }}</div>
                            </div>
                    </a>
                @endif
                <div class="tt-item-close">
                    <a href="{{ route('frontend.cart.remove',$element->rowId) }}" class="tt-btn-close"></a>
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
            <a href="{{ route('frontend.cart.index') }}" class="btn">{{ trans('general.proceed_to_checkout') }}</a>
        </div>
    </div>
</div>