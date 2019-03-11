<div class="container-indent nomargin">
    <div class="container-fluid">
        <div class="row">
            <div class="slider-revolution revolution-default">
                <div class="tp-banner-container">
                    <div class="tp-banner revolution">
                        <ul>
                            @foreach($sliders as $s)
                                <li data-thumb="{{ asset($s->imgThumbLink) }}" data-transition="fade"
                                    data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"
                                    data-title="Slide">
                                    <img src="{{ asset($s->imageLargeLink) }}" alt="slide1"
                                         data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                                    <div class="tp-caption tp-caption1 lft stb"
                                         data-x="center"
                                         data-y="center"
                                         data-hoffset="0"
                                         data-voffset="0"
                                         data-speed="600"
                                         data-start="900"
                                         data-easing="Power4.easeOut"
                                         data-endeasing="Power4.easeIn">
                                        <div class="tp-caption1-wd-1 tt-base-color">{{ $s->title }}</div>
                                        <div class="tp-caption1-wd-2 tt-white-color">{{ $s->caption }}</div>
                                        @if($s->url)
                                            <div class="tp-caption1-wd-4"><a href="{{ $s->url }}"
                                                                             class="btn btn-xl"
                                                                             data-text="{{ $s->title }}">{{ $s->title }}</a>
                                            </div>
                                        @endif
                                        @if($s->path)
                                            <div class="tp-caption1-wd-4"><a
                                                        href="{{ storage_path(env('FILES').$s->path) }}"
                                                        class="btn btn-xl"
                                                        data-text="{{ $s->title }}">{{ $s->title }}</a>
                                            </div>
                                        @endif
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>