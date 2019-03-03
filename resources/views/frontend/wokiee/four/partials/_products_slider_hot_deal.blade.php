<div class="container-indent">
    <div class="container container-fluid-custom-mobile-padding">
        <div class="tt-block-title">
            <h2 class="tt-title">{{ trans('general.hot_deal_products') }}</h2>
            <div class="tt-description">{{ trans('message.hot_deal_products') }}</div>
        </div>
        <div class="tt-carousel-products row arrow-location-tab arrow-location-tab01 tt-alignment-img tt-layout-product-item slick-animated-show-js"
             data-item='3'>
            @foreach($productHotDeals as $element)
                <div class="col-2 col-md-4 col-lg-3">
                    @include('frontend.wokiee.four.partials._product_widget',['element' => $element])
                </div>
            @endforeach
        </div>
    </div>
</div>