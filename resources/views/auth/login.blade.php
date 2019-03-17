@extends('frontend.wokiee.four.layouts.app')

@section('breadcrumbs')
    {{--@include('frontend.wokiee.four.partials.breadcrumbs')--}}
    {{ Breadcrumbs::render('login') }}
    @endsection
@section('body')
        <div class="container-indent">
            <div class="container">
                <h1 class="tt-title-subpages noborder">{{ trans('general.already_registered') }}</h1>
                <div class="tt-login-form">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="tt-item">
                                <h2 class="tt-title">{{ trans('general.new_user') }}</h2>
                                <p>
                                    {{ trans('message.new_user') }}
                                </p>
                                <div class="form-group">
                                    <a href="{{ route('register') }}"
                                       class="btn btn-top btn-border">{{ trans('general.create_an_account') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="tt-item">
                                <h2 class="tt-title">{{ trans('general.login') }}</h2>
                                {{ trans('general.already_have_account') }}
                                <div class="form-default form-top">
                                    <form id="customer_login" method="post" novalidate="novalidate"
                                          action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="loginInputName">{{ trans('general.email') }} *</label>
                                            <div class="tt-required">* {{ trans('general.required_fields') }}</div>
                                            <input type="text" name="email"
                                                   class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                   id="loginInputName"
                                                   value="{{ old('email') }}"
                                                   placeholder="{{ trans('general.enter_your_email') }}" required
                                                   autofocus>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="password">{{ trans('general.password') }} *</label>
                                            <input type="text" name="passowrd" class="form-control" id="password"
                                                   placeholder="{{ trans('general.enter_your_password') }}">
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback"
                                                      role="alert"><strong>{{ $errors->first('password') }}</strong></span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="" for="remember">
                                                {{ trans('general.remember_me')}}
                                            </label>
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                   id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto mr-auto">
                                                <div class="form-group">
                                                    <button class="btn btn-border" type="submit">{{ trans('general.login') }}</button>
                                                </div>
                                            </div>
                                            <div class="col-auto align-self-end">
                                                <div class="form-group">
                                                    <ul class="additional-links">
                                                        <li>
                                                            <a href="{{ route('password.request') }}">{{ trans('general.forgot_your_password') }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
