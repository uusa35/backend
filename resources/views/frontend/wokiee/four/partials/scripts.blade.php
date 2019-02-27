@include('frontend.wokiee.partials.scripts')
<script src="{{ mix('js/wokiee.demo5.js') }}"></script>
@if(app()->isLocale('ar'))
    <script src="{{ mix('js/frontend-rtl.js') }}"></script>
@endif
<script src="{{ mix('js/frontend-custom.js') }}"></script>


