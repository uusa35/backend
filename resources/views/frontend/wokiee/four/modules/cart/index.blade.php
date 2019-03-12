@extends('frontend.wokiee.four.layouts.app')

@section('breadcrumbs')
    {{ Breadcrumbs::render('frontend.cart.index') }}
@endsection

@section('body')
    <div class="container">
        <h1 class="tt-title-subpages noborder">{{ trans('general.shopping_cart') }}</h1>
        <div class="tt-shopcart-table-02">
            <table>
                <tbody>
                <tr>
                    <td>{{ trans('general.item') }}</td>
                    <td></td>
                    <td>{{ trans('general.company_name') }}</td>
                    <td>{{ trans('general.total_price') }}</td>
                    <td>{{ trans('general.remove') }}</td>
                </tr>
                @if($elements->isNotEmpty())
                    @foreach($elements as $element)
                        <tr>
                            <td>
                                <div class="tt-product-img">
                                    <a href="{{ route('frontend.product.show.name',['id' => $element->element_id,'name' => $element->options->element->name]) }}">
                                        <img src="{{ asset(env('IMG_LOADER')) }}"
                                             data-src="{{ $element->options->element->imageThumbLink }}" alt="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <h2 class="tt-title">
                                    <a href="{{ route('frontend.product.show.name',['id' => $element->product_id,'name' => $element->options->element->name]) }}">
                                        {{ $element->options->element->name }}
                                    </a>
                                </h2>
                                <ul class="tt-list-description">
                                    @if($element->options->size)
                                        <li>{{ trans('general.size') }}: {{ $element->options->size->name }}</li>
                                    @endif
                                    @if($element->options->color)
                                        <li>{{ trans('general.color') }}: {{ $element->options->color->name }}</li>
                                    @endif
                                    @if($element->options->country_destination)
                                        <li>{{ trans('general.shipment_destination') }}
                                            : {{ $element->options->country_destination->slug }}
                                            {{ $element->options->element->shipment_package->id }} -
                                        </li>
                                    @endif
                                    @if($element->options->day_selected)
                                        <li>{{ trans('general.day_selected') }}
                                            : {{ $element->options->day_selected->format('d/m/Y') }}</li>
                                    @endif
                                    @if($element->options->timing)
                                        <li>{{ trans('general.start_time') }}
                                            : {{ $element->options->timing->start_time }}</li>
                                    @endif
                                    <li>
                                        <div class="tt-price">
                                            {{ trans('general.final_price') }}  {{ $element->options->element->convertedFinalPrice }} {{ $currency->symbol }}
                                        </div>
                                        <div class="tt-price">
                                            {{ trans('general.package_fee_price') }}  {{ getConvertedPrice($element->options->element->packageFeePrice) }} {{ $currency->symbol }}
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tt-price">
                                            {{ trans('general.qty') }} {{ $element->qty }}
                                        </div>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <div class="detach-quantity-desctope">
                                    <a href="{{ route('frontend.user.show.name',['user_id' => $element->options->user_id,'name' => $element->options->company]) }}">
                                        {{ $element->options->company }}
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="tt-price">
                                    {{ getConvertedPrice($element->price) }} {{ $currency->symbol }}
                                </div>
                            </td>
                            <td>
                                <a href="{{ route('frontend.cart.remove',$element->rowId) }}"
                                   class="icon-h-02"></a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td>
                            <div class="alert alert-warning">{{ trans('general.no_items_in_cart') }}</div>
                        </td>
                    </tr>
                @endif
                </tbody>
            </table>
            <div class="tt-shopcart-btn">
                <div class="col-left">
                    <a class="btn-link" href="{{ route('frontend.home') }}"><i
                                class="icon-e-19"></i>{{ trans('general.continue_shopping') }}</a>
                </div>
                <div class="col-right">
                    @if($elements->isNotEmpty())
                        <a class="btn-link" href="{{ route('frontend.cart.clear') }}"><i
                                    class="icon-h-02"></i>{{ trans('general.clear_cart') }}</a>
                        {{--<a class="btn-link" href="#"><i class="icon-h-48"></i>UPDATE CART</a>--}}
                    @endif
                </div>
            </div>
        </div>
        @if($elements->isNotEmpty())
            <div class="tt-shopcart-col">
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-info alert-block">
                            <div class="row" style="padding-top: 10px;">
                                <div class="col-lg-1">
                                    <h6>
                                        <i class="fa fa-2x fa-exclamation-triangle fa-fw"></i>
                                    </h6>
                                </div>
                                <div class="col-lg-11">
                                    <h6>
                                        <a href="{{ route('register') }}" class="align-content-center">
                                            {{ trans('message.change_address_for_destination') }}
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tt-shopcart-col">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="tt-shopcart-box">
                            <h4 class="tt-title">
                                {{ trans('general.estimated_shipping_cost') }}
                            </h4>
                            <p>{{ trans('message.enter_your_destination') }}</p>
                            <form class="form-default">
                                <div class="form-group">
                                    <label for="address_country">{{ trans('general.country') }} <sup>*</sup></label>
                                    <select id="address_country" class="form-control">
                                        <option>Austria</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="address_province">STATE/PROVINCE <sup>*</sup></label>
                                    <select id="address_province" class="form-control">
                                        <option>State/Province</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="address_zip">ZIP/POSTAL CODE <sup>*</sup></label>
                                    <input type="text" name="name" class="form-control" id="address_zip"
                                           placeholder="Zip/Postal Code">
                                </div>
                                <a href="#" class="btn btn-border">CALCULATE SHIPPING</a>
                                <p>
                                    There is one shipping rate available for Alabama, Tanzania, United Republic Of.
                                </p>
                                <ul class="tt-list-dot list-dot-large">
                                    <li><a href="#">International Shipping at $20.00</a></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                    {{--<div class="col-md-6 col-lg-4">--}}
                    {{--<div class="tt-shopcart-box">--}}
                    {{--<h4 class="tt-title">--}}
                    {{--NOTE--}}
                    {{--</h4>--}}
                    {{--<p>Add special instructions for your order...</p>--}}
                    {{--<form class="form-default">--}}
                    {{--<textarea class="form-control" rows="7"></textarea>--}}
                    {{--</form>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    <div class="col-md-12 col-lg-12">
                        <div class="tt-shopcart-box tt-boredr-large">
                            <table class="tt-shopcart-table01">
                                <tbody>
                                <tr>
                                    <th>{{ trans('general.total_price') }}</th>
                                    <td>{{ getConvertedPrice(Cart::total()) }} {{ $currency->symbol }}</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>{{ trans('general.total_price_in_kuwaiti_dinar') }}</th>
                                    <td>{{ Cart::total() }} {{ trans('general.kd') }}</td>
                                </tr>
                                </tfoot>
                            </table>
                            <a href="#" class="btn btn-lg"><span class="icon icon-check_circle"></span>{{ trans('general.proceed_to_checkout') }}</a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="alert alert-warning">
                            {{ trans('message.payment_will_be_in_kuwaiti_dinar_only') }}
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection