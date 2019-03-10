<div class="tt-wrapper">
    <div class="tt-row-custom-01">
        <div class="col-item">
            <div class="tt-input-counter style-01">
                <span class="minus-btn"></span>
                <input type="number" value="1" size="{{ $element->availableQty }}"/>
                <span class="plus-btn"></span>
            </div>
        </div>
        <div class="col-item">
            <a href="#" class="btn btn-lg {{ $element->has_attributes ? 'disabled' : $element->canOrder }}" id="add_to_cart"><i class="icon-f-39"></i>{{ trans('general.add_to_cart') }}</a>
        </div>
    </div>
</div>