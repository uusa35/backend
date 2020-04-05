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
                <th>{{ trans('general.price') }}</th>
                <th>{{ trans('general.net_price') }}</th>
                <th>{{ trans('general.discount') }}</th>
                <th>{{ trans('general.shipment_reference') }}</th>
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
                <th>{{ trans('general.price') }}</th>
                <th>{{ trans('general.net_price') }}</th>
                <th>{{ trans('general.discount') }}</th>
                <th>{{ trans('general.shipment_reference') }}</th>
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
                                @if($meta->product && $meta->product_id)
                                    @if(!is_null($meta->product->product_attributes) && $meta->product->has_attributes)
                                        <div class="alert alert-success">
                                            {{ trans('general.id') }} : {{ $meta->product->id }}
                                            - {{ $meta->product->name}}
                                            <br>
                                            @if($meta->product_attribute && $meta->product_attribute->size)
                                                {{ trans('general.size') }}
                                                : {{ $meta->product_attribute->size->name_ar }}
                                                <br>
                                            @endif
                                            {{ trans('general.quantity') }} : {{ $meta->qty }}
                                        </div>
                                    @else
                                        <div class="alert alert-success">
                                            {{ trans('general.id') }} : {{ $meta->product->id }}
                                            - {{ $meta->product->name}}
                                            <br>
                                            @if($meta->product->size && $meta->product->show_attribute)
                                                {{ trans('general.size') }}
                                                : {{ $meta->product->size->name_ar }} <br>
                                            @endif
                                            {{ trans('general.quantity') }} : {{ $meta->qty }}
                                        </div>
                                    @endif
                                @elseif($meta->service && $meta->service_id)
                                    <div class="alert alert-warning">
                                        {{ $meta->service->name }} - {{ $meta->timing->day }}
                                        - {{ $meta->timing->start }} - {{ $meta->timing->end }}
                                    </div>
                                @else
                                    <div class="alert alert-warning">
                                        No Preview Product / Service Maybe Deleted
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </td>
                    <td>{{ $element->price}}</td>
                    <td>{{ $element->net_price}}</td>
                    <td>
                        <span class="label label-{{ $element->discount ?  'warning' : null }}">{{ $element->discount }}</span>
                    </td>
                    <td>{{ $element->shipment_reference}}</td>
                    <td>{{ $element->reference_id}}</td>
                    <td>
                        <span class="label label-{{ $element->status === 'success' ? 'success' : 'info' }}"> {{ $element->status }}</span></br>
                        <span class="label label-{{ $element->paid ? 'success' : 'danger' }}">{{ trans('general.is_paid') }} : {{ $element->paid ? 'Paid' : 'Not Paid'}}</span></br>
                        @if($element->cash_on_delivery)
                            <button disabled class="btn btn-danger">{{ trans('general.cash_on_delivery') }}</button>
                        @endif
                    </td>
                    <td>{{ $element->address }}</td>
                    <td><span class="label label-info">{{ $element->mobile }}</span></td>
                    <td><span class="label label-info">{{ $element->created_at->diffForHumans()}}</span></td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn green btn-xs btn-outline dropdown-toggle"
                                    data-toggle="dropdown"> {{ trans('general.actions') }}
                                <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li>
                                    <a href="{{ route('backend.admin.order.show',$element->id) }}">
                                        <i class="fa fa-fw fa-edit"></i> {{ trans('general.view_order') }}</a>
                                </li>
                                @if($element->paid || $element->cash_on_delivery)
                                    <li>
                                        <a href="{{ route('frontend.invoice.show',['id' => $element->id]) }}">
                                            <i class="fa fa-fw fa-edit"></i> {{ trans('general.see_invoice') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('backend.admin.order.status',['id' => $element->id,'status' => 'received']) }}">
                                            <i class="fa fa-fw fa-edit"></i> {{ trans('general.order_received') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('backend.admin.order.status',['id' => $element->id,'status' => 'under_process']) }}">
                                            <i class="fa fa-fw fa-edit"></i> {{ trans('general.order_under_process') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('backend.admin.order.status',['id' => $element->id,'status' => 'shipped']) }}">
                                            <i class="fa fa-fw fa-edit"></i> {{ trans('general.order_shipped') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('backend.admin.order.edit',$element->id) }}">
                                            <i class="fa fa-fw fa-edit"></i> {{ trans('general.add_shipment_reference') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('backend.admin.order.status',['id' => $element->id,'status' => 'delivered']) }}">
                                            <i class="fa fa-fw fa-edit"></i> {{ trans('general.order_delivered') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('backend.admin.order.status',['id' => $element->id,'status' => 'completed']) }}">
                                            <i class="fa fa-fw fa-edit"></i> {{ trans('general.order_completed') }}
                                        </a>
                                    </li>
                                @endif
                                <li>
                                    <a data-toggle="modal" href="#" data-target="#basic" data-title="Delete"
                                       data-content="Are you sure you want to delete order ? "
                                       data-form_id="delete-{{ $element->id }}">
                                        <i class="fa fa-fw fa-recycle"></i> {{ trans('general.delete') }}</a>
                                    <form method="post" id="delete-{{ $element->id }}"
                                          action="{{ route('backend.admin.order.destroy',$element->id) }}">
                                        @csrf
                                        <input type="hidden" name="_method" value="delete"/>
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
