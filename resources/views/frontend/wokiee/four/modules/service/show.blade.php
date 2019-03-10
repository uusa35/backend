@extends('frontend.wokiee.four.layouts.app')

@section('breadcrumbs')
    {{ Breadcrumbs::render('frontend.service.show', $element) }}
@endsection



@section('body')
    <div class="container-indent">
        <!-- mobile product slider  -->
    @include('frontend.wokiee.four.partials._service_show_gallery_mobile')
    <!-- /mobile product slider  -->
        <div class="container  container-fluid-mobile">
            <div class="row">
                <div class="col-6 hidden-xs">
                    @include('frontend.wokiee.four.partials._service_show_gallery')
                </div>
                <div class="col-6">
                    {{--Add To Cart--}}
                    @include('frontend.wokiee.four.partials._service_show_service_service_information')
                </div>
                <div class="col-12">
                    {{-- Tabs --}}
                    {{--@include('frontend.wokiee.four.partials._service_show_timings_and_additional_information')--}}
                </div>
            </div>
        </div>
    </div>
    @include('frontend.wokiee.four.partials._show_page_social_icons')

@endsection

@section('scripts')
    @parent
    @include('frontend.wokiee.four.partials._service_show_js')
@endsection