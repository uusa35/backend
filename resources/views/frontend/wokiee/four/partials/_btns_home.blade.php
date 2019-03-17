<div class="row">
    <div class="col">
    </div>
    <div class="col-12" style="padding: 50px;">
        <div class="tt-offset-small container-indent element-padding-bottom">
            <div class="container-fluid-custom">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="{{ route('frontend.service.index') }}" class="tt-promo-box">
                            <img src="{{ asset(env('THUMBNAIL').$settings->logo) }}"
                                 data-src="{{ asset(env('THUMBNAIL').$settings->logo) }}"
                                 alt="{{ $settings->company }}"
                                 class="img-event-btn"
                            >
                            <div class="tt-description">
                                <div class="tt-description-wrapper">
                                    <div class="tt-background"></div>
                                    <div class="tt-title-small">{{ trans('general.create_event') }}</div>
                                    <div class="tt-title-large">{{ trans('message.create_event') }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12">
                        <a href="{{ route('frontend.service.search',['on_sale' => true]) }}" class="tt-promo-box">
                            <img src="{{ asset(env('THUMBNAIL').$settings->logo) }}"
                                 data-src="{{ asset(env('THUMBNAIL').$settings->logo) }}"
                                 alt="{{ $settings->company }}"
                                 class="img-event-btn"
                            >
                            <div class="tt-description">
                                <div class="tt-description-wrapper">
                                    <div class="tt-background"></div>
                                    <div class="tt-title-small">{{ trans('general.offers') }}</div>
                                    <div class="tt-title-large">{{ trans('message.offers_home_message') }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12">
                        <a href="{{ route('frontend.service.index') }}" class="tt-promo-box">
                            <img src="{{ asset(env('THUMBNAIL').$settings->logo) }}"
                                 data-src="{{ asset(env('THUMBNAIL').$settings->logo) }}"
                                 alt="{{ $settings->company }}"
                                 class="img-event-btn"
                            >
                            <div class="tt-description">
                                <div class="tt-description-wrapper">
                                    <div class="tt-background"></div>
                                    <div class="tt-title-small">{{ trans('general.designers') }}</div>
                                    <div class="tt-title-large">{{ trans('message.designers_home_message') }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
    </div>
</div>