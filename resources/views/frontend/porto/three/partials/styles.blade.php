<link rel="stylesheet" href="{{ mix('css/app.css') }}">
@if (app()->isLocale('ar'))
<link rel="stylesheet" href="{{ mix('css/frontend-rtl.css') }}">
@else
    <link rel="stylesheet" href="{{ mix('css/porto.demo3.css') }}">
@endif