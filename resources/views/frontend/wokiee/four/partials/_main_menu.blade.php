<div class="tt-desktop-header headerunderline">
    <div class="container">
        <div class="tt-header-holder">
            <div class="tt-col-obj tt-obj-logo">
                <!-- logo -->
                <a class="tt-logo tt-logo-alignment" href="{{ route('frontend.home') }}"><img
                            src="{{ asset(env('LARGE').$settings->logo) }}" alt="{{ $settings->company }}"></a>
                <!-- /logo -->
            </div>
            <div class="tt-col-obj tt-obj-search-type2">
                <div class="tt-search-type2">
                    @include('frontend.wokiee.four.partials._search_form')
                </div>
            </div>
        </div>
    </div>
    <div class="container small-header">
        <div class="tt-header-holder">
            {{--            @include('frontend.wokiee.four.partials._main_menu_categories')--}}
            <div class="tt-col-obj tt-obj-menu">
                <!-- tt-menu -->
                <div class="tt-desctop-parent-menu tt-parent-box">
                    <div class="tt-desctop-menu">
                        <nav>
                            <ul>
                                <li class="dropdown tt-megamenu-col-02 selected">
                                    <a href="{{ route('frontend.home') }}">{{ trans('general.home_page') }}</a>
                                </li>
                                @include('frontend.wokiee.four.partials._categories_main_menu_element_with_images')

                                @if($pages->isNotEmpty())
                                    @foreach($pages->where('on_menu_desktop',true)->take(3) as $page)
                                        <li class="dropdown">
                                            <a href="{{ route('frontend.page.show.name',['id' => $page->id,'name' => $page->title]) }}">
                                                {{ str_limit($page->title,11,'') }}
                                            </a>
                                        </li>
                                    @endforeach
                                @endif

                                <li class="dropdown">
                                    <a href="{{ route('frontend.language.change',['locale' => 'ar']) }}">RTL</a>
                                    <a href="{{ route('frontend.language.change',['locale' => 'en']) }}">En</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /tt-menu -->
            </div>
            <div class="tt-col-obj tt-obj-options obj-move-right">
                <!-- tt-search -->
                <div class="tt-desctop-parent-search tt-parent-box tt-obj-desktop-hidden">
                    <div class="tt-search tt-dropdown-obj">
                        <button class="tt-dropdown-toggle" data-tooltip="Search" data-tposition="bottom">
                            <i class="icon-f-85"></i>
                        </button>
                        <div class="tt-dropdown-menu">
                            <div class="container">
                                <form>
                                    <div class="tt-col">
                                        <input type="text" class="tt-search-input" placeholder="Search Products...">
                                        <button class="tt-btn-search" type="submit"></button>
                                    </div>
                                    <div class="tt-col">
                                        <button class="tt-btn-close icon-g-80"></button>
                                    </div>
                                    <div class="tt-info-text">
                                        What are you Looking for?
                                    </div>
                                    <div class="search-results">
                                        <ul>
                                            <li>
                                                <a href="product.html">
                                                    <div class="thumbnail"><img src="images/loader.svg"
                                                                                data-src="images/product/product-03.jpg"
                                                                                alt=""></div>
                                                    <div class="tt-description">
                                                        <div class="tt-title">Flared Shift Bag</div>
                                                        <div class="tt-price">
                                                            <span class="new-price">$14</span>
                                                            <span class="old-price">$24</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product.html">
                                                    <div class="thumbnail"><img src="images/loader.svg"
                                                                                data-src="images/product/product-02.jpg"
                                                                                alt=""></div>
                                                    <div class="tt-description">
                                                        <div class="tt-title">Flared Shift Bag</div>
                                                        <div class="tt-price">
                                                            $24
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product.html">
                                                    <div class="thumbnail"><img src="images/loader.svg"
                                                                                data-src="images/product/product-01.jpg"
                                                                                alt=""></div>
                                                    <div class="tt-description">
                                                        <div class="tt-title">Flared Shift Bag</div>
                                                        <div class="tt-price">
                                                            $14
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product.html">
                                                    <div class="thumbnail"><img src="images/loader.svg"
                                                                                data-src="images/product/product-04.jpg"
                                                                                alt=""></div>
                                                    <div class="tt-description">
                                                        <div class="tt-title">Flared Shift Bag</div>
                                                        <div class="tt-price">
                                                            $24
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product.html">
                                                    <div class="thumbnail"><img src="images/loader.svg"
                                                                                data-src="images/product/product-05.jpg"
                                                                                alt=""></div>
                                                    <div class="tt-description">
                                                        <div class="tt-title">Flared Shift Bag</div>
                                                        <div class="tt-price">
                                                            $17
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product.html">
                                                    <div class="thumbnail"><img src="images/loader.svg"
                                                                                data-src="images/product/product-06.jpg"
                                                                                alt=""></div>
                                                    <div class="tt-description">
                                                        <div class="tt-title">Flared Shift Bag</div>
                                                        <div class="tt-price">
                                                            $20
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <button type="button" class="tt-view-all">View all products</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /tt-search -->
                <!-- tt-cart -->
                <div class="tt-desctop-parent-cart tt-parent-box">
                    <div class="tt-cart tt-dropdown-obj" data-tooltip="Cart" data-tposition="bottom">
                        <button class="tt-dropdown-toggle">
                            <i class="icon-f-39"></i>
                            <span class="tt-badge-cart">{{ Cart::count() }}</span>
                        </button>
                        <div class="tt-dropdown-menu">
                            <div class="tt-mobile-add">
                                <h6 class="tt-title">SHOPPING CART</h6>
                                <button class="tt-close">Close</button>
                            </div>
                            <div class="tt-dropdown-inner">
                                <div class="tt-cart-layout">
                                @if(Cart::count() > 0)
                                    @include('frontend.wokiee.four.partials._main_menu_cart_items')
                                @else
                                    <!-- layout emty cart -->
                                        <a href="empty-cart.html" class="tt-cart-empty">
                                            <i class="icon-f-39"></i>
                                            <p>{{ trans('general.no_items_in_cart') }}</p>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /tt-cart -->
                <!-- tt-account -->
            @include('frontend.wokiee.four.partials._menu_user_account')
            <!-- /tt-account -->
                <!-- tt-langue and tt-currency -->
            @include('frontend.wokiee.four.partials._menu_currency_lang')
            <!-- /tt-langue and tt-currency -->
            </div>
        </div>
    </div>
</div>