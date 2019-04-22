<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index','product')): ?>
    <li class="nav-item <?php echo e(activeItem('product')); ?>">
        <a href="<?php echo e(route('backend.product.index')); ?>" class="nav-link nav-toggle">
            <i class="fa fa-fw fa-product-hunt"></i>
            <span class="title">Products</span>
            <span class="selected"></span>
            <span class="arrow open"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item ">
                <a href="<?php echo e(route('backend.product.index')); ?>" class="nav-link ">
                    <i class="fa fa-fw fa-product-hunt"></i>
                    <span class="title">All Products</span>
                    <span class="arrow"></span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="<?php echo e(route('backend.product.index',['type' => 'active'])); ?>" class="nav-link ">
                    <i class="fa fa-fw fa-product-hunt"></i>
                    <span class="title">Active Products</span>
                    <span class="arrow"></span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="<?php echo e(route('backend.product.index',['type' => 'on_sale'])); ?>" class="nav-link ">
                    <i class="fa fa-fw fa-percent"></i>
                    <span class="title">On Sale Products</span>
                    <span class="arrow"></span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="<?php echo e(route('backend.product.create')); ?>" class="nav-link ">
                    <i class="fa fa-fw fa-plus-square"></i>
                    <span class="title">Create New Product</span>
                    <span class="arrow"></span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="<?php echo e(route('backend.product.trashed')); ?>" class="nav-link ">
                    <i class="fa fa-fw fa-recycle"></i>
                    <span class="title">Trashed</span>
                    <span class="arrow"></span>
                </a>
            </li>
        </ul>
    </li>
<?php endif; ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index','service')): ?>
    <li class="nav-item <?php echo e(activeItem('service')); ?>">
        <a href="<?php echo e(route('backend.service.index')); ?>" class="nav-link nav-toggle">
            <i class="fa fa-fw fa-clock-o"></i>
            <span class="title"><?php echo e(trans('general.services')); ?></span>
            <span class="arrow"></span>
        </a>
    </li>
<?php endif; ?>