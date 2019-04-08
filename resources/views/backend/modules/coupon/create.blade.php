@extends('backend.layouts.app')
@section('content')
<div class="portlet box blue">
    @include('backend.partials.forms.form_title')
    <div class="portlet-body form">
        <form class="horizontal-form" role="form" method="POST" action="{{ route('backend.coupon.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                <h3 class="form-section">{{ trans('general.create_coupon') }}</h3>
                {{--name arabic / name english --}}
                <div class="portlet box blue ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i> {{ trans('general.coupon_main_details') }}
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('value') ? ' has-error' : '' }}">
                                        <label for="value" class="control-label">{{ trans('general.value') }}*</label>
                                        <input id="value" type="number" class="form-control" max="99" maxlength="3" name="value" value="{{ old('value') }}" placeholder="{{ trans('general.value') }}" required autofocus>
                                        @if ($errors->has('value'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('value') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                                        <label for="code" class="control-label">{{ trans('general.code') }}*</label>
                                        <input id="code" type="text" class="form-control" name="code" value="{{ old('code') }}" placeholder="{{ trans('general.code') }}" required autofocus>
                                        @if ($errors->has('code'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('code') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('minimum_charge') ? ' has-error' : '' }}">
                                        <label for="minimum_charge" class="control-label">{{ trans('general.minimum_charge') }}*</label>
                                        <input id="minimum_charge" type="number" class="form-control" name="minimum_charge" value="{{ old('minimum_charge') }}" placeholder="{{ trans('general.minimum_charge') }}" maxlength="3" max="999" required autofocus>
                                        @if ($errors->has('minimum_charge'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('minimum_charge') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('due_date') ? ' has-error' : '' }}">
                                        <label for="due_date" class="control-label">{{ trans('general.due_date') }}*</label>
                                        <input id="due_date" type="date" class="form-control" name="due_date" value="{{ old('due_date') }}" placeholder="{{ trans('general.due_date') }}" maxlength="4" required autofocus>
                                        @if ($errors->has('due_date'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('due_date') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="duration" class="control-label">{{ trans('general.user') }} *</label>
                                            <select class="form-control input-xlarge" name="user_id" id="user" required>
                                                @foreach($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portlet box blue ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i> {{ trans('general.coupon_attributes_details') }}
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label sbold">{{ trans('general.active') }}</label></br>
                                        <label class="radio-inline">
                                            <input type="radio" name="active" id="optionsRadios1" value="1" {{ old('active') ? 'checked' : null }}> {{ trans('general.active') }} </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="active" id="optionsRadios2" {{ !old('active') ? 'checked' : null  }} value="0"> {{ trans('general.not_active') }}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label sbold">{{ trans('general.is_percentage') }}</label></br>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_percentage" id="optionsRadios3" value="1" {{ old('is_percentage')  ? 'checked' : null}}>
                                            {{ trans('general.is_percentage') }}</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_percentage" id="optionsRadios4" {{ !old('is_percentage') ? 'checked' : null }} value="0"> {{ trans('general.not_is_percentage') }}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label sbold">{{ trans('general.is_permanent') }}</label></br>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_permanent" id="optionsRadios5" value="1" {{ old('is_permanent')  ? 'checked' : null}}>
                                            {{ trans('general.is_permanent') }}</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_permanent" id="optionsRadios6" {{ !old('is_permanent') ? 'checked' : null }} value="0"> {{ trans('general.not_is_permanent') }}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label sbold">{{ trans('general.consumed') }}</label></br>
                                        <label class="radio-inline">
                                            <input type="radio" name="consumed" id="optionsRadios5" value="1" {{ old('consumed')  ? 'checked' : null}}>
                                            {{ trans('general.consumed') }}</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="consumed" id="optionsRadios6" {{ !old('consumed') ? 'checked' : null }} value="0"> {{ trans('general.not_consumed') }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('backend.partials.forms._btn-group')
    </div>
    </form>
</div>
</div>
@endsection