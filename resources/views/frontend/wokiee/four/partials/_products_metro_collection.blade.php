@if(isset($element) && $element->products->isNotEmpty())
    <div class="container-indent">
        <div class="container container-fluid-custom-mobile-padding">
            @if($title)
                <div class="tt-block-title">
                    <h1 class="tt-title">{{ $title }}</h1>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="tt-product-listing-masonry">
                        <div class="tt-product-init tt-add-item">
                            @foreach($element->products as $element)
                                @include('frontend.wokiee.four.partials._product_widget_metro',['element' => $element, 'double' => $loop->first])
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif