<a href="#" class="tt-btn-quickview" data-toggle="modal"
   data-target="#ModalquickView"
   data-tooltip="{{ trans('general.quick_view') }}"
   data-tposition="{{ app()->isLocale('ar') ? 'right' : 'left' }}"
   data-name="{{ $element->name }}"
   data-id="{{ $element->id }}"
   data-image="{{ $element->imageLargeLink }}"
   data-notes="{{ $element->notes }}"
   data-description="{{ $element->description }}"
   data-sku="{{ $element->sku }}"
   data-qty="{{ $element->availableQty }}"
   data-price="{{ $element->convertedFinalPrice }}"
   data-currency-name="{{ $currency->symbol }}"
   @if($element->has_attributes)
   data-colors="@foreach($element->colors as $col) {!! $col->name !!}, @endforeach"
   data-sizes="@foreach($element->sizes as $size) {!! $size->name !!}, @endforeach"
   @else
   data-colors="{!! $element->color->name !!}"
   data-sizes="{!! $element->size->name !!}"
   @endif
   data-url="{{ route('frontend.product.show.name', ['id' => $element->id, 'name' => $element->name]) }}"
></a>