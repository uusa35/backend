@extends('frontend.wokiee.four.layouts.app')

@section('body')
    @include('frontend.wokiee.four.partials.slider')
    @include('frontend.wokiee.four.partials._all_brands', ['elements' => $brands])

    @include('frontend.wokiee.four.partials.category._categories_slider_full_width', ['title' => trans('general.categories'), 'elements' => $homeCategoriesProduct])
{{--    @include('frontend.wokiee.four.partials.category._categories_slider_full_width', ['title' => trans('general.company_categories'), 'elements' => $categoriesHome])--}}
{{--    @include('frontend.wokiee.four.partials._products_metro_collection',['element' => $bestSaleCollections->first(), 'title' => trans('general.our_selection_from_collections')])--}}
{{--    @include('frontend.wokiee.four.partials._products_slider_collections',['groupOne' => $newProducts, 'groupTwo' => $onSaleProducts, 'groupThree' => $newProducts, 'title' => trans('general.offers'), 'items' => 3])--}}
{{--    @include('frontend.wokiee.four.partials._collection_slider_with_cover',['title' => trans('general.our_selection_from_collections'), 'elements' => $bestSaleCollections])--}}
{{--    @include('frontend.wokiee.four.partials._users_slider',['title' => trans('general.our_personal_shoppers'), 'elements' => $designers])--}}
{{--    @include('frontend.wokiee.four.partials.category._categories_slider_full_width', ['elements' => $homeCategoriesProduct, 'title' => trans('general.company_categories'), 'type' => 'user'])--}}
    @include('frontend.wokiee.four.partials.category._categories_slider', ['elements' => $homeCategoriesMarket, 'title' => trans('general.market_categories'), 'type' => 'user','isGray' => true ])
    @include('frontend.wokiee.four.partials._users_slider',['title' => trans('general.small_business'), 'elements' => $designers, 'isGray' => true])
    @include('frontend.wokiee.four.partials.category._categories_slider', ['elements' => $homeCategoriesUser, 'title' => trans('general.company_categories'), 'type' => 'user','isGray' => true ])

    @include('frontend.wokiee.four.partials._users_slider',['title' => trans('general.some_companies'), 'elements' => $companies])

    @include('frontend.wokiee.four.partials.category._categories_slider', ['elements' => $homeCategoriesProduct, 'title' => trans('general.product_categories'), 'type' => 'product'])
    @include('frontend.wokiee.four.partials._products_slider',['title' => trans('general.chosen_products'), 'elements' => $newProducts,'isGray' => true])

    @include('frontend.wokiee.four.partials._products_slider',['title' => trans('general.new_arrivals'), 'elements' => $latestProducts,'isGray' => true])
    @include('frontend.wokiee.four.partials._products_slider',['title' => trans('general.on_sale_products'), 'elements' => $onSaleProducts])
    <div class="container-indent">
        <div class="container">
            <div class="row tt-layout-promo-box">
                <div class="col-md-6">
                    <a href="listing-left-column.html" class="tt-promo-box tt-one-child">
                        <img src="images/loader.svg" data-src="images/promo/index04-promo-img-05.jpg" alt="">
                        <div class="tt-description">
                            <div class="tt-description-wrapper">
                                <div class="tt-background"></div>
                                <div class="tt-title-small">NEW IN:</div>
                                <div class="tt-title-large">CLOTHING</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="listing-left-column.html" class="tt-promo-box tt-one-child">
                        <img src="images/loader.svg" data-src="images/promo/index04-promo-img-06.jpg" alt="">
                        <div class="tt-description">
                            <div class="tt-description-wrapper">
                                <div class="tt-background"></div>
                                <div class="tt-title-small">CLEARANCE SALES</div>
                                <div class="tt-title-large">GET UP TO <span class="tt-base-color">20% OFF</span></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
{{--    @if(isset($categoriesHome) && $categoriesHome->isNotEmpty())--}}
{{--        @include('frontend.wokiee.four.partials._five_categories',['elements' => $categoriesHome])--}}
{{--    @endif--}}
    {{--        @if(isset($tripleCommercials) && $tripleCommercials->isNotEmpty())--}}
    {{--            @include('frontend.wokiee.four.partials._horizontal_three_categories',['elements' => $tripleCommercials])--}}
    {{--        @endif--}}
{{--    @include('frontend.wokiee.four.partials._products_slider_hot_deal', ['elements' => $productHotDeals,'items' => 3])--}}
    @include('frontend.wokiee.four.partials._btn_info', ['isGray' => true])
    @include('frontend.wokiee.four.partials._country_modal')
@endsection
