@extends('backend.layouts.app')
@section('breadcrumbs')
{{-- {{ Breadcrumbs::render('backend.color.create') }} --}}
@endsection
@section('content')
<div class="portlet box blue">
    @include('backend.partials.forms.form_title')
    <div class="portlet-body form">
        <form class="horizontal-form" role="form" method="POST" action="{{ route('backend.branch.store') }}">
            @csrf
            <div class="form-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group{{ $errors->has('name_ar') ? ' has-error' : '' }}">
                            <label for="name_ar" class="col-md-4 control-label">{{ trans('general.name_ar') }}*</label>

                            <input id="name_ar" type="text" class="form-control" name="name_ar" value="{{ old('name_ar') }}" placeholder="{{ trans('general.name_ar') }}" required autofocus>
                            @if ($errors->has('name_ar'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('name_ar') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group{{ $errors->has('name_en') ? ' has-error' : '' }}">
                            <label for="name_en" class="col-md-4 control-label">{{ trans('general.name_en') }}*</label>

                            <input id="name_en" type="text" class="form-control" name="name_en" value="{{ old('name_en') }}" placeholder="{{ trans('general.name_en') }}" required autofocus>
                            @if ($errors->has('name_en'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('name_en') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group{{ $errors->has('address_ar') ? ' has-error' : '' }}">
                            <label for="address_ar" class="col-md-4 control-label">{{ trans('general.address_ar') }}* </label>

                            <input id="address_ar" type="text" class="form-control" name="address_ar" value="{{ old('address_ar') }}" placeholder="{{ trans('general.address_ar') }}" required autofocus>
                            @if ($errors->has('address_ar'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('address_ar') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group{{ $errors->has('address_en') ? ' has-error' : '' }}">
                            <label for="address_en" class="col-md-4 control-label">{{ trans('general.address_en') }}* </label>

                            <input id="address_en" type="text" class="form-control" name="address_en" value="{{ old('address_en') }}" placeholder="{{ trans('general.address_en') }}" required autofocus>
                            @if ($errors->has('address_en'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('address_en') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="form-group{{ $errors->has('description_ar') ? ' has-error' : '' }}">
                            <label for="description_ar" class="col-md-4 control-label">{{ trans('general.description_ar') }}* </label>

                            <input id="description_ar" type="text" class="form-control" name="description_ar" value="{{ old('description_ar') }}" placeholder="{{ trans('general.description_ar') }}" required autofocus>
                            @if ($errors->has('description_ar'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('description_ar') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group{{ $errors->has('description_en') ? ' has-error' : '' }}">
                            <label for="description_en" class="col-md-4 control-label">{{ trans('general.description_en') }}* </label>

                            <input id="description_en" type="text" class="form-control" name="description_en" value="{{ old('description_en') }}" placeholder="{{ trans('general.description_en') }}" required autofocus>
                            @if ($errors->has('description_en'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('description_en') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">{{ trans('general.phone') }}*</label>

                            <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="{{ trans('general.phone') }} " required autofocus>
                            @if ($errors->has('phone'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('phone') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                            <label for="mobile" class="col-md-4 control-label">{{ trans('general.mobile') }}*</label>

                            <input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" placeholder="{{ trans('general.mobile') }}" required autofocus>
                            @if ($errors->has('mobile'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('mobile') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group{{ $errors->has('longitude') ? ' has-error' : '' }}">
                            <label for="longitude" class="col-md-4 control-label">{{ trans('general.longitude') }}*</label>

                            <input id="longitude" type="text" class="form-control" name="longitude" value="{{ old('longitude') }}" placeholder="{{ trans('general.longitude') }}" autofocus>
                            @if ($errors->has('longitude'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('longitude') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group{{ $errors->has('latitude') ? ' has-error' : '' }}">
                            <label for="latitude" class="col-md-4 control-label">{{ trans('general.latitude') }}*</label>

                            <input id="latitude" type="text" class="form-control" name="latitude" value="{{ old('latitude') }}" placeholder="{{ trans('general.latitude') }}" autofocus>
                            @if ($errors->has('latitude'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('latitude') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="area_id">{{ trans('general.area') }}</label>
                            <select name="area_id" id="area_id" class="form-control">
                                @foreach($areas as $area)
                                <option value="{{ $area->id }}">{{ $area->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="user_id">{{ trans('general.user') }}</label>
                            <select name="user_id" id="user_id" class="form-control">
                                @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label sbold">{{ trans('general.active') }}</label></br>
                            <label class="radio-inline">
                                <input type="radio" name="active" id="optionsRadios1" value="1"> active </label>
                            <label class="radio-inline">
                                <input type="radio" name="active" id="optionsRadios2" checked value="0"> not_Active</label>
                        </div>
                    </div>
                </div>
                @include('backend.partials.forms._btn-group')
            </div>
        </form>
    </div>
</div>
@endsection 