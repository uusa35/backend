<div class="mb-3 mb-lg-5"></div><!-- margin -->
<h2 class="title mb-3">{{ $title }}</h2>
<div class="owl-carousel owl-theme featured-products">
    @foreach($elements as $element)
        <div class="product">
            <figure class="product-image-container">
                <a href="product.html" class="product-image">
                    <img src="https://source.unsplash.com/collection/3756765/600x600" alt="product">
                </a>
                <a href="ajax/product-quick-view.html"
                   class="btn-quickview">{{ trans('general.quick_view') }}</a>
                @if($element->on_sale)
                    <span class="product-label label-sale">{{ trans('general.on_sale') }}</span>
                @endif
                @if($element->is_new)
                    <span class="product-label label-hot">{{ trans('general.new') }}</span>
                @endif
            </figure>
            <div class="product-details action-inner">
                <h2 class="product-title">
                    <a href="{{ route('frontend.product.show.name',['id' => $element->id, 'name' => $element->name]) }}">{{ str_limit($element->name,25,'..') }}</a>
                </h2>
                <div class="product-action">
                    <a href="#" class="paction add-wishlist" title="{{ trans('general.add_to_wish_list') }}">
                        <span>{{ trans('general.add_to_wish_list') }}</span>
                    </a>
                </div><!-- End .product-action -->
                <div class="price-box">
                    @if($element->on_sale)
                        <span class="old-price">{{ $element->convertedPrice }} - {{ $currency->symbol }}</span>
                        <span class="product-price">{{ $element->convertedSalePrice }} - {{ $currency->symbol }}</span>
                    @else
                        <span class="product-price">{{ $element->convertedPrice }} - {{ $currency->symbol }}</span>
                    @endif
                </div><!-- End .price-box -->
            </div><!-- End .product-details -->
        </div><!-- End .product -->
    @endforeach
</div><!-- End .featured-products -->