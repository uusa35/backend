<div class="tt-btn-col-close">
    <a href="#">{{ trans("general.close") }}</a>
</div>
<div class="tt-collapse open tt-filter-detach-option">
    <div class="tt-collapse-content">
        <div class="filters-mobile">
            <div class="filters-row-select">
            </div>
        </div>
    </div>
</div>
<div class="tt-content-aside">
    <a href="{{ route('frontend.service.clear') }}" class="tt-promo-03 btn btn-border">
        {{ trans('general.clear_all') }}
    </a>
</div>
@include('frontend.wokiee.four.partials._search_side_bar_prices')
@include('frontend.wokiee.four.partials._search_side_bar_vendors')
@include('frontend.wokiee.four.partials._search_side_bar_areas')
@if(env('APP_CASE') === 'mallr')
    @include('frontend.wokiee.four.partials._search_side_bar_sizes')
    @include('frontend.wokiee.four.partials._search_side_bar_colors')
    @include('frontend.wokiee.four.partials._search_side_bar_product_categories')
@else
    @include('frontend.wokiee.four.partials._search_side_bar_service_categories')
@endif
@include('frontend.wokiee.four.partials._search_side_bar_tags')

<div class="tt-content-aside">
    <a href="listing-left-column.html" class="tt-promo-03">
        <img src="{{ $settings->imageLargeLink }}" alt="">
    </a>
</div>