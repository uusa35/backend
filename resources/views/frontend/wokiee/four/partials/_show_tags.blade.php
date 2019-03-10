<div class="tt-wrapper">
    <div class="tt-label">
        @if($element->on_new)
            <div class="tt-label-new">{{ trans('general.new') }}</div>
        @endif
        @if($element->isOnSale)
            <div class="tt-label tt-label-sale">{{ trans('general.on_sale') }}</div>
        @endif
        @if($element->is_featured)
            <div class="tt-label tt-label-our-fatured">{{ trans('general.featured') }}</div>
        @endif
        @if($element->is_available)
            <span class="tt-label tt-label-new"
                  style="background-color: #978d2f;">{{ trans('general.available') }}</span>
        @else
            <span class="tt-label tt-label-new"
                  style="background-color: #972500;">{{ trans('general.not_available') }}</span>
        @endif
    </div>
</div>