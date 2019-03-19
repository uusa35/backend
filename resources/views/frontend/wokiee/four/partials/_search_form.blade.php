@if(env('APP_CASE') === 'mallr')
    @include('frontend.wokiee.four.partials._search_menu_products')
@else
    @include('frontend.wokiee.four.partials._search_menu_services')
@endif
