<!doctype html>
{{--<html lang="{{ app()->getLocale() }}" class="tt-boxed">--}}
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @section('head')
        @include('frontend.wokiee.four.partials.head')
    @show
    @section('styles')
        @include('frontend.wokiee.four.partials.styles')
    @show
</head>

<body>

@include('frontend.wokiee.four.partials.loader')
@section('header')
    @include('frontend.wokiee.four.partials.header')
@show
@section('breadcrumbs')
@show
@section('content')
    <div id="tt-pageContent">
        <div class="container-indent">
            <div class="container container-fluid-custom-mobile-padding">
                @include('frontend.wokiee.four.partials.notifications')
            </div>
        </div>
        @yield('body')
    </div>
@show

<!--footer start-->
@section('footer')
    @include('frontend.wokiee.four.partials.footer')
@show
<!--footer end-->
@section('models')
    @include('frontend.wokiee.four.partials.modals')
@show

@section('scripts')
    @include('frontend.wokiee.four.partials.scripts')
@show
</body>
</html>
