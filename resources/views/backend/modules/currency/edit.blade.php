@extends('backend.layouts.app')


@section('content')
    <div class="portlet box blue">
        @include('backend.partials.forms.form_title')
        <div class="portlet-body form">
            <form class="horizontal-form" role="form" method="POST"
                  action="{{ route('backend.currency.update',$element->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <input type="hidden" name="_method" value="put">
                    <h3 class="form-section">Edit Currency</h3>
                    {{--name arabic / name english --}}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group{{ $errors->has('name_ar') ? ' has-error' : '' }}">
                                <label for="name_ar" class="control-label">name_ar*</label>
                                <input id="name_ar"
                                       type="text"
                                       class="form-control"
                                       name="name_ar"
                                       value="{{ $element->name_ar }}"
                                       placeholder="name_ar"
                                       required autofocus>
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
                                <label for="name_en" class="control-label">name_en*</label>
                                <input id="name_en"
                                       type="text"
                                       class="form-control"
                                       name="name_en"
                                       value="{{ $element->name_en }}"
                                       placeholder="name_en"
                                       required autofocus>
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
                            <div class="form-group{{ $errors->has('exchange_rate') ? ' has-error' : '' }}">
                                <label for="exchange_rate" class="control-label">exchange_rate*</label>
                                <input id="exchange_rate"
                                       type="text"
                                       class="form-control"
                                       name="exchange_rate"
                                       value="{{ $element->exchange_rate }}"
                                       required autofocus>
                                @if ($errors->has('exchange_rate'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('exchange_rate') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('currency_symbol_ar') ? ' has-error' : '' }}">
                                <label for="currency_symbol_ar" class="control-label">currency_symbol_ar*</label>
                                <input id="currency_symbol_ar"
                                       type="text"
                                       class="form-control"
                                       name="currency_symbol_ar"
                                       value="{{ $element->currency_symbol_ar }}"
                                       placeholder="currency_symbol_ar in arabic"
                                       maxlength="4"
                                       required autofocus>
                                @if ($errors->has('currency_symbol_ar'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('currency_symbol_ar') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('currency_symbol_en') ? ' has-error' : '' }}">
                                <label for="currency_symbol_en" class="control-label">currency_symbol_ar*</label>
                                <input id="currency_symbol_en"
                                       type="text"
                                       class="form-control"
                                       name="currency_symbol_en"
                                       value="{{ $element->currency_symbol_en }}"
                                       placeholder="currency_symbol_en in arabic"
                                       maxlength="4"
                                       required autofocus>
                                @if ($errors->has('currency_symbol_en'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('currency_symbol_en') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="duration" class="control-label">country *</label>
                                    <select class="form-control input-xlarge" name="country_id" id="country" required>
                                        @foreach($allCountries as $country)
                                            <option value="{{ $country->id }}" {{ $country->id == $element->country_id ? 'selected' : null  }}>{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('backend.partials.forms._btn-group')
                </div>
            </form>
        </div>
    </div>
@endsection
