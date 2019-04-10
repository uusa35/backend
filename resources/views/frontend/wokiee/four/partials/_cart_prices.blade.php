<div class="tt-shopcart-box tt-boredr-large">
    <table class="tt-shopcart-table01">
        <tbody>
        @if(!$currency->country->is_local)
            <tr>
                <div class="alert alert-warning">
                    <i class="fa fa-fw fa-info-circle fa-lg"></i>
                    {{ trans('message.payment_will_be_in_kuwaiti_dinar_only') }}
                </div>
            </tr>
            <tr>
                <th>{{ trans('general.total_price') }} ({{ $currency->name }})</th>
                <td>{{ getConvertedPrice(Cart::total()) }} {{ $currency->symbol }}</td>
            </tr>
        @endif
        </tbody>
        <tfoot>
        @if(session()->has('coupon'))
            <tr>
                <th>{{ trans('general.discount') }}</th>
                <td>{{ session()->get('coupon')->value }} {{ trans('general.kd') }}</td>
            </tr>
        @endif
        <tr>
            <th>{{ trans('general.total_price_in_kuwaiti_dinar') }}</th>
            <td>{{ Cart::total() }} {{ trans('general.kd') }}</td>
        </tr>
        </tfoot>
    </table>
    <button type="submit" class="btn btn-lg"><span
                class="icon icon-check_circle"></span>{{ trans('general.proceed_to_checkout') }}
    </button>
</div>