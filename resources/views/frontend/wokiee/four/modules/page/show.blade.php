@extends('frontend.wokiee.four.layouts.app')

@section('breadcrumbs')
    {{ Breadcrumbs::render('frontend.page.show',$element) }}
@endsection

@section('body')
    <div class="container-indent">
        <div class="container container-fluid-custom-mobile-padding">
            <div class="row justify-content-center">
                <div class="col-xs-12 col-md-10 col-lg-8 col-md-auto">
                    <div class="tt-post-single">
{{--                        <div class="tt-tag"><a href="#">{{ $element->title }}</a></div>--}}
                        <h1 class="tt-title">
                            {{ $element->slug }}
                        </h1>
                        <div class="tt-post-content">
                            <img src="{{ env('IMG_LOADER') }}" data-src="{{ $element->imageLargeLink }}" alt="">
                            <p>
                                {!! $element->content !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
