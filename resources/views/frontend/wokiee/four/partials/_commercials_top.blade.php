@if($elements->isNotEmpty())
    <div class="tt-offset-small container-indent element-padding-bottom">
        <div class="container-fluid-custom">
            <div class="row">
                @foreach($elements as $element)
                    <div class="col-sm-6">
                        <a href="{{ $element->link }}" class="tt-promo-box tt-one-child">
                            <img src="{{ $element->imageLargeLink }}"
                                 data-src="{{ $element->imageLargeLink }}"
                                 alt="{{ $element->caption }}">
                            @if($element->name)
                                <div class="tt-description">
                                    <div class="tt-description-wrapper">
                                        <div class="tt-background"></div>
                                        <div class="tt-title-small">{{ $element->name }}</div>
                                    </div>
                                </div>
                            @endif
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif