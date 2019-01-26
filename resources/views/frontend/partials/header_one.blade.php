<!-- HEADER -->
<header class="header">
{{--<header class="header fixed">--}}
    @include('frontend.partials._top_bar')
    <div class="header-wrapper">
        <div class="container">

            <!-- Logo -->
            <div class="logo">
                <a href="{{ route('home') }}"><img class="img-sm center-block" src="{{ asset(env('LARGE').$settings->logo) }}" alt="{{ $settings->company_ar .' '.$settings->company_en }}"/></a>
            </div>
            <!-- /Logo -->

            <!-- Header search -->
            <div class="header-search hidden-xs">
                {{--<input class="form-control" type="text" placeholder="What are you looking?"/>--}}
                {{--<button><i class="fa fa-search"></i></button>--}}
                <Form method="get" action="{{ route('frontend.product.search') }}">
                        <input class="form-control" type="text" name="search" placeholder="{{ trans('general.search') }}">
                        <button class="button" type="submit"><i class="fa fa-search"></i></button>
                </Form>
            </div>
            <!-- /Header search -->

            <!-- Header shopping cart -->
            <div class="header-cart hidden-xs">
                <div class="cart-wrapper">
                    <a href="{{ route('frontend.favorite.index') }}" class="btn btn-theme-transparent hidden-xs hidden-sm"><i class="fa fa-heart"></i></a>
                    {{--<a href="compare-products.html" class="btn btn-theme-transparent hidden-xs hidden-sm"><i class="fa fa-exchange"></i></a>--}}
                    <a href="{{ route('frontend.cart.index') }}" class="btn btn-theme-transparent" data-toggle="modal" data-target="#popup-cart"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"> {{ $cartCount }} {{ trans('general.items') }} - {{ getCartNetTotal() }} {{ $currency->symbol }} </span>
                        <i class="fa fa-angle-down"></i></a>
                    <!-- Mobile menu toggle button -->
                    <a href="#" class="menu-toggle btn btn-theme-transparent"><i class="fa fa-bars"></i></a>
                    <!-- /Mobile menu toggle button -->
                </div>
            </div>
            <!-- Header shopping cart -->

        </div>
    </div>
    @include('frontend.partials._desktop_nav')
    <input type="hidden" id="language" value="{{ app()->getLocale() }}"/>
</header>
<!-- /HEADER -->