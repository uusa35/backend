@extends('backend.layouts.app')

@section('breadcrumbs')
{{ Breadcrumbs::render('backend.admin.commercial.create') }}
@endsection
@section('content')
<div class="portlet box blue">
    @include('backend.partials.forms.form_title')
    <div class="portlet-body form">
        <form class="horizontal-form" role="form" method="POST" action="{{ route('backend.admin.commercial.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                <div class="portlet box blue ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i> {{ trans('general.commercial_main_details') }}
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
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
                                <div class="col-md-4">
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
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('caption_ar') ? ' has-error' : '' }}">
                                        <label for="caption_ar" class="control-label">{{ trans('general.caption_ar') }}*</label>
                                        <input id="caption_ar" type="text" class="form-control" name="caption_ar" value="{{ old('caption_ar') }}" placeholder="{{ trans('general.caption_ar') }}" required autofocus>
                                        @if ($errors->has('caption_ar'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('caption_ar') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('caption_en') ? ' has-error' : '' }}">
                                        <label for="caption_en" class="control-label">{{ trans('general.caption_en') }}*</label>
                                        <input id="caption_en" type="text" class="form-control" name="caption_en" value="{{ old('caption_en') }}" placeholder="{{ trans('general.caption_en') }}" required autofocus>
                                        @if ($errors->has('caption_en'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('caption_en') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('order') ? ' has-error' : '' }}">
                                        <label for="order" class="control-label">{{ trans('general.order') }} *</label>
                                        <input id="order" type="number" class="form-control" name="order" value="{{ old('order') }}" placeholder="{{ trans('general.order') }}" maxlength="2" autofocus>
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
                                    <div class="form-group form-md-line-input">
                                        <input type="file" class="form-control" name="image" placeholder="{{ trans('general.main_image') }}" required>
                                        <label for="form_control_1">{{ trans('general.main_image') }} - ['1534', '586']</label>
                                        <div class="help-block text-left">
                                            W * H - Best fit 1534 x 586 pixels
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="form_control_1">{{ trans('general.url') }}</label>
                                        <input type="text" class="form-control" name="url" placeholder="{{ trans('general.url') }}rl">
                                        <div class="help-block text-left">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="form_control_1">{{ trans('general.image_path') }}</label>
                                        <input type="text" class="form-control" name="path" placeholder="{{ trans('general.image_path') }}">
                                        <div class="help-block text-left">

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
                            <i class="fa fa-gift"></i> {{ trans('general.commercial_main_details') }}
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-body">
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" id="radio53" name="active" value="1" class="md-radiobtn" checked>
                                                <label for="radio53">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> {{ trans('general.active') }}</label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="radio54" name="active" value="0" class="md-radiobtn">
                                                <label for="radio54">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> {{ trans('general.not_active') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-body">
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" id="radio55" name="is_double" value="1" class="md-radiobtn" checked>
                                                <label for="radio55">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> {{ trans('general.is_double') }}</label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="radio56" name="is_double" value="0" class="md-radiobtn">
                                                <label for="radio56">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> {{ trans('general.not_is_double') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-body">
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" id="radio57" name="is_triple" value="1" class="md-radiobtn" checked>
                                                <label for="radio57">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span>{{ trans('general.is_triple') }}</label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="radio58" name="is_triple" value="0" class="md-radiobtn">
                                                <label for="radio58">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> {{ trans('general.not_is_triple') }}</label>
                                            </div>
                                        </div>
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