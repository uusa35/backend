<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @section('head')
        @include('frontend.porto.three.partials.head')
    @show
    @section('styles')
        @include('frontend.porto.three.partials.styles')
    @show
</head>

<body>
<div class="page-wrapper">
@section('header')
    @include('frontend.porto.three.partials.header')
@show
@section('content')
    @yield('body')
@show

<!--footer start-->
@section('footer')
    @include('frontend.porto.three.partials.footer')
@show
<!--footer end-->

@section('models')
    @include('frontend.porto.tow.partials.models')
@show
<!--script for this page-->
    @section('scripts')
        @include('frontend.porto.three.partials.scripts')
    @show
</div>
</body>
</html>
