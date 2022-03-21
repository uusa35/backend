<header>
    @if(env('ISTORES'))
        @desktop
        @include('frontend.wokiee.four.partials._top_bar')
        @enddesktop
@else
    @include('frontend.wokiee.four.partials._top_bar')
@endif

{{--    @include('frontend.wokiee.four.partials._mobile_categories_menu')--}}
@if(env("ISTORES"))
    @include('frontend.wokiee.four.partials._istores_mobile_menu')
@else
    @include('frontend.wokiee.four.partials._mobile_menu')
@endif

@include('frontend.wokiee.four.partials._mobile_header')

@if(!env('MOBILE_LAYOUT'))
    @include('frontend.wokiee.four.partials._main_menu')
@endif
<!-- /tt-desktop-header -->
    <!-- stuck nav -->
    <div class="tt-stuck-nav">
        <div class="container">
            <div class="tt-header-row ">
                <div class="tt-stuck-desctop-menu-categories"></div>
                <div class="tt-stuck-parent-menu"></div>
                <div class="tt-stuck-mobile-menu-categories"></div>
                <div class="tt-stuck-parent-search tt-parent-box"></div>
                <div class="tt-stuck-parent-cart tt-parent-box"></div>
                <div class="tt-stuck-parent-account tt-parent-box"></div>
                <div class="tt-stuck-parent-multi tt-parent-box"></div>
            </div>
        </div>
    </div>
</header>
