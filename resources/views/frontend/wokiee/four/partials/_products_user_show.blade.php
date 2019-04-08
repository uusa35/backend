@if(isset($products) && $products->isNotEmpty())
    @foreach($products as $product)
        <div class="col-4 col-xs-12 tt-col-item">
            @include('frontend.wokiee.four.partials._product_widget',['element' => $product])
        </div>
    @endforeach
@endif