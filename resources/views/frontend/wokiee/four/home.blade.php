@extends('frontend.wokiee.four.layouts.app')

@section('body')
    @if(env('APP_CASE') === 'mallr')
        @include('frontend.wokiee.four.partials.slider')
        @include('frontend.wokiee.four.partials._all_brands')
        @include('frontend.wokiee.four.partials._products_metro_collection',['element' => $homeCollection, 'title' => trans('general.our_selection_from_collections')])
        @include('frontend.wokiee.four.partials._users_slider',['title' => trans('general.our_designers'), 'elements' => $designers])
        @include('frontend.wokiee.four.partials._products_slider',['title' => trans('general.new_arrivals'), 'elements' => $newProducts])
        @include('frontend.wokiee.four.partials._five_categories',['elements' => $categoriesHome])
        @include('frontend.wokiee.four.partials._horizontal_three_categories',['elements' => $tipleCommercials])
        @include('frontend.wokiee.four.partials._products_slider_hot_deal', ['elements' => $productHotDeals,'items' => 3])
        @include('frontend.wokiee.four.partials._btn_info')
    @elseif(env('APP_CASE') === 'evento')
        @include('frontend.wokiee.four.partials._btns_home')
        @include('frontend.wokiee.four.partials._commercials_top', ['elements' => $topDoubleCommercials])
        @include('frontend.wokiee.four.partials._services_slider_sm', ['elements' => $serviceHotDeals, 'title' => trans('general.hot_deals')])
        @include('frontend.wokiee.four.partials._commercials_top', ['elements' => $bottomDoubleCommercials])
        @if(!session()->has('day_selected'))
            @include('frontend.wokiee.four.partials._search_modal_home_page')
        @endif
    @endif
    @include('frontend.wokiee.four.partials._country_modal')
@endsection
