@extends('backend.layouts.app')
@section('breadcrumbs')
    {{ Breadcrumbs::render('backend.timing.create') }}
@endsection
@section('content')
    <div class="portlet box blue">
        @include('backend.partials.forms.form_title')
        <div class="portlet-body">
            @include('backend.partials._admin_instructions',['title' => trans('general.timings') ,'message' => trans('message.new_timing')])
            <div class="portlet-body form">
                <form class="horizontal-form" role="form" method="POST" action="{{ route('backend.timing.store') }}"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <h3 class="form-section">{{ trans('general.new_timing') }}</h3>
                        <div class="portlet box blue">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i> {{ trans('general.timing_main_details') }}
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <div class="form-body">
                                    <div class="row">
                                        {{--<div class="col-md-4">--}}
                                        {{--<div class="form-group {{ $errors->has('day') ? ' has-error' : '' }}">--}}
                                        {{--<label for="day" class="control-label">{{ trans('general.day') }}*</label>--}}
                                        {{--<input id="day" type="text" class="form-control" day="day" value="{{ old('day') }}" placeholder="{{ trans('general.day') }}" required autofocus>--}}
                                        {{--@if ($errors->has('day'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>--}}
                                        {{--{{ $errors->first('day') }}--}}
                                        {{--</strong>--}}
                                        {{--</span>--}}
                                        {{--@endif--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4">--}}
                                        {{--<div class="form-group {{ $errors->has('day_name_ar') ? ' has-error' : '' }}">--}}
                                        {{--<label for="day_name_ar" class="control-label">{{ trans('general.day_name_ar') }}*</label>--}}
                                        {{--<input id="day_name_ar" type="text" class="form-control" day="day_name_ar" value="{{ old('day_name_ar') }}" placeholder="{{ trans('general.day_name_ar') }}" required autofocus>--}}
                                        {{--@if ($errors->has('day_name_ar'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>--}}
                                        {{--{{ $errors->first('day_name_ar') }}--}}
                                        {{--</strong>--}}
                                        {{--</span>--}}
                                        {{--@endif--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4">--}}
                                        {{--<div class="form-group {{ $errors->has('day_name_en') ? ' has-error' : '' }}">--}}
                                        {{--<label for="day_name_en" class="control-label">{{ trans('general.day_name_en') }}*</label>--}}
                                        {{--<input id="day_name_en" type="text" class="form-control" day="day_name_en" value="{{ old('day_name_en') }}" placeholder="{{ trans('general.day_name_en') }}" required autofocus>--}}
                                        {{--@if ($errors->has('day_name_en'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>--}}
                                        {{--{{ $errors->first('day_name_en') }}--}}
                                        {{--</strong>--}}
                                        {{--</span>--}}
                                        {{--@endif--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        <div class="col-md-4">
                                            <div class="form-group {{ $errors->has('start') ? ' has-error' : '' }}">
                                                <label for="start" class="control-label">{{ trans('general.start') }}
                                                    *</label>
                                                <div class="col">
                                                    <div class="input-group">
                                                        <input id="start" type="text"
                                                               class="form-control timepicker timepicker-24"
                                                               name="start"
                                                               value="{{ old('start') }}"
                                                               placeholder="{{ trans('general.start') }}" required
                                                               autofocus>
                                                        <span class="input-group-btn">
                                                    <button class="btn default" type="button">
                                                        <i class="fa fa-clock-o"></i>
                                                    </button>
                                                </span>
                                                    </div>
                                                </div>
                                                @if ($errors->has('start'))
                                                    <span class="help-block">
                                            <strong>
                                                {{ $errors->first('start') }}
                                            </strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group {{ $errors->has('end') ? ' has-error' : '' }}">
                                                <label for="end" class="control-label">{{ trans('general.end') }}
                                                    *</label>
                                                <div class="col">
                                                    <div class="input-group">
                                                        <input id="end" type="text"
                                                               class="form-control timepicker timepicker-24" name="end"
                                                               value="{{ old('end') }}"
                                                               placeholder="{{ trans('general.end') }}" required
                                                               autofocus>
                                                        <span class="input-group-btn">
                                                    <button class="btn default" type="button">
                                                        <i class="fa fa-clock-o"></i>
                                                    </button>
                                                </span>
                                                    </div>
                                                </div>
                                                @if ($errors->has('end'))
                                                    <span class="help-block">
                                            <strong>
                                                {{ $errors->first('end') }}
                                            </strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                        {{--<div class="col-md-4">--}}
                                        {{--<div class="form-group {{ $errors->has('type') ? ' has-error' : '' }}">--}}
                                        {{--<label for="type" class="control-label">{{ trans('general.type') }}*</label>--}}
                                        {{--<input id="type" type="text" class="form-control" day="type" value="{{ old('type') }}" placeholder="{{ trans('general.type') }}" required autofocus>--}}
                                        {{--@if ($errors->has('type'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>--}}
                                        {{--{{ $errors->first('type') }}--}}
                                        {{--</strong>--}}
                                        {{--</span>--}}
                                        {{--@endif--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group {{ $errors->has('notes_ar') ? ' has-error' : '' }}">
                                                <label for="notes_ar"
                                                       class="control-label">{{ trans('general.notes_ar') }}
                                                    *</label>
                                                <input id="notes_ar" type="text" class="form-control" name="notes_ar"
                                                       value="{{ old('notes_ar') }}"
                                                       placeholder="{{ trans('general.notes_ar') }}" required autofocus>
                                                @if ($errors->has('notes_ar'))
                                                    <span class="help-block">
                                            <strong>
                                                {{ $errors->first('notes_ar') }}
                                            </strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group {{ $errors->has('notes_en') ? ' has-error' : '' }}">
                                                <label for="notes_en"
                                                       class="control-label">{{ trans('general.notes_en') }}
                                                    *</label>
                                                <input id="notes_en" type="text" class="form-control" name="notes_en"
                                                       value="{{ old('notes_en') }}"
                                                       placeholder="{{ trans('general.notes_en') }}" required autofocus>
                                                @if ($errors->has('notes_en'))
                                                    <span class="help-block">
                                            <strong>
                                                {{ $errors->first('notes_en') }}
                                            </strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                        {{--<div class="col-md-4">--}}
                                        {{--<div class="form-group {{ $errors->has('week_start') ? ' has-error' : '' }}">--}}
                                        {{--<label for="week_start" class="control-label">{{ trans('general.week_start') }}*</label>--}}
                                        {{--<input id="week_start" type="text" class="form-control" day="week_start" value="{{ old('week_start') }}" placeholder="{{ trans('general.week_start') }}" required autofocus>--}}
                                        {{--@if ($errors->has('week_start'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>--}}
                                        {{--{{ $errors->first('week_start') }}--}}
                                        {{--</strong>--}}
                                        {{--</span>--}}
                                        {{--@endif--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4">--}}
                                        {{--<div class="form-group {{ $errors->has('day_no') ? ' has-error' : '' }}">--}}
                                        {{--<label for="day_no" class="control-label">{{ trans('general.day_no') }}--}}
                                        {{--*</label>--}}
                                        {{--<input id="day_no" type="day_no" class="form-control" day="day_no" value="" placeholder="{{ trans('general.day_no') }}" required autofocus>--}}
                                        {{--@if ($errors->has('day_no'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>--}}
                                        {{--{{ $errors->first('day_no') }}--}}
                                        {{--</strong>--}}
                                        {{--</span>--}}
                                        {{--@endif--}}
                                        {{--</div>--}}
                                        {{--</div>--}}


                                    </div>
                                    <div class="row">
                                        @can('isAdminOrAbove')
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="single"
                                                           class="control-label">{{ trans('general.user') }}</label>
                                                    <select id="single" class="form-control select2"
                                                            name="user_id">
                                                        <option value="">{{ trans('general.choose_company') }}</option>
                                                        @foreach($users as $user)
                                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="single"
                                                           class="control-label">{{ trans('general.service') }}</label>
                                                    <select id="single" class="form-control select2"
                                                            name="service_id">
                                                        <option value="">{{ trans('general.choose_service') }}</option>
                                                        @foreach($services as $service)
                                                            <option value="{{ $service->id }}">{{ $service->name_ar }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        @else
                                            <input type="hidden" value="{{ auth()->user()->id }}"
                                                   name="user_id">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="single"
                                                           class="control-label">{{ trans('general.service') }}</label>
                                                    <select id="single" class="form-control select2"
                                                            name="service_id">
                                                        <option value="">{{ trans('general.choose_service') }}</option>
                                                        @foreach($services->where('user_id', auth()->id()) as $service)
                                                            <option value="{{ $service->id }}">{{ $service->name_ar }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        @endcan
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="single"
                                                       class="control-label">{{ trans('general.day') }}</label>
                                                <select id="single" class="form-control select2" name="day_id">
                                                    <option value="">{{ trans('general.choose_day_of_service') }}</option>
                                                    @foreach($days as $day)
                                                        <option value="{{ $day->id }}">{{ $day->day }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label sbold">{{ trans('general.is_off') }}</label></br>
                                                <label class="radio-inline">
                                                    <input type="radio" name="is_off" id="optionsRadios1"
                                                           value="1">
                                                    is_off
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="is_off" id="optionsRadios2"
                                                           checked
                                                           value="0">
                                                    not_is_off</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label sbold">{{ trans('general.allow_multi_select') }}</label></br>
                                                <label class="radio-inline">
                                                    <input type="radio" name="allow_multi_select"
                                                           id="optionsRadios1"
                                                           value="1"> allow_multiselect </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="allow_multi_select"
                                                           id="optionsRadios2"
                                                           checked value="0"> not_allow_multiselect</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label sbold">{{ trans('general.is_available') }}</label></br>
                                                <label class="radio-inline">
                                                    <input type="radio" name="is_available" id="optionsRadios1"
                                                           value="1">
                                                    is_available </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="is_available" id="optionsRadios2"
                                                           checked
                                                           value="0"> not_is_available</label>
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
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script src="{{ mix('js/datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-timepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/clockface.js') }}"></script>
@endsection