@extends('backend.layouts.app')


@section('content')
<div class="portlet box blue">
    @include('backend.partials.forms.form_title')
    <div class="portlet-body form">
        <form class="horizontal-form" role="form" method="POST" action="{{ route('backend.admin.privilege.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                <div class="portlet box blue ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i> {{ trans('general.privilege_main_details') }}
                        </div>
                    </div>
                    <div class="portlet-body form">
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


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description_ar" class="control-label">{{ trans('general.description_ar') }}</label>
                                        <textarea type="text" class="form-control tinymce" id="description_ar" name="description_ar" aria-multiline="true" maxlength="500"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description_en" class="control-label">{{ trans('general.description_en') }}</label>
                                        <textarea type="text" class="form-control tinymce" id="description_en" name="description_en" aria-multiline="true" maxlength="500"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('backend.partials.forms._btn-group')
        </form>
    </div>
</div>
@endsection