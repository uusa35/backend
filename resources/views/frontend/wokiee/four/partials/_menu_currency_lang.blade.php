<div class="tt-desctop-parent-multi tt-parent-box">
    <div class="tt-multi-obj tt-dropdown-obj">
        <button class="tt-dropdown-toggle" data-tooltip="Settings" data-tposition="bottom"><i class="icon-f-79"></i>
        </button>
        <div class="tt-dropdown-menu">
            <div class="tt-mobile-add">
                <button class="tt-close">{{ trans('general.close') }}</button>
            </div>
            <div class="tt-dropdown-inner">
                <ul>
                    <li>
                        <strong class="border-bottom">{{ trans('general.country') }}</strong>
                    </li>
                    @foreach($countries as $country)
                        <li class="{{ getCurrentClientCountryId() === $country->id ? 'active' : null  }}">
                            <a href="{{ route('frontend.country.set',['country_id' => $country->id]) }}">{{ $country->slug }}</a>
                        </li>
                    @endforeach
                </ul>
                <ul>
                    <li>
                        <strong class="border-bottom">{{ trans('general.language') }}</strong>
                    </li>
                    <li class="{{ app()->isLocale('ar') ? 'active' : null }}"><a
                                href="{{ route('frontend.language.change',['locale' => 'ar']) }}">{{ trans('general.arabic') }}</a>
                    </li>
                    <li class="{{ app()->isLocale('en') ? 'active' : null }}"><a
                                href="{{ route('frontend.language.change',['locale' => 'en']) }}">{{ trans('general.english') }}</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <strong class="border-bottom">{{ trans('general.currency') }}</strong>
                    </li>
                    @foreach($currencies as $currency)
                        <li class="{{ getCurrencySymbol() === $currency->currency_symbol_en ? 'active' : null  }}">
                            <a href="{{ route('frontend.currency.change',['currency' => strtolower($currency->currency_symbol_en)]) }}">
                                <img class="img-responsive img-xxs"
                                     src="{{ asset(env('THUMBNAIL').$currency->country->flag) }}" alt="">
                                {{ $currency->name }}
                            </a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>