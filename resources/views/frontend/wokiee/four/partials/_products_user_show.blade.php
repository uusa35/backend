@if(isset($products) && $products->isNotEmpty())
    <div class="row">
        @foreach($products as $product)
                <div class="{{ count($products) < 2 ? 'col-lg-4' : 'col-lg-4' }} col-md-6 col-sm-6" style="margin-bottom: 15px;">
                    @include('frontend.wokiee.four.partials._product_widget',['element' => $product,'view' => true])
                </div>
        @endforeach
    </div>
@endif
