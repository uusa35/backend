<?php if(isset($categoriesList) && $categoriesList->isNotEmpty()): ?>
    <div class="tt-collapse open">
        <h3 class="tt-collapse-title"><?php echo e(trans('general.filter_by_service_categories')); ?></h3>
        <div class="tt-collapse-content">
            <ul class="tt-filter-list ">
                <?php $__currentLoopData = $categoriesList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a class="<?php echo e(request('service_category_id') == $category->id ? 'text-warning' : null); ?>" href="<?php echo request()->fullUrlWithQuery(['service_category_id' => $category->id]); ?>"><?php echo e($category->name); ?></a>
                    </li>
                    
                        
                            
                                
                                    
                                
                            
                        
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <a href="<?php echo e(getRequestQueryUrlWithout('service_category_id')); ?>"
               class="btn-link-02"><?php echo e(trans("general.clear")); ?></a>
        </div>
    </div>
<?php endif; ?>