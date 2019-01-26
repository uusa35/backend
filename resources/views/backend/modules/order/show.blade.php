@extends('backend.layouts.app')




@section('content')
    <div class="col-lg-12">
        <button onClick="window.print()" class="btn btn-warning">Print</button>
    </div>
    <div class="col-lg-12" style="background-color: white">
        <div class="col-lg-12" style="background-color: white">
            <div class="col-lg-12">
                <img class="img-med img-responsive center-block" src="{{ asset(env('THUMBNAIL').$settings->logo) }}"
                     alt="{{ $settings->company }}">
            </div>
            <br>
            <hr>
            <div class="col-lg-6 col-lg-push-3 col-sm-12">
                <table align="center" cellpadding="0" cellspacing="0" class="container-for-gmail-android"
                       width="100%">
                    <tr>
                        <td align="center" valign="top" width="100%" style="background-color: #f7f7f7;"
                            class="content-padding">
                            <center>
                                <table cellspacing="0" cellpadding="0" width="100%" class="w320">
                                    <tr>
                                        <td class="header-lg text-center">
                                            <h1 class="text-center">order details</h1>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                <tr>
                                                    <td class="mini-container-left">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tr>
                                                                <td class="mini-block-padding">
                                                                    <table cellspacing="0" cellpadding="0"
                                                                           width="100%"
                                                                           style="border-collapse:separate !important; margin: 20px;">
                                                                        <tr>
                                                                            <td class="mini-block"
                                                                                style="height: 170px;">
                                                                                <span class="header-sm">{{ trans('general.order_number') }}</span><br/>
                                                                                {{ $element->id }}<br/>
                                                                                <br/>
                                                                                <span class="header-sm">{{ trans('general.shipping_address') }}</span><br/>
                                                                                {{ $element->address}}<br/>
                                                                                <br/>
                                                                                @if($element->area)
                                                                                    <span class="header-sm">{{ trans('general.area') }}</span>
                                                                                    <br/>
                                                                                    {{ $element->area}}<br/>
                                                                                    <br/>
                                                                                @endif
                                                                                @if(!$element->receive_on_branch)
                                                                                    <span class="header-sm">{{ trans('general.shipment') }}
                                                                                        : {{ $element->shipping_cost }}</span>
                                                                                @else
                                                                                    <span class="header-sm">{{ trans('general.branch') }}
                                                                                        : {{ $element->branch->name }}</span>
                                                                                    <br/>
                                                                                    <span class="header-sm">{{ trans('general.delivery_branch_location') }}
                                                                                        <br/> {{ $element->branch->address }}</span>
                                                                                @endif
                                                                                <br/>
                                                                                <span class="header-sm">{{ trans('general.country') }}</span><br/>
                                                                                {{ $element->country }}<br/>
                                                                                <br/>
                                                                                <span class="header-sm">{{ trans('general.mobile') }}</span><br/>
                                                                                {{ $element->mobile}}<br/>
                                                                                <br/>
                                                                                <span class="header-sm">{{ trans('general.payment_method') }}</span>
                                                                                : {{ $element->payment_method }}
                                                                                <br/>
                                                                                <span class="header-sm">{{ trans('general.price') }}</span>
                                                                                :{{ $element->price }}
                                                                                <br/>
                                                                                <span class="header-sm">{{ trans('general.discount') }}
                                                                                    : {{ $element->discount }}</span>
                                                                                <br/>
                                                                                <span class="header-sm">{{ trans('general.net_price') }}</span>
                                                                                : {{ $element->net_price }}
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td class="mini-container-right">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tr>
                                                                <td class="mini-block-padding">
                                                                    <table cellspacing="0" cellpadding="0"
                                                                           width="100%"
                                                                           style="border-collapse:separate !important;">
                                                                        <tr>
                                                                            <td class="mini-block"
                                                                                style="height: 170px;">
                                                                                @if($element->user)
                                                                                    <span class="header-sm">{{ trans('general.name') }}</span>
                                                                                    <br/>
                                                                                    {{ $element->user->name  }} <br/>
                                                                                    <br/>
                                                                                    <span class="header-sm">{{ trans('general.email') }}</span>
                                                                                    <br/>
                                                                                    {{ $element->user->email  }} <br/>
                                                                                    <br/>
                                                                                @endif
                                                                                <span class="header-sm">{{ trans('general.order_date') }}</span><br/>
                                                                                {{ $element->updated_at }}
                                                                                <br/>
                                                                                <br/>
                                                                                @if(isset($coupon))
                                                                                    <span class="header-sm">{{ trans('general.coupon') }}</span>
                                                                                    <br/>
                                                                                    {{ $coupon->value }}
                                                                                @endif
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </center>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-lg-12">
            <td class="table-content table-responsive">
                <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0">
                    <thead>
                    <tr>
                        <th class="product-thumbnail hidden">{{ trans('cart.image') }}</th>
                        <th class="product-thumbnail">{{ trans('general.sku') }}</th>
                        <th class="product-thumbnail">{{ trans('cart.color') }}</th>
                        <th class="product-thumbnail">{{ trans('cart.size') }}</th>
                        <th class="product-name">{{ trans('cart.product_name') }}</th>
                        <th class="real-product-price">{{ trans('cart.unit_price') }}</th>
                        <th class="product-quantity">{{ trans('cart.qty') }}</th>
                        <th class="product-subtotal">{{ trans('cart.sub_total') }}</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($element->order_metas as $item)
                        @if($item->product)
                            <tr>
                                <td class="product-thumbnail hidden">
                                    <a href="{{ route('frontend.product.show',$item->product_id) }}">
                                        <img src="{{ asset('storage/uploads/images/thumbnail/'.$item->product->image) }}"
                                             width="100" height="100" alt="" class="img-rounded img-thumbnail"/>
                                    </a>
                                </td>

                                <td class="product-thumbnail">{{ $item->product->sku }}</td>
                                <td class="product-thumbnail">{{ $item->product_attribute->colorName }}</td>
                                </td>

                                <td class="product-thumbnail">
                                    {{ $item->product_attribute->sizeName }}
                                </td>

                                <td class="product-name">
                                    <a href="{{ route('frontend.product.show',$item->product_id) }}">{{ $item->product->name }}</a>
                                </td>

                                <td class="real-product-price">
                                    <span class="price">{{$item->price}} {{ trans('general.kd') }} </span>
                                    {{--<span class="amounte">{{ $item->options->product->sale_price }} KD </span>--}}
                                </td>

                                <td class="product-quantity">
                                    {{--<input type="number" name="quantity_{{$item->options->product->id}}" disabled="disabled"--}}
                                    {{--value="{{ $item->qty }}"/>--}}
                                    {{ $item->qty }}
                                </td>
                                <td class="product-subtotal">{{ number_format($item->price * $item->qty,'2','.',',') }} {{ trans('general.kd') }}</td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
        </div>
@endsection
