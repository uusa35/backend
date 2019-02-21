<script src="{{ mix('js/app.js') }}"></script>
@if(app()->isLocale('ar'))
    {{--    <script src="{{ mix('js/frontend-rtl.js') }}"></script>--}}
@endif
<script src="{{ mix('js/porto.demo3.js') }}"></script>
<script src="{{ mix('js/frontend-custom.js') }}"></script>
@if(app()->environment('production'))
    <!-- Global site tag (gtag.js) - Google Analytics -->
@endif
@if($settings->code)
    {{--code--}}
    {!!  $settings->code !!}
@endif
