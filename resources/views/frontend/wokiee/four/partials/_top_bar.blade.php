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
                        @if($settings->facebook)
                            <li>
                                <a class="" target="_blank" href="{{ $settings->facebook }}">
                                    <i class="fa fa-fw fa-facebook"></i>
                                </a>
                            </li>
                        @endif
                            @if($settings->twitter)
                            <li>
                                <a class="" target="_blank" href="{{ $settings->twitter }}">
                                    <i class="fa fa-fw fa-twitter"></i>
                                </a>
                            </li>
                        @endif
                            @if($settings->instagram)
                            <li>
                                <a class="" target="_blank" href="{{ $settings->instagram }}">
                                    <i class="fa fa-fw fa-instagram"></i>
                                </a>
                            </li>
                        @endif
                            @if($settings->whatsapp)
                            <li>
                                <a class="" target="_blank" href="{{ $settings->whatsapp }}">
                                    <i class="fa fa-fw fa-whatsapp"></i>
                                </a>
                            </li>
                        @endif
                            @if($settings->youtube)
                            <li>
                                <a class="" target="_blank" href="{{ $settings->youtube }}">
                                    <i class="fa fa-fw fa-youtube"></i>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- tt-mobile menu -->