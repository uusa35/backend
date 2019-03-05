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
                        <h1 class="tt-title tt-title-border">{{ $element->name }}
                        </h1>
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
                        @include('frontend.wokiee.four.partials._service_show_is_really_hot_element')
                        @include('frontend.wokiee.four.partials._service_show_service_choose_date')
                        <div class="tt-wrapper">
                            <div class="tt-row-custom-01">
                                <form action="{{ route('frontend.cart.add') }}" method="post" class="col-12">
                                    @csrf
                                    <input type="hidden" name="service_id" id="time-selected" value="{{ $element->id }}">
                                    <input type="hidden" name="time_id" id="time-selected" value="">
                                    <input type="hidden" name="type" value="service">
                                    <button type="submit" class="btn btn-lg" disabled="disabled"><i
                                                class="icon-f-39"></i>{{ trans('general.add_to_cart') }}</button>
                                </form>
                            </div>
                        </div>
                        {{-- After Add To Cart Button--}}
                        @include('frontend.wokiee.four.partials._service_show_information_widget')
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
                        <div class="tt-item active">
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

@section('scripts')
    @parent
    @include('frontend.wokiee.four.partials._service_show_js')
@endsection