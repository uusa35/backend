@extends('backend.layouts.app')


@section('breadcrumbs')
    {{ Breadcrumbs::render('backend.category.create') }}
@endsection

@section('content')
<div class="portlet box blue">
    @include('backend.partials.forms.form_title')
    <div class="portlet-body form">
        <form class="horizontal-form" role="form" method="POST" action="{{ route('backend.admin.category.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="parent_id" value="{{ request()->parent_id }}">
            <div class="form-body">
                <h3 class="form-section">{{ trans('general.create_category') }}</h3>
                {{--name arabic / name english --}}
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
                </div>
                <div class="row">
                    <div class="col-md-6">
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
                    <div class="col-md-6">
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
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description" class="control-label">{{ trans('general.description_ar') }}</label>
                            <textarea type="text" class="form-control" id="description_ar" name="description_ar" aria-multiline="true" maxlength="500">{{ old('description_ar') }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description" class="control-label">{{ trans('general.description_en') }}</label>
                            <textarea type="text" class="form-control" id="description_en" name="description_en" aria-multiline="true" maxlength="500">{{ old('description_en') }}</textarea>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="file" class="form-control" name="image" placeholder="image">
                            <label for="form_control_1">{{ trans('general.main_image') }}</label>
                            <div class="help-block text-left">
                                W * H - Best fit ['2313', '1125'] pixels
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <hr>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label sbold">{{ trans('general.active') }}</label></br>
                            <label class="radio-inline">
                                <input type="radio" name="active" id="optionsRadios3" value="1"> active</label>
                            <label class="radio-inline">
                                <input type="radio" name="active" id="optionsRadios4" checked value="0">not active</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label sbold">{{ trans('general.is_featured') }}</label></br>
                            <label class="radio-inline">
                                <input type="radio" name="is_featured" id="optionsRadios3" value="1"> is_featured</label>
                            <label class="radio-inline">
                                <input type="radio" name="is_featured" id="optionsRadios4" checked value="0">not is_featured</label>
                        </div>
                    </div>
                    {{--<div class="col-md-3">--}}
                    {{--<div class="form-group">--}}
                    {{--<label class="control-label sbold">limited</label></br>--}}
                    {{--<label class="radio-inline">--}}
                    {{--<input type="radio" name="limited" id="optionsRadios3"--}}
                    {{--value="1"> limited</label>--}}
                    {{--<label class="radio-inline">--}}
                    {{--<input type="radio" name="limited" id="optionsRadios4" checked--}}
                    {{--value="0">not limited</label>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label sbold">{{ trans('general.is_home') }}</label></br>
                            <label class="radio-inline">
                                <input type="radio" name="is_home" id="optionsRadios3" value="1"> is_home</label>
                            <label class="radio-inline">
                                <input type="radio" name="is_home" id="optionsRadios4" checked value="0">not is_home</label>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <hr>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label sbold">{{ trans('general.on_new') }}</label></br>
                            <label class="radio-inline">
                                <input type="radio" name="on_new" id="optionsRadios3" value="1"> on_new</label>
                            <label class="radio-inline">
                                <input type="radio" name="on_new" id="optionsRadios4" checked value="0">not on_new</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label sbold">{{ trans('general.is_service') }}</label></br>
                            <label class="radio-inline">
                                <input type="radio" name="is_service" id="optionsRadios3" value="1"> is_service</label>
                            <label class="radio-inline">
                                <input type="radio" name="is_service" id="optionsRadios4" checked value="0">not is_service</label>
                        </div>
                    </div>
                    {{--<div class="col-md-3">--}}
                    {{--<div class="form-group">--}}
                    {{--<label class="control-label sbold">limited</label></br>--}}
                    {{--<label class="radio-inline">--}}
                    {{--<input type="radio" name="limited" id="optionsRadios3"--}}
                    {{--value="1"> limited</label>--}}
                    {{--<label class="radio-inline">--}}
                    {{--<input type="radio" name="limited" id="optionsRadios4" checked--}}
                    {{--value="0">not limited</label>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label sbold">{{ trans('general.is_product') }}</label></br>
                            <label class="radio-inline">
                                <input type="radio" name="is_product" id="optionsRadios3" value="1"> is_product</label>
                            <label class="radio-inline">
                                <input type="radio" name="is_product" id="optionsRadios4" checked value="0">not is_product</label>
                        </div>
                    </div>
                </div>


                @include('backend.partials.forms._btn-group')
            </div>
        </form>
    </div>
</div>
@endsection 