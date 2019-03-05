<div class="tt-wrapper">
    <div class="tt-row-custom-01">
        <div class="input-group">
            <div class="input-group-append" id="button-addon4">
                <button class="btn-date btn btn-outline-secondary docs-datepicker-trigger date-picker-element"
                        data-method="show"
                        type="button">
                    <i class="fa fa-fw fa-calendar" aria-hidden="true"></i>
                </button>
            </div>
            <input data-toggle="datepicker" class="form-control col-lg-12 docs-datepicker-trigger"
                   placeholder="{{ trans('general.choose_date') }}"
                   aria-label="Recipient's username with two button addons"
                   aria-describedby="button-addon4">
            <input type="hidden" name="day-selected" id="day-selected" value="">
            <div class="docs-datepicker-container" style="display: block;"></div>
        </div>

        <div class="col-item">
            <div class="docs-datepicker-container">
            </div>
        </div>


    </div>
</div>

<div class="modal  fade" id="chooseTimeModal" tabindex="-1" role="dialog" aria-label="chooseTimeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                            class="icon icon-clear"></span></button>
            </div>
            <div class="modal-body col">
                <h4>{{ trans('general.available_timings') }}</h4>
                <div class="tt-table-responsive">
                    <table class="tt-table-shop-01">
                        <thead>
                        <tr>
                            <th>{{ trans('general.day') }}</th>
                            <th>{{ trans('general.start_timing') }}</th>
                            <th>{{ trans('general.end_timing') }}</th>
                            <th>{{ trans('general.notes') }}</th>
                            <th>{{ trans('general.choose') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($element->timings as $timing)
                            <tr class="timing-element-{{ $timing->day_no }}" class="d-none">
                                <td>{{ $timing->day_name }}</td>
                                <td>{{ \Carbon\Carbon::parse($timing->start)->format('h:m A') }}</td>
                                <td>{{ \Carbon\Carbon::parse($timing->end)->format('h:m A') }}</td>
                                <td>{{ $timing->notes }}</td>
                                <td><a href="#" class="btn timing-start-end" data-dismiss="modal"
                                       data-id="{{ $timing->id }}"
                                       data-service-id="{{ $element->id }}"
                                       data-service-name="{{ $element->name }}"
                                       data-timing-start="{{ $timing->start }}"
                                       data-timing-end="{{ $timing->end }}"
                                       data-date=""
                                    >
                                        <i class="fa fa-fw fa-clock-o"></i>{{ trans('general.choose') }}</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
