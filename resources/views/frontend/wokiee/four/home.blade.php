@extends('frontend.wokiee.four.layouts.app')

@section('body')
    @if(request()->has('mallr'))
        @include('frontend.wokiee.four.partials.slider')
    @endif
    @if(request()->has('evento'))
        @include('frontend.wokiee.four.partials._btns_home')
        @include('frontend.wokiee.four.partials._commercials_top', ['elements' => $topDoubleCommercials])
        @include('frontend.wokiee.four.partials._services_slider_hot_deal', ['elements' => $serviceHotDeals])
        @include('frontend.wokiee.four.partials._commercials_top', ['elements' => $bottomDoubleCommercials])
    @endif
    @if(request()->has('mallr'))
        @include('frontend.wokiee.four.partials._five_categories')
        @include('frontend.wokiee.four.partials._all_brands')
        @include('frontend.wokiee.four.partials._products_slider',['title' => trans('general.new_arrivals'), 'elements' => $newProducts])
        @include('frontend.wokiee.four.partials._horizontal_three_categories',['elements' => $tripleCommercials])
        @include('frontend.wokiee.four.partials._btn_info')
    @endif
    {{--@include('frontend.wokiee.four.partials._services_slider',['title' => trans('general.new_arrivals'), 'elements' => $newProducts])--}}

@endsection
