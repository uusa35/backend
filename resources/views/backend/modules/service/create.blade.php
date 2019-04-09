@extends('backend.layouts.app')

@section('breadcrumbs')
{{ Breadcrumbs::render('backend.admin.service.create') }}
@endsection

@section('content')
<div class="portlet box blue">
    @include('backend.partials.forms.form_title')
    <div class="portlet-body form">
        <form class="horizontal-form" role="form" method="POST" action="{{ route('backend.admin.service.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" sku="api_token" value="{{ str_random(rand(10,99)) }}">
            <div class="form-body">
                <h3 class="form-section">{{ trans('general.create_service') }}</h3>
                {{--sku arabic / sku english --}}
                <div class="portlet box blue ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i> {{ trans('general.service_main_details') }}
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('sku') ? ' has-error' : '' }}">
                                        <label for="sku" class="control-label">{{ trans('general.sku') }}
                                            *</label>
                                        <input id="sku" type="text" class="form-control" sku="sku" value="{{ old('sku') }}" placeholder="{{ trans('general.sku') }}" required autofocus>
                                        @if ($errors->has('sku'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('sku') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('name_ar') ? ' has-error' : '' }}">
                                        <label for="name_ar" class="control-label">{{ trans('general.name_ar') }}
                                            *</label>
                                        <input id="name_ar" type="text" class="form-control" sku="name_ar" value="{{ old('name_ar') }}" placeholder="{{ trans('general.name_ar') }}" required autofocus>
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
                                    <div class="form-group {{ $errors->has('name_en') ? ' has-error' : '' }}">
                                        <label for="name_en" class="control-label">{{ trans('general.name_en') }}
                                            *</label>
                                        <input id="name_en" type="text" class="form-control" sku="name_en" value="{{ old('name_en') }}" placeholder="{{ trans('general.name_en') }}" required autofocus>
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
                                    <div class="form-group {{ $errors->has('duration') ? ' has-error' : '' }}">
                                        <label for="duration" class="control-label">{{ trans('general.duration') }}*</label>
                                        <input id="duration" type="text" class="form-control" sku="duration" value="{{ old('duration') }}" placeholder="{{ trans('general.duration') }}" required autofocus>
                                        @if ($errors->has('duration'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('duration') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('setup_time') ? ' has-error' : '' }}">
                                        <label for="setup_time" class="control-label">{{ trans('general.setup_time') }}*</label>
                                        <input id="setup_time" type="text" class="form-control" sku="setup_time" value="{{ old('setup_time') }}" placeholder="{{ trans('general.setup_time') }}" required autofocus>
                                        @if ($errors->has('setup_time'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('setup_time') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('individuals') ? ' has-error' : '' }}">
                                        <label for="individuals" class="control-label">{{ trans('general.individuals') }}
                                            *</label>
                                        <input id="individuals" type="individuals" class="form-control" sku="individuals" value="" placeholder="{{ trans('general.individuals') }}" required autofocus>
                                        @if ($errors->has('individuals'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('individuals') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('delivery_charge') ? ' has-error' : '' }}">
                                        <label for="delivery_charge" class="control-label">{{ trans('general.delivery_charge') }}
                                            *</label>
                                        <input id="delivery_charge" type="text" class="form-control" sku="delivery_charge" value="" placeholder="{{ trans('general.delivery_charge') }}" required autofocus>
                                        @if ($errors->has('delivery_charge'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('delivery_charge') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>




                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                        <label for="price" class="control-label">{{ trans('general.price') }}
                                            *</label>
                                        <input id="price" type="text" class="form-control" sku="price" value="{{ old('price') }}" placeholder="{{ trans('general.price') }}" required autofocus>
                                        @if ($errors->has('price'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('price') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('sale_price') ? ' has-error' : '' }}">
                                        <label for="sale_price" class="control-label">{{ trans('general.sale_price') }}
                                            *</label>
                                        <input id="sale_price" type="text" class="form-control" sku="sale_price" value="{{ old('sale_price') }}" placeholder="{{ trans('general.sale_price') }} " required autofocus>
                                        @if ($errors->has('sale_price'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('sale_price') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description" class="control-label">{{ trans('general.description_arabic') }}</label>
                                        <textarea type="text" class="form-control" id="description_ar" sku="description_ar" aria-multiline="true" maxlength="500" {{ old('description_ar') }}></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description" class="control-label">{{ trans('general.description_english') }}</label>
                                        <textarea type="text" class="form-control" id="description_en" sku="description_en" aria-multiline="true" maxlength="500">{{ old('description_en') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="notes_ar" class="control-label">{{ trans('general.notes_ar') }}</label>
                                        <textarea type="text" class="form-control" id="notes_ar" sku="notes_ar" aria-multiline="true" maxlength="500" {{ old('notes_ar') }}></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="notes_en" class="control-label">{{ trans('general.notes_en') }}</label>
                                        <textarea type="text" class="form-control" id="notes_en" sku="notes_en" aria-multiline="true" maxlength="500">{{ old('notes_en') }}</textarea>
                                    </div>
                                </div>
                                {{-- individuals + confirm individuals --}}

                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('keywords') ? ' has-error' : '' }}">
                                        <label for="keywords" class="control-label">{{ trans('general.keywords') }}</label>
                                        <input id="keywords" type="text" class="form-control" sku="keywords" placeholder="{{ trans('general.keywords') }}" value="{{ old('keywords') }}" autofocus>
                                        @if ($errors->has('keywords'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('keywords') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="form_control_1">{{ trans('general.main_image') }}</label>
                                        <input type="file" class="form-control" sku="image" placeholder="{{ trans('general.main_image') }}" required>
                                        <div class="help-block text-left">
                                            W * H - Best fit ['1080', '1440'] pixels
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('video_url_one') ? ' has-error' : '' }}">
                                        <label for="video_url_one" class="control-label">{{ trans('general.video_url_one') }}</label>
                                        <input id="video_url_one" type="text" class="form-control" sku="video_url_one" placeholder="{{ trans('general.video_url_one') }}" value="{{ old('video_url_one') }}" autofocus>
                                        @if ($errors->has('video_url_one'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('video_url_one') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('video_url_two') ? ' has-error' : '' }}">
                                        <label for="video_url_two" class="control-label">{{ trans('general.video_url_two') }}</label>
                                        <input id="video_url_two" type="text" class="form-control" sku="video_url_two" placeholder="{{ trans('general.video_url_two') }}" value="{{ old('video_url_two') }}" autofocus>
                                        @if ($errors->has('video_url_two'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('video_url_two') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('start_sale') ? ' has-error' : '' }}">
                                        <label for="start_sale" class="control-label">{{ trans('general.start_sale_date') }}</label>
                                        <div class="input-group date form_datetime">
                                            <input type="text" readonly style="direction: ltr !important;" class="form-control" name="start_sale" value="{{ old('start_sale') ? old('start_sale') : '01 January 2019 - 07:55' }}" required>
                                            <span class="input-group-btn"><button class="btn default date-set" type="button"><i class="fa fa-calendar"></i></button></span>
                                        </div>
                                        <span class="help-block">
                                            <strong>{{ trans('message.start_sale_date') }}</strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label">{{ trans('general.end_sale_date') }}</label>
                                        <div class="input-group date form_datetime">
                                            <input type="text" class="form-control" readonly style="direction: ltr !important;" name="end_sale" value="{{ old('end_sale') ? old('end_sale') : '01 January 2019 - 07:55' }}" required>
                                            <span class="input-group-btn"><button class="btn default date-set" type="button"><i class="fa fa-calendar"></i></button></span>
                                        </div>
                                        <span class="help-block">
                                            <strong>{{ trans('message.end_sale_date') }}</strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('booking_limit') ? ' has-error' : '' }}">
                                        <label for="booking_limit" class="control-label">{{ trans('general.booking_limit') }}</label>
                                        <input id="booking_limit" type="text" class="form-control" sku="booking_limit" placeholder="{{ trans('general.booking_limit') }}" value="{{ old('booking_limit') }}" autofocus>
                                        @if ($errors->has('booking_limit'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('booking_limit') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="single" class="control-label">{{ trans('general.owner') }}*</label>
                                        <select id="" class="form-control select2">
                                            <option value="">{{ trans('general.choose_user') }}</option>
                                            @foreach($users as $user)
                                            <option value="{{ $user->slug_en }}">{{ $user->slug_en }}</option>
                                            @endforeach


                                        </select>
                                        <span class="help-block">
                                            <strong>{{ trans('message.owner_instructions') }}</strong>
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>








                <div class="portlet box blue ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i> {{ trans('general.product_main_details') }}
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold">{{ trans('general.active') }}</label></br>
                                        <label class="radio-inline">
                                            <input type="radio" sku="active" id="optionsRadios1" value="1">
                                            active </label>
                                        <label class="radio-inline">
                                            <input type="radio" sku="active" id="optionsRadios2" checked value="0"> not_Active</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold">{{ trans('general.on_sale') }}</label></br>
                                        <label class="radio-inline">
                                            <input type="radio" sku="on_sale" id="optionsRadios1" value="1">
                                            on_sale </label>
                                        <label class="radio-inline">
                                            <input type="radio" sku="on_sale" id="optionsRadios2" checked value="0"> not_on_sale</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold">{{ trans('general.exclusive') }}</label></br>
                                        <label class="radio-inline">
                                            <input type="radio" sku="exclusive" id="optionsRadios1" value="1">
                                            exclusive </label>
                                        <label class="radio-inline">
                                            <input type="radio" sku="exclusive" id="optionsRadios2" checked value="0"> not_exclusive</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold">{{ trans('general.on_new') }}</label></br>
                                        <label class="radio-inline">
                                            <input type="radio" sku="on_new" id="optionsRadios1" value="1">
                                            on_new </label>
                                        <label class="radio-inline">
                                            <input type="radio" sku="on_new" id="optionsRadios2" checked value="0"> not_on_new</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold">{{ trans('general.is_available') }}</label></br>
                                        <label class="radio-inline">
                                            <input type="radio" sku="is_available" id="optionsRadios1" value="1">
                                            is_available </label>
                                        <label class="radio-inline">
                                            <input type="radio" sku="is_available" id="optionsRadios2" checked value="0"> not_is_available</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold">{{ trans('general.is_hot_deal') }}</label></br>
                                        <label class="radio-inline">
                                            <input type="radio" sku="is_hot_deal" id="optionsRadios1" value="1">
                                            is_hot_deal </label>
                                        <label class="radio-inline">
                                            <input type="radio" sku="is_hot_deal" id="optionsRadios2" checked value="0"> not_is_hot_deal</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold">{{ trans('general.multi_booking') }}</label></br>
                                        <label class="radio-inline">
                                            <input type="radio" sku="multi_booking" id="optionsRadios1" value="1">
                                            multi_booking </label>
                                        <label class="radio-inline">
                                            <input type="radio" sku="multi_booking" id="optionsRadios2" checked value="0"> not_multi_booking</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold">{{ trans('general.multi_booking') }}</label></br>
                                        <label class="radio-inline">
                                            <input type="radio" sku="multi_booking" id="optionsRadios1" value="1">
                                            multi_booking </label>
                                        <label class="radio-inline">
                                            <input type="radio" sku="multi_booking" id="optionsRadios2" checked value="0"> not_multi_booking</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label sbold">{{ trans('general.on_home') }}</label></br>
                                        <label class="radio-inline">
                                            <input type="radio" sku="on_home" id="optionsRadios1" value="1"> on_home </label>
                                        <label class="radio-inline">
                                            <input type="radio" sku="on_home" id="optionsRadios2" checked value="0"> not_on_home</label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    @include('backend.partials.forms._btn-group')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </form>
    </div>
</div>
@endsection