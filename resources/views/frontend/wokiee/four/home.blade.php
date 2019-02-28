@extends('frontend.wokiee.four.layouts.app')

@section('body')
    @include('frontend.wokiee.four.partials.slider')
    <div class="row">
        <div class="col">
        </div>
        <div class="col-6" style="padding: 50px;">
            <a href="http://google.com"
               class="btn btn-secondary btn-xl btn-block">{{ trans('general.create_new_event') }}</a>
        </div>
        <div class="col">
        </div>
    </div>
    @include('frontend.wokiee.four.partials._ads_top')
    {{--    @include('frontend.wokiee.four.partials._five_categories')--}}
    {{--    @include('frontend.wokiee.four.partials._all_children_for_category')--}}
    {{--    @include('frontend.wokiee.four.partials._all_slider_products_for_one_parent_category')--}}
    {{--    @include('frontend.wokiee.four.partials._all_brands')--}}
    @include('frontend.wokiee.four.partials._products_slider',['title' => trans('general.new_arrivals'), 'elements' => $newArrivals])
    @include('frontend.wokiee.four.partials._ads_top')
    @include('frontend.wokiee.four.partials._products_slider_hot_deal')
    @include('frontend.wokiee.four.partials._horizontal_three_categories')
    @include('frontend.wokiee.four.partials._btn_info')
@endsection
