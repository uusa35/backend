@if(isset($element))
    <div class="container-fluid">
        <div class="row">
            <div class="tt-promo-fullwidth-02">
                @if($element->BgLargeLink)
                    <img src="{{ $element->BgLargeLink }}" alt="{{ $element->description }}"
                         style="max-height : 300px; opacity: 0.5">
                @endif
                <div class="tt-description">
                    <div class="tt-description-wrapper">
                        @if($element->slug)
                            <img src="{{ $element->imageThumbLink }}" alt="{{ $element->slug }}"
                                 class="img-responsive img-md">
                        @endif
                        @if($element->description)
                            <div class="tt-title-large"><span class="tt-base-color">{{ $element->slug }}</span></div>
                            <p>{{ $element->description }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif