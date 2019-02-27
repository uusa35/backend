<div class="container-indent">
    <div class="container container-fluid-custom-mobile-padding">
        @if($title)
            <div class="tt-block-title">
                <h1 class="tt-title">{{ $title }}</h1>
                <div class="tt-description">TOP VIEW IN THIS WEEK</div>
            </div>
        @endif
        <div class="tt-carousel-products row arrow-location-tab arrow-location-tab01 tt-alignment-img tt-layout-product-item slick-animated-show-js">
            @foreach($elements as $element)
                <div class="col-2 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"
                               data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist"
                               data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="images/product/product-20.jpg" alt=""></span>
                                <span class="tt-img-roll-over"><img src="images/product/product-20-02.jpg"
                                                                    alt=""></span>
                                <span class="tt-label-location">
                                    @if($element->on_sale)
                                        <span class="tt-label-sale">{{ trans('general.on_sale') }}</span>
                                    @endif
                                    @if($element->on_new)
                                        <span class="tt-label-new">{{ trans('general.new') }}</span>
                                    @endif
								</span>
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
                            <h2 class="tt-title"><a href="{{ route('frontend.product.show', $element->id) }}">{{ $element->name }}</a></h2>
                            <div class="tt-price">
                                <span class="new-price">$14</span>
                                <span class="old-price">$24</span>
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
            @endforeach
        </div>
    </div>
</div>
<div class="container-indent">
    <div class="container container-fluid-custom-mobile-padding">
        <div class="tt-block-title">
            <h1 class="tt-title">TRENDING</h1>
            <div class="tt-description">TOP VIEW IN THIS WEEK</div>
        </div>
        <div class="tt-carousel-products row arrow-location-tab arrow-location-tab01 tt-alignment-img tt-layout-product-item slick-animated-show-js">
            <div class="col-2 col-md-4 col-lg-3">
                <div class="tt-product thumbprod-center">
                    <div class="tt-image-box">
                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                        <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                        <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                        <a href="product.html">
                            <span class="tt-img"><img src="images/product/product-20.jpg" alt=""></span>
                            <span class="tt-img-roll-over"><img src="images/product/product-20-02.jpg" alt=""></span>
                            <span class="tt-label-location">
									<span class="tt-label-new">New</span>
								</span>
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
                            <span class="new-price">$14</span>
                            <span class="old-price">$24</span>
                        </div>
                        <div class="tt-option-block">
                            <ul class="tt-options-swatch">
                                <li><a class="options-color tt-color-bg-01" href="#"></a></li>
                                <li><a class="options-color tt-color-bg-02" href="#"></a></li>
                            </ul>
                        </div>
                        <div class="tt-product-inside-hover">
                            <div class="tt-row-btn">
                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                            </div>
                            <div class="tt-row-btn">
                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
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
                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                        <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                        <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                        <a href="product.html">
                            <span class="tt-img"><img src="images/product/product-18.jpg" alt=""></span>
                            <span class="tt-img-roll-over"><img src="images/product/product-18-02.jpg" alt=""></span>
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
                            $124
                        </div>
                        <div class="tt-product-inside-hover">
                            <div class="tt-row-btn">
                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                            </div>
                            <div class="tt-row-btn">
                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
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
                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                        <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                        <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                        <a href="product.html">
                            <span class="tt-img"><img src="images/product/product-46.jpg" alt=""></span>
                            <span class="tt-img-roll-over"><img src="images/product/product-46-01.jpg" alt=""></span>
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
                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                            </div>
                            <div class="tt-row-btn">
                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
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
                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                        <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                        <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                        <a href="product.html">
                            <span class="tt-img"><img src="images/product/product-01.jpg" alt=""></span>
                            <span class="tt-img-roll-over"><img src="images/product/product-01-02.jpg" alt=""></span>
                            <span class="tt-label-location">
									<span class="tt-label-sale">Sale 15%</span>
								</span>
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
                            $78
                        </div>
                        <div class="tt-product-inside-hover">
                            <div class="tt-row-btn">
                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                            </div>
                            <div class="tt-row-btn">
                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
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
                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                        <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                        <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                        <a href="product.html">
                            <span class="tt-img"><img src="images/product/product-14.jpg" alt=""></span>
                            <span class="tt-img-roll-over"><img src="images/product/product-14-02.jpg" alt=""></span>
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
                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                            </div>
                            <div class="tt-row-btn">
                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
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