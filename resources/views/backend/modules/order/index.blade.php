@extends('backend.layouts.app')
@section('breadcrumbs')
{{ Breadcrumbs::render('backend.admin.order.index') }}
@endsection
@section('content')
<div class="portlet-body">
    <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>{{ trans('general.id') }}</th>
                <th>{{ trans('general.product_size_quantity') }}</th>
                <th>{{ trans('general.net_price') }}</th>
                <th>{{ trans('general.discount') }}</th>
                <th>{{ trans('general.price') }}</th>
                <th>{{ trans('general.shipment_package') }}</th>
                <th>{{ trans('general.reference_id') }}</th>
                <th>{{ trans('general.payment_status') }}</th>
                <th>{{ trans('general.address') }}</th>
                <th>{{ trans('general.mobile') }}</th>
                <th>{{ trans('general.created_at') }}</th>
                <th>{{ trans('general.actions') }}</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>{{ trans('general.id') }}</th>
                <th>{{ trans('general.product_size_quantity') }}</th>
                <th>{{ trans('general.net_price') }}</th>
                <th>{{ trans('general.discount') }}</th>
                <th>{{ trans('general.price') }}</th>
                <th>{{ trans('general.shipment_package') }}</th>
                <th>{{ trans('general.reference_id') }}</th>
                <th>{{ trans('general.payment_status') }}</th>
                <th>{{ trans('general.address') }}</th>
                <th>{{ trans('general.mobile') }}</th>
                <th>{{ trans('general.created_at') }}</th>
                <th>{{ trans('general.actions') }}</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach($elements as $element)
            <tr>
                <td>{{ $element->id }}</td>
                <td>
                    @if($element->order_metas->isNotEmpty())
                    @foreach($element->order_metas as $meta)
                    @if($meta->product)
                    <div class="alert alert-success">
                        {{ trans('general.id') }} : {{ $meta->product->id }} - {{ $meta->product->name}} <br>
                        {{ trans('general.size') }} : {{ $meta->product_attribute->size->name_ar }} <br>
                        {{ trans('general.quantity') }} : {{ $meta->qty }}
                    </div>
                    @else
                    <div class="alert alert-warning">Product No longer exists</div>
                    @endif
                    @endforeach
                    @endif
                </td>
                <td>{{ $element->net_price}}</td>
                <td>
                    <span class="label label-{{ $element->discount ?  'warning' : null }}">{{ $element->discount }}</span>
                </td>
                <td>{{ $element->price}}</td>
                <td>{{ $element->shipping_cost}}</td>
                <td>{{ $element->reference_id}}</td>
                <td><span class="label label-{{ $element->status === 'success' ? 'success' : 'info' }}">{{ $element->status }}</span></td>
                <td>{{ $element->address }}</td>
                <td><span class="label label-info">{{ $element->mobile }}</span></td>
                <td><span class="label label-info">{{ $element->created_at->diffForHumans()}}</span></td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn green btn-xs btn-outline dropdown-toggle" data-toggle="dropdown"> {{ trans('general.actions') }}
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <a href="{{ route('backend.admin.order.show',$element->id) }}">
                                    <i class="fa fa-fw fa-edit"></i> {{ trans('general.view_order') }}</a>
                            </li>
                            <li>
                                <a data-toggle="modal" href="#" data-target="#basic" data-title="Delete" data-content="Are you sure you want to delete order ? " data-form_id="delete-{{ $element->id }}">
                                    <i class="fa fa-fw fa-recycle"></i> {{ trans('general.delete') }}</a>
                                <form method="post" id="delete-{{ $element->id }}" action="{{ route('backend.admin.order.destroy',$element->id) }}">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete" />
                                    <button type="submit" class="btn btn-del hidden">
                                        <i class="fa fa-fw fa-times-circle"></i> {{ trans('general.delete') }}
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $elements->render() }}
</div>
@endsection