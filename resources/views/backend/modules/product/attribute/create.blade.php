@extends('backend.layouts.app')

@section('content')
    <div class="portlet box blue">
        @include('backend.partials.forms.form_title')
        <div class="portlet-body form">
            @include('backend.modules.product_attributes.index')
            <form class="horizontal-form" role="form" method="POST"
                  action="{{ route('backend.attribute.store') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="product_id" value="{{ request()->product_id }}">
                <div class="form-body">
                    <h3 class="form-section">Create Attribute</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group{{ $errors->has('qty') ? ' has-error' : '' }}">
                                <label for="qty" class="control-label">qty</label>
                                <input id="qty"
                                       type="number"
                                       minlength="1"
                                       maxlength="999"
                                       class="form-control"
                                       value="{{ old('qty') }}"
                                       name="qty"
                                       placeholder="qty arabic"
                                       autofocus>
                                @if ($errors->has('qty'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('qty') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="size_id" class="control-label">size_id *</label>
                                <select class="form-control input-xlarge" name="size_id" id="size_id" required>
                                    @foreach($sizes as $size)
                                        <option value="{{ $size->id }}">{{ $size->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="color_id" class="control-label">color_id *</label>
                                <select class="form-control input-xlarge" name="color_id" id="color_id" required>
                                    @foreach($colors as $color)
                                        <option value="{{ $color->id }}">{{ $color->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group{{ $errors->has('notes_ar') ? ' has-error' : '' }}">
                                <label for="notes_ar" class="control-label">notes_ar arabic</label>
                                <input id="notes_ar"
                                       type="text"
                                       class="form-control"
                                       name="notes_ar"
                                       value="{{ old('name_ar') }}"
                                       placeholder="notes_ar arabic"
                                       autofocus>
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
                            <div class="form-group{{ $errors->has('notes_en') ? ' has-error' : '' }}">
                                <label for="notes_en" class="control-label">notes_en english</label>
                                <input id="notes_en"
                                       type="text"
                                       class="form-control"
                                       name="notes_en"
                                       value="{{ old('name_en') }}"
                                       placeholder="notes_en arabic"
                                       autofocus>
                                @if ($errors->has('notes_en'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('notes_en') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    {{--@include('backend.partials.forms._btn-group')--}}
                    <div class="form-actions right">
                        <a href="{!! url()->previous() !!}" class="btn default">Cancel</a>
                        <button type="submit" class="btn blue">
                            <i class="fa fa-check"></i> Save
                        </button>
                        <a href="{{ route('backend.gallery.create',['type' => 'product' , 'element_id' => request('product_id')]) }}"
                           class="btn blue">
                            <i class="fa fa-check"></i> Next
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection