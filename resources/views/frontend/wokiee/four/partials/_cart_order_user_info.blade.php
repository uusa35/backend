<div class="container">
    <div class="tt-login-form">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="tt-item">
                    <h2 class="tt-title text-center border-bottom">{{ trans('general.personal_information') }}</h2>
                    <div class="form-default">
                        <form method="post"
                              action="{{ route('frontend.order.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="loginInputName">{{ trans('general.name') }} *</label>
                                        <input type="text" name="name" class="form-control" id="loginInputName"
                                               value="{{ auth()->guest() ? old('name') : auth()->user()->name }}"
                                               required
                                               placeholder="{{ trans('general.name') }}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="loginInputEmail">{{ trans('general.email') }} *</label>
                                        <input type="text" name="email" class="form-control" id="loginInputEmail"
                                               value="{{ auth()->guest() ? old('email') : auth()->user()->email }}"
                                               required
                                               placeholder="{{ trans('general.email') }}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="loginLastName">{{ trans('general.mobile') }} *</label>
                                        <input type="text" name="mobile" class="form-control" id="loginLastName"
                                               value="{{ auth()->guest() ? old('mobile') : auth()->user()->mobile }}"
                                               required
                                               placeholder="{{ trans('general.mobile') }}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="loginInputPassword">{{ trans('general.full_address') }} *</label>
                                        <input type="text" name="address" class="form-control" id="loginInputPassword"
                                               value="{{ auth()->guest() ? old('address') : auth()->user()->address }}"
                                               required
                                               placeholder="{{ trans('general.address') }}">
                                    </div>
                                </div>
                                @if(getClientCountry())
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="address_country">{{ trans('general.country') }}
                                                <sup>*</sup></label>
                                            <select name="country_id" class="form-control" required>
                                                {{-- No Auth required as it's prevesiously done--}}
                                                <option value="{{ session()->get('country')->id }}"
                                                        selected>{{ session()->get('country')->slug }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    @if(session()->get('country')->is_local)
                                        @if(session()->has('area'))
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="address_country">{{ trans('general.area') }}
                                                        <sup>*</sup></label>
                                                    <select name="country_id" class="form-control" required>
                                                        {{-- No Auth required as it's prevesiously done--}}
                                                        <option value="{{ session()->get('area')->slug }}"
                                                                selected>{{ session()->get('area')->slug }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                @endif
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="notes">{{ trans('general.notes') }}</label>
                                        <textarea name="notes" class="form-control" style="height: 150px;" rows="1"
                                                  placeholder="{{ trans('general.notes') }}">{{ old('notes') }}</textarea>
                                    </div>
                                </div>
                            </div>
                            @include('frontend.wokiee.four.partials._cart_prices')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>