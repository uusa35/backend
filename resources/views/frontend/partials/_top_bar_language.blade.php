<li class="dropdown flags hidden-xs">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ app()->isLocale('ar') ? asset('img/flags/kw.png') : asset('images/flags/us.png') }}" alt="{{ app()->getLocale() }}"/> {{ strtoupper(app()->getLocale()) }}<i class="fa fa-angle-down"></i></a>
    <ul role="menu" class="dropdown-menu">
        <li>
            <a href="{{ route('frontend.language.change',['locale' => 'ar']) }}">
                <img src="{{ asset('img/flags/kw.png') }}" alt=""/>
                {{ trans('general.arabic') }}
            </a>
        </li>
        <li>
            <a href="{{ route('frontend.language.change',['locale' => 'en']) }}">
                <img src="{{ asset('images/flags/us.png') }}" alt=""/>
                {{ trans('general.english') }}
            </a>
        </li>
    </ul>
</li>