<!-- Header top bar -->
<div class="top-bar">
    <div class="container">
        <div class="top-bar-left">
            <ul class="list-inline">
                @guest
                    <li class="icon-user"><a href="{{ route('login') }}"><img src="{{ asset('img/icon-1.png') }}" alt=""/>
                            <span>{{ trans('general.login') }}</span></a></li>
                    <li class="icon-form"><a href="{{ route('register') }}"><img src="{{ asset('img/icon-2.png') }}" alt=""/>
                            <span>{{ trans('general.not_a_member') }} <span class="colored">{{ trans('general.register') }}</span></span></a>
                    </li>
                @endguest
                @auth
                    <li class="dropdown currency">
                        <a href="#" class="dropdown-toggle"
                           data-toggle="dropdown">{{ trans('general.welcome') }}
                            <small>{{ str_limit(auth()->user()->name,15) }}</small>
                            <i class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="dropdown-menu">
                            @if(auth()->user()->isAdmin)
                                <li class="icon-form"><a href="{{ route('backend.home') }}">
                                        <i class="fa fa-fw fa-key"></i>
                                        {{ trans('general.dashboard') }}
                                    </a>
                                </li>
                            @endif
                            <li class="icon-form"><a href="{{ route('frontend.order.index') }}">
                                    <i class="fa fa-fw fa-shopping-cart"></i>
                                    {{ trans('general.order_history') }}
                                </a>
                            </li>
                            <li class="icon-form"><a href="{{ route('frontend.favorite.index') }}">
                                    <i class="fa fa-fw fa-heart-o"></i>
                                    {{ trans('general.favorites') }}
                                </a>
                            </li>
                            <li class="icon-form">
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <i class="fa fa-fw fa-sign-out"></i>
                                    {{ trans('general.logout') }}
                                </a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth
                <li class="hidden-xs"><a href="mailto:{{ $settings->email }}"><i class="fa fa-envelope"></i>
                        <span>{{ $settings->email }}</span></a></li>
                    @include('frontend.partials._top_bar_language')
            </ul>
        </div>
        <div class="top-bar-right">
            <ul class="list-inline">
                <li class="hidden-xs">
                    <a href="{{ route('frontend.home') }}">{{ trans('general.home') }}</a></li>
                <li class="hidden-xs">
                    <a href="{{ route('frontend.cart.index') }}">{{ trans('general.shopping_cart') }}</a></li>
                <li class="hidden-xs">
                    <a href="{{ route('frontend.favorite.index') }}">{{ trans('general.my_wishlist') }}
                    </a>
                </li>
                @auth
                    <li class="hidden-xs">
                        <a href="{{ route('frontend.order.index') }}">{{ trans('general.order_history') }}
                        </a>
                    </li>
                @endauth
                {{--@foreach($pages->where('on_footer', true) as $page)--}}
                {{--<li class="hidden-xs">--}}
                {{--<a href="{{ $page->url }}">{{ $page->title }}--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--@endforeach--}}
                @include('frontend.partials._top_bar_currencies')
                <li class="hidden-md hidden-lg">
                    <a href="{{ route('frontend.cart.index') }}" class="visible-xs" data-toggle="modal" data-target="#popup-cart"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"> {{ $cartCount }} {{ trans('general.items') }} - {{ getCartNetTotal() }} {{ $currency->symbol }} </span>
                        <i class="fa fa-angle-down"></i><span>{{ trans('general.cart') }}</span></a>
                </li>
                <li class="hidden-md hidden-lg">
                    <a href="#" class="visible-xs menu-toggle"><i class="fa fa-lg fa-bars"></i><span>{{ trans('general.menu') }}</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Header top bar -->