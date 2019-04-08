@extends('backend.layouts.app')


@section('breadcrumbs')
{{--{{ Breadcrumbs::render('backend.color.create') }} --}}
@endsection
@section('content')
<div class="portlet box blue">
    @include('backend.partials.forms.form_title')
    <div class="portlet-body form">
        <form class="horizontal-form" role="form" method="POST" action="{{ route('backend.admin.color.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                <div class="portlet box blue ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i> {{ trans('general.color_main_details') }}
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('name_ar') ? ' has-error' : '' }}">
                                        <label for="name_ar" class="control-label">{{ trans('general.name_ar') }}*</label>
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
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('name_en') ? ' has-error' : '' }}">
                                        <label for="name_en" class="control-label">{{ trans('general.name_en') }}*</label>
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
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('code') ? ' has-error' : '' }}">
                                        <label for="code" class="control-label">{{ trans('general.code') }}*</label>
                                        <input type="text" id="hue-demo" class="form-control demo" data-control="hue" name="code" value="#ff6161">
                                        @if ($errors->has('code'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('code') }}
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
                            <i class="fa fa-gift"></i> {{ trans('general.color_attributes_details') }}
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label sbold">{{ trans('general.active') }}</label></br>
                                        <label class="radio-inline">
                                            <input type="radio" name="active" id="optionsRadios3" checked value="1"> {{ trans('general.active') }}</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="active" id="optionsRadios4" value="0"> {{ trans('general.not_active') }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @include('backend.partials.forms._btn-group')
            </div>
    </div>
</div>
</form>
</div>
</div>
@endsection