<div class="tt-wrapper">
    <div class="tt-row-custom-01">
        <div class="col-item">
            <div class="tt-input-counter style-01">
                <span class="minus-btn"></span>
                @if($element->has_attributes)
                    <input id="max-qty" type="number" value="1" size="1"/>
                @else
                    <input id="max-qty" type="number" value="1" size="{{ $element->qty }}"/>
                @endif
                <span class="plus-btn"></span>
            </div>
        </div>
        <div class="col-item">
            <form method="post" action="{{ route('frontend.cart.add.product') }}">
                @csrf
                <input type="hidden" id="product_id" name="product_id" value="{{ $element->id }}">
                <input type="hidden" name="size_id" value="">
                <input type="hidden" name="color_id" value="">
                <input type="hidden" name="qty" value="1">
                <input type="hidden" name="product_attribute_id" value="">
                <input type="hidden" name="type" value="product">
                <button type="submit" id="add_to_cart"
                        class="btn btn-lg" {{ $element->has_attributes ? 'disabled="disabled"' : null }}
                        id="add_to_cart"><i class="icon-f-39"></i>{{ trans('general.add_to_cart') }}</button>
            </form>
        </div>
    </div>
</div>