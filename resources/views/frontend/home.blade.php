@extends('frontend.layouts.app')



@section('body')

    <!-- Slider -->
    @include('frontend.partials.slide')
    <!-- /PAGE -->

    @if($hotDeals->isNotEmpty())
        @include('frontend.partials._product_hot_deal_carousel_lg',['elements' => $hotDeals,'title' => trans('general.hot_deals')])
    @endif
    <!-- Categories On Sale -->
    @if($categoriesFeatured->isNotEmpty())
        @include('frontend.partials._categories_featured')
    @endif
    <!-- /PAGE -->

    <!-- PAGE -->
    @include('frontend.partials._btn_messages')
    <!-- /PAGE -->

    {{--Categories OnHome--}}
    @if($categoriesHome->isNotEmpty())
        @include('frontend.partials._categories_on_home_page')
    @endif

    <!-- Newest -->
    @if($newArrivals->isNotEmpty())
        @include('frontend.partials._product_carousel_lg', ['elements' => $newArrivals, 'title' => trans('general.new_arrival')])
    @endif
    <!-- /PAGE -->

    @include('frontend.partials._shipping_message')

    <!-- On Sales  -->
    @if($onSaleProducts->isNotEmpty())
        @include('frontend.partials._product_carousel_lg', ['elements' => $onSaleProducts , 'title' => trans('general.on_sale_products')])
    @endif
    <!-- /PAGE -->

    <!-- Best Sales  -->
    @if($bestSalesProducts->isNotEmpty())
        @include('frontend.partials._product_carousel_lg',['elements' => $bestSalesProducts, 'title' => trans('general.best_sale_products')])
    @endif

    @if($brands->isNotEmpty())
        @include('frontend.partials._brands_carousel',['bands' => $brands])
    @endif

    <!-- /PAGE -->

@endsection
