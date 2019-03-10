@extends('frontend.wokiee.four.layouts.app')

@section('breadcrumbs')
    {{ Breadcrumbs::render('frontend.product.show',$element) }}
@endsection

@section('body')
    <div class="container-indent">
        <!-- mobile product slider  -->
    @include('frontend.wokiee.four.partials._service_show_gallery_mobile')
    <!-- /mobile product slider  -->
        <div class="container  container-fluid-mobile">
            <div class="row">
                <div class="col-6 hidden-xs">
                    @include('frontend.wokiee.four.partials._service_show_gallery')
                </div>
                <div class="col-6">
                    <div class="tt-product-single-info">
                        @include('frontend.wokiee.four.partials._show_tags')
                        @include('frontend.wokiee.four.partials._show_page_item_title_description_and_prices')
                        @include('frontend.wokiee.four.partials._service_show_is_really_hot_element')

                        @if($element->canOrder)
                            <div class="tt-swatches-container">
                                <div class="tt-wrapper product-information-buttons">
                                    <a data-toggle="modal" data-target="#modalProductInfo" href="#">Size Guide</a>
                                    <a data-toggle="modal" data-target="#modalProductInfo-02" href="#">Shipping</a>
                                </div>
                                @if($element->sizes->isNotEmpty())
                                    @include('frontend.wokiee.four.partials._page_show_sizes',['sizes' => $element->sizes])
                                    @include('frontend.wokiee.four.partials._page_show_colors',['colors' => $element->colors,'hidden' => true])
                                @elseif($element->colors->isNotEmpty())
                                    @include('frontend.wokiee.four.partials._page_show_colors',['colors' => $element->colors,'hidden' => false])
                                @endif
                            </div>
                            @include('frontend.wokiee.four.partials._product_show_add_to_cart_btn')
                        @endif
                        @auth
                        <div class="tt-wrapper">
                            <ul class="tt-list-btn">
                                <li><a class="btn-link" href="#"><i class="icon-n-072"></i>{{ trans('general.add_to_wish_list') }}</a></li>
                                {{--<li><a class="btn-link" href="#"><i class="icon-n-08"></i>ADD TO COMPARE</a></li>--}}
                            </ul>
                        </div>
                        @endauth

                        <div class="tt-wrapper">
                            @include('frontend.wokiee.four.partials._product_show_information_widget')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.wokiee.four.partials._show_page_social_icons')
    @include('frontend.wokiee.four.partials._show_page_related_items',['elements' => $relatedItems])
    @include('frontend.wokiee.four.partials._modal_size_chart')
    @include('frontend.wokiee.four.partials._modal_page_show_video')
    @include('frontend.wokiee.four.partials._modal_page_show_shipment')
@endsection

