@extends('backend.layouts.app')
@section('breadcrumbs')
{{ Breadcrumbs::render('backend.admin.term.create') }}
@endsection

@section('content')
<div class="portlet box blue">
    @include('backend.partials.forms.form_title')
    <div class="portlet-body form">
        <form class="horizontal-form" role="form" method="POST" action="{{ route('backend.admin.term.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                <div class="portlet box blue ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i> {{ trans('general.term_main_details') }}
                        </div>
                    </div>
                    <div class="portlet-body form">
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

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description" class="control-label">{{ trans('general.content_ar') }}</label>
                                        <textarea type="text" class="form-control tinymce" id="content_ar" name="content_ar" aria-multiline="true" maxlength="500"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description" class="control-label">{{ trans('general.content_en') }}</label>
                                        <textarea type="text" class="form-control tinymce" id="content_en" name="content_en" aria-multiline="true" maxlength="500"></textarea>
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