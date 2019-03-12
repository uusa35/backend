<div class="col-12">
    <div class="col-12">
        <div class="tt-shopcart-box tt-boredr-large">
            <table class="tt-shopcart-table01">
                <tbody>
                <tr>
                    <div class="alert alert-warning">
                        <i class="fa fa-fw fa-info-circle fa-lg"></i>
                        {{ trans('message.payment_will_be_in_kuwaiti_dinar_only') }}
                    </div>
                </tr>
                <tr>
                    <th>{{ trans('general.total_price') }} {{ $currency->name }}</th>
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
            <a href="#" class="btn btn-lg"><span
                        class="icon icon-check_circle"></span>{{ trans('general.proceed_to_checkout') }}
            </a>
        </div>
    </div>
</div>