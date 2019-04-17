@if (app()->isLocale('ar'))
<link href="{{ mix('css/backend-rtl.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap-timepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/clockface.css') }}" rel="stylesheet">
@else
<link href="{{ mix('css/backend.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap-timepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/clockface.css') }}" rel="stylesheet">
@endif