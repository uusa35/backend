<li class="nav-item <?php echo e(activeItem('product')); ?>">
    <a href="<?php echo e(route('backend.product.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-product-hunt"></i>
        <span class="title">Products</span>
        <span class="selected"></span>
        <span class="arrow open"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.product.index')); ?>" class="nav-link ">
                <i class="fa fa-fw fa-product-hunt"></i>
                <span class="title">All Products</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.product.index',['type' => 'active'])); ?>" class="nav-link ">
                <i class="fa fa-fw fa-product-hunt"></i>
                <span class="title">Active Products</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.product.index',['type' => 'on_sale'])); ?>" class="nav-link ">
                <i class="fa fa-fw fa-percent"></i>
                <span class="title">On Sale Products</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.product.create')); ?>" class="nav-link ">
                <i class="fa fa-fw fa-plus-square"></i>
                <span class="title">Create New Product</span>
                <span class="arrow"></span>
            </a>
        </li>
        
        
        
        
        
        
        
    </ul>
</li>
<li class="nav-item <?php echo e(activeItem('user')); ?>">
    <a href="<?php echo e(route('backend.admin.user.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-user"></i>
        <span class="title">Users</span>
        <span class="selected"></span>
        <span class="arrow open"></span>
    </a>

</li>


<li class="nav-item <?php echo e(activeItem('category')); ?>">
    <a href="<?php echo e(route('backend.admin.category.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-list-ol"></i>
        <span class="title">Categories</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.category.index')); ?>" class="nav-link ">
                <i class="fa fa-fw fa-list-ul"></i>
                <span class="title">Categories</span>
                <span class="arrow"></span>
            </a>
        </li>

    </ul>
</li>

<li class="nav-item <?php echo e(activeItem('country')); ?>">
    <a href="<?php echo e(route('backend.admin.country.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-globe"></i>
        <span class="title">Countries</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.country.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-globe"></i>
                <span class="title">Countries Control</span>
                <span class="arrow"></span>
            </a>
            
            
            
            
            
            
            
            
        </li>

    </ul>
</li>

<li class="nav-item <?php echo e(activeItem('currency')); ?>">
    <a href="<?php echo e(route('backend.admin.currency.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-dollar"></i>
        <span class="title">Currencies</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.currency.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-euro"></i>
                <span class="title">All Currencies</span>
                <span class="arrow"></span>
            </a>
        </li>

    </ul>
</li>

<li class="nav-item <?php echo e(activeItem('coupon')); ?>">
    <a href="<?php echo e(route('backend.admin.coupon.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-credit-card"></i>
        <span class="title">Coupons</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.coupon.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-cc-discover"></i>
                <span class="title">All Coupons</span>
                <span class="arrow"></span>
            </a>
        </li>

    </ul>
</li>

<li class="nav-item <?php echo e(activeItem('setting', ['policy','term','faq','page','contactus', 'aboutus','gallery','image'])); ?>">
    <a href="<?php echo e(route('backend.admin.setting.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-cogs"></i>
        <span class="title">App Settings</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.setting.index')); ?>" class="nav-link ">
                <i class="fa fa-fw fa-edit"></i>
                <span class="title">Edit App Settings</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.branch.index')); ?>" class="nav-link ">
                <i class="fa fa-fw fa-file-image-o"></i>
                <span class="title">Branches</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.slide.index')); ?>" class="nav-link ">
                <i class="fa fa-fw fa-file-image-o"></i>
                <span class="title">Slides</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.package.index')); ?>" class="nav-link ">
                <i class="fa fa-fw fa-file-image-o"></i>
                <span class="title">Shipment Packages</span>
                <span class="arrow"></span>
            </a>
        </li>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.page.index')); ?>" class="nav-link ">
                <i class="fa fa-fw fa-book"></i>
                <span class="title">pages</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="<?php echo e(route('backend.admin.page.index')); ?>" class="nav-link">
                        <i class="fa fa-fw fa-list-alt"></i> All Pages
                        <span class="arrow nav-toggle"></span>
                    </a>
                </li>

            </ul>
        </li>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </ul>
</li>

<li class="nav-item <?php echo e(activeItem('tag')); ?>">
    <a href="<?php echo e(route('backend.tag.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-tag"></i>
        <span class="title">Tags</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.tag.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-tags"></i>
                <span class="title">All Tags</span>
                <span class="arrow"></span>
            </a>
        </li>

    </ul>
</li>
</li>

<li class="nav-item <?php echo e(activeItem('brand')); ?>">
    <a href="<?php echo e(route('backend.admin.brand.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-shopping-bag"></i>
        <span class="title">Brands</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.brand.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-shopping-bag"></i>
                <span class="title">All Brands</span>
                <span class="arrow"></span>
            </a>
        </li>

    </ul>
</li>
<li class="nav-item <?php echo e(activeItem('color')); ?>">
    <a href="<?php echo e(route('backend.admin.color.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-paint-brush"></i>
        <span class="title">Colors</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.color.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-list-alt"></i>
                <span class="title">Colors List</span>
                <span class="arrow"></span>
            </a>
        </li>

    </ul>
</li>
<li class="nav-item <?php echo e(activeItem('order')); ?>">
    <a href="<?php echo e(route('backend.admin.order.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-money"></i>
        <span class="title">Orders</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.order.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-pie-chart"></i>
                <span class="title">All Orders</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.order.index',['status' => 'success'])); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-pie-chart"></i>
                <span class="title">Successful Orders</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.order.index',['status' => 'failed'])); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-pie-chart"></i>
                <span class="title">Failed Orders</span>
                <span class="arrow"></span>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item <?php echo e(activeItem('size')); ?>">
    <a href="<?php echo e(route('backend.admin.size.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-tags"></i>
        <span class="title">Sizes</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.size.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-list-ul"></i>
                <span class="title">Size List</span>
                <span class="arrow"></span>
            </a>
        </li>

    </ul>
</li>
<li class="nav-item <?php echo e(activeItem('question',['survey','answer'])); ?>">
    <a href="<?php echo e(route('backend.admin.survey.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-th-list"></i>
        <span class="title">Surveys</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.survey.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-list-ul"></i>
                <span class="title">Surveys List</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.question.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-list-ul"></i>
                <span class="title">Questions List</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.answer.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-magic"></i>
                <span class="title">Answers List</span>
                <span class="arrow"></span>
            </a>
        </li>

        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </ul>
</li>
<li class="nav-item <?php echo e(activeItem('questionnaire')); ?>">
    <a href="<?php echo e(route('backend.admin.questionnaire.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-file-text-o"></i>
        <span class="title">Questionnaires</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.questionnaire.index')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-list-ul"></i>
                <span class="title">Questionnaire List</span>
                <span class="arrow"></span>
            </a>
        </li>

    </ul>
</li>

<li class="nav-item <?php echo e(activeItem('newsletter')); ?>">
    <a href="<?php echo e(route('backend.admin.newsletter.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-newspaper-o"></i>
        <span class="title">Newsletter</span>
        <span class="arrow"></span>
    </a>

</li>


<li class="nav-item <?php echo e(activeItem('faq')); ?>">
    <a href="<?php echo e(route('backend.admin.faq.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-question-circle"></i>
        <span class="title">FAQ</span>
        <span class="arrow"></span>
    </a>


</li>

<li class="nav-item <?php echo e(activeItem('commercial')); ?>">
    <a href="<?php echo e(route('backend.admin.commercial.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-address-card-o "></i>
        <span class="title">Commercials</span>
        <span class="arrow"></span>
    </a>

</li>

<li class="nav-item <?php echo e(activeItem('notification')); ?>">
    <a href="<?php echo e(route('backend.admin.notification.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-bell"></i>
        <span class="title">Notifications</span>
        <span class="arrow"></span>
    </a>

</li>

<li class="nav-item <?php echo e(activeItem('policy')); ?>">
    <a href="<?php echo e(route('backend.admin.policy.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-certificate"></i>
        <span class="title">Policies</span>
        <span class="arrow"></span>
    </a>

</li>


<li class="nav-item <?php echo e(activeItem('answer')); ?>">
    <a href="<?php echo e(route('backend.admin.answer.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-pencil-square-o"></i>
        <span class="title">Answers</span>
        <span class="arrow"></span>
    </a>

</li>

<li class="nav-item <?php echo e(activeItem('role')); ?>">
    <a href="<?php echo e(route('backend.admin.role.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-users"></i>
        <span class="title">Roles</span>
        <span class="arrow"></span>
    </a>

</li>
<li class="nav-item <?php echo e(activeItem('term')); ?>">
    <a href="<?php echo e(route('backend.admin.term.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-info-circle"></i>
        <span class="title">Terms</span>
        <span class="arrow"></span>
    </a>

</li>
<li class="nav-item <?php echo e(activeItem('privilege')); ?>">
    <a href="<?php echo e(route('backend.admin.privilege.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-lock"></i>
        <span class="title">Privileges</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="<?php echo e(route('backend.admin.privilege.create')); ?>" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-list-ul"></i>
                <span class="title">create privilege </span>
                <span class="arrow"></span>
            </a>
        </li>

    </ul>
</li>

<li class="nav-item <?php echo e(activeItem('day')); ?>">
    <a href="<?php echo e(route('backend.admin.day.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-calendar"></i>
        <span class="title">Day</span>
        <span class="arrow"></span>
    </a>

</li>

<li class="nav-item <?php echo e(activeItem('timing')); ?>">
    <a href="<?php echo e(route('backend.admin.timing.index')); ?>" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-clock-o"></i>
        <span class="title">Timing</span>
        <span class="arrow"></span>
    </a>

</li>