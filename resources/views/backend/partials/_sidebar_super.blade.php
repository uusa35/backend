<li class="nav-item {{ activeItem('product') }}">
    <a href="{{ route('backend.product.index')}}" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-product-hunt"></i>
        <span class="title">Products</span>
        <span class="selected"></span>
        <span class="arrow open"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="{{ route('backend.admin.product.index') }}" class="nav-link ">
                <i class="fa fa-fw fa-product-hunt"></i>
                <span class="title">All Products</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="{{ route('backend.admin.product.index',['type' => 'active']) }}" class="nav-link ">
                <i class="fa fa-fw fa-product-hunt"></i>
                <span class="title">Active Products</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="{{ route('backend.admin.product.index',['type' => 'on_sale']) }}" class="nav-link ">
                <i class="fa fa-fw fa-percent"></i>
                <span class="title">On Sale Products</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="{{ route('backend.admin.product.create') }}" class="nav-link ">
                <i class="fa fa-fw fa-plus-square"></i>
                <span class="title">Create New Product</span>
                <span class="arrow"></span>
            </a>
        </li>
        {{--<li class="nav-item ">--}}
        {{--<a href="{{ route('backend.admin.product.trashed') }}" class="nav-link ">--}}
        {{--<i class="fa fa-fw fa-recycle"></i>--}}
        {{--<span class="title">Trashed</span>--}}
        {{--<span class="arrow"></span>--}}
        {{--</a>--}}
        {{--</li>--}}
    </ul>
</li>
<li class="nav-item {{ activeItem('user') }}">
    <a href="{{ route('backend.admin.user.index')}}" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-user"></i>
        <span class="title">Users</span>
        <span class="selected"></span>
        <span class="arrow open"></span>
    </a>
</li>


<li class="nav-item {{ activeItem('category') }}">
    <a href="{{ route('backend.admin.category.index') }}" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-list-ol"></i>
        <span class="title">Categories</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="{{ route('backend.admin.category.index') }}" class="nav-link ">
                <i class="fa fa-fw fa-list-ul"></i>
                <span class="title">Categories</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="{{ route('backend.admin.category.create',['parent_id' => 0]) }}" class="nav-link ">
                <i class="fa fa-fw fa-plus-square"></i>
                <span class="title">Create Category</span>
                <span class="arrow"></span>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {{ activeItem('country') }}">
    <a href="{{ route('backend.admin.country.index') }}" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-globe"></i>
        <span class="title">Countries</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="{{ route('backend.admin.country.index') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-globe"></i>
                <span class="title">Countries Control</span>
                <span class="arrow"></span>
            </a>
            {{--<ul class="sub-menu always-open"> --}}
            {{--@foreach($countries as $country)--}}
            {{--<li class="nav-item">--}}
            {{--<a href="{{ route('backend.country.show',$country->id) }}" class="nav-link ">--}}
            {{--{{ $country->name }}</a>--}}
            {{--</li>--}}
            {{--@endforeach--}}
            {{--</ul>--}}
        </li>
        <li class="nav-item ">
            <a href="{{ route('backend.admin.country.create') }}" class="nav-link ">
                <i class="fa fa-fw fa-plus-circle"></i>
                <span class="title">Add New Country</span>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {{ activeItem('currency') }}">
    <a href="{{ route('backend.admin.currency.index') }}" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-dollar"></i>
        <span class="title">Currencies</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="{{ route('backend.admin.currency.index') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-euro"></i>
                <span class="title">All Currencies</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="{{ route('backend.admin.currency.create') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-plus-circle"></i>
                <span class="title">Create New Currency</span>
                <span class="arrow"></span>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {{ activeItem('coupon') }}">
    <a href="{{ route('backend.admin.coupon.index') }}" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-credit-card"></i>
        <span class="title">Coupons</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="{{ route('backend.coupon.index') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-cc-discover"></i>
                <span class="title">All Coupons</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="{{ route('backend.coupon.create') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-plus-circle"></i>
                <span class="title">Create New Coupon</span>
                <span class="arrow"></span>
            </a>
        </li>
    </ul>
</li>
{{--Settings--}}
<li class="nav-item {{ activeItem('setting', ['policy','term','faq','page','contactus', 'aboutus','gallery','image']) }}">
    <a href="{{ route('backend.admin.setting.index') }}" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-cogs"></i>
        <span class="title">App Settings</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="{{ route('backend.admin.setting.index') }}" class="nav-link ">
                <i class="fa fa-fw fa-edit"></i>
                <span class="title">Edit App Settings</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="{{ route('backend.branch.index') }}" class="nav-link ">
                <i class="fa fa-fw fa-file-image-o"></i>
                <span class="title">Branches</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="{{ route('backend.slide.index') }}" class="nav-link ">
                <i class="fa fa-fw fa-file-image-o"></i>
                <span class="title">Slides</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="{{ route('backend.package.index') }}" class="nav-link ">
                <i class="fa fa-fw fa-file-image-o"></i>
                <span class="title">Shipment Packages</span>
                <span class="arrow"></span>
            </a>
        </li>
        {{--<li class="nav-item ">--}}
        {{--<a href="{{ route('backend.aboutus.index') }}" class="nav-link ">--}}
        {{--<i class="fa fa-fw fa-plus-square-o"></i>--}}
        {{--<span class="title">Aboutus</span>--}}
        {{--<span class="arrow"></span>--}}
        {{--</a>--}}
        {{--<ul class="sub-menu">--}}
        {{--<li class="nav-item">--}}
        {{--<a href="{{ route('backend.aboutus.index') }}" class="nav-link">--}}
        {{--<i class="fa fa-fw fa-list-alt"></i> Aboutus--}}
        {{--<span class="arrow nav-toggle"></span>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
        {{--<a href="{{ route('backend.aboutus.create') }}" class="nav-link">--}}
        {{--<i class="icon-user"></i> Create New Page--}}
        {{--<span class="arrow nav-toggle"></span>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        <li class="nav-item ">
            <a href="{{ route('backend.admin.page.index') }}" class="nav-link ">
                <i class="fa fa-fw fa-book"></i>
                <span class="title">pages</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="{{ route('backend.admin.page.index') }}" class="nav-link">
                        <i class="fa fa-fw fa-list-alt"></i> All Pages
                        <span class="arrow nav-toggle"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('backend.admin.page.create') }}" class="nav-link">
                        <i class="icon-plus"></i> Create New Page
                        <span class="arrow nav-toggle"></span>
                    </a>
                </li>
            </ul>
        </li>
        {{--<li class="nav-item ">--}}
        {{--<a href="{{ route('backend.term.index') }}" class="nav-link ">--}}
        {{--<i class="fa fa-fw fa-hand-paper-o"></i>--}}
        {{--<span class="title">terms</span>--}}
        {{--<span class="arrow"></span>--}}
        {{--</a>--}}
        {{--<ul class="sub-menu">--}}
        {{--<li class="nav-item">--}}
        {{--<a href="{{ route('backend.term.index') }}" class="nav-link">--}}
        {{--<i class="fa fa-fw fa-list-alt"></i> All Terms--}}
        {{--<span class="arrow nav-toggle"></span>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
        {{--<a href="{{ route('backend.term.create') }}" class="nav-link">--}}
        {{--<i class="fa fa-fw fa-plus"></i> Create New term--}}
        {{--<span class="arrow nav-toggle"></span>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        {{--<li class="nav-item ">--}}
        {{--<a href="{{ route('backend.faq.index') }}" class="nav-link ">--}}
        {{--<i class="fa fa-fw fa-question-circle"></i>--}}
        {{--<span class="title">faqs</span>--}}
        {{--<span class="arrow"></span>--}}
        {{--</a>--}}
        {{--<ul class="sub-menu">--}}
        {{--<li class="nav-item">--}}
        {{--<a href="{{ route('backend.faq.index') }}" class="nav-link">--}}
        {{--<i class="fa fa-fw fa-list-alt"></i> All Faqs--}}
        {{--<span class="arrow nav-toggle"></span>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
        {{--<a href="{{ route('backend.faq.create') }}" class="nav-link">--}}
        {{--<i class="icon-plus"></i> Create New Faq--}}
        {{--<span class="arrow nav-toggle"></span>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        {{--<li class="nav-item ">--}}
        {{--<a href="{{ route('backend.policy.index') }}" class="nav-link ">--}}
        {{--<i class="fa fa-fw fa-plus-square-o"></i>--}}
        {{--<span class="title">polices</span>--}}
        {{--<span class="arrow"></span>--}}
        {{--</a>--}}
        {{--<ul class="sub-menu">--}}
        {{--<li class="nav-item">--}}
        {{--<a href="{{ route('backend.policy.index') }}" class="nav-link">--}}
        {{--<i class="fa fa-fw fa-list-alt"></i> All Policies--}}
        {{--<span class="arrow nav-toggle"></span>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
        {{--<a href="{{ route('backend.policy.create') }}" class="nav-link">--}}
        {{--<i class="icon-user"></i> Create New Policy--}}
        {{--<span class="arrow nav-toggle"></span>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--</li>--}}
    </ul>
</li>
{{--tags--}}
<li class="nav-item {{ activeItem('tag') }}">
    <a href="{{ route('backend.tag.index') }}" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-tag"></i>
        <span class="title">Tags</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="{{ route('backend.tag.index') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-tags"></i>
                <span class="title">All Tags</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="{{ route('backend.tag.create') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-plus-square-o"></i>
                <span class="title">Create New Tag</span>
                <span class="arrow"></span>
            </a>
        </li>
    </ul>
</li>
</li>
{{--brands--}}
<li class="nav-item {{ activeItem('brand') }}">
    <a href="{{ route('backend.admin.brand.index') }}" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-shopping-bag"></i>
        <span class="title">Brands</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="{{ route('backend.admin.brand.index') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-shopping-bag"></i>
                <span class="title">All Brands</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="{{ route('backend.admin.brand.create') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-plus-square-o"></i>
                <span class="title">New Brand</span>
                <span class="arrow"></span>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ activeItem('color') }}">
    <a href="{{ route('backend.admin.color.index') }}" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-paint-brush"></i>
        <span class="title">Colors</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="{{ route('backend.admin.color.index') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-list-alt"></i>
                <span class="title">Colors List</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="{{ route('backend.admin.color.create') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-paint-brush"></i>
                <span class="title">Create New Color</span>
                <span class="arrow"></span>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ activeItem('order') }}">
    <a href="{{ route('backend.admin.order.index') }}" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-money"></i>
        <span class="title">Orders</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="{{ route('backend.admin.order.index') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-pie-chart"></i>
                <span class="title">All Orders</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="{{ route('backend.admin.order.index',['status' => 'success']) }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-pie-chart"></i>
                <span class="title">Successful Orders</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="{{ route('backend.admin.order.index',['status' => 'failed']) }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-pie-chart"></i>
                <span class="title">Failed Orders</span>
                <span class="arrow"></span>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ activeItem('size') }}">
    <a href="{{ route('backend.admin.size.index') }}" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-tags"></i>
        <span class="title">Sizes</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="{{ route('backend.admin.size.index') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-list-ul"></i>
                <span class="title">Size List</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="{{ route('backend.admin.size.create') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-pie-chart"></i>
                <span class="title">Create New Size</span>
                <span class="arrow"></span>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ activeItem('question',['survey','answer']) }}">
    <a href="{{ route('backend.admin.survey.index') }}" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-th-list"></i>
        <span class="title">Surveys</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="{{ route('backend.admin.survey.index') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-list-ul"></i>
                <span class="title">Surveys List</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="{{ route('backend.admin.question.index') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-list-ul"></i>
                <span class="title">Questions List</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="{{ route('backend.admin.answer.index') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-magic"></i>
                <span class="title">Answers List</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="{{ route('backend.admin.survey.create') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-plus-circle"></i>
                <span class="title">Create New Survey</span>
                <span class="arrow"></span>
            </a>
        </li>
        {{--<li class="nav-item ">--}}
        {{--<a href="{{ route('backend.admin.survey.create') }}" class="nav-link nav-toggle">--}}
        {{--<i class="fa fa-fw fa-question-circle-o"></i>--}}
        {{--<span class="title">Create New Question</span>--}}
        {{--<span class="arrow"></span>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item ">--}}
        {{--<a href="{{ route('backend.answer.create') }}" class="nav-link nav-toggle">--}}
        {{--<i class="fa fa-fw fa-question-circle"></i>--}}
        {{--<span class="title">Create New Answer</span>--}}
        {{--<span class="arrow"></span>--}}
        {{--</a>--}}
        {{--</li>--}}
    </ul>
</li>
<li class="nav-item {{ activeItem('questionnaire') }}">
    <a href="{{ route('backend.admin.questionnaire.index') }}" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-question-circle"></i>
        <span class="title">Questionnaires</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="{{ route('backend.admin.questionnaire.index') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-list-ul"></i>
                <span class="title">Questionnaire List</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="{{ route('backend.admin.questionnaire.create') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-pie-chart"></i>
                <span class="title">Create New Questionnaire</span>
                <span class="arrow"></span>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {{ activeItem('newsletter') }}">
    <a href="{{ route('backend.admin.newsletter.index') }}" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-question-circle"></i>
        <span class="title">Newsletter</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">

        <li class="nav-item ">
            <a href="{{ route('backend.admin.newsletter.create') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-paint-brush"></i>
                <span class="title">Create New Newsletter</span>
                <span class="arrow"></span>
            </a>
        </li>
    </ul>
</li>


<li class="nav-item {{ activeItem('faq') }}">
    <a href="{{ route('backend.admin.faq.index') }}" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-question-circle"></i>
        <span class="title">FAQ</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">

        <li class="nav-item ">
            <a href="{{ route('backend.admin.faq.create') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-paint-brush"></i>
                <span class="title">Create New FAQ</span>
                <span class="arrow"></span>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {{ activeItem('commercial') }}">
    <a href="{{ route('backend.admin.commercial.index') }}" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-question-circle"></i>
        <span class="title">Commercials</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">

        <li class="nav-item ">
            <a href="{{ route('backend.admin.commercial.create') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-paint-brush"></i>
                <span class="title">Create New Commercial</span>
                <span class="arrow"></span>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {{ activeItem('notification') }}">
    <a href="{{ route('backend.admin.notification.index') }}" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-question-circle"></i>
        <span class="title">Notifications</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">

        <li class="nav-item ">
            <a href="{{ route('backend.admin.notification.create') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-paint-brush"></i>
                <span class="title">Create New Notification</span>
                <span class="arrow"></span>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {{ activeItem('policy') }}">
    <a href="{{ route('backend.admin.policy.index') }}" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-question-circle"></i>
        <span class="title">Policies</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">

        <li class="nav-item ">
            <a href="{{ route('backend.admin.policy.create') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-paint-brush"></i>
                <span class="title">Create New Policy</span>
                <span class="arrow"></span>
            </a>
        </li>
    </ul>
</li>


<li class="nav-item {{ activeItem('answer') }}">
    <a href="{{ route('backend.admin.answer.index') }}" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-question-circle"></i>
        <span class="title">Answers</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">

        <li class="nav-item ">
            <a href="{{ route('backend.admin.answer.create') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-paint-brush"></i>
                <span class="title">Create New Answer</span>
                <span class="arrow"></span>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {{ activeItem('role') }}">
    <a href="{{ route('backend.admin.role.index') }}" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-question-circle"></i>
        <span class="title">Roles</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">

        <li class="nav-item ">
            <a href="{{ route('backend.admin.role.create') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-paint-brush"></i>
                <span class="title">Create New Role</span>
                <span class="arrow"></span>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ activeItem('term') }}">
    <a href="{{ route('backend.admin.term.index') }}" class="nav-link nav-toggle">
        <i class="fa fa-fw fa-question-circle"></i>
        <span class="title">Terms</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">

        <li class="nav-item ">
            <a href="{{ route('backend.admin.term.create') }}" class="nav-link nav-toggle">
                <i class="fa fa-fw fa-paint-brush"></i>
                <span class="title">Create New Term</span>
                <span class="arrow"></span>
            </a>
        </li>
    </ul>
</li> 