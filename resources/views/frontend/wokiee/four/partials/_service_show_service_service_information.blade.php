<div class="tt-product-single-info">
    <h1 class="tt-title tt-title-border">{{ $element->name }}
    </h1>
    <div class="tt-price tt-title-border">
        @if($element->isOnSale)
            <span class="new-price">{{ $element->convertedSalePrice}}
                {{ $currency->symbol }}</span>
            <span class="old-price">{{ $element->convertedPrice }}
                {{ $currency->symbol }}</span>
        @else
            <span class="new-price">{{ $element->convertedPrice }}
                {{ $currency->symbol }}</span>
        @endif
    </div>
    <div class="tt-wrapper">
        {{ $element->description }}
    </div>
    @include('frontend.wokiee.four.partials._service_show_is_really_hot_element')
    {{-- Choose Date & Time --}}
    @include('frontend.wokiee.four.partials._service_show_service_choose_date')
    <div class="tt-wrapper">
        <div class="tt-row-custom-01">
            <div class="col">
                <form action="{{ route('frontend.cart.add') }}" method="post" class="col-12">
                    @csrf
                    <input type="hidden" name="service_id" id="time-selected"
                           value="{{ $element->id }}">
                    <input type="hidden" name="time_id" id="time-selected" value="">
                    <input type="hidden" name="type" value="service">
                    <button type="submit" class="btn btn-lg" disabled="disabled"><i
                                class="icon-f-39"></i>{{ trans('general.add_to_cart') }}</button>
                </form>
            </div>
        </div>
    </div>
    <div class="tt-wrapper">
        <div class="tt-row-custom-01">
            <div class="col">
                {{--<h5 id="service-chosen-title">here</h5>--}}
            </div>
        </div>
    </div>
    {{-- After Add To Cart Button--}}
    @include('frontend.wokiee.four.partials._service_show_information_widget')
</div>