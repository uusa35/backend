<div class="tt-color-scheme-01">
    <div class="container">
        <div class="tt-header-row tt-top-row">
            <div class="tt-col-left">
                <div class="tt-box-info">
                    <ul>
                        @guest
                            <li><i class="fa fa-fw fa-user"></i><a href="{{ route('register') }}"
                                                                   class="">{{ trans('general.register') }}</a></li>
                            <li><i class="fa fa-fw fa-lock"></i><a href="{{ route('login') }}"
                                                                   class="">{{ trans('general.login') }}</a></li>
                        @endguest

                    </ul>
                </div>
            </div>
            @if($settings)
                <div class="tt-col-right ml-auto">
                    <ul class="tt-social-icon">
                        @include('frontend.wokiee.four.partials._social_icons_home')
                    </ul>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- tt-mobile menu -->