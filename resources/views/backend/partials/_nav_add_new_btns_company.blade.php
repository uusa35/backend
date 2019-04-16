@can('product.create')
    <li>
        <a href="{{ route('backend.product.create') }}">
            <i class="icon-plus"></i> {{ trans('general.new_product') }}</a>
    </li>
@endcan
@can('service.create')
    <li>
        <a href="{{ route('backend.service.create') }}">
            <i class="icon-plus"></i> {{ trans('general.new_service') }}</a>
    </li>
@endcan