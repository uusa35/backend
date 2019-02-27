<script src="{{ mix('js/app.js') }}"></script>
@if($settings->code)
    {{--code--}}
    {!!  $settings->code !!}
@endif
@if(app()->environment('production'))
    <!-- Global site tag (gtag.js) - Google Analytics -->
@endif