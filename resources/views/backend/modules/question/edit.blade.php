@extends('backend.layouts.app')
@section('content')
    <div class="portlet box blue">
        @include('backend.partials.forms.form_title')
        <div class="portlet-body form">
            <form class="horizontal-form" role="form" method="POST"
                  action="{{ route('backend.question.update', $element->id) }}">
                @csrf
                <input type="hidden" name="_method" value="put">
                <div class="form-body">
                    <h3 class="form-section">Edit Question</h3>
                    {{--name arabic / name english --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('name_ar') ? ' has-error' : '' }}">
                                <label for="name_ar" class="control-label">name_ar *</label>
                                <input id="name_ar"
                                       type="text"
                                       class="form-control"
                                       name="name_ar"
                                       value="{{ $element->name_ar }}"
                                       placeholder="name_ar"
                                       required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('name_en') ? ' has-error' : '' }}">
                                <label for="name_en" class="control-label">name_en *</label>
                                <input id="name_en"
                                       type="text"
                                       class="form-control"
                                       name="name_en"
                                       value="{{ $element->name_en }}"
                                       placeholder="name_en"
                                       required>
                            </div>
                        </div>
                        @if($answers->isNotEmpty())
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Answers List*</label>
                                    <select multiple="multiple" class="multi-select" id="my_multi_select1"
                                            name="answers[]">
                                        @foreach($answers as $answer)
                                            <option value="{{ $answer->id }}"
                                                    {{ in_array($answer->id,$element->answers->pluck('id')->toArray()) ? 'selected' : null  }}
                                            >{{ $answer->name_ar }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        @endif
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('notes_ar') ? ' has-error' : '' }}">
                                <label for="notes_ar" class="control-label">notes_ar *</label>
                                <input id="notes_ar"
                                       type="text"
                                       class="form-control"
                                       name="notes_ar"
                                       value="{{ $element->notes_ar }}"
                                       placeholder="notes_ar"
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
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('notes_en') ? ' has-error' : '' }}">
                                <label for="notes_en" class="control-label">notes_en *</label>
                                <input id="notes_en"
                                       type="text"
                                       class="form-control"
                                       name="notes_en"
                                       value="{{ $element->notes_en }}"
                                       placeholder="notes_en"
                                >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label sbold">active</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="active" id="optionsRadios3" checked
                                           value="1"> active</label>
                                <label class="radio-inline">
                                    <input type="radio" name="active" id="optionsRadios4"
                                           value="0">not active</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label sbold">is_multi</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="is_multi" id="optionsRadios5" checked
                                           value="1"> is_multi</label>
                                <label class="radio-inline">
                                    <input type="radio" name="is_multi" id="optionsRadios6"
                                           value="0">is_text</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('order') ? ' has-error' : '' }}">
                                <label for="order" class="control-label">order *</label>
                                <input id="order"
                                       type="text"
                                       class="form-control"
                                       name="order"
                                       value="{{ $element->order }}"
                                       placeholder="order"
                                       maxlength="2"
                                       required
                                >
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn green modal-save">save question</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection