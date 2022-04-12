<div class="tt-description text-center">
{{--    @if(!env('ISTORES'))--}}
        <div class="tt-row">
            <ul class="tt-add-info">
                <li>
                    <a href="{{ route('frontend.category.show',$element->id) }}"
                       style="font-size: large; font-weight: bolder;">{{ str_limit($element->name,60,'..') }}</a>
                </li>
            </ul>
            {{--@include('frontend.wokiee.four.partials._rating')--}}
        </div>
{{--        @if($element->caption && !env('EVENTKM'))--}}
{{--            <h2 class="tt-title">--}}
{{--                <a href="{{ route('frontend.category.show',$element->id) }}">{{ str_limit($element->caption,35,'..') }}</a>--}}
{{--            </h2>--}}
{{--        @endif--}}
{{--    @endif--}}
    {{--    @include('frontend.wokiee.four.partials._widget_price_and_color')--}}
    <div class="tt-product-inside-hover text-center">

        <div class="tt-row-btn">
            @if($type === 'service')
                <a href="{{ route('frontend.service.search', ['service_category_id' => $element->id]) }}"
                   class="btn btn-small"
                >
                    {{ $element->name }}
                </a>
            @elseif($type === 'user')
                <a href="{{ route('frontend.user.search', ['user_category_id' => $element->id]) }}"
                   class="btn btn-small"
                   @if(env('ISTORES'))
                   style="background-color: transparent !important; color : black !important; display : none"
                    @endif
                >
                    {{ $element->name }}
                </a>
            @else
                <a href="{{ route('frontend.product.search', ['product_category_id' => $element->id]) }}"
                   class="btn btn-small"
                >
                    {{ $element->name }}
                </a>
            @endif
            @if(isset($isUsers) && $isUsers)
                <a href="{{ route('frontend.service.search', ['user_id' => $element->id]) }}"
                   class="btn btn-small">{{ trans('general.view_services') }}</a>
            @elseif(!env('EVENTKM') && !env("ISTORES"))
                <a href="{{ route('frontend.service.search', ['service_category_id' => $element->id]) }}"
                   class="btn btn-small">{{ trans('general.view_companies') }}</a>
                {{--                <a href="{{ route('frontend.category.show', $element->id) }}"--}}
                {{--                   class="btn btn-small">{{ trans('general.view_companies') }}</a>--}}
            @endif
        </div>
{{--        <div class="tt-row-btn">--}}
            {{--            @include('frontend.wokiee.four.partials._quick_view_product_btn')--}}
            {{--            @auth--}}
            {{--                <a href="#" class="tt-btn-wishlist"></a>--}}
            {{--            @endauth--}}
            {{--<a href="#" class="tt-btn-compare"></a>--}}
{{--        </div>--}}
    </div>
</div>
