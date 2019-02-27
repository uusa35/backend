@extends('frontend.wokiee.four.layouts.app')

@section('body')
    @include('frontend.wokiee.four.partials.slider')
{{--    @include('frontend.wokiee.four.partials._five_categories')--}}
{{--    @include('frontend.wokiee.four.partials._all_children_for_category')--}}
{{--    @include('frontend.wokiee.four.partials._all_slider_products_for_one_parent_category')--}}
    @include('frontend.wokiee.four.partials._all_brands')
    @include('frontend.wokiee.four.partials._products_slider',['title' => trans('general.new_arrivals'), 'elements' => $newArrivals])
    @include('frontend.wokiee.four.partials._tow_main_categories')
    @include('frontend.wokiee.four.partials._products_slider_hot_deal')
    @include('frontend.wokiee.four.partials._horizontal_three_categories')
    @include('frontend.wokiee.four.partials._btn_info')
@endsection
