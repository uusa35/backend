@if($slides->isNotEmpty())
    <section class="page-section no-padding slider slider-wrapper">
        <div class="container full-width">
            <div class="main-slider">
                <div class="owl-carousel" id="main-slider-{{ app()->getLocale() }}">
                    @foreach($slides as $slide)
                        <div class="item slide1">
                            <img class="slide-img" src="{{ asset(env('LARGE').$slide->image) }}"
                                 alt="{{ $slide->caption }}"
                                 alt="{{ $slide->caption_ar .' '. $slide->caption_en }}"/>
                            <div class="caption">
                                <div class="container ">
                                    <div class="div-table">
                                        <div class="div-cell" style="opacity : 0.8;">
                                            {{--<div class="caption-content">--}}
                                            <h2 class="caption-title"></h2>
                                            @if($slide->path)
                                                <p class="caption-text">
                                                    <a class="btn btn-theme center-block text-center"
                                                       href="{{ asset(env('FILES').$slide->path) }}">{{ $slide->caption }}</a>
                                                </p>
                                            @endif
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif
