@extends('backend.layouts.app')


@section('content')
<div class="portlet box blue">
    @include('backend.partials.forms.form_title')
    <div class="portlet-body form">
        <form class="horizontal-form" role="form" method="POST" action="{{ route('backend.tag.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label">{{ trans('general.name') }}*</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="name" required autofocus>
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
                            <input id="slug_ar" type="text" class="form-control" name="slug_ar" value="{{ old('slug_ar') }}" placeholder="name in arabic" required autofocus>
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
                            <input id="order" type="number" class="form-control" name="order" value="{{ old('order') }}" placeholder="order" maxlength="2" autofocus>
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
                            <label class="control-label sbold">{{ trans('general.active') }}</label></br>
                            <label class="radio-inline">
                                <input type="radio" name="active" id="optionsRadios1" value="1" {{ old('active') ? 'checked' : null }}> {{ trans('general.active') }} </label>
                            <label class="radio-inline">
                                <input type="radio" name="active" id="optionsRadios2" {{ !old('active') ? 'checked' : null  }} value="0"> {{ trans('general.not_active') }}</label>
                        </div>
                    </div>
                </div>
            </div>
            @include('backend.partials.forms._btn-group')
        </form>
    </div>
</div>
@endsection 