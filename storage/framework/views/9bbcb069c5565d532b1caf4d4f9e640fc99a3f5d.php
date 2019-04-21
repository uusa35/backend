<li class="nav-item <?php echo e(activeItem('product')); ?>">
    <a href="<?php echo e(route('backend.product.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-product-hunt"></i>
        <span class="title"><?php echo e(trans('general.products')); ?></span>
        <span class="selected"></span>
        <span class="arrow open"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.product.index')); ?>" class="nav-link ">
                <i class="fa fa-fw fa-product-hunt"></i>
                <span class="title"><?php echo e(trans('general.all_products')); ?></span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.product.index',['type' => 'active'])); ?>" class="nav-link ">
                <i class="fa fa-fw fa-product-hunt"></i>
                <span class="title"><?php echo e(trans('general.active_products')); ?></span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.product.index',['type' => 'on_sale'])); ?>" class="nav-link ">
                <i class="fa fa-fw fa-percent"></i>
                <span class="title"><?php echo e(trans('general.on_sale_products')); ?></span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.product.create')); ?>" class="nav-link ">
                <i class="fa fa-fw fa-plus-square"></i>
                <span class="title"><?php echo e(trans('general.new_product')); ?></span>
                <span class="arrow"></span>
            </a>
        </li>
        
        
        
        
        
        
        
    </ul>
</li>
<li class="nav-item <?php echo e(activeItem('service')); ?>">
    <a href="<?php echo e(route('backend.service.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-clock-o"></i>
        <span class="title"><?php echo e(trans('general.services')); ?></span>
        <span class="arrow"></span>
    </a>
</li>
<li class="nav-item <?php echo e(activeItem('timing',['day'])); ?>">
    <a href="<?php echo e(route("backend.timing.index")); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-clock-o"></i>
        <span class="title"><?php echo e(trans('general.timings')); ?></span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item <?php echo e(activeItem('timing')); ?>">
            <a href="<?php echo e(route('backend.timing.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-clock-o"></i>
                <span class="title"><?php echo e(trans('general.service_timings')); ?></span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item <?php echo e(activeItem('day')); ?>">
            <a href="<?php echo e(route('backend.admin.day.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-calendar"></i>
                <span class="title"><?php echo e(trans('general.days')); ?></span>
                <span class="arrow"></span>
            </a>

        </li>

    </ul>
</li>
<li class="nav-item <?php echo e(activeItem('user')); ?>">
    <a href="<?php echo e(route('backend.admin.user.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-user"></i>
        <span class="title"><?php echo e(trans('general.users')); ?></span>
        <span class="selected"></span>
        <span class="arrow open"></span>
    </a>

</li>


<li class="nav-item <?php echo e(activeItem('setting', ['policy','term','faq','page','contactus', 'aboutus','gallery','image','color','size','tag','day','role','privilege','coupon'])); ?>">
    <a href="<?php echo e(route('backend.admin.setting.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-cogs"></i>
        <span class="title"><?php echo e(trans('general.app_settings')); ?></span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.coupon.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-cc-discover"></i>
                <span class="title"><?php echo e(trans('general.coupons')); ?></span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item <?php echo e(activeItem('policy')); ?>">
            <a href="<?php echo e(route('backend.admin.policy.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-certificate"></i>
                <span class="title"><?php echo e(trans('general.polices')); ?></span>
                <span class="arrow"></span>
            </a>

        </li>
        <li class="nav-item <?php echo e(activeItem('role')); ?>">
            <a href="<?php echo e(route('backend.admin.role.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-users"></i>
                <span class="title"><?php echo e(trans('general.roles')); ?></span>
                <span class="arrow"></span>
            </a>

        </li>
        <li class="nav-item <?php echo e(activeItem('term')); ?>">
            <a href="<?php echo e(route('backend.admin.term.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-info-circle"></i>
                <span class="title"><?php echo e(trans('general.terms')); ?></span>
                <span class="arrow"></span>
            </a>

        </li>
        <li class="nav-item <?php echo e(activeItem('privilege')); ?>">
            <a href="<?php echo e(route('backend.admin.privilege.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-lock"></i>
                <span class="title"><?php echo e(trans('general.privileges')); ?></span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item ">
                    <a href="<?php echo e(route('backend.admin.privilege.create')); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-fw fa-list-ul"></i>
                        <span class="title"><?php echo e(trans('general.create_privilege')); ?> </span>
                        <span class="arrow"></span>
                    </a>
                </li>

            </ul>
        </li>

        <li class="nav-item <?php echo e(activeItem('tag')); ?>">
            <a href="<?php echo e(route('backend.tag.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-tags"></i>
                <span class="title"><?php echo e(trans('general.tags')); ?></span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item <?php echo e(activeItem('color')); ?>">
            <a href="<?php echo e(route('backend.admin.color.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-list-alt"></i>
                <span class="title"><?php echo e(trans('general.colors')); ?></span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item <?php echo e(activeItem('size')); ?>">
            <a href="<?php echo e(route('backend.admin.size.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-list-ul"></i>
                <span class="title"><?php echo e(trans('general.sizes')); ?></span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item <?php echo e(activeItem('setting')); ?>">
            <a href="<?php echo e(route('backend.admin.setting.index')); ?>" class="nav-link ">
                <i class="fa fa-fw fa-edit"></i>
                <span class="title"><?php echo e(trans('general.edit_app_settings')); ?></span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.package.index')); ?>" class="nav-link ">
                <i class="fa fa-fw fa-file-image-o"></i>
                <span class="title"><?php echo e(trans('general.packages')); ?></span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item <?php echo e(activeItem('newsletter')); ?>">
            <a href="<?php echo e(route('backend.admin.newsletter.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-newspaper-o"></i>
                <span class="title"><?php echo e(trans('general.newsletters')); ?></span>
                <span class="arrow"></span>
            </a>

        </li>


        <li class="nav-item <?php echo e(activeItem('faq')); ?>">
            <a href="<?php echo e(route('backend.admin.faq.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-question-circle"></i>
                <span class="title"><?php echo e(trans('general.faqs')); ?></span>
                <span class="arrow"></span>
            </a>


        </li>

        <li class="nav-item <?php echo e(activeItem('commercial')); ?>">
            <a href="<?php echo e(route('backend.admin.commercial.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-address-card-o "></i>
                <span class="title"><?php echo e(trans('general.commercials')); ?></span>
                <span class="arrow"></span>
            </a>

        </li>

        <li class="nav-item <?php echo e(activeItem('notification')); ?>">
            <a href="<?php echo e(route('backend.admin.notification.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-bell"></i>
                <span class="title"><?php echo e(trans('general.notifications')); ?></span>
                <span class="arrow"></span>
            </a>

        </li>

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.page.index')); ?>" class="nav-link ">
                <i class="fa fa-fw fa-book"></i>
                <span class="title"><?php echo e(trans('general.pages')); ?></span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="<?php echo e(route('backend.admin.page.index')); ?>" class="nav-link">
                        <i class="fa fa-fw fa-list-alt"></i> <?php echo e(trans('general.pages')); ?>

                        <span class="arrow nav-toggle"></span>
                    </a>
                </li>

            </ul>
        </li>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </ul>
</li>

<li class="nav-item <?php echo e(activeItem('category')); ?>">
    <a href="<?php echo e(route('backend.admin.category.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-list-ol"></i>
        <span class="title"><?php echo e(trans('general.categories')); ?></span>
        <span class="arrow"></span>
    </a>
</li>

<li class="nav-item <?php echo e(activeItem('country')); ?>">
    <a href="<?php echo e(route('backend.admin.country.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-globe"></i>
        <span class="title"><?php echo e(trans('general.countries')); ?></span>
        <span class="arrow"></span>
    </a>
</li>

<li class="nav-item <?php echo e(activeItem('currency')); ?>">
    <a href="<?php echo e(route('backend.admin.currency.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-dollar"></i>
        <span class="title"><?php echo e(trans('general.currencies')); ?></span>
        <span class="arrow"></span>
    </a>
</li>

<li class="nav-item <?php echo e(activeItem('branch')); ?>">
    <a href="<?php echo e(route('backend.branch.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-building-o"></i>
        <span class="title"><?php echo e(trans('general.company_branches')); ?></span>
        <span class="arrow"></span>
    </a>
</li>


<li class="nav-item <?php echo e(activeItem('brand')); ?>">
    <a href="<?php echo e(route('backend.admin.brand.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-shopping-bag"></i>
        <span class="title"><?php echo e(trans('general.brands')); ?></span>
        <span class="arrow"></span>
    </a>
</li>
<li class="nav-item <?php echo e(activeItem('area')); ?>">
    <a href="<?php echo e(route('backend.admin.area.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-shopping-bag"></i>
        <span class="title"><?php echo e(trans('general.areas')); ?></span>
        <span class="arrow"></span>
    </a>
</li>
<li class="nav-item <?php echo e(activeItem('aboutus')); ?>">
    <a href="<?php echo e(route('backend.admin.aboutus.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-shopping-bag"></i>
        <span class="title"><?php echo e(trans('general.aboutus')); ?></span>
        <span class="arrow"></span>
    </a>
</li>
<li class="nav-item <?php echo e(activeItem('order')); ?>">
    <a href="<?php echo e(route('backend.admin.order.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-money"></i>
        <span class="title"><?php echo e(trans('general.orders')); ?></span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.order.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-pie-chart"></i>
                <span class="title"><?php echo e(trans('general.orders')); ?></span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.order.index',['status' => 'success'])); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-pie-chart"></i>
                <span class="title"><?php echo e(trans('general.successful_orders')); ?></span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.order.index',['status' => 'failed'])); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-pie-chart"></i>
                <span class="title"><?php echo e(trans('general.failed_orders')); ?></span>
                <span class="arrow"></span>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item <?php echo e(activeItem('question',['survey','answer'])); ?>">
    <a href="<?php echo e(route('backend.admin.survey.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-th-list"></i>
        <span class="title"><?php echo e(trans('general.surveys')); ?></span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.survey.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-list-ul"></i>
                <span class="title"><?php echo e(trans('general.surveys')); ?></span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.question.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-list-ul"></i>
                <span class="title"><?php echo e(trans('general.questions_list')); ?></span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.answer.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-magic"></i>
                <span class="title"><?php echo e(trans('general.answers_list')); ?></span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.questionnaire.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-list-ul"></i>
                <span class="title"><?php echo e(trans('general.questionnaires_answers')); ?></span>
                <span class="arrow"></span>
            </a>
        </li>

        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </ul>
</li>

<li class="nav-item <?php echo e(activeItem('slide')); ?>">
    <a href="<?php echo e(route('backend.slide.index')); ?>" class="nav-link ">
        <i class="fa fa-fw fa-file-image-o"></i>
        <span class="title"><?php echo e(trans('general.slides')); ?></span>
        <span class="arrow"></span>
    </a>
</li>