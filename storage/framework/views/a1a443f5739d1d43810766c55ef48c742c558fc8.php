<div class="row">
    <div class="col-lg-12">
        <div class="m-heading-1 border-green m-bordered">
            <?php if(isset($title)): ?>
                <h3><?php echo e($title); ?></h3>
            <?php endif; ?>
            <?php if(isset($message)): ?>
                <p class="text-justify">
                    <?php echo e($message); ?>

                </p>
            <?php endif; ?>
        </div>
    </div>
</div>