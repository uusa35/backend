
<link rel="stylesheet" href="{{ mix('css/theme.css') }}">
@if (app()->isLocale('ar'))
    <link rel="stylesheet" href="{{ mix('css/theme-rtl.css') }}">
    <link rel="stylesheet" href="{{ mix('css/frontend-custom-ar.css') }}">
@else
    <link rel="stylesheet" href="{{ mix('css/frontend-custom-en.css') }}">
{{--    <link rel="stylesheet" href="{{ mix('css/wokiee-theme-sass-rtl.css') }}">--}}
    <style>
        .tt-desctop-menu .megamenu .dropdown-menu {
            margin-top: 0px !important;
        }
    </style>
@endif
{{--<link rel="stylesheet" href="{{ mix('css/plugins.css') }}">--}}

