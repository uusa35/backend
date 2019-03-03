<div class="col-6 hidden-xs">
    <div class="tt-product-single-img">
        <div>
            <button class="tt-btn-zomm tt-top-right"><i class="icon-f-86"></i></button>
            <img class="zoom-product" src='{{ $element->imageLargeLink }}'
                 data-zoom-image="{{ $element->imageLargeLink }}" alt="">
        </div>
    </div>
    <div class="product-images-carousel">
        <ul id="smallGallery" class="arrow-location-02  slick-animated-show-js">
            <li>
                <a class="zoomGalleryActive" href="#" data-image="{{ $element->imageThumbLink }}"
                   data-zoom-image="{{ $element->imageLargeLink }}"><img
                            src="{{ $element->imageLargeLink }}" alt=""/></a></li>
            @foreach($element->images as $img)
                <li>
                    <a href="#" data-image="{{ $img->imageLargeLink }}"
                       data-zoom-image="{{ $img->imageLargeLink }}"><img
                                src="{{ $img->imageLargeLink }}" alt=""/></a></li>
            @endforeach
            @if($element->video_url)
                <li>
                    <div class="video-link-product" data-toggle="modal" data-type="youtube"
                         data-target="#modalVideoProduct"
                         data-value="http://www.youtube.com/embed/GhyKqj_P2E4">
                        <img src="{{ $element->imageLargeLink }}" alt="{{ $element->name }}"/>
                        <div>
                            <i class="icon-f-32"></i>
                        </div>
                    </div>
                </li>
            @endif
            {{--<li>--}}
            {{--<div class="video-link-product" data-toggle="modal" data-type="video"--}}
            {{--data-target="#modalVideoProduct" data-value="video/video.mp4"--}}
            {{--data-poster="video/video_img.jpg">--}}
            {{--<img src="{{ $element->imageThumbLink }}" alt="{{ $element->name }}"/>--}}
            {{--<div>--}}
            {{--<i class="icon-f-32"></i>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</li>--}}
        </ul>
    </div>
</div>