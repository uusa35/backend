@include('frontend.wokiee.partials.scripts')

@if(app()->isLocale('ar'))
    <script src="{{ mix('js/frontend-rtl.js') }}"></script>
    <script src="{{ mix('js/wokiee.demo5-rtl.js') }}"></script>
@else
    <script src="{{ mix('js/wokiee.demo5.js') }}"></script>
@endif
<script src="{{ mix('js/frontend-custom.js') }}"></script>


