@if(app()->isLocale('ar'))
    <script src="{{ mix('js/frontend-rtl.js') }}"></script>
@else
    <script src="{{ mix('js/frontend.js') }}"></script>
@endif
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ mix('js/jquery.prettyPhoto.min.js') }}"></script>
@if(app()->environment('production'))
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128359885-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-128359885-1');
    </script>
@endif
@if($settings->code)
    {{--code--}}
    {!!  $settings->code !!}
@endif
