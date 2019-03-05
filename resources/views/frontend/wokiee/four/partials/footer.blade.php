<footer class="">
{{--<footer class="nomargin">--}}
    <div class="tt-footer-default tt-color-scheme-02">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-9">
                    {{--<div class="tt-newsletter-layout-01">--}}
                        {{--<div class="tt-newsletter">--}}
                            {{--<div class="tt-mobile-collapse">--}}
                                {{--<h4 class="tt-collapse-title">--}}
                                    {{--BE IN TOUCH WITH US:--}}
                                {{--</h4>--}}
                                {{--<div class="tt-collapse-content">--}}
                                    {{--<form id="newsletterform" class="form-inline form-default" method="post" novalidate="novalidate" action="#">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<input type="text" name="email" class="form-control" placeholder="Enter your e-mail">--}}
                                            {{--<button type="submit" class="btn">JOIN US</button>--}}
                                        {{--</div>--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
                <div class="col-md-auto">
                    <ul class="tt-social-icon">
                        @include('frontend.wokiee.four.partials._social_icons_home')
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="tt-footer-col tt-color-scheme-01">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-2 col-xl-3">
                    <div class="tt-mobile-collapse">
                        <h4 class="tt-collapse-title">
                            {{ trans('general.categories') }}
                        </h4>
                        <div class="tt-collapse-content">
                            <ul class="tt-list">
                                <li><a href="listing-collection.html">Women</a></li>
                                <li><a href="listing-collection.html">Men</a></li>
                                <li><a href="listing-collection.html">Accessories</a></li>
                                <li><a href="listing-collection.html">Shoes</a></li>
                                <li><a href="listing-collection.html">New Arrivals</a></li>
                                <li><a href="listing-collection.html">Clearence</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 col-xl-3">
                    <div class="tt-mobile-collapse">
                        <h4 class="tt-collapse-title">
                            {{ trans('general.my_account') }}
                        </h4>
                        <div class="tt-collapse-content">
                            <ul class="tt-list">
                                <li><a href="account_order.html">Orders</a></li>
                                <li><a href="page404.html">Compare</a></li>
                                <li><a href="page404.html">Wishlist</a></li>
                                <li><a href="login.html">Log In</a></li>
                                <li><a href="create-account.html">Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="tt-mobile-collapse">
                        <h4 class="tt-collapse-title">
                            {{ trans("general.about_us") }}
                        </h4>
                        <div class="tt-collapse-content">
                            <p>
                                {{ trans('message.footer_about_us') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="tt-newsletter">
                        <div class="tt-mobile-collapse">
                            <h4 class="tt-collapse-title">
                                {{ trans('general.contact') }}
                            </h4>
                            <div class="tt-collapse-content">
                                <address>
                                    <p><span>Address:</span> 2548 Broaddus Maple Court Avenue, Madisonville KY 4783, United States of America</p>
                                    <p><span>Phone:</span> +777 2345 7885;  +777 2345 7886</p>
                                    <p><span>Hours:</span> 7 Days a week from 10 am to 6 pm</p>
                                    <p><span>E-mail:</span> <a href="mailto:info@mydomain.com">info@mydomain.com</a></p>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tt-footer-custom">
        <div class="container">
            <div class="tt-row">
                <div class="tt-col-left">
                    <div class="tt-col-item tt-logo-col">
                        <!-- logo -->
                        <a class="tt-logo tt-logo-alignment" href="index.html">
                            <img src="{{ $settings->logoLarge }}" alt="">
                        </a>
                        <!-- /logo -->
                    </div>
                    <div class="tt-col-item">
                        <!-- copyright -->
                        <div class="tt-box-copyright">
                            &copy; Wokiee 2018. All Rights Reserved
                        </div>
                        <!-- /copyright -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>