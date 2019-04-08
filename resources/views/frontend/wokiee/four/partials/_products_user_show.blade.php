@if(isset($products) && $products->isNotEmpty())
<<<<<<< HEAD
    <div class="row">
        @foreach($products as $product)
            <div class="col-lg-4 col-md-6">
                @include('frontend.wokiee.four.partials._product_widget',['element' => $product])
            </div>
        @endforeach
    </div>
=======
    @foreach($products as $product)
        <div class="col-4 col-xs-12 tt-col-item">
            @include('frontend.wokiee.four.partials._product_widget',['element' => $product])
        </div>
    @endforeach
>>>>>>> aecd7a33545ffbd5f06be684f8a767cb86c3c773
@endif