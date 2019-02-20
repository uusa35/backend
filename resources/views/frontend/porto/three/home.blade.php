@extends('frontend.porto.three.layouts.app')



@section('body')

    <main class="main">
        <div class="container">
            <div class="home-slider-container">
                <div class="home-slider owl-carousel">
                    <div class="home-slide">
                        <div class="slide-bg owl-lazy"  data-src="https://loremflickr.com/1170/570/toy"></div><!-- End .slide-bg -->
                        <div class="home-slide-content slide-content-right">
                            <h3>New Summer</h3>
                            <h1>Collection</h1>
                            <a href="category.html" class="btn btn-secondary">Shop Now</a>
                        </div><!-- End .home-slide-content -->
                    </div><!-- End .home-slide -->

                    <div class="home-slide">
                        <div class="slide-bg owl-lazy"  data-src="https://loremflickr.com/398/210/chartoon"></div><!-- End .slide-bg -->
                        <div class="home-slide-content">
                            <h3>Elegent Collections</h3>
                            <h1>For Him & Her</h1>
                            <a href="category.html" class="btn btn-secondary">Shop Now</a>
                        </div><!-- End .home-slide-content -->
                    </div><!-- End .home-slide -->
                </div><!-- End .home-slider -->
            </div><!-- End .home-slider-container -->
        </div><!-- End .container -->

        <div class="home-top-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="cat-box">
                            <figure>
                                <a href="#">
                                    <img src="https://loremflickr.com/398/210/chartoon" alt="banner">
                                </a>
                            </figure>

                            <div class="cat-box-content">
                                <h3 class="cat-box-title"><a href="#">Sunglasses</a></h3>
                                <p>Lorem Ipsum is simply dummy<br> text of the printing and typesetting industry.<br> Lorem Ipsum has</p>
                            </div><!-- End .cat-box-content -->
                        </div><!-- End .cat-box -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-4">
                        <div class="cat-box">
                            <figure>
                                <a href="#">
                                    <img src="https://loremflickr.com/398/210/chartoon" alt="banner">
                                </a>
                            </figure>

                            <div class="cat-box-content">
                                <h3 class="cat-box-title"><a href="#">Shoes</a></h3>
                                <p>Lorem Ipsum is simply dummy<br> text of the printing and typesetting industry.<br> Lorem Ipsum has</p>
                            </div><!-- End .cat-box-content -->
                        </div><!-- End .cat-box -->
                    </div><!-- End .col-lg-4 -->

                    <div class="col-md-4">
                        <div class="cat-box">
                            <figure>
                                <a href="#">
                                    <img src="https://loremflickr.com/398/210/mickey" alt="banner">
                                </a>
                            </figure>

                            <div class="cat-box-content">
                                <h3 class="cat-box-title"><a href="#">Watches</a></h3>
                                <p>Lorem Ipsum is simply dummy<br> text of the printing and typesetting industry.<br> Lorem Ipsum has</p>
                            </div><!-- End .cat-box-content -->
                        </div><!-- End .cat-box -->
                    </div><!-- End .col-lg-4 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-3 mb-lg-5"></div><!-- margin -->

            <div class="container">
                <h2 class="title mb-3">Featured Products</h2>
                <div class="owl-carousel owl-theme featured-products">
                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.html" class="product-image">
                                <img src="https://loremflickr.com/600/600/tweety" alt="product">
                            </a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
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
                                <img src="https://loremflickr.com/600/600/chartoon" alt="product">
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
                                <img src="https://loremflickr.com/600/600/chartoon" alt="product">
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
                                <img src="images/products/product-4.jpg" alt="product">
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
                                <img src="images/products/product-5.jpg" alt="product">
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
                </div><!-- End .featured-products -->
            </div><!-- End .container -->
        </div><!-- End .home-top-section -->

        <div class="promo-section" style="background-image: url(images/promo-bg.jpg)">
            <div class="container">
                <div class="container">
                    <div class="promo-content">
                        <div class="promo-content-wrapper">
                            <h3 class="promo-title"><span>Men's</span> Watches</h3>
                            <a href="#" class="btn btn-secondary">Shop now</a>
                        </div><!-- End .promo-content-wrapper -->
                    </div><!-- End .promo-content -->
                </div><!-- End .container -->
            </div><!-- End .container -->
        </div><!-- End .promo-section -->

        <div class="home-bottom-section">
            <div class="container">
                <h2 class="title mb-3">New Arrivals</h2>

                <div class="products-group">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="images/products/home/product-1.jpg" alt="product">
                                    </a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                </figure>
                                <div class="product-details product-details-overlay action-inner">
                                    <h2 class="product-title">
                                        <a href="product.html">Men’s Black & Gray Jacket</a>
                                    </h2>
                                    <div class="product-action">
                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                            <span>Add to Wishlist</span>
                                        </a>
                                    </div><!-- End .product-action -->
                                    <div class="price-box">
                                        <span class="product-price">$40.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div><!-- End .product -->
                        </div><!-- End .col-lg-5 -->

                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-6 col-lg-12">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="images/products/home/product-2.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                                </figure>
                                            </div><!-- End .product -->
                                        </div><!-- End .col-6 -->

                                        <div class="col-6 col-lg-12">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="images/products/home/product-3.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                                </figure>
                                            </div><!-- End .product -->
                                        </div><!-- End .col-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .col-lg-4 -->

                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-6 col-lg-12">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="images/products/home/product-4.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                                </figure>
                                            </div><!-- End .product -->
                                        </div><!-- End .col-6 -->

                                        <div class="col-6 col-lg-12">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="images/products/home/product-5.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                                </figure>
                                            </div><!-- End .product -->
                                        </div><!-- End .col-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .col-lg-4 -->

                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-6 col-lg-12">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="images/products/home/product-6.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                                </figure>
                                            </div><!-- End .product -->
                                        </div><!-- End .col-6 -->

                                        <div class="col-6 col-lg-12">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="images/products/home/product-7.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                                </figure>
                                            </div><!-- End .product -->
                                        </div><!-- End .col-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .col-lg-4 -->
                            </div><!-- End .row -->
                        </div><!-- End .col-lg-7 -->
                    </div><!-- End .row -->
                </div><!-- End .products-grop -->
            </div><!-- End .container -->
        </div><!-- End .home-bottom-section -->

        <div class="container">
            <div class="instagram-feed">
                <ul class="instagram-feed-list">
                    <li><a href="#"><img src="images/instagram/1.jpg" alt="Feed"></a></li>
                    <li><a href="#"><img src="images/instagram/2.jpg" alt="Feed"></a></li>
                    <li><a href="#"><img src="images/instagram/3.jpg" alt="Feed"></a></li>
                    <li><a href="#"><img src="images/instagram/4.jpg" alt="Feed"></a></li>
                    <li><a href="#"><img src="images/instagram/5.jpg" alt="Feed"></a></li>
                    <li><a href="#"><img src="images/instagram/6.jpg" alt="Feed"></a></li>
                    <li><a href="#"><img src="images/instagram/7.jpg" alt="Feed"></a></li>
                    <li><a href="#"><img src="images/instagram/8.jpg" alt="Feed"></a></li>
                    <li><a href="#"><img src="images/instagram/9.jpg" alt="Feed"></a></li>
                    <li><a href="#"><img src="images/instagram/10.jpg" alt="Feed"></a></li>
                    <li><a href="#"><img src="images/instagram/11.jpg" alt="Feed"></a></li>
                    <li><a href="#"><img src="images/instagram/12.jpg" alt="Feed"></a></li>
                </ul>
                <div class="instagram-feed-content">
                    <i class="icon-instagram"></i>
                    <h3>Instagram</h3>
                    <div>@portoecommerce</div>
                    <a href="#" class="btn btn-secondary">Follow</a>
                </div><!-- End .instagram-feed-content -->
            </div><!-- End .instagram-feed -->
        </div><!-- End .container -->
    </main><!-- End .main -->

@endsection
