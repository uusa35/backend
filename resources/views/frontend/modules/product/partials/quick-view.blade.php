<!-- quickview product -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="modal-product">
                        <!-- Start product images -->
                        <div class="product-images">
                            <div class="main-image images">
                                <img alt="" class="img img-responsive product-image" src="http://placehold.it/350x350">
                            </div>
                        </div>
                        <!-- end product images -->
                        <div class="product-info">
                            <h1 class="product-heading"></h1>
                            <div class="price-box-3">
                                <div class="s-price-box">
                                    <span class="new-price new-price-ql"></span>
                                    {{--<span class="old-price old-price-ql"></span>--}}
                                </div>
                            </div>
                            {{--<a href="shop.html" class="see-all">See all features</a>--}}
                            <div class="quick-add-to-cart">
                                <a href="#" class="single_add_to_cart_button view-details hidden-xs hidden-sm"
                                   style="padding-top: 10px;">{{ trans('general.view_details') }}</a>
                                <a href="#" class="hidden-lg hidden-md"
                                   style="padding-top: 10px;">{{ trans('general.view_details') }}</a>
                            </div>
                            <div class="quick-desc"></div>
                            {{--<div class="social-sharing">--}}
                            {{--<div class="widget widget_socialsharing_widget">--}}
                            {{--<h3 class="widget-title-modal">Share this product</h3>--}}
                            {{--<ul class="social-icons">--}}
                            {{--<li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>--}}
                            {{--<li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>--}}
                            {{--<li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>--}}
                            {{--<li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>--}}
                            {{--<li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>--}}
                            {{--</ul>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        </div><!-- .product-info -->
                    </div><!-- .modal-product -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- END Modal -->
</div>

{{--<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"--}}
     {{--aria-hidden="true">--}}
    {{--<div class="modal-dialog">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-header">--}}
                {{--<button type="button" class="close" data-dismiss="modal"--}}
                        {{--style="padding-left: 15px; padding-right: 15px;"><span--}}
                            {{--aria-hidden="true">&times;</span><span--}}
                            {{--class="sr-only"> {{ trans('general.close') }}</span></button>--}}
                {{--<h4 class="modal-title" id="myModalLabel">{{ trans('general.size_charts') }}</h4>--}}
            {{--</div>--}}
            {{--<div class="modal-body" style="text-align: center;">--}}
                {{--<img src=""--}}
                     {{--id="imagepreview">--}}
            {{--</div>--}}
            {{--<div class="modal-footer">--}}
                {{--<button type="button" class="btn btn-default"--}}
                        {{--data-dismiss="modal">{{ trans('general.close') }}</button>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

