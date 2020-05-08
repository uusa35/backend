<div class="modal  fade" id="modalProductInfo" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                            class="icon icon-clear"></span></button>
            </div>
            <div class="modal-body">
                <div class="tt-layout-product-info">
                    <h6 class="tt-title">{{ trans('general.size_chart') }}</h6>
                    {{ trans('message.size_chart') }}
                    <div class="tt-table-responsive-md">
                        @if($element->size_chart_image)
                            <img src="{{ $element->getCurrentImageAttribute('size_chart_image', 'large') }}"
                                 alt="{{ $element->name }}"
                                 class="img-responsive">
                        @elseif($settings->size_chart)
                            <img src="{{ $settings->getCurrentImageAttribute('size_chart', 'large') }}"
                                 alt="{{ $element->name }}"
                                 class="img-responsive">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
