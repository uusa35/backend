@if(isset($products) && $products->isNotEmpty())
    <div class="row">
        @foreach($products as $product)
            <div class="col-6 col-md-4 col-lg-4 tt-col-item">
                @include('frontend.wokiee.four.partials._product_widget',['element' => $product])
            </div>
        @endforeach
    </div>
@endif