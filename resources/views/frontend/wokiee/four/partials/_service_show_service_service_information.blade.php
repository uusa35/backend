<div class="tt-product-single-info">
    <div class="tt-wrapper">
        <div class="tt-label">
            @if($element->on_new)
                <div class="tt-label-new">{{ trans('general.new') }}</div>
            @endif
            @if($element->isOnSale)
                <div class="tt-label tt-label-sale">{{ trans('general.on_sale') }}</div>
            @endif
            @if($element->is_featured)
                <div class="tt-label tt-label-our-fatured">{{ trans('general.featured') }}</div>
            @endif
        </div>
    </div>
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

    <div class="tt-wrapper service_alert d-none">
        <div class="tt-row-custom-01">
            <div class="col">
                <div class="card text-center">
                    <div class="card-header">
                        {{ trans('general.choosen_service') }}
                    </div>
                    <div class="card-body">
                        <h5 id="service-chosen-title"></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tt-wrapper service_alert d-none">
        <div class="tt-row-custom-01">
            <div class="col">
                <form action="{{ route('frontend.cart.add.service') }}" method="post" class="col-12">
                    @csrf
                    <input type="hidden" name="service_id" id="service_id"
                           value="{{ $element->id }}">
                    <input type="hidden" name="timing_id" id="timing_id" value="">
                    <input type="hidden" name="user_id" value="{{ $element->user_id }}">
                    <input type="hidden" name="day_selected" id="day_selected" value="">
                    <input type="hidden" name="day_selected_format" id="day_selected_format" value="">
                    <input type="hidden" name="type" value="service">
                    <button type="submit" class="btn btn-lg cart-btn disabled"><i
                                class="icon-f-39"></i>{{ trans('general.add_to_cart') }}</button>
                </form>
            </div>
        </div>
    </div>
    {{-- After Add To Cart Button--}}
    @include('frontend.wokiee.four.partials._service_show_information_widget')
</div>