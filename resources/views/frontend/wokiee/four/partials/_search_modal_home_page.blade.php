{{-- HomePage Modal--}}
<div class="modal  fade" id="Modalnewsletter" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true"
     data-pause=2000>
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                            class="icon icon-clear"></span></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header">
                        {{ trans('general.search_your_occasion') }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ trans('general.sub_title_your_occasion') }}</h5>
                        <p class="card-text">
                            {{ trans('message.search_your_occasion') }}
                        </p>
                        <br>
                        <form method="get" action="{{ route("frontend.service.search") }}">
                            @csrf
                            <div class="form-row">
                                <input type="hidden" name="country_id"
                                       value="{{ $countries->where('main',true)->first()->id }}">
                                <input type="hidden" name="day_selected" id="day_selected" value="">
                                <input type="hidden" name="day_selected_format" id="day_selected_format" value="">
                                <div class="form-group col-3">
                                    <label for="date_selected" class="sr-only">{{ trans('general.day') }}*</label>
                                    <input data-toggle="datepicker" type="text"
                                           value="{{ getDaySelected_format() ? getDaySelected_format() : trans('general.choose_date') }}"
                                           class="form-control docs-datepicker-trigger"
                                           placeholder="{{ trans('general.choose_day') }}" required>
                                </div>
                                <div class="form-group col-3">
                                    <label for="area_id" class="sr-only">{{ trans('general.area') }}*</label>
                                    <select name="area_id" class="form-control" required>
                                        <option value="">{{ trans('general.choose_area') }}</option>
                                        @foreach($countries->where('main', true)->first()->areas as $area)
                                            <option value="{{ $area->id }}">{{ $area->slug }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-3">
                                    <label for="timings" class="sr-only">{{ trans('general.timing') }}</label>
                                    <select name="timing_id" class="form-control">
                                        <option selected>{{ trans('general.choose_timing') }}</option>
                                        @foreach($timings as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-3">
                                    <button type="submit"
                                            class="btn btn-primary mb-2">{{ trans('general.search') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>