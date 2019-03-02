<div class="container-indent">
    {{--<div class="row">--}}
    {{--<div class="col-lg-2 text-block">--}}
    {{--<img src="http://placehold.it/300x580?text=ads" alt="" class="img-responsive text-center">--}}
    {{--</div>--}}
    {{--<div class="col-lg-8">--}}
    <div class="container container-fluid-custom-mobile-padding">
        @if($title)
            <div class="tt-block-title">
                <h1 class="tt-title">أحدث الخدمات المختارة</h1>
                <div class="tt-description">تابع احدث الخدمات المختارة من الشركات المختلفة المشاركة معنا</div>
            </div>
        @endif
        <div class="tt-carousel-products row arrow-location-tab arrow-location-tab01 tt-alignment-img tt-layout-product-item slick-animated-show-js">
            @foreach($elements as $element)
                <div class="col-2 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal"
                               data-target="#ModalquickView"
                               data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist"
                               data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare"
                               data-tposition="left"></a>
                            <a href="product.html">
                                        <span class="tt-img"><img src="{{ asset(env('THUMBNAIL').$element->image) }}"
                                                                  alt="{{ $element->description }}"></span>
                                <span class="tt-img-roll-over"><img
                                            src="{{ asset(env('THUMBNAIL').$element->images->first()->image) }}"
                                            alt=""></span>
                                <span class="tt-label-location">
                                    @if($element->on_new)
                                        <span class="tt-label-new">{{ trans('general.new') }}</span>
                                    @endif
                                    @if($element->isOnSale)
                                        <span class="tt-label-salex">{{ trans('general.on_sale') }}</span>
                                    @endif
								</span>
                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li>
                                        <a href="{{ route('frontend.product.search',['user_id' => $element->user_id ]) }}">{{ $element->user->name }}</a>
                                    </li>
                                </ul>
                                {{--<div class="tt-rating">--}}
                                {{--<i class="icon-star"></i>--}}
                                {{--<i class="icon-star"></i>--}}
                                {{--<i class="icon-star"></i>--}}
                                {{--<i class="icon-star"></i>--}}
                                {{--<i class="icon-star"></i>--}}
                                {{--</div>--}}
                            </div>
                            <h2 class="tt-title"><a href="product.html">{{ $element->name }}</a></h2>
                            <div class="tt-price">
                                @if($element->isOnSale)
                                    <span class="new-price">{{ $element->convertedSalePrice}}
                                        <span>{{ $currency->symbol }}</span>
                                    <span class="old-price">{{ $element->convertedPrice }}
                                        <span>{{ $currency->symbol }}</span>
                                        @else
                                            <span class="new-price">{{ $element->convertedPrice }}
                                                <span>{{ $currency->symbol }}</span>
                                @endif
                            </div>
                            @if($element->has_attributes)
                                <div class="tt-option-block">
                                    <ul class="tt-options-swatch">
                                        @if($element->colors->isNotEmpty())
                                            @foreach($element->colors as $color)
                                                <li><a class="options-color"
                                                       style="background-color: {{ $color->code }}"
                                                       href="#"></a></li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            @endif
                            <div class="tt-product-inside-hover">
                                {{--<div class="tt-row-btn">--}}
                                {{--<a href="{{ route('frontend.product.show', $element->id) }}"--}}
                                {{--class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal"--}}
                                {{--data-target="#modalAddToCartProduct">{{ trans('general.view') }}</a>--}}
                                {{--</div>--}}
                                <div class="tt-row-btn">
                                    <a href="{{ route('frontend.product.show', $element->id) }}"
                                       class="tt-btn-addtocart thumbprod-button-bg">{{ trans('general.view') }}</a>
                                </div>
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-quickview" data-toggle="modal"
                                       data-target="#ModalquickView"></a>
                                    <a href="#" class="tt-btn-wishlist"></a>
                                    <a href="#" class="tt-btn-compare"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{--</div>--}}
    {{--<div class="col-lg-2 text-block">--}}
    {{--<img src="http://placehold.it/320x580?text=ads" alt="" class="img-responsive text-center">--}}
    {{--</div>--}}
    {{--</div>--}}
</div>