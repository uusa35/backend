@extends('backend.layouts.app')
@section('content')
<div class="clearfix"></div>
<div class="portlet-body form">
    <form role="form" method="post" action="{{ route('backend.admin.slide.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="col-md-4">
            <div class="form-group form-md-line-input">
                <input type="text" class="form-control" name="caption_ar" placeholder="...">
                <label for="form_control_1"> {{ trans('general.caption_ar') }} *</label>
                <span class="help-block">please enter proper caption</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-md-line-input">
                <input type="text" class="form-control" name="caption_en" placeholder="...">
                <label for="form_control_1">{{ trans('general.caption_en') }}*</label>
                <span class="help-block">please enter proper caption</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-md-line-input">
                <input type="text" class="form-control" name="title_ar" placeholder="...">
                <label for="form_control_1"> {{ trans('general.title_ar') }} *</label>
                <span class="help-block">please enter proper title</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-md-line-input">
                <input type="text" class="form-control" name="title_en" placeholder="...">
                <label for="form_control_1">{{ trans('general.title_en') }}*</label>
                <span class="help-block">please enter proper title</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-md-line-input">
                <input type="text" class="form-control" name="url" placeholder="...">
                <label for="form_control_1">{{ trans('general.url') }}*</label>
                <span class="help-block">full link is only allowed ('http://google.com')</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-md-line-input">
                <input type="text" class="form-control" name="order" placeholder="...">
                <label for="form_control_1">{{ trans('general.order') }}*</label>
                <span class="help-block">slide Order is a number</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-md-line-input">
                <input type="file" class="form-control" name="image" placeholder="...">
                <label for="form_control_1">{{ trans('general.image') }}*</label>
                <span class="label-warning">slide Image only JPG / PNG is accepted -best fit ['1905', '750']</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="form_control_1">{{ trans('general.path') }}</label>
                <input type="file" class="form-control" name="path" placeholder="file">
                <div class="help-block text-left">
                    files shall not exceed 50 MB
                </div>
            </div>
        </div>

        <div class="col-md-4">
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
                        <span class="box"></span> N/A</label>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="md-radio-inline">
                <div class="md-radio">
                    <input type="radio" id="radio53" name="on_home" value="1" class="md-radiobtn" checked>
                    <label for="radio53">
                        <span></span>
                        <span class="check"></span>
                        <span class="box"></span> {{ trans('general.on_home') }}</label>
                </div>
                <div class="md-radio">
                    <input type="radio" id="radio54" name="on_home" value="0" class="md-radiobtn">
                    <label for="radio54">
                        <span></span>
                        <span class="check"></span>
                        <span class="box"></span> {{ trans('general.not_on_home') }}</label>
                </div>
            </div>
        </div>


        @include('backend.partials.forms._btn-group')
    </form>
</div>
@endsection 