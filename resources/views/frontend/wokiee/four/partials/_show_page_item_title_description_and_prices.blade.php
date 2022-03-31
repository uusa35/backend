<div class="tt-wrapper" style=" padding: 30px; border-radius: 10px;">
    <div class="tt-title text-center">
        {{ $element->name }}
    </div>
    <div class="tt-price">
        @if($element->isOnSale)
            <span class="new-price">{{ $element->convertedSalePrice}}
                {{ $currency->symbol }}</span>
            <span class="old-price {{ app()->getLocale() === 'ar' ? 'pull-left' : 'pull-right' }}" style="color : red !important;">
                {{ $element->convertedPrice }}
                <span>{{ $currency->symbol }}</span>
            </span>
        @else
            <span class="new-price">{{ $element->convertedPrice }}
                {{ $currency->symbol }}</span>
        @endif
    </div>
    <div class="tt-wrapper">
        {{ $element->description }}
    </div>
</div>
@if($element->notes_en && env('BITS'))
<div class="tt-wrapper">
    <h6 class="text-left">{{ trans('general.additional_information') }} :</h6>
    {{ $element->notes_en }}
    <hr>
</div>
@endif
{{--@if($element->barcode)--}}
{{--    <div class="col-lg-5 col-xs-12" style="margin-left: auto; margin-right: auto;">--}}
{{--        {!!DNS2D::getBarcodeHTML($element->barcode, env('BARCODE_TYPE'),2,1)!!}--}}
{{--    </div>--}}
{{--@endif--}}
