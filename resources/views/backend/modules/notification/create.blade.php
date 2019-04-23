@extends('backend.layouts.app')
@section('breadcrumbs')
{{ Breadcrumbs::render('backend.admin.notification.create') }}
@endsection

@section('content')
<div class="portlet box blue">
    @include('backend.partials.forms.form_title')
    <div class="portlet-body">
        @include('backend.partials._admin_instructions',['title' => trans('general.notifications') ,'message' => trans('message.admin_notification_message')])
        <div class="portlet-body form">
            <form class="horizontal-form" role="form" method="POST" action="{{ route('backend.admin.notification.store') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="notifiable_id" value="1">
                <input type="hidden" name="notifiable_type" value="Product">
                <div class="form-body">
                    <h3 class="form-section">{{ trans('general.new_notification') }}</h3>
                    <div class="portlet box blue ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i> {{ trans('general.notification_main_details') }}
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                            <label for="title" class="control-label">{{ trans('general.title') }} *</label>
                                            <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="name in arabic" required autofocus>
                                            @if ($errors->has('title'))
                                            <span class="help-block">
                                                <strong>
                                                    {{ $errors->first('title') }}
                                                </strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                            <label for="description" class="control-label">{{ trans('general.description') }}*</label>
                                            <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" placeholder="name in english" required autofocus>
                                            @if ($errors->has('description'))
                                            <span class="help-block">
                                                <strong>
                                                    {{ $errors->first('description') }}
                                                </strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                            <label for="type" class="control-label">{{ trans('general.type') }}</label>
                                            <input id="type" type="text" class="form-control" name="type" value="{{ old('type') }}" placeholder="name in english" autofocus>
                                            @if ($errors->has('type'))
                                            <span class="help-block">
                                                <strong>
                                                    {{ $errors->first('type') }}
                                                </strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_control_1">{{ trans('general.image_path') }}</label>
                                            <input type="file" class="form-control" name="path" placeholder="path">
                                            <div class="help-block text-left">
                                                only pdf
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_control_1">{{ trans('general.url') }}</label>
                                            <input type="text" class="form-control" name="url" placeholder="{{ trans('general.url') }}">
                                            <div class="help-block text-left">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_control_1">{{ trans('general.main_image') }}</label>
                                            <input type="file" class="form-control" name="image" placeholder="image">
                                            <div class="help-block text-left">
                                                W * H - Best fit ['500', '500'] pixels
                                            </div>
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