@extends('frontend.wokiee.four.layouts.app')

@section('breadcrumbs')
    {{ Breadcrumbs::render('frontend.service.show', $element) }}
@endsection

@section('body')
    <div class="container-indent">
        <!-- mobile product slider  -->
        <div class="tt-mobile-product-layout visible-xs">
            <div class="tt-mobile-product-slider arrow-location-center slick-animated-show-js">
                <div><img src="{{ $element->imageLinkLarge }}" alt=""></div>
                @foreach($element->images as $img)
                    <div><img src="{{ $img->imageLargeLink}}" alt=""></div>
                @endforeach
                @if($element->video_url)
                    <div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{ $element->video_url }}"
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                @endif
                {{--<div>--}}
                {{--<div class="tt-video-block">--}}
                {{--<a href="#" class="link-video"></a>--}}
                {{--<video class="movie" src="video/video.mp4" poster="video/video_img.jpg"></video>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
        <!-- /mobile product slider  -->
        <div class="container  container-fluid-mobile">
            <div class="row">
                <div class="col-6 hidden-xs">
                    <div class="tt-product-single-img">
                        <div>
                            <button class="tt-btn-zomm tt-top-right"><i class="icon-f-86"></i></button>
                            <img class="zoom-product" src='{{ $element->imageLargeLink }}'
                                 data-zoom-image="{{ $element->imageLargeLink }}" alt="">
                        </div>
                    </div>
                    <div class="product-images-carousel">
                        <ul id="smallGallery" class="arrow-location-02  slick-animated-show-js">
                            <li>
                                <a class="zoomGalleryActive" href="#" data-image="{{ $element->imageThumbLink }}"
                                   data-zoom-image="{{ $element->imageLargeLink }}"><img
                                            src="{{ $element->imageLargeLink }}" alt=""/></a></li>
                            @foreach($element->images as $img)
                                <li>
                                    <a href="#" data-image="{{ $img->imageThumbLink }}"
                                       data-zoom-image="{{ $img->imageLargeLink }}"><img
                                                src="{{ $img->imageLargeLink }}" alt=""/></a></li>
                            @endforeach
                            @if($element->video_url)
                                <li>
                                    <div class="video-link-product" data-toggle="modal" data-type="youtube"
                                         data-target="#modalVideoProduct"
                                         data-value="http://www.youtube.com/embed/GhyKqj_P2E4">
                                        <img src="{{ $element->imageThumbLink }}" alt="{{ $element->name }}"/>
                                        <div>
                                            <i class="icon-f-32"></i>
                                        </div>
                                    </div>
                                </li>
                            @endif
                            {{--<li>--}}
                            {{--<div class="video-link-product" data-toggle="modal" data-type="video"--}}
                            {{--data-target="#modalVideoProduct" data-value="video/video.mp4"--}}
                            {{--data-poster="video/video_img.jpg">--}}
                            {{--<img src="{{ $element->imageThumbLink }}" alt="{{ $element->name }}"/>--}}
                            {{--<div>--}}
                            {{--<i class="icon-f-32"></i>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</li>--}}
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="tt-product-single-info">
                        <div class="tt-add-info">
                            <ul>
                                <li><span>{{ trans('general.sku') }}:</span> {{ $element->sku }}</li>
                            </ul>
                        </div>
                        <h1 class="tt-title">{{ $element->name }}</h1>
                        <div class="tt-price">
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
                            <div class="tt-wrapper">
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
                        <div class="tt-wrapper">
                            <div class="tt-add-info">
                                <ul>
                                    <li><span>Vendor:</span> Polo</li>
                                    <li><span>Product Type:</span> T-Shirt</li>
                                    <li><span>Tag:</span> <a href="#">T-Shirt</a>, <a href="#">Women</a>, <a href="#">Top</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tt-collapse-block">
                            <div class="tt-item active">
                                <div class="tt-collapse-title">DESCRIPTION</div>
                                <div class="tt-collapse-content">
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum.
                                </div>
                            </div>
                            <div class="tt-item">
                                <div class="tt-collapse-title">ADDITIONAL INFORMATION</div>
                                <div class="tt-collapse-content">
                                    <table class="tt-table-03">
                                        <tbody>
                                        <tr>
                                            <td>Color:</td>
                                            <td>Blue, Purple, White</td>
                                        </tr>
                                        <tr>
                                            <td>Size:</td>
                                            <td>20, 24</td>
                                        </tr>
                                        <tr>
                                            <td>Material:</td>
                                            <td>100% Polyester</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tt-item">
                                <div class="tt-collapse-title">REVIEWS (3)</div>
                                <div class="tt-collapse-content">
                                    <div class="tt-review-block">
                                        <div class="tt-row-custom-02">
                                            <div class="col-item">
                                                <h2 class="tt-title">
                                                    1 REVIEW FOR VARIABLE PRODUCT
                                                </h2>
                                            </div>
                                            <div class="col-item">
                                                <a href="#">Write a review</a>
                                            </div>
                                        </div>
                                        <div class="tt-review-comments">
                                            <div class="tt-item">
                                                <div class="tt-avatar">
                                                    <a href="#"><img
                                                                src="images/product/single/review-comments-img-01.jpg"
                                                                alt=""></a>
                                                </div>
                                                <div class="tt-content">
                                                    <div class="tt-rating">
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star-half"></i>
                                                        <i class="icon-star-empty"></i>
                                                    </div>
                                                    <div class="tt-comments-info">
                                                        <span class="username">by <span>ADRIAN</span></span>
                                                        <span class="time">on January 14, 2017</span>
                                                    </div>
                                                    <div class="tt-comments-title">Very Good!</div>
                                                    <p>
                                                        Ctetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                                        labore et dolore magna aliqua. Ut enim ad minim.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="tt-item">
                                                <div class="tt-avatar">
                                                    <a href="#"><img
                                                                src="images/product/single/review-comments-img-02.jpg"
                                                                alt=""></a>
                                                </div>
                                                <div class="tt-content">
                                                    <div class="tt-rating">
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star-half"></i>
                                                        <i class="icon-star-empty"></i>
                                                    </div>
                                                    <div class="tt-comments-info">
                                                        <span class="username">by <span>JESICA</span></span>
                                                        <span class="time">on January 14, 2017</span>
                                                    </div>
                                                    <div class="tt-comments-title">Bad!</div>
                                                    <p>
                                                        Sed do eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="tt-item">
                                                <div class="tt-avatar">
                                                    <a href="#"></a>
                                                </div>
                                                <div class="tt-content">
                                                    <div class="tt-rating">
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star-half"></i>
                                                        <i class="icon-star-empty"></i>
                                                    </div>
                                                    <div class="tt-comments-info">
                                                        <span class="username">by <span>ADAM</span></span>
                                                        <span class="time">on January 14, 2017</span>
                                                    </div>
                                                    <div class="tt-comments-title">Very Good!</div>
                                                    <p>
                                                        Diusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tt-review-form">
                                            <div class="tt-message-info">
                                                BE THE FIRST TO REVIEW
                                                <span>“BLOUSE WITH SHEER &AMP; SOLID PANELS”</span>
                                            </div>
                                            <p>Your email address will not be published. Required fields are marked
                                                *</p>
                                            <div class="tt-rating-indicator">
                                                <div class="tt-title">
                                                    YOUR RATING *
                                                </div>
                                                <div class="tt-rating">
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star-half"></i>
                                                    <i class="icon-star-empty"></i>
                                                </div>
                                            </div>
                                            <form class="form-default">
                                                <div class="form-group">
                                                    <label for="inputName" class="control-label">YOUR NAME *</label>
                                                    <input type="email" class="form-control" id="inputName"
                                                           placeholder="Enter your name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail" class="control-label">COUPONE E-MAIL
                                                        *</label>
                                                    <input type="password" class="form-control" id="inputEmail"
                                                           placeholder="Enter your e-mail">
                                                </div>
                                                <div class="form-group">
                                                    <label for="textarea" class="control-label">YOUR REVIEW *</label>
                                                    <textarea class="form-control" id="textarea"
                                                              placeholder="Enter your review" rows="8"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn">SUBMIT</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-indent wrapper-social-icon">
        <div class="container">
            <ul class="tt-social-icon justify-content-center">
                <li><a class="icon-g-64" href="http://www.facebook.com/"></a></li>
                <li><a class="icon-h-58" href="http://www.facebook.com/"></a></li>
                <li><a class="icon-g-66" href="http://www.twitter.com/"></a></li>
                <li><a class="icon-g-67" href="http://www.google.com/"></a></li>
                <li><a class="icon-g-70" href="https://instagram.com/"></a></li>
            </ul>
        </div>
    </div>
    <div class="container-indent">
        <div class="container container-fluid-custom-mobile-padding">
            <div class="tt-block-title text-left">
                <h3 class="tt-title-small">RELATED PRODUCT</h3>
            </div>
            <div class="tt-carousel-products row arrow-location-right-top tt-alignment-img tt-layout-product-item slick-animated-show-js">
                <div class="col-2 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"
                               data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist"
                               data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="images/product/product-16.jpg" alt=""></span>
                                <span class="tt-img-roll-over"><img src="images/product/product-16-02.jpg"
                                                                    alt=""></span>
                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $24
                            </div>
                            <div class="tt-product-inside-hover">
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal"
                                       data-target="#modalAddToCartProduct">ADD TO CART</a>
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
                <div class="col-2 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"
                               data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist"
                               data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="images/product/product-17.jpg" alt=""></span>
                                <span class="tt-img-roll-over"><img src="images/product/product-17-01.jpg"
                                                                    alt=""></span>
                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                                <div class="tt-rating">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-half"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $8
                            </div>
                            <div class="tt-product-inside-hover">
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal"
                                       data-target="#modalAddToCartProduct">ADD TO CART</a>
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
                <div class="col-2 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"
                               data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist"
                               data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="images/product/product-18.jpg" alt=""></span>
                                <span class="tt-img-roll-over"><img src="images/product/product-18-02.jpg"
                                                                    alt=""></span>
                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $46
                            </div>
                            <div class="tt-option-block">
                                <ul class="tt-options-swatch">
                                    <li><a class="options-color tt-color-bg-01" href="#"></a></li>
                                    <li><a class="options-color tt-color-bg-02" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="tt-product-inside-hover">
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal"
                                       data-target="#modalAddToCartProduct">ADD TO CART</a>
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
                <div class="col-2 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"
                               data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist"
                               data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="images/product/product-19.jpg" alt=""></span>
                                <span class="tt-img-roll-over"><img src="images/product/product-19-02.jpg"
                                                                    alt=""></span>
                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                                <div class="tt-rating">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </div>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $35
                            </div>
                            <div class="tt-product-inside-hover">
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal"
                                       data-target="#modalAddToCartProduct">ADD TO CART</a>
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
                <div class="col-2 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"
                               data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist"
                               data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="images/product/product-14.jpg" alt=""></span>
                                <span class="tt-img-roll-over"><img src="images/product/product-14-02.jpg"
                                                                    alt=""></span>
                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $12
                            </div>
                            <div class="tt-product-inside-hover">
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal"
                                       data-target="#modalAddToCartProduct">ADD TO CART</a>
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
            </div>
        </div>
    </div>
@endsection

{{--@section('models')--}}
{{--@parent--}}
{{----}}
{{--@endsection--}}