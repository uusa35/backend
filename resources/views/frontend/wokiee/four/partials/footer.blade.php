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
                @if($categories->isNotEmpty())
                    <div class="col-md-6 col-lg-2 col-xl-3">
                        <div class="tt-mobile-collapse">
                            <h4 class="tt-collapse-title">
                                {{ trans('general.categories') }}
                            </h4>
                            <div class="tt-collapse-content">
                                <ul class="tt-list">
                                    @foreach($categories->where('is_parent', true) as $cat)
                                        <li>
                                            <a href="{{ route('frontend.search',['category_id' => $cat->id]) }}">{{ $cat->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="col-md-6 col-lg-2 col-xl-3">
                    <div class="tt-mobile-collapse">
                        <h4 class="tt-collapse-title">
                            {{ trans('general.my_account') }}
                        </h4>
                        <div class="tt-collapse-content">
                            <ul class="tt-list">
                                @foreach($pages->where('on_footer', true) as $page)
                                    <li><a href="{{ $page->url }}">{{ $page->slug }}</a></li>
                                @endforeach
                                @guest
                                    <li><a href="{{ route('register') }}">{{ trans('general.register') }}</a></li>
                                @endguest
                                @auth
                                    <li>
                                        <a href="{{ route('frontend.favorite.index') }}">{{ trans('general.wish_list') }}</a>
                                    </li>
                                @endauth
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
                                {{ trans('general.contact_us_info') }}
                            </h4>
                            <div class="tt-collapse-content">
                                <address>
                                    <p><span>{{ trans('general.address') }}:</span> {{ $settings->address }}</p>
                                    <p><span>{{ trans('general.phone') }}:</span> {{ $settings->phone }}</p>
                                    <p><span>{{ trans('general.mobile') }}:</span> {{ $settings->mobile }}</p>
                                    <p><span>{{ trans('general.mobile') }}:</span> {{ $settings->mobile }}</p>
                                    <p><span>{{ trans('general.whatsapp') }}:</span> {{ $settings->whatsapp }}</p>
                                    <p>
                                        <span>{{ trans('general.duty_time') }}:</span> {{ trans('message.duty_time_message') }}
                                    </p>
                                    <p><span>{{ trans('general.mail') }}:</span> <a
                                                href="mailto:{{ $settings->email }}">{{ $settings->email }}</a></p>
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
                            &copy; {{ trans("message.copy_right") }}
                        </div>
                        <!-- /copyright -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="lang" class="d-none">{{ app()->getLocale() }}</div>
    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
          style="display: none;">
        @csrf
    </form>
</footer>