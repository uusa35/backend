<div class="container-indent">
    <div class="container-fluid-custom">
        <div class="row tt-layout-promo-box">
            @foreach($elements as $element)
                <div class="col-sm-6 col-md-4">
                    <a href="{{ $element->link }}" class="tt-promo-box">
                        <img src="{{ $element->imageLargeLink }}"
                             data-src="{{ $element->imageLargeLink }}"
                             alt="{{ $element->caption }}">
                        @if($element->name)
                            <div class="tt-description">
                                <div class="tt-description-wrapper">
                                    <div class="tt-background"></div>
                                    <div class="tt-title-small">{{ $element->title }}</div>
                                    <div class="tt-title-large">{{ $element->caption }}</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>