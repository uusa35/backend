@extends('backend.layouts.app')


@section('content')
<div class="portlet box blue">
    @include('backend.partials.forms.form_title')
    <div class="portlet-body form">
        <form class="horizontal-form" role="form" method="POST" action="{{ route('backend.admin.page.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('title_ar') ? ' has-error' : '' }}">
                            <label for="title_ar" class="control-label">{{ trans('general.title_ar') }}*</label>
                            <input id="title_ar" type="text" class="form-control" name="title_ar" value="{{ old('title_ar') }}" placeholder="{{ trans('general.title_ar') }}" required autofocus>
                            @if ($errors->has('title_ar'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('title_ar') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('title_en') ? ' has-error' : '' }}">
                            <label for="title_en" class="control-label">{{ trans('general.title_en') }}*</label>
                            <input id="title_en" type="text" class="form-control" name="title_en" value="{{ old('title_en') }}" placeholder="{{ trans('general.title_en') }}" required autofocus>
                            @if ($errors->has('title_en'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('title_en') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
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
                    <div class="col-md-6">
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
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                            <label for="url" class="control-label">{{ trans('general.url') }} *</label>
                            <input id="url" type="text" class="form-control" name="url" value="{{ old('url') }}" placeholder="{{ trans('general.url') }}" autofocus>
                            @if ($errors->has('url'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('url') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('order') ? ' has-error' : '' }}">
                            <label for="order" class="control-label">{{ trans('general.order') }}*</label>
                            <input id="order" type="number" class="form-control" name="order" value="{{ old('order') }}" placeholder="{{ trans('general.order') }}" required autofocus>
                            @if ($errors->has('order'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('order') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="file" class="form-control" name="image" placeholder="{{ trans('general.main_image') }}">
                            <label for="form_control_1">{{ trans('general.main_image') }}*</label>
                            <div class="help-block text-left">
                                W * H - Best fit 1024 x 800 pixels
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description" class="control-label">{{ trans('general.content_ar') }}</label>
                            <textarea type="text" class="form-control tinymce" id="content_ar" name="content_ar" aria-multiline="true" maxlength="500">{{ old('content_ar') }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description" class="control-label"> {{ trans('general.content_en') }}</label>
                            <textarea type="text" class="form-control tinymce" id="content_en" name="content_en" aria-multiline="true" maxlength="500">{{ old('content_en') }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label sbold">{{ trans('general.active') }}</label></br>
                            <label class="radio-inline">
                                <input type="radio" name="active" id="optionsRadios3" value="1"> {{ trans('general.active') }}</label>
                            <label class="radio-inline">
                                <input type="radio" name="active" id="optionsRadios4" checked value="0"> {{ trans('general.not_active') }}</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label sbold">{{ trans('general.on_menu_desktop') }}</label></br>
                            <label class="radio-inline">
                                <input type="radio" name="on_menu_desktop" id="optionsRadios3" value="1"> {{ trans('general.on_menu_desktop') }}</label>
                            <label class="radio-inline">
                                <input type="radio" name="on_menu_desktop" id="optionsRadios4" checked value="0">{{ trans('general.not_on_menu_desktop') }}</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label sbold">{{ trans('general.on_menu_mobile') }}</label></br>
                            <label class="radio-inline">
                                <input type="radio" name="on_menu_mobile" id="optionsRadios3" value="1"> {{ trans('general.on_menu_mobile') }}</label>
                            <label class="radio-inline">
                                <input type="radio" name="on_menu_mobile" id="optionsRadios4" checked value="0"> {{ trans('general.not_on_menu_mobile') }}</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label sbold">{{ trans('general.on_footer') }}</label></br>
                            <label class="radio-inline">
                                <input type="radio" name="on_footer" id="optionsRadios3" value="1"> {{ trans('general.on_footer') }}</label>
                            <label class="radio-inline">
                                <input type="radio" name="on_footer" id="optionsRadios4" checked value="0">{{ trans('general.not_on_footer') }}</label>
                        </div>
                    </div>
                </div>
                @include('backend.partials.forms._btn-group')
        </form>
    </div>
</div>
@endsection 