@extends('frontend.porto.three.layouts.app')

@section('head')
    @parent
@section('title')
    <title>{{ $product->name_ar .' ' . $product->name_en .' '. $product->description_ar . '' . $product->description_en }}</title>
@endsection
<meta name="description" content="{!! $product->description_ar .' '. $product->description_en !!}">
<meta name="keywords" content="{{ $product->notes . config('app.name')  }}"/>
<!-- You can use Open Graph tags to customize link previews.
Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
<meta property="og:url" content="{{ request()->fullUrl() }}"/>
<meta property="og:type" content="website"/>
<meta property="og:title" content="{{ $product->name_ar . '-' . $product->name_en}}"/>
<meta property="og:description" content="{!! strip_tags($product->description_ar .'-'. $product->description_en) !!}"/>
<meta property="og:image" content="{{asset(env('LARGE').$product->image)}}"/>
@endsection

@section('body')
    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Electronics</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Headsets</li>
                </ol>
            </div><!-- End .container -->
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="product-single-container product-single-default">
                        <div class="row">
                            <div class="col-lg-7 col-md-6 product-single-gallery">
                                <div class="product-slider-container product-item">
                                    <div class="product-single-carousel owl-carousel owl-theme">
                                        <div class="product-item">
                                            <img class="product-single-image" src="https://source.unsplash.com/collection/3756765/600x600" data-zoom-image="https://source.unsplash.com/collection/3756765/600x600"/>
                                        </div>
                                        <div class="product-item">
                                            <img class="product-single-image" src="https://source.unsplash.com/collection/3756765/600x600" data-zoom-image="https://source.unsplash.com/collection/3756765/600x600"/>
                                        </div>
                                        <div class="product-item">
                                            <img class="product-single-image" src="https://source.unsplash.com/collection/3756765/600x600" data-zoom-image="https://source.unsplash.com/collection/3756765/600x600"/>
                                        </div>
                                        <div class="product-item">
                                            <img class="product-single-image" src="https://source.unsplash.com/collection/3756765/600x600" data-zoom-image="https://source.unsplash.com/collection/3756765/600x600"/>
                                        </div>
                                    </div>
                                    <!-- End .product-single-carousel -->
                                    <span class="prod-full-screen">
                                            <i class="icon-plus"></i>
                                        </span>
                                </div>
                                <div class="prod-thumbnail row owl-dots" id='carousel-custom-dots'>
                                    <div class="col-3 owl-dot">
                                        <img src="https://source.unsplash.com/collection/3756765/600x600"/>
                                    </div>
                                    <div class="col-3 owl-dot">
                                        <img src="https://source.unsplash.com/collection/3756765/600x600"/>
                                    </div>
                                    <div class="col-3 owl-dot">
                                        <img src="https://source.unsplash.com/collection/3756765/600x600"/>
                                    </div>
                                    <div class="col-3 owl-dot">
                                        <img src="https://source.unsplash.com/collection/3756765/600x600"/>
                                    </div>
                                </div>
                            </div><!-- End .col-lg-7 -->

                            <div class="col-lg-5 col-md-6">
                                <div class="product-single-details">
                                    <h1 class="product-title">{{ $product->name }}</h1>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                        </div><!-- End .product-ratings -->

                                        <a href="#" class="rating-link">( 6 Reviews )</a>
                                    </div><!-- End .product-container -->

                                    <div class="price-box">
                                        @if($product->on_sale)
                                            <span class="old-price">{{ $product->convertedPrice }} - {{ $currency->symbol }}</span>
                                            <span class="product-price">{{ $product->convertedSalePrice }} - {{ $currency->symbol }}</span>
                                        @else
                                            <span class="product-price">{{ $product->convertedPrice }} - {{ $currency->symbol }}</span>
                                        @endif
                                    </div><!-- End .price-box -->

                                    <div class="product-desc">
                                        <p>{{ $product->description }}</p>
                                    </div><!-- End .product-desc -->

                                    {{--<div class="product-filters-container">--}}
                                        {{--<div class="product-single-filter">--}}
                                            {{--<label>Colors:</label>--}}
                                            {{--<ul class="config-swatch-list">--}}
                                                {{--<li class="active">--}}
                                                    {{--<a href="#" style="background-color: #6085a5;"></a>--}}
                                                {{--</li>--}}
                                                {{--<li>--}}
                                                    {{--<a href="#" style="background-color: #ab6e6e;"></a>--}}
                                                {{--</li>--}}
                                                {{--<li>--}}
                                                    {{--<a href="#" style="background-color: #b19970;"></a>--}}
                                                {{--</li>--}}
                                                {{--<li>--}}
                                                    {{--<a href="#" style="background-color: #11426b;"></a>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</div><!-- End .product-single-filter -->--}}
                                    {{--</div><!-- End .product-filters-container -->--}}

                                    <div class="product-action">
                                        <div class="product-single-qty">
                                            <input class="horizontal-quantity form-control" type="text">
                                        </div><!-- End .product-single-qty -->

                                        <a href="cart.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>
                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                            <span>Add to Wishlist</span>
                                        </a>
                                    </div><!-- End .product-action -->

                                    <div class="product-desc">
                                        <label>{{ trans('general.share') }}:</label>
                                        <!-- www.addthis.com share plugin-->
                                        <div class="addthis_inline_share_toolbox">
                                            @include('frontend.porto.three.partials._social_btns')
                                        </div>
                                    </div><!-- End .product single-share -->
                                </div><!-- End .product-single-details -->
                            </div><!-- End .col-lg-5 -->
                        </div><!-- End .row -->
                    </div><!-- End .product-single-container -->

                    <div class="product-single-tabs scrolling-box">
                        <div class="sticky-header" role="tablist">
                            <ul class="nav nav-tabs container">
                                <li class="nav-item">
                                    <a class="nav-link" id="product-tab-desc" href="#product-desc-content" data-toggle="tab">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="product-tab-size" href="#product-size-content" data-toggle="tab">Size Guide</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="product-tab-tags" href="#product-tags-content" data-toggle="tab">Tags</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="product-tab-reviews" href="#product-reviews-content" data-toggle="tab">Reviews</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-pane" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                            <div class="product-desc-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                                <ul>
                                    <li><i class="icon-ok"></i>Any Product types that You want - Simple, Configurable</li>
                                    <li><i class="icon-ok"></i>Downloadable/Digital Products, Virtual Products</li>
                                    <li><i class="icon-ok"></i>Inventory Management with Backordered items</li>
                                </ul>
                                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            </div><!-- End .product-desc-content -->
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane" id="product-size-content" role="tabpanel" aria-labelledby="product-tab-size">
                            <div class="product-size-content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="assets/images/products/single/body-shape.png" alt="body shape">
                                    </div><!-- End .col-md-4 -->

                                    <div class="col-md-8">
                                        <table class="table table-size">
                                            <thead>
                                            <tr>
                                                <th>SIZE</th>
                                                <th>CHEST (in.)</th>
                                                <th>WAIST (in.)</th>
                                                <th>HIPS (in.)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>XS</td>
                                                <td>34-36</td>
                                                <td>27-29</td>
                                                <td>34.5-36.5</td>
                                            </tr>
                                            <tr>
                                                <td>S</td>
                                                <td>36-38</td>
                                                <td>29-31</td>
                                                <td>36.5-38.5</td>
                                            </tr>
                                            <tr>
                                                <td>M</td>
                                                <td>38-40</td>
                                                <td>31-33</td>
                                                <td>38.5-40.5</td>
                                            </tr>
                                            <tr>
                                                <td>L</td>
                                                <td>40-42</td>
                                                <td>33-36</td>
                                                <td>40.5-43.5</td>
                                            </tr>
                                            <tr>
                                                <td>XL</td>
                                                <td>42-45</td>
                                                <td>36-40</td>
                                                <td>43.5-47.5</td>
                                            </tr>
                                            <tr>
                                                <td>XLL</td>
                                                <td>45-48</td>
                                                <td>40-44</td>
                                                <td>47.5-51.5</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- End .row -->
                            </div><!-- End .product-size-content -->
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane" id="product-tags-content" role="tabpanel" aria-labelledby="product-tab-tags">
                            <div class="product-tags-content">
                                <form action="#">
                                    <h4>Add Your Tags:</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-sm" required>
                                        <input type="submit" class="btn btn-primary" value="Add Tags">
                                    </div><!-- End .form-group -->
                                </form>
                                <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                            </div><!-- End .product-tags-content -->
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
                            <div class="product-reviews-content">
                                <div class="collateral-box">
                                    <ul>
                                        <li>Be the first to review this product</li>
                                    </ul>
                                </div><!-- End .collateral-box -->

                                <div class="add-product-review">
                                    <h3 class="text-uppercase heading-text-color font-weight-semibold">WRITE YOUR OWN REVIEW</h3>
                                    <p>How do you rate this product? *</p>

                                    <form action="#">
                                        <table class="ratings-table">
                                            <thead>
                                            <tr>
                                                <th>&nbsp;</th>
                                                <th>1 star</th>
                                                <th>2 stars</th>
                                                <th>3 stars</th>
                                                <th>4 stars</th>
                                                <th>5 stars</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Quality</td>
                                                <td>
                                                    <input type="radio" name="ratings[1]" id="Quality_1" value="1" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="ratings[1]" id="Quality_2" value="2" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="ratings[1]" id="Quality_3" value="3" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="ratings[1]" id="Quality_4" value="4" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="ratings[1]" id="Quality_5" value="5" class="radio">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Value</td>
                                                <td>
                                                    <input type="radio" name="value[1]" id="Value_1" value="1" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="value[1]" id="Value_2" value="2" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="value[1]" id="Value_3" value="3" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="value[1]" id="Value_4" value="4" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="value[1]" id="Value_5" value="5" class="radio">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Price</td>
                                                <td>
                                                    <input type="radio" name="price[1]" id="Price_1" value="1" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="price[1]" id="Price_2" value="2" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="price[1]" id="Price_3" value="3" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="price[1]" id="Price_4" value="4" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="price[1]" id="Price_5" value="5" class="radio">
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <div class="form-group">
                                            <label>Nickname <span class="required">*</span></label>
                                            <input type="text" class="form-control form-control-sm" required>
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label>Summary of Your Review <span class="required">*</span></label>
                                            <input type="text" class="form-control form-control-sm" required>
                                        </div><!-- End .form-group -->
                                        <div class="form-group mb-2">
                                            <label>Review <span class="required">*</span></label>
                                            <textarea cols="5" rows="6" class="form-control form-control-sm"></textarea>
                                        </div><!-- End .form-group -->

                                        <input type="submit" class="btn btn-primary" value="Submit Review">
                                    </form>
                                </div><!-- End .add-product-review -->
                            </div><!-- End .product-reviews-content -->
                        </div><!-- End .tab-pane -->
                    </div><!-- End .product-single-tabs -->
                </div><!-- End .col-lg-9 -->

                <div class="sidebar-overlay"></div>
                <div class="sidebar-toggle"><i class="icon-sliders"></i></div>
                <aside class="sidebar-product col-lg-3 padding-left-lg mobile-sidebar">
                    <div class="sidebar-wrapper">
                        <div class="widget widget-brand">
                            <a href="#">
                                <img src="https://source.unsplash.com/collection/3756765/600x600" alt="brand name">
                            </a>
                        </div><!-- End .widget -->

                        <div class="widget widget-info">
                            <ul>
                                <li>
                                    <i class="icon-shipping"></i>
                                    <h4>FREE<br>SHIPPING</h4>
                                </li>
                                <li>
                                    <i class="icon-us-dollar"></i>
                                    <h4>100% MONEY<br>BACK GUARANTEE</h4>
                                </li>
                                <li>
                                    <i class="icon-online-support"></i>
                                    <h4>ONLINE<br>SUPPORT 24/7</h4>
                                </li>
                            </ul>
                        </div><!-- End .widget -->

                        <div class="widget widget-banner">
                            <div class="banner banner-image">
                                <a href="#">
                                    <img src="https://source.unsplash.com/collection/3756765/600x600" alt="Banner Desc">
                                </a>
                            </div><!-- End .banner -->
                        </div><!-- End .widget -->

                        <div class="widget widget-featured">
                            <h3 class="widget-title">{{ trans('general.featured_products') }}</h3>

                            <div class="widget-body">
                                <div class="owl-carousel widget-featured-products">
                                    <div class="featured-col">
                                        <div class="product product-sm">
                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
                                                    <img src="https://source.unsplash.com/collection/3756765/600x600" alt="product">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title">
                                                    <a href="product.html">Reason Logo Snapback</a>
                                                </h2>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$28.00</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div><!-- End .product -->

                                        <div class="product product-sm">
                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
                                                    <img src="https://source.unsplash.com/collection/3756765/600x600" alt="product">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title">
                                                    <a href="product.html">Crisscross Slides</a>
                                                </h2>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:20%"></span><!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="old-price">$12.00</span>
                                                    <span class="product-price">$8.00</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div><!-- End .product -->

                                        <div class="product product-sm">
                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
                                                    <img src="https://source.unsplash.com/collection/3756765/600x600" alt="product">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title">
                                                    <a href="product.html">Athletic Mesh Tee</a>
                                                </h2>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$15.00</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div><!-- End .product -->
                                    </div><!-- End .featured-col -->

                                    <div class="featured-col">
                                        <div class="product product-sm">
                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
                                                    <img src="https://source.unsplash.com/collection/3756765/600x600" alt="product">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title">
                                                    <a href="product.html">SweatShirt</a>
                                                </h2>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="old-price">$50.00</span>
                                                    <span class="product-price">$35.00</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div><!-- End .product -->

                                        <div class="product product-sm">
                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
                                                    <img src="https://source.unsplash.com/collection/3756765/600x600" alt="product">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title">
                                                    <a href="product.html">Zippered Sneakers</a>
                                                </h2>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$29.00</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div><!-- End .product -->

                                        <div class="product product-sm">
                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
                                                    <img src="https://source.unsplash.com/collection/3756765/600x600" alt="product">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title">
                                                    <a href="product.html">Matte Browline Sunglasses</a>
                                                </h2>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:20%"></span><!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$40.00</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div><!-- End .product -->
                                    </div><!-- End .featured-col -->
                                </div><!-- End .widget-featured-slider -->
                            </div><!-- End .widget-body -->
                        </div><!-- End .widget -->
                    </div>
                </aside><!-- End .col-md-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="featured-section">
            <div class="container">
                <h2 class="carousel-title">{{ trans('general.featured_products') }}</h2>

                <div class="featured-products owl-carousel owl-theme owl-dots-top">
                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.html" class="product-image">
                                <img src="https://source.unsplash.com/collection/3756765/600x600" alt="product">
                            </a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview">{{ trans('general.quick_view') }}</a>
                        </figure>
                        <div class="product-details action-inner">
                            <h2 class="product-title">
                                <a href="product.html">Reason Logo Snapback</a>
                            </h2>
                            <div class="product-action">
                                <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                    <span>Add to Wishlist</span>
                                </a>
                            </div><!-- End .product-action -->
                            <div class="price-box">
                                <span class="product-price">$28.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.html" class="product-image">
                                <img src="https://source.unsplash.com/collection/3756765/600x600" alt="product">
                            </a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                            <span class="product-label label-sale">-20%</span>
                            <span class="product-label label-hot">New</span>
                        </figure>
                        <div class="product-details action-inner">
                            <h2 class="product-title">
                                <a href="product.html">Leather Crisscross Slides</a>
                            </h2>
                            <div class="product-action">
                                <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                    <span>Add to Wishlist</span>
                                </a>
                            </div><!-- End .product-action -->
                            <div class="price-box">
                                <span class="old-price">$12.90</span>
                                <span class="product-price">$8.90</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.html" class="product-image">
                                <img src="https://source.unsplash.com/collection/3756765/600x600" alt="product">
                            </a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                        </figure>
                        <div class="product-details action-inner">
                            <h2 class="product-title">
                                <a href="product.html">Stripe-Trim Athletic Mesh Tee</a>
                            </h2>
                            <div class="product-action">
                                <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                    <span>Add to Wishlist</span>
                                </a>
                            </div><!-- End .product-action -->
                            <div class="price-box">
                                <span class="product-price">$15.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.html" class="product-image">
                                <img src="https://source.unsplash.com/collection/3756765/600x600" alt="product">
                            </a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                        </figure>
                        <div class="product-details action-inner">
                            <h2 class="product-title">
                                <a href="product.html">Classic Crew Neck Sweatshirt</a>
                            </h2>
                            <div class="product-action">
                                <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                    <span>Add to Wishlist</span>
                                </a>
                            </div><!-- End .product-action -->
                            <div class="price-box">
                                <span class="product-price">$12.80</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.html" class="product-image">
                                <img src="https://source.unsplash.com/collection/3756765/600x600" alt="product">
                            </a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                        </figure>
                        <div class="product-details action-inner">
                            <h2 class="product-title">
                                <a href="product.html">Zippered Sneakers</a>
                            </h2>
                            <div class="product-action">
                                <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                    <span>Add to Wishlist</span>
                                </a>
                            </div><!-- End .product-action -->
                            <div class="price-box">
                                <span class="product-price">$32.80</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div><!-- End .product -->
                </div><!-- End .featured-proucts -->
            </div><!-- End .container -->
        </div><!-- End .featured-section -->
    </main><!-- End .main -->
@endsection

@section('scripts')
    @parent
    {{--<script async src="https://static.addtoany.com/menu/page.js"></script>--}}
@endsection
