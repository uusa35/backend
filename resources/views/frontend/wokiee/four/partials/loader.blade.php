<div id="loader-wrapper" style="display: flex; flex-direction: column; justify-content: center; align-items: center; flex-wrap: nowrap;">
    <div><img class="img-responsive img-sm" src="{{ $settings->logoThumb }}" alt="{{ $settings->company }}"></div><br>
    <div>{{ trans("general.loading") }}</div>
    <div id="loader" style="margin-top: 100px;">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
</div>