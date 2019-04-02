<?php if(isset($areas) && $areas->isNotEmpty()): ?>
    <div class="tt-collapse open">
        <h3 class="tt-collapse-title"><?php echo e(trans('general.filter_by_areas')); ?></h3>
        <div class="tt-collapse-content">
            <ul class="tt-list-row">
                <?php $__currentLoopData = $areas->where('country_id', getCurrentCountrySessionId()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a class="<?php echo e(request('area_id') == $area->id ? 'text-warning' : null); ?>"
                                href="<?php echo request()->fullUrlWithQuery(['area_id' => $area->id]); ?>"><?php echo e($area->slug); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
<?php endif; ?>