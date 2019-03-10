<div class="container-indent">
    <div class="container container-fluid-custom-mobile-padding">
        <div class="tt-block-title text-left">
            <h3 class="tt-title-small">{{ trans('general.related_products') }}</h3>
        </div>
        <div class="tt-carousel-products row arrow-location-right-top tt-alignment-img tt-layout-product-item slick-animated-show-js">
            @foreach($elements as $product)
                <div class="col-lg-3">
                    @include('frontend.wokiee.four.partials._product_widget',['element' => $product])
                </div>
            @endforeach
        </div>
    </div>
</div>