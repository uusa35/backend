<li class="disabled">
    <a href="#" disabled="true" class="tooltips disabled" data-container="body" data-placement="<?php echo e(app()->isLocale('ar') ? 'left' : 'right'); ?>" data-original-title="<?php echo e(trans('message.create_your_new_items_list')); ?>">
        <i class="icon-note"></i> <?php echo e(trans('general.create_your_new_items_list')); ?></a>
</li>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isAdminOrAbove')): ?>
<li>
    <a href="<?php echo e(route('backend.admin.user.create')); ?>" class="tooltips" data-container="body" data-placement="<?php echo e(app()->isLocale('ar') ? 'left' : 'right'); ?>" data-original-title="<?php echo e(trans('message.new_user')); ?>">
        <i class="icon-plus"></i> <?php echo e(trans('general.new_user')); ?></a>
</li>
<li>
    <a href="<?php echo e(route('backend.admin.country.create')); ?>" class="tooltips" data-container="body" data-placement="<?php echo e(app()->isLocale('ar') ? 'left' : 'right'); ?>" data-original-title="<?php echo e(trans('message.new_country')); ?>">
        <i class="icon-plus"></i> <?php echo e(trans('general.new_country')); ?></a>
</li>
<li>
    <a href="<?php echo e(route('backend.admin.currency.create')); ?>" class="tooltips" data-container="body" data-placement="<?php echo e(app()->isLocale('ar') ? 'left' : 'right'); ?>" data-original-title="<?php echo e(trans('message.new_currency')); ?>">
        <i class="icon-plus"></i> <?php echo e(trans('general.new_currency')); ?></a>
</li>
<li>
    <a href="<?php echo e(route('backend.admin.category.create')); ?>" class="tooltips" data-container="body" data-placement="<?php echo e(app()->isLocale('ar') ? 'left' : 'right'); ?>" data-original-title="<?php echo e(trans('message.new_category')); ?>">
        <i class="icon-plus"></i> <?php echo e(trans('general.new_category')); ?></a>
</li>
<li>
    <a href="<?php echo e(route('backend.admin.coupon.create')); ?>" class="tooltips" data-container="body" data-placement="<?php echo e(app()->isLocale('ar') ? 'left' : 'right'); ?>" data-original-title="<?php echo e(trans('message.new_coupon')); ?>">
        <i class="icon-plus"></i> <?php echo e(trans('general.new_coupon')); ?></a>
</li>
<li>
    <a href="<?php echo e(route('backend.admin.tag.create')); ?>" class="tooltips" data-container="body" data-placement="<?php echo e(app()->isLocale('ar') ? 'left' : 'right'); ?>" data-original-title="<?php echo e(trans('message.new_tag')); ?>">
        <i class="icon-plus"></i> <?php echo e(trans('general.new_tag')); ?></a>
</li>
<li>
    <a href="<?php echo e(route('backend.admin.brand.create')); ?>" class="tooltips" data-container="body" data-placement="<?php echo e(app()->isLocale('ar') ? 'left' : 'right'); ?>" data-original-title="<?php echo e(trans('message.new_brand')); ?>">
        <i class="icon-plus"></i> <?php echo e(trans('general.new_brand')); ?></a>
</li>
<li>
    <a href="<?php echo e(route('backend.admin.color.create')); ?>" class="tooltips" data-container="body" data-placement="<?php echo e(app()->isLocale('ar') ? 'left' : 'right'); ?>" data-original-title="<?php echo e(trans('message.new_color')); ?>">
        <i class="icon-plus"></i> <?php echo e(trans('general.new_color')); ?></a>
</li>
<li>
    <a href="<?php echo e(route('backend.admin.size.create')); ?>" class="tooltips" data-container="body" data-placement="<?php echo e(app()->isLocale('ar') ? 'left' : 'right'); ?>" data-original-title="<?php echo e(trans('message.new_size')); ?>">
        <i class="icon-plus"></i> <?php echo e(trans('general.new_size')); ?></a>
</li>
<li>
    <a href="<?php echo e(route('backend.admin.newsletter.create')); ?>" class="tooltips" data-container="body" data-placement="<?php echo e(app()->isLocale('ar') ? 'left' : 'right'); ?>" data-original-title="<?php echo e(trans('message.new_newsletter')); ?>">
        <i class="icon-plus"></i> <?php echo e(trans('general.new_newsletter')); ?></a>
</li>
<li>
    <a href="<?php echo e(route('backend.admin.faq.create')); ?>" class="tooltips" data-container="body" data-placement="<?php echo e(app()->isLocale('ar') ? 'left' : 'right'); ?>" data-original-title="<?php echo e(trans('message.new_faq')); ?>">
        <i class="icon-plus"></i> <?php echo e(trans('general.new_faq')); ?></a>
</li>
<li>
    <a href="<?php echo e(route('backend.admin.commercial.create')); ?>" class="tooltips" data-container="body" data-placement="<?php echo e(app()->isLocale('ar') ? 'left' : 'right'); ?>" data-original-title="<?php echo e(trans('message.new_commercial')); ?>">
        <i class="icon-plus"></i> <?php echo e(trans('general.new_commercial')); ?></a>
</li>
<li>
    <a href="<?php echo e(route('backend.admin.notification.create')); ?>" class="tooltips" data-container="body" data-placement="<?php echo e(app()->isLocale('ar') ? 'left' : 'right'); ?>" data-original-title="<?php echo e(trans('message.new_notification')); ?>">
        <i class="icon-plus"></i> <?php echo e(trans('general.new_notification')); ?></a>
</li>
<li>
    <a href="<?php echo e(route('backend.admin.policy.create')); ?>" class="tooltips" data-container="body" data-placement="<?php echo e(app()->isLocale('ar') ? 'left' : 'right'); ?>" data-original-title="<?php echo e(trans('message.new_policy')); ?>">
        <i class="icon-plus"></i> <?php echo e(trans('general.new_policy')); ?></a>
</li>
<li>
    <a href="<?php echo e(route('backend.admin.role.create')); ?>" class="tooltips" data-container="body" data-placement="<?php echo e(app()->isLocale('ar') ? 'left' : 'right'); ?>" data-original-title="<?php echo e(trans('message.new_role')); ?>">
        <i class="icon-plus"></i> <?php echo e(trans('general.new_role')); ?></a>
</li>
<li>
    <a href="<?php echo e(route('backend.admin.privilege.create')); ?>" class="tooltips" data-container="body" data-placement="<?php echo e(app()->isLocale('ar') ? 'left' : 'right'); ?>" data-original-title="<?php echo e(trans('message.new_privilege')); ?>">
        <i class="icon-plus"></i> <?php echo e(trans('general.new_privilege')); ?></a>
</li>
<li>
    <a href="<?php echo e(route('backend.admin.term.create')); ?>" class="tooltips" data-container="body" data-placement="<?php echo e(app()->isLocale('ar') ? 'left' : 'right'); ?>" data-original-title="<?php echo e(trans('message.new_term')); ?>">
        <i class="icon-plus"></i> <?php echo e(trans('general.new_term')); ?></a>
</li>
<li>
    <a href="<?php echo e(route('backend.package.create')); ?>" class="tooltips" data-container="body" data-placement="<?php echo e(app()->isLocale('ar') ? 'left' : 'right'); ?>" data-original-title="<?php echo e(trans('message.new_package')); ?>">
        <i class="icon-plus"></i> <?php echo e(trans('general.new_package')); ?></a>
</li>
<li>
    <a href="<?php echo e(route('backend.admin.day.create')); ?>" class="tooltips" data-container="body" data-placement="<?php echo e(app()->isLocale('ar') ? 'left' : 'right'); ?>" data-original-title="<?php echo e(trans('message.new_day')); ?>">
        <i class="icon-plus"></i> <?php echo e(trans('general.new_day')); ?></a>
</li>
<li>
    <a href="<?php echo e(route('backend.admin.page.create')); ?>" class="tooltips" data-container="body" data-placement="<?php echo e(app()->isLocale('ar') ? 'left' : 'right'); ?>" data-original-title="<?php echo e(trans('message.new_page')); ?>">
        <i class="icon-plus"></i> <?php echo e(trans('general.new_page')); ?></a>
</li>
<li>
    <a href="<?php echo e(route('backend.slide.create',['slidable_id' => 1, 'slidable_type' => 'user'])); ?>" class="tooltips" data-container="body" data-placement="<?php echo e(app()->isLocale('ar') ? 'left' : 'right'); ?>" data-original-title="<?php echo e(trans('message.new_slider')); ?>">
        <i class="icon-plus"></i> <?php echo e(trans('general.new_slide_for_home_page')); ?></a>
</li>
<?php endif; ?>