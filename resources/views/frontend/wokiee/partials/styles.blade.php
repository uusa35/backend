@if (app()->isLocale('ar'))
    <link rel="stylesheet" href="{{ mix('css/frontend-custom-ar.css') }}">
    <link rel="stylesheet" href="{{ mix('css/frontend-rtl.css') }}">
@else
    <link rel="stylesheet" href="{{ mix('css/frontend-custom-en.css') }}">
@endif