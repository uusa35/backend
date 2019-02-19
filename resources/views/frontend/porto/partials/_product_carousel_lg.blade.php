<section class="page-section dark">
    <div class="container">
        <h2 class="section-title"><span>{{ $title }}</span></h2>
        <div class="featured-products-carousel">
            <div class="productCarousel owl-carousel">
                @foreach($elements as $element)
                    <div class="thumbnail bordered no-padding">
                        <div class="media">
                            <a class="media-link"
                               @mobile
                               href="{{ route('frontend.product.show.name', ['name' => str_replace(' ', '-',$element->name), 'id' => $element->id]) }}"
                               @elsemobile
                               data-gal="prettyPhoto"
                               href="{{ asset(env('LARGE').$element->image) }}"
                               @endmobile
                            >
                                <img src="{{ asset(env('THUMBNAIL').$element->image) }}"
                                     alt="{{ $element->name . $element->description}}"/>
                                <span class="icon-view">
                                    <strong><i class="fa fa-eye"></i></strong>
                                </span>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a
                                        href="{{ route('frontend.product.show.name', ['name' => str_replace(' ', '-',$element->name), 'id' => $element->id]) }}">{{ str_limit($element->name,25,'') }}</a>
                            </h4>
                            {{--<div class="rating">--}}
                            {{--<span class="star"></span>--}}
                            {{----><span class="star active"></span><!----}}
                            {{----><span class="star active"></span><!----}}
                            {{----><span class="star active"></span><!----}}
                            {{----><span class="star active"></span>--}}
                            {{--<strong><i class="fa fa-heart"></i></strong>--}}
                            {{--</div>--}}

                            <div class="price">
                                @if($element->isOnSale)
                                    <ins>{{ $element->convertedSalePrice}} <span>{{ $currency->symbol }}</span></ins>
                                    <del>{{ $element->convertedPrice }} <span>{{ $currency->symbol }}</span></del>
                                @else
                                    <ins>{{ $element->convertedPrice }} <span>{{ $currency->symbol }}</span></ins>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
