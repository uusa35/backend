@extends('backend.layouts.app')


@section('content')
<div class="portlet box blue">
    @include('backend.partials.forms.form_title')
    <div class="portlet-body form">
        <form class="horizontal-form" role="form" method="POST" action="{{ route('backend.admin.brand.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label">{{ trans('general.name') }}*</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="{{ trans('general.name') }}" required autofocus>
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
                        <div class="form-group{{ $errors->has('slug_en') ? ' has-error' : '' }}">
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
                    <div class="col-md-4">
                        <div class="form-group{{ $errors->has('order') ? ' has-error' : '' }}">
                            <label for="order" class="control-label">{{ trans('general.order') }} *</label>
                            <input id="order" type="number" class="form-control" name="order" value="{{ old('order') }}" placeholder="{{ trans('general.order') }} " maxlength="2" autofocus>
                            @if ($errors->has('order'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('order') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="form_control_1">{{ trans('general.main_image') }}*</label>
                            <input type="file" class="form-control" name="image" placeholder="{{ trans('general.main_image') }}" required>
                            <div class="help-block text-left">
                                W * H - Best fit [1362 × 716] pixels
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label sbold">{{ trans('general.on_home') }}</label></br>
                            <label class="radio-inline">
                                <input type="radio" name="is_home" id="optionsRadios3" value="1"> {{ trans('general.on_home') }}</label>
                            <label class="radio-inline">
                                <input type="radio" name="is_home" id="optionsRadios4" checked value="0"> {{ trans('general.not_on_home') }}</label>
                        </div>
                    </div>
                    <div class="col-md-4">
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
            @include('backend.partials.forms._btn-group')
        </form>
    </div>
</div>
@endsection 