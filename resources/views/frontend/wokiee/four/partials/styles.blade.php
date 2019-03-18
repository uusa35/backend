@include('frontend.wokiee.partials.styles')
<style type="text/css">
    .btn,
    .tt-color-scheme-02,
    .tt-back-to-top,
    /*.tt-dropdown-toggle,*/
    .tt-badge-cart,
    .tt-show
    {
        background-color: {{ $settings->main_theme_color }} !important;
    }

    .tt-desctop-menu:not(.tt-hover-02) li.dropdown.active>a, .tt-desctop-menu:not(.tt-hover-02) li.dropdown.selected>a, .tt-desctop-menu:not(.tt-hover-02) li.dropdown>a:hover
    .btn.btn-border, a:hover,
    .countdown-selection
    .theme-color,
    .tt-countdown, .tt-countdown_box,
    .btn-link, .btn-link:focus,
    .tt-product-single-info > a,
     .tt-price, .old-price,
    .money,
    header .tt-multi-obj ul li.active a, header .tt-multi-obj ul li.active a [class^=icon-], header .tt-multi-obj ul li a:hover, header .tt-multi-obj ul li a:hover [class^=icon-],
    footer .tt-color-scheme-01
    {
        color : {{ $settings->title_theme_color }} !important;
    }

    .tt-collapse-title {
        border-bottom: 1px solid {{ $settings->main_theme_color }};
    }
    .btn.btn-border {
        color : white !important;
        border : none !important;
    }
</style>
