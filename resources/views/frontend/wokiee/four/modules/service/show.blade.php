@extends('frontend.wokiee.four.layouts.app')

@section('breadcrumbs')
    {{ Breadcrumbs::render('frontend.service.show', $element) }}
@endsection

@section('body')
    <div class="container-indent">
        <!-- mobile product slider  -->
    @include('frontend.wokiee.four.partials._service_show_gallery_mobile')
    <!-- /mobile product slider  -->
        <div class="container  container-fluid-mobile">
            <div class="row">
                @include('frontend.wokiee.four.partials._service_show_gallery')
                <div class="col-6">
                    <div class="tt-product-single-info">
                        <h1 class="tt-title tt-title-border">{{ $element->name }}</h1>
                        <div class="tt-price tt-title-border">
                            @if($element->isOnSale)
                                <span class="new-price">{{ $element->convertedSalePrice}}
                                    {{ $currency->symbol }}</span>
                                <span class="old-price">{{ $element->convertedPrice }}
                                    {{ $currency->symbol }}</span>
                            @else
                                <span class="new-price">{{ $element->convertedPrice }}
                                    {{ $currency->symbol }}</span>
                            @endif
                        </div>
                        <div class="tt-wrapper">
                            {{ $element->description }}
                        </div>
                        @if($element->isReallyHot)
                            <div class="d-flex justify-content-center">
                                <div class="tt-wrapper" style="margin-right : auto; margin-left: auto;">
                                    <div class="tt-countdown_box_02">
                                        <div class="tt-countdown_inner">
                                            <div class="tt-countdown"
                                                 data-date="{{ $element->end_sale->format('Y-m-d') }}"
                                                 data-year="{{ trans('general.years') }}"
                                                 data-month="{{ trans('general.months') }}"
                                                 data-week="{{ trans('general.weeks') }}"
                                                 data-day="{{ trans('general.day') }}"
                                                 data-hour="{{ trans('general.hours') }}"
                                                 data-minute="{{ trans('general.minute') }}"
                                                 data-second="{{ trans('general.second') }}"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="tt-wrapper">
                            <div class="tt-row-custom-01">
                                <div class="col-item">
                                    <div class="tt-input-counter style-01">
                                        <span class="minus-btn"></span>
                                        <input type="text" value="1" size="5"/>
                                        <span class="plus-btn"></span>
                                    </div>
                                </div>
                                <div class="col-item">
                                    <a href="#" class="btn btn-lg"><i class="icon-f-39"></i>ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                        <div class="tt-wrapper">
                            <ul class="tt-list-btn">
                                <li><a class="btn-link" href="#"><i class="icon-n-072"></i>ADD TO WISH LIST</a></li>
                                <li><a class="btn-link" href="#"><i class="icon-n-08"></i>ADD TO COMPARE</a></li>
                            </ul>
                        </div>
                        <div class="tt-add-info">
                            <ul>
                                <li><span>{{ trans('general.sku') }}:</span> {{ $element->sku }}</li>
                                <li><span>{{ trans('general.notes') }}:</span> {{ $element->notes }}</li>
                            </ul>
                        </div>
                        @include('frontend.wokiee.four.partials._service_show_information_widget')
                        <div class="tt-wrapper">
                            <div class="tt-add-info">
                                <ul>
                                    <li><span><i class="fa fa-fw fa-bookmark"></i> Vendor:</span> Polo</li>
                                    <li><span><i class="fa fa-fw fa-book"></i> Vendor:</span> Polo</li>
                                    <li><span><i class="fa fa-fw fa-bullseye"></i> Vendor:</span> Polo</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="tt-collapse-block">
                        @if(!is_null($element->timings))
                            <div class="tt-item active">
                                <div class="tt-collapse-title">{{ trans('general.duty_timings') }}</div>
                                <div class="tt-collapse-content">
                                    @include('frontend.wokiee.four.partials._service_timings_table',['elements' => $element->timings])

                                </div>
                            </div>
                        @endif
                        <div class="tt-item">
                            <div class="tt-collapse-title">{{ trans('general.more_information') }}</div>
                            <div class="tt-collapse-content">
                                <div class="col-sm-12 col-md-6">
                                    @include('frontend.wokiee.four.partials._service_more_information')
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="container-indent wrapper-social-icon">--}}
    {{--<div class="container">--}}
    {{--<ul class="tt-social-icon justify-content-center">--}}
    {{--<li><a class="icon-g-64" href="http://www.facebook.com/"></a></li>--}}
    {{--<li><a class="icon-h-58" href="http://www.facebook.com/"></a></li>--}}
    {{--<li><a class="icon-g-66" href="http://www.twitter.com/"></a></li>--}}
    {{--<li><a class="icon-g-67" href="http://www.google.com/"></a></li>--}}
    {{--<li><a class="icon-g-70" href="https://instagram.com/"></a></li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}

@endsection