@extends('backend.layouts.app')
@section('content')
<div class="portlet box blue">
    @include('backend.partials.forms.form_title')
    <div class="portlet-body form">
        <form class="horizontal-form" role="form" method="POST" action="{{ route('backend.admin.user.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="api_token" value="{{ str_random(rand(10,99)) }}">
            <div class="form-body">
                <h3 class="form-section">{{ trans('general.create_user') }}</h3>
                {{--name arabic / name english --}}
                <div class="portlet box blue ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i> {{ trans('general.user_main_details') }}
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name_ar" class="control-label">{{ trans('general.name') }}*</label>
                                        <input id="name_ar" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="{{ trans('general.name') }}" required autofocus>
                                        @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('name') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('slug_ar') ? ' has-error' : '' }}">
                                        <label for="slug_ar" class="control-label">{{ trans('general.slug_ar') }}*</label>
                                        <input id="slug_ar" type="text" class="form-control" name="slug_ar" value="{{ old('slug_ar') }}" placeholder="{{ trans('general.slug_ar') }}" required autofocus>
                                        @if ($errors->has('slug_ar'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('slug_ar') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('slug_en') ? ' has-error' : '' }}">
                                        <label for="slug_en" class="control-label">{{ trans('general.slug_en') }}*</label>
                                        <input id="slug_en" type="text" class="form-control" name="slug_en" value="{{ old('slug_en') }}" placeholder="{{ trans('general.slug_en') }}" required autofocus>
                                        @if ($errors->has('slug_en'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('slug_en') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description" class="control-label">{{ trans('general.description_arabic') }}</label>
                                        <textarea type="text" class="form-control" id="description_ar" name="description_ar" aria-multiline="true" maxlength="500" {{ old('description_ar') }}></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description" class="control-label">{{ trans('general.description_english') }}</label>
                                        <textarea type="text" class="form-control" id="description_en" name="description_en" aria-multiline="true" maxlength="500">{{ old('description_en') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('service_en') ? ' has-error' : '' }}">
                                        <label for="service_en" class="control-label">{{ trans('general.service_en') }}*</label>
                                        <input id="service_en" type="text" class="form-control" name="service_en" value="{{ old('service_en') }}" placeholder="{{ trans('general.service_en') }}" required autofocus>
                                        @if ($errors->has('service_en'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('service_en') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('service_ar') ? ' has-error' : '' }}">
                                        <label for="service_ar" class="control-label">{{ trans('general.service_ar') }}*</label>
                                        <input id="service_ar" type="text" class="form-control" name="service_ar" value="{{ old('service_ar') }}" placeholder="{{ trans('general.service_ar') }}" required autofocus>
                                        @if ($errors->has('service_ar'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('service_ar') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="control-label">{{ trans('general.password') }} *</label>
                                        <input id="password" type="password" class="form-control" name="password" value="" placeholder="{{ trans('general.password') }}" required autofocus>
                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('password') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                        <label for="password_confirmation" class="control-label">{{ trans('general.password_confirmation') }} *</label>
                                        <input id="password_confirmation" type="text" class="form-control" name="password_confirmation" value="" placeholder="{{ trans('general.password_confirmation') }}" required autofocus>
                                        @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('password_confirmation') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>


                                {{-- email + mobile --}}

                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="control-label">{{ trans('general.email') }} *</label>
                                        <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="{{ trans('general.email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('email') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                                        <label for="mobile" class="control-label">{{ trans('general.mobile') }} *</label>
                                        <input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" placeholder="{{ trans('general.mobile') }} " required autofocus>
                                        @if ($errors->has('mobile'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('mobile') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>


                                {{-- password + confirm password --}}

                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                        <label for="phone" class="control-label">{{ trans('general.phone') }}</label>
                                        <input id="phone" type="text" class="form-control" name="phone" placeholder="{{ trans('general.phone') }}" value="{{ old('phone') }}" autofocus>
                                        @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('phone') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('fax') ? ' has-error' : '' }}">
                                        <label for="fax" class="control-label">{{ trans('general.fax') }}</label>
                                        <input id="fax" type="text" class="form-control" name="fax" placeholder="{{ trans('general.fax') }}" value="{{ old('fax') }}" autofocus>
                                        @if ($errors->has('fax'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('fax') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="form_control_1">{{ trans('general.main_image') }}</label>
                                        <input type="file" class="form-control" name="image" placeholder="{{ trans('general.main_image') }}" required>
                                        <div class="help-block text-left">
                                            W * H - Best fit ['1080', '1440'] pixels
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="form_control_1">{{ trans('general.banner') }}</label>
                                        <input type="file" class="form-control" name="banner" placeholder="{{ trans('general.banner') }}" required>
                                        <div class="help-block text-left">
                                            W * H - Best fit ['1080', '1440'] pixels
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('bg') ? ' has-error' : '' }}">
                                        <label for="demo" class="control-label">{{ trans('general.bg') }}*</label>
                                        <input type="text" id="hue-demo" class="form-control demo" data-control="hue" name="bg" value="#ff6161">
                                        @if ($errors->has('demo'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('demo') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portlet box blue ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i> {{ trans('general.user_more_details') }}
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                        <label for="address" class="control-label">{{ trans('general.address') }}</label>
                                        <input id="address" type="text" class="form-control" name="address" placeholder="{{ trans('general.address') }}" value="{{ old('address') }}" autofocus>
                                        @if ($errors->has('address'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('address') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('area') ? ' has-error' : '' }}">
                                        <label for="area" class="control-label">{{ trans('general.area') }}</label>
                                        <input id="area" type="text" class="form-control" name="area" placeholder="{{ trans('general.area') }}" value="{{ old('area') }}" autofocus>
                                        @if ($errors->has('area'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('area') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('block') ? ' has-error' : '' }}">
                                        <label for="block" class="control-label">{{ trans('general.block') }}</label>
                                        <input id="block" type="text" class="form-control" name="block" placeholder="{{ trans('general.block') }}" value="{{ old('block') }}" autofocus>
                                        @if ($errors->has('block'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('block') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('street') ? ' has-error' : '' }}">
                                        <label for="street" class="control-label">{{ trans('general.street') }}</label>
                                        <input id="street" type="text" class="form-control" name="street" placeholder="{{ trans('general.street') }}" value="{{ old('street') }}" autofocus>
                                        @if ($errors->has('street'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('street') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('building') ? ' has-error' : '' }}">
                                        <label for="building" class="control-label">{{ trans('general.building') }}</label>
                                        <input id="building" type="text" class="form-control" name="building" placeholder="{{ trans('general.building') }}" value="{{ old('building') }}" autofocus>
                                        @if ($errors->has('building'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('building') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('floor') ? ' has-error' : '' }}">
                                        <label for="floor" class="control-label">{{ trans('general.floor') }}</label>
                                        <input id="floor" type="text" class="form-control" name="floor" placeholder="{{ trans('general.floor') }}" value="{{ old('floor') }}" autofocus>
                                        @if ($errors->has('floor'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('floor') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('apartment') ? ' has-error' : '' }}">
                                        <label for="apartment" class="control-label">{{ trans('general.apartment') }}</label>
                                        <input id="apartment" type="text" class="form-control" name="apartment" placeholder="{{ trans('general.apartment') }}" value="{{ old('apartment') }}" autofocus>
                                        @if ($errors->has('apartment'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('apartment') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="single" class="control-label">{{ trans('general.country') }}</label>
                                        <select id="single" class="form-control select2">
                                            <option></option>

                                            @foreach($countries as $country)
                                            <option value="{{ $country->slug_en }}">{{ $country->slug_en }}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portlet box blue ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i> {{ trans('general.user_role_details') }}
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="single" class="control-label">{{ trans('general.role') }}</label>
                                                <select id="single" class="form-control select2">
                                                    <option></option>

                                                    @foreach($roles as $role)
                                                    <option value="{{ $country->slug_en }}">{{ $role->slug_en }}</option>
                                                    @endforeach


                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group{{ $errors->has('policy_ar') ? ' has-error' : '' }}">
                                                <label for="policy_ar" class="control-label">{{ trans('general.policy_ar') }}</label>
                                                <input id="policy_ar" type="text" class="form-control" name="policy_ar" placeholder="{{ trans('general.policy_ar') }}" value="{{ old('policy_ar') }}" autofocus>
                                                @if ($errors->has('policy_ar'))
                                                <span class="help-block">
                                                    <strong>
                                                        {{ $errors->first('policy_ar') }}
                                                    </strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group{{ $errors->has('policy_en') ? ' has-error' : '' }}">
                                                <label for="policy_en" class="control-label">{{ trans('general.policy_en') }}</label>
                                                <input id="policy_en" type="text" class="form-control" name="policy_en" placeholder="{{ trans('general.policy_en') }}" value="{{ old('policy_en') }}" autofocus>
                                                @if ($errors->has('policy_en'))
                                                <span class="help-block">
                                                    <strong>
                                                        {{ $errors->first('policy_en') }}
                                                    </strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group{{ $errors->has('cancellation_ar') ? ' has-error' : '' }}">
                                                <label for="cancellation_ar" class="control-label">{{ trans('general.cancellation_ar') }}</label>
                                                <input id="cancellation_ar" type="text" class="form-control" name="cancellation_ar" placeholder="{{ trans('general.cancellation_ar') }}" value="{{ old('cancellation_ar') }}" autofocus>
                                                @if ($errors->has('cancellation_ar'))
                                                <span class="help-block">
                                                    <strong>
                                                        {{ $errors->first('cancellation_ar') }}
                                                    </strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group{{ $errors->has('cancellation_en') ? ' has-error' : '' }}">
                                                <label for="cancellation_en" class="control-label">{{ trans('general.cancellation_en') }}</label>
                                                <input id="cancellation_en" type="text" class="form-control" name="cancellation_en" placeholder="{{ trans('general.cancellation_en') }}" value="{{ old('cancellation_en') }}" autofocus>
                                                @if ($errors->has('cancellation_en'))
                                                <span class="help-block">
                                                    <strong>
                                                        {{ $errors->first('cancellation_en') }}
                                                    </strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group{{ $errors->has('keywords') ? ' has-error' : '' }}">
                                                <label for="keywords" class="control-label">{{ trans('general.keywords') }}</label>
                                                <input id="keywords" type="text" class="form-control" name="keywords" placeholder="{{ trans('general.keywords') }}" value="{{ old('keywords') }}" autofocus>
                                                @if ($errors->has('keywords'))
                                                <span class="help-block">
                                                    <strong>
                                                        {{ $errors->first('keywords') }}
                                                    </strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group{{ $errors->has('path') ? ' has-error' : '' }}">
                                                <label for="path" class="control-label">{{ trans('general.path') }}</label>
                                                <input id="path" type="text" class="form-control" name="path" placeholder="{{ trans('general.path') }}" value="{{ old('path') }}" autofocus>
                                                @if ($errors->has('path'))
                                                <span class="help-block">
                                                    <strong>
                                                        {{ $errors->first('path') }}
                                                    </strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="portlet box blue ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i> {{ trans('general.user_address_details') }}
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                                                <label for="website" class="control-label">{{ trans('general.website') }}</label>
                                                <input id="website" type="text" class="form-control" name="website" placeholder="{{ trans('general.website') }}" value="{{ old('website') }}" autofocus>
                                                @if ($errors->has('website'))
                                                <span class="help-block">
                                                    <strong>
                                                        {{ $errors->first('website') }}
                                                    </strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group{{ $errors->has('facebook') ? ' has-error' : '' }}">
                                                <label for="facebook" class="control-label">{{ trans('general.facebook') }}</label>
                                                <input id="facebook" type="text" class="form-control" name="facebook" placeholder="{{ trans('general.facebook') }}" value="{{ old('facebook') }}" autofocus>
                                                @if ($errors->has('facebook'))
                                                <span class="help-block">
                                                    <strong>
                                                        {{ $errors->first('facebook') }}
                                                    </strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group{{ $errors->has('instagram') ? ' has-error' : '' }}">
                                                <label for="instagram" class="control-label">{{ trans('general.instagram') }}</label>
                                                <input id="instagram" type="text" class="form-control" name="instagram" placeholder="{{ trans('general.instagram') }}" value="{{ old('instagram') }}" autofocus>
                                                @if ($errors->has('instagram'))
                                                <span class="help-block">
                                                    <strong>
                                                        {{ $errors->first('instagram') }}
                                                    </strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group{{ $errors->has('youtube') ? ' has-error' : '' }}">
                                                <label for="youtube" class="control-label">{{ trans('general.youtube') }}</label>
                                                <input id="youtube" type="text" class="form-control" name="youtube" placeholder="{{ trans('general.youtube') }}" value="{{ old('youtube') }}" autofocus>
                                                @if ($errors->has('youtube'))
                                                <span class="help-block">
                                                    <strong>
                                                        {{ $errors->first('youtube') }}
                                                    </strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group{{ $errors->has('twitter') ? ' has-error' : '' }}">
                                                <label for="twitter" class="control-label">{{ trans('general.twitter') }}</label>
                                                <input id="twitter" type="text" class="form-control" name="twitter" placeholder="{{ trans('general.twitter') }}" value="{{ old('twitter') }}" autofocus>
                                                @if ($errors->has('twitter'))
                                                <span class="help-block">
                                                    <strong>
                                                        {{ $errors->first('twitter') }}
                                                    </strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group{{ $errors->has('whatsapp') ? ' has-error' : '' }}">
                                                <label for="whatsapp" class="control-label">{{ trans('general.whatsapp') }}</label>
                                                <input id="whatsapp" type="text" class="form-control" name="whatsapp" placeholder="{{ trans('general.whatsapp') }}" value="{{ old('whatsapp') }}" autofocus>
                                                @if ($errors->has('whatsapp'))
                                                <span class="help-block">
                                                    <strong>
                                                        {{ $errors->first('whatsapp') }}
                                                    </strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group{{ $errors->has('iphone') ? ' has-error' : '' }}">
                                                <label for="iphone" class="control-label">{{ trans('general.iphone') }}</label>
                                                <input id="iphone" type="text" class="form-control" name="iphone" placeholder="{{ trans('general.iphone') }}" value="{{ old('iphone') }}" autofocus>
                                                @if ($errors->has('iphone'))
                                                <span class="help-block">
                                                    <strong>
                                                        {{ $errors->first('iphone') }}
                                                    </strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group{{ $errors->has('android') ? ' has-error' : '' }}">
                                                <label for="android" class="control-label">{{ trans('general.android') }}</label>
                                                <input id="android" type="text" class="form-control" name="android" placeholder="{{ trans('general.android') }}" value="{{ old('android') }}" autofocus>
                                                @if ($errors->has('android'))
                                                <span class="help-block">
                                                    <strong>
                                                        {{ $errors->first('android') }}
                                                    </strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group{{ $errors->has('longitude') ? ' has-error' : '' }}">
                                                <label for="longitude" class="control-label">{{ trans('general.longitude') }}</label>
                                                <input id="longitude" type="text" class="form-control" name="longitude" placeholder="{{ trans('general.longitude') }}" value="{{ old('longitude') }}" autofocus>
                                                @if ($errors->has('longitude'))
                                                <span class="help-block">
                                                    <strong>
                                                        {{ $errors->first('longitude') }}
                                                    </strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group{{ $errors->has('latitude') ? ' has-error' : '' }}">
                                                <label for="latitude" class="control-label">{{ trans('general.latitude') }}</label>
                                                <input id="latitude" type="text" class="form-control" name="latitude" placeholder="{{ trans('general.latitude') }}" value="{{ old('latitude') }}" autofocus>
                                                @if ($errors->has('latitude'))
                                                <span class="help-block">
                                                    <strong>
                                                        {{ $errors->first('latitude') }}
                                                    </strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group{{ $errors->has('balance') ? ' has-error' : '' }}">
                                                <label for="balance" class="control-label">{{ trans('general.balance') }}</label>
                                                <input id="balance" type="text" class="form-control" name="balance" placeholder="{{ trans('general.balance') }}" value="{{ old('balance') }}" autofocus>
                                                @if ($errors->has('balance'))
                                                <span class="help-block">
                                                    <strong>
                                                        {{ $errors->first('balance') }}
                                                    </strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="portlet box blue ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i> {{ trans('general.product_main_details') }}
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label sbold">{{ trans('general.active') }}</label></br>
                                                <label class="radio-inline">
                                                    <input type="radio" name="active" id="optionsRadios1" value="1"> active </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="active" id="optionsRadios2" checked value="0"> not_Active</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label sbold">{{ trans('general.on_home') }}</label></br>
                                                <label class="radio-inline">
                                                    <input type="radio" name="on_home" id="optionsRadios1" value="1"> on_home </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="on_home" id="optionsRadios2" checked value="0"> not_on_home</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            @include('backend.partials.forms._btn-group')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
        </form>
    </div>
</div>
@endsection