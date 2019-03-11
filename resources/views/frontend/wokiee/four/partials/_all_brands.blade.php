@if($brands->isNotEmpty())
    <div class="container-indent">
        <div class="container container-fluid-custom-mobile-padding">
            <div class="tt-block-title">
                <h2 class="tt-title">{{ trans('general.brands') }}</h2>
                <div class="tt-description">{{ trans('message.brands_on_home_page') }}</div>
            </div>
            <div class="row tt-img-box-listing">
                @foreach($brands as $b)
                    <div class="col-6 col-sm-4 col-md-3">
                        <a href="{{ route('frontend.product.search',['brand_id' => $b->id]) }}" class="tt-img-box">
                            <img src="{{ asset(env('IMG_LOADER')) }}" class="img-sm"
                                 data-src="{{ $b->imageThumbLink }}" alt="{{ $b->slug  }}">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif