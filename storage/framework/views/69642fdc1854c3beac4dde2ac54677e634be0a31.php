<script src="<?php echo e(mix('js/wokiee.demo.js')); ?>"></script>
<script src="<?php echo e(mix('js/app.js')); ?>"></script>
<script src="<?php echo e(mix('js/frontend-custom.js')); ?>"></script>
<?php if(app()->isLocale('ar')): ?>
    
    <script src="<?php echo e(mix('js/frontend-ar.js')); ?>"></script>
<?php else: ?>
    
    <script src="<?php echo e(mix('js/frontend-en.js')); ?>"></script>
<?php endif; ?>
<?php if($settings->code): ?>
    <?php echo $settings->code; ?>

<?php endif; ?>
<?php if(app()->environment('production')): ?>
<?php endif; ?>

