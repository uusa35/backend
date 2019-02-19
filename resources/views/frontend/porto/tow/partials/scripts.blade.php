{{--<script src="{{ mix('js/app.js') }}"></script>--}}
@if(app()->isLocale('ar'))
    <script src="{{ mix('js/frontend-rtl.js') }}"></script>
@else
    <script src="{{ mix('js/porto/demo2.js') }}"></script>
@endif
@if(app()->environment('production'))
    <!-- Global site tag (gtag.js) - Google Analytics -->
@endif
@if($settings->code)
    {{--code--}}
    {!!  $settings->code !!}
@endif
