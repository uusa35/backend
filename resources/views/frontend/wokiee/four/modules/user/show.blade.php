@extends('frontend.wokiee.four.layouts.app')

@section('breadcrumbs')
    {{ Breadcrumbs::render('frontend.user.show',$element) }}
@endsection

@section('body')
    <div class="container-indent nomargin">
        <div class="container-fluid">
            <div class="row">
                <div class="tt-promo-fullwidth-02">
                    <img src="{{ $element->BgLargeLink }}" alt="{{ $element->description }}"
                         style="max-height : 300px; opacity: 0.5">
                    <div class="tt-description">
                        <div class="tt-description-wrapper">
                            <img src="{{ $element->imageThumbLink }}" alt="{{ $element->slug }}"
                                 class="img-responsive img-md">
                            <div class="tt-title-large"><span class="tt-base-color">{{ $element->slug }}</span></div>
                            <p>{{ $element->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--<div class="container-fluid-custom container-fluid-custom-mobile-padding">--}}
        <div class="container-indent">
            {{--<div class="container container-fluid-custom-mobile-padding">--}}
            <div class="container">
                <div class="row" style="padding-top: 20px;">
                    {{--<div class="col-md-4 col-lg-3 col-xl-3 leftColumn aside desctop-no-sidebar">--}}
                    <div class="col-md-4 col-lg-3 col-xl-3 leftColumn aside">
                        @include('frontend.wokiee.four.partials._search_side_bar')
                    </div>
                    <div class="col-md-9">
                        <div class="content-indent">
                            </br>
                            <div class="tt-filters-options desctop-no-sidebar">
                                <div class="tt-btn-toggle">
                                    <a href="#">{{ trans('general.filter') }}</a>
                                </div>
                                <div class="tt-sort">
                                    <select>
                                        <option value="" selected>{{ trans('general.sort_by') }}</option>
                                        <option value="Default Sorting">{{ trans('general.sort_by_alpha') }}</option>
                                        <option value="Default Sorting">{{ trans('general.sort_by_price_high_to_low') }}</option>
                                        <option value="Default Sorting">{{ trans('general.sort_by_price_low_to_high') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="tt-product-listing row">
                                @if($products->isNotEmpty())
                                    <div class="row">
                                        @foreach($products as $product)
                                            <div class="col-6 col-md-4 col-lg-4 tt-col-item">
                                                @include('frontend.wokiee.four.partials._product_widget',['element' => $product])
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                                @if($services->isNotEmpty())
                                    <div class="row">
                                        @foreach($services as $service)
                                            <div class="col-6 col-md-4 col-lg-3 tt-col-item">
                                                @include('frontend.wokiee.four.partials._service_widget',['element' => $service])
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="text-center tt_product_showmore">
                                <div class="col-lg-12">
                                    @include('frontend.wokiee.four.partials._pagination',['elements' => $products])
                                </div>
                                <a href="#" class="btn btn-border">LOAD MORE</a>
                                <div class="tt_item_all_js">
                                    <a href="#" class="btn btn-border01">NO MORE ITEM TO SHOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--</div>--}}
        {{--</div>--}}
    </div>
@endsection