<script src="<?php echo e(mix('js/backend.js')); ?>"></script>
<script src="<?php echo e(mix('js/tinymce.min.js')); ?>"></script>
<script src="<?php echo e(mix('js/backend-custom.js')); ?>"></script>
<script type="application/javascript">
    window.Laravel = <?php echo json_encode([
                            'csrfToken' => csrf_token(),
                        ]); ?>
</script>