<?php if(isset($pages) && $pages->isNotEmpty()): ?>
    <?php $__currentLoopData = $pages->where('on_menu_desktop',true)->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="dropdown">
            <a href="<?php echo e(route('frontend.page.show.name',['id' => $page->id,'name' => $page->title])); ?>">
                <?php echo e(str_limit($page->title,5,'')); ?>

            </a>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>