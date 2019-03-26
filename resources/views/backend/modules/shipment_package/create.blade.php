@extends('backend.layouts.app')

@section('content')
<div class="portlet box blue">
    @include('backend.partials.forms.form_title')
    <div class="portlet-body form">
        <form class="horizontal-form" role="form" method="POST" action="{{ route('backend.package.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                <h3 class="form-section">Create Shipment Package</h3>
                {{--name arabic / name english --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label">{{ trans('general.name_ar') }} *</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="name in arabic" required autofocus>
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
                            <input id="slug_en" type="text" class="form-control" name="slug_en" value="{{ old('slug_en') }}" placeholder="name in english" required autofocus>
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
                        <div class="form-group {{ $errors->has('notes_ar') ? ' has-error' : '' }}">
                            <label for="notes_ar" class="control-label">{{ trans('general.notes_ar') }}*</label>
                            <input id="notes_ar" type="text" class="form-control" name="notes_ar" value="{{ old('notes_ar') }}" placeholder="notes in arabic" required autofocus>
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
                            <label for="notes_en" class="control-label">{{ trans('general.notes_en') }}*</label>
                            <input id="notes_en" type="text" class="form-control" name="notes_en" value="{{ old('notes_en') }}" placeholder="notes in english" required autofocus>
                            @if ($errors->has('notes_en'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('notes_en') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group{{ $errors->has('charge') ? ' has-error' : '' }}">
                            <label for="charge" class="control-label">{{ trans('general.charge') }} *</label>
                            <input id="charge" type="text" class="form-control" name="charge" value="{{ old('charge') }}" placeholder="charge" required autofocus>
                            @if ($errors->has('charge'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('charge') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>


                {{-- email + mobile --}}




                <div class="row">
                    <hr>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label sbold">{{ trans('general.active') }}</label></br>
                            <label class="radio-inline">
                                <input type="radio" name="active" id="optionsRadios3" checked value="1"> {{ trans('general.active') }}</label>
                            <label class="radio-inline">
                                <input type="radio" name="active" id="optionsRadios4" value="0"> {{ trans('general.not_active') }}</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label sbold">{{ trans('general.is_available') }}</label></br>
                            <label class="radio-inline">
                                <input type="radio" name="is_available" id="optionsRadios3" value="1"> {{ trans('general.is_available') }}</label>
                            <label class="radio-inline">
                                <input type="radio" name="is_available" id="optionsRadios4" checked value="0"> {{ trans('general.not_is_available') }}</label>
                        </div>
                    </div>
                </div>
                @include('backend.partials.forms._btn-group')
            </div>
        </form>
    </div>
</div>
@endsection 