<div class="tt-filters-options desctop-no-sidebar">
    
    
    
    <div class="tt-sort">
        <select id="sort">
            <option value="" selected><?php echo e(trans('general.sort_by')); ?></option>
            <option value="name"><?php echo e(trans('general.sort_by_alpha')); ?></option>
            <option value="desc"><?php echo e(trans('general.sort_by_price_high_to_low')); ?></option>
            <option value="asc"><?php echo e(trans('general.sort_by_price_low_to_high')); ?></option>
        </select>
    </div>
</div>

<?php $__env->startSection('scripts'); ?>
    ##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
    <script type="text/javascript">
        $('#sort').on('change', function(e) {
            var sort = e.target.value;
            console.log('the sort', sort)
            window.location.replace('<?php echo request()->getUri(); ?>?&sort=' + sort);
        });
    </script>
<?php $__env->stopSection(); ?>