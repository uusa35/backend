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
                @foreach($elements as $element)
                    <tr>
                        <td>
                            <div class="tt-product-img">
                                <img src="{{ asset(env('IMG_LOADER')) }}"
                                     data-src="{{ $element->options->element->imageThumbLink }}" alt="">
                            </div>
                        </td>
                        <td>
                            <h2 class="tt-title">
                                <a href="#">{{ $element->options->element->name }}</a>
                            </h2>
                            <ul class="tt-list-description">
                                @if($element->options->size)
                                    <li>{{ trans('general.size') }}: {{ $element->options->size->name }}</li>
                                @endif
                                @if($element->options->color)
                                    <li>{{ trans('general.color') }}: {{ $element->options->color->name }}</li>
                                @endif
                                <li>
                                    <div class="tt-price">
                                        {{ trans('general.price') }}  {{ $element->options->element->finalPrice }} {{ trans('general.kd') }}
                                    </div>
                                </li>
                                <li>
                                    <div class="detach-quantity-mobile"></div>
                                </li>
                                <li>
                                    <div class="tt-price">
                                        {{ trans('general.qty') }} {{ $element->qty }}
                                    </div>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <div class="tt-price">
                                {{ $element->price * $element->qty }} {{ trans('general.kd') }}
                            </div>
                        </td>
                        <td>
                            <div class="detach-quantity-desctope">
                                {{ $element->options->company }}
                            </div>
                        </td>
                        <td>
                            <div class="tt-price subtotal">
                                $124
                            </div>
                        </td>
                        <td>
                            <a href="#" class="tt-btn-close"></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="tt-shopcart-btn">
                <div class="col-left">
                    <a class="btn-link" href="#"><i class="icon-e-19"></i>CONTINUE SHOPPING</a>
                </div>
                <div class="col-right">
                    <a class="btn-link" href="#"><i class="icon-h-02"></i>CLEAR SHOPPING CART</a>
                    <a class="btn-link" href="#"><i class="icon-h-48"></i>UPDATE CART</a>
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
                                    <option>Belgium</option>
                                    <option>Cyprus</option>
                                    <option>Croatia</option>
                                    <option>Czech Republic</option>
                                    <option>Denmark</option>
                                    <option>Finland</option>
                                    <option>France</option>
                                    <option>Germany</option>
                                    <option>Greece</option>
                                    <option>Hungary</option>
                                    <option>Ireland</option>
                                    <option>France</option>
                                    <option>Italy</option>
                                    <option>Luxembourg</option>
                                    <option>Netherlands</option>
                                    <option>Poland</option>
                                    <option>Portugal</option>
                                    <option>Slovakia</option>
                                    <option>Slovenia</option>
                                    <option>Spain</option>
                                    <option>United Kingdom</option>
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
                <div class="col-md-6 col-lg-4">
                    <div class="tt-shopcart-box">
                        <h4 class="tt-title">
                            NOTE
                        </h4>
                        <p>Add special instructions for your order...</p>
                        <form class="form-default">
                            <textarea class="form-control" rows="7"></textarea>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="tt-shopcart-box tt-boredr-large">
                        <table class="tt-shopcart-table01">
                            <tbody>
                            <tr>
                                <th>SUBTOTAL</th>
                                <td>$324</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>GRAND TOTAL</th>
                                <td>$324</td>
                            </tr>
                            </tfoot>
                        </table>
                        <a href="#" class="btn btn-lg"><span class="icon icon-check_circle"></span>PROCEED TO
                            CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection