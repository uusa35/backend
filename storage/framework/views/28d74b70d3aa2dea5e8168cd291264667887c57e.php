<div id="loader-wrapper" style="display: flex; flex-direction: column; justify-content: center; align-items: center; flex-wrap: nowrap;">
    <div><img class="img-responsive img-sm" src="<?php echo e($settings->logoThumb); ?>" alt="<?php echo e($settings->company); ?>"></div><br>
    <div><?php echo e(trans("general.loading")); ?></div>
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