<!-- FOOTER -->
<footer class="footer">
    <div class="footer-widgets">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="widget">
                        <h4 class="widget-title">{{ trans('general.aboutus') }}</h4>
                        <p>{{ trans('message.aboutus_message') }}</p>
                        <ul class="social-icons">
                            @if($settings->facebook)
                                <li><a href="{{ $settings->facebook }}" class="facebook">
                                        <i class="fa fa-facebook fa-3x" style="color : lightskyblue"></i>
                                    </a>
                                </li>
                            @endif
                            @if($settings->twitter)
                                <li><a href="{{ $settings->twitter }}" class="twitter">
                                        <img
                                                class=" img-xs"
                                                src="{{ asset('images/twitter.png') }}"
                                        >
                                    </a>
                                </li>
                            @endif
                            @if($settings->youtube)
                                <li><a href="{{ $settings->youtube }}" class="twitter">
                                        <img
                                                class=" img-xs"
                                                src="{{ asset('images/youtube.png') }}"
                                        >
                                    </a></li>
                            @endif
                            @if($settings->instagram)
                                <li><a href="{{ $settings->instagram}}" class="twitter">
                                        <img
                                                class="img-xs"
                                                src="{{ asset('images/instagram.png') }}"
                                        >
                                    </a></li>
                            @endif
                            @if($settings->whatsapp)
                                <li>
                                    <a href="https://api.whatsapp.com/send?phone={{ $settings->whatsapp  }}"
                                       class="instagram">
                                        <img
                                                class=" img-xs"
                                                src="{{ asset('images/whatsapp.png') }}"
                                        >
                                    </a></li>
                            @endif
                            @if($settings->snapchat)
                                <li><a href="{{ $settings->snapchat }}" class="snapchat">
                                        <img class=" img-xs" src="{{ asset('images/snap.png') }}"/></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget">
                        <h4 class="widget-title">{{ trans('general.information') }}</h4>
                        <ul>
                            @if($settings->phone)
                                <li><i class="fa fa-phone-square"></i> &nbsp;
                                    <a href="tel:{{ $settings->phone }}" class="hidden-md">{{ $settings->phone }}</a>
                                    <span class="visible-md">{{ $settings->phone }}</span>
                                </li>
                            @endif
                            @if($settings->email)
                                <li><i class="fa fa-inbox"></i> &nbsp;
                                    <a href="mailto:{{ $settings->email }}"
                                       class="hidden-md">{{ $settings->email }}</a>
                                    <span class="visible-md">{{ $settings->email }}</span>
                                </li>
                            @endif
                            @if($settings->mobile)
                                <li><i class="fa fa-mobile-phone"></i> &nbsp;
                                    <a href="tel:{{ $settings->mobile }}" class="hidden-md">{{ $settings->mobile }}</a>
                                    <span class="visible-md">{{ $settings->mobile }}</span>
                                </li>
                            @endif
                            @if($settings->whatsapp)
                                <li><img class="img-grey img-xxs" src="{{ asset('images/whatsapp.png') }}"/>
                                    &nbsp;
                                    <a href="https://api.whatsapp.com/send?phone={{ $settings->whatsapp  }}"
                                       class="hidden-md">{{ $settings->whatsapp }}</a>
                                    <span class="visible-md">{{ $settings->whatsapp }}</span>
                                </li>
                            @endif
                            @if($settings->address)
                                <li><i class="fa fa-location-arrow"></i> &nbsp; {{ $settings->address }}</li>
                            @endif
                            @if($settings->longitude && $settings->latitude)
                                <li>
                                    <i class="fa fa-map-marker"></i>&nbsp;
                                    <a href="https://www.google.com/maps/search/?api=1&query={{ $settings->latitude  }},{{ $settings->longitude }}"
                                       class="hidden-md">{{ trans('general.our_location') }}</a>
                                    <span class="visible-md">{{ trans('general.our_location')}}</span>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget widget-categories">
                        <h4 class="widget-title">{{ trans('general.pages') }}</h4>
                        <ul>
                            @foreach($pages->where('on_footer', true) as $page)
                                <li><a href="{{ $page->url }}">{{ $page->slug }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget widget-tag-cloud">
                        <h4 class="widget-title">{{ $settings->company }}</h4>
                        <div class="center-block text-center">
                            <a href="https://itunes.apple.com/kw/app/daily-dress/id1112697122?mt=8">
                                <img src="{{ asset('images/apple.png') }}" style="max-width: 100px; margin: 10px"
                                     alt="{{ $settings->company_ar .' '. $settings->company_en}}">
                            </a>
                            <a href="https://play.google.com/store/apps/details?id=com.dailydressapp">
                                <img src="{{ asset('images/google.png') }}" style="max-width: 100px; margin: 10px;"
                                     alt="{{ $settings->company_ar .' '. $settings->company_en}}">
                            </a>
                        </div>
                    </div>
                </div>
                @include('frontend.partials._branches_footer')
            </div>
        </div>
    </div>
    <div class="footer-meta">
        <div class="container">
            <div class="row">

                <div class="col-sm-6">
                    <div class="copyright">{{ trans("message.copy_right") }}</div>
                </div>
                <div class="col-sm-6">
                    <div class="payments">
                        <ul>
                            @if($currency->currency_symbol_en === 'KWD')
                                <li><img class="img-grey img-xs" src="{{ asset('img/k-net.png') }}" alt="knet"/></li>
                            @endif
                            <li><img class="img-xs" src="{{ asset('img/preview/payments/visa.jpg') }}"
                                     alt="{{ $settings->company }}"/>
                            </li>
                            <li><img class="img-xs" src="{{ asset('img/preview/payments/mastercard.jpg') }}"
                                     alt="{{ $settings->company }}"/></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
<div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>
<!-- /FOOTER -->
