
{{--<link rel="stylesheet" href="{{ mix('css/wokiee.demo.css') }}">--}}
<link rel="stylesheet" href="{{ mix('css/wokiee-theme-sass.css') }}">
@if (app()->isLocale('ar'))
    <link rel="stylesheet" href="{{ mix('css/wokiee-theme-sass-rtl.css') }}">
    <link rel="stylesheet" href="{{ mix('css/frontend-custom-ar.css') }}">
@else
    <link rel="stylesheet" href="{{ mix('css/frontend-custom-en.css') }}">
@endif
<link rel="stylesheet" href="{{ mix('css/plugins.css') }}">

