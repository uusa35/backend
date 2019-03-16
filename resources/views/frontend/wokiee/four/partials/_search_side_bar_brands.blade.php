@if($brands->isNotEmpty())
    <div class="tt-collapse open">
        <h3 class="tt-collapse-title">{{ trans('general.filter_by_categories') }}</h3>
        <div class="tt-collapse-content">
            <ul class="tt-filter-list">
                @foreach($brands as $brand)
                    <li class="active">
                        <a href="{!! request()->fullUrlWithQuery(['brand_id' => $brand->id]) !!}">{{ $brand->name }}</a>
                    </li>
                @endforeach
            </ul>
            <a href="#" class="btn-link-02">{{ trans('general.clear_all') }}</a>
        </div>
    </div>
@endif