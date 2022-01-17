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
@if(env('GOOGLE_TRANSLATE_FEATURE'))
    <div style="position: absolute; top: 0px; left: 0px;" id="google_translate_element"></div>
@endif
@include('frontend.wokiee.four.partials.loader')


@section('header')
    @if(!env('MOBILE_LAYOUT'))
        @include('frontend.wokiee.four.partials.header')
    @endif
@show

@section('content')
@section('breadcrumbs')
@show
<div id="tt-pageContent">
    @include('frontend.wokiee.four.partials.notifications')
    @yield('body')
</div>
@show

@section('footer')
    @if(!env('MOBILE_LAYOUT'))
        @include('frontend.wokiee.four.partials.footer')
    @endif
@show
@if(!env('MOBILE_LAYOUT'))
@section('models')
    @include('frontend.wokiee.four.partials.modals')
@show
@endif

@section('scripts')
    @include('frontend.wokiee.four.partials.scripts')
@show
</body>
</html>
