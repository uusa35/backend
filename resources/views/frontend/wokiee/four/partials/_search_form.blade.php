@if(request()->has('mallr'))
    @include('frontend.wokiee.four.partials._search_menu_products')
@elseif(request()->has('evento'))
    @include('frontend.wokiee.four.partials._search_menu_services')
@endif
