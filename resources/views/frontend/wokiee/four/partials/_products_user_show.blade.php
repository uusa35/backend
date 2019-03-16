@if(isset($products) && $products->isNotEmpty())
    <div class="row">
        @foreach($products as $product)
            <div class="col-lg-4 col-md-6 tt-col-item">
                @include('frontend.wokiee.four.partials._product_widget',['element' => $product])
            </div>
        @endforeach
    </div>
@endif