<ul>
    <li>
        <strong class="border-bottom"><?php echo e(trans('general.language')); ?></strong>
    </li>
    <li class="<?php echo e(app()->isLocale('ar') ? 'active' : null); ?>"><a
                href="<?php echo e(route('frontend.language.change',['locale' => 'ar'])); ?>"><?php echo e(trans('general.arabic')); ?></a>
    </li>
    <li class="<?php echo e(app()->isLocale('en') ? 'active' : null); ?>"><a
                href="<?php echo e(route('frontend.language.change',['locale' => 'en'])); ?>"><?php echo e(trans('general.english')); ?></a>
    </li>
</ul>