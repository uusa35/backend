<div class="container">
    <div class="tt-login-form">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="tt-item">
                    <h2 class="tt-title text-center border-bottom">{{ trans('general.personal_information_confirmation') }}</h2>
                    <div class="form-default">
                        <form method="post"
                              action="{{ route('frontend.order.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="loginInputName">{{ trans('general.name') }} *</label>
                                        <input type="text" name="name" class="form-control disabled"
                                               value="{{request()->name }}"
                                               required disabled
                                               placeholder="{{ trans('general.name') }}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="loginInputEmail">{{ trans('general.email') }} *</label>
                                        <input type="text" name="email" class="form-control"
                                               value="{{request()->email }}"
                                               required disabled
                                               placeholder="{{ trans('general.email') }}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="loginLastName">{{ trans('general.mobile') }} *</label>
                                        <input type="text" name="mobile" class="form-control"
                                               value="{{ request()->mobile }}"
                                               required disabled
                                               placeholder="{{ trans('general.mobile') }}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="loginInputPassword">{{ trans('general.full_address') }} *</label>
                                        <input type="text" name="address" class="form-control"
                                               value="{{request()->address }}"
                                               required disabled
                                               placeholder="{{ trans('general.address') }}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="address_country">{{ trans('general.country') }} <sup>*</sup></label>
                                        <select name="country_id" class="form-control" required disabled>
                                            @auth
                                                <option selected
                                                        value="{{ auth()->user()->country->id }}">{{ auth()->use()->country->slug }}</option>
                                            @else
                                                <option value="{{ getClientCountry()->id }}"
                                                        selected>{{ getClientCountry()->slug }}</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
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
                                <button type="submit" class="btn btn-lg"><span
                                            class="icon icon-check_circle"></span>{{ trans('general.confirm') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>