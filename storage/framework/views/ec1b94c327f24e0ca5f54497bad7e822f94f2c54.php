<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo" style="display: flex; justify-content: center; align-items: center;">
            <a href="<?php echo e(route('backend.home')); ?>">
                <img src="<?php echo e(asset(env('THUMBNAIL').$settings->logo)); ?>" alt="logo" class="img-logo logo-default"/> </a>
            <div class="menu-toggler sidebar-toggler">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
           data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN PAGE ACTIONS -->
        <!-- DOC: Remove "hide" class to enable the page header actions -->
        <div class="page-actions">
            <div class="btn-group">
                <button type="button" class="btn btn-circle btn-info dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-plus"></i>&nbsp;
                    <span class="hidden-sm hidden-xs"> <?php echo e(trans("general.new")); ?>&nbsp;</span>&nbsp;
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isSuper')): ?>
                        <li>
                            <a href="<?php echo e(route('backend.admin.product.create')); ?>">
                                <i class="icon-plus"></i> <?php echo e(trans('general.new_product')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('backend.admin.user.create')); ?>">
                                <i class="icon-plus"></i> <?php echo e(trans('general.new_user')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('backend.admin.category.create')); ?>">
                                <i class="icon-plus"></i> <?php echo e(trans('general.new_category')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('backend.admin.country.create')); ?>">
                                <i class="icon-plus"></i> <?php echo e(trans('general.new_country')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('backend.admin.currency.create')); ?>">
                                <i class="icon-plus"></i> <?php echo e(trans('general.new_currency')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('backend.admin.coupon.create')); ?>">
                                <i class="icon-plus"></i> <?php echo e(trans('general.new_coupon')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('backend.admin.tag.create')); ?>">
                                <i class="icon-plus"></i> <?php echo e(trans('general.new_tag')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('backend.admin.brand.create')); ?>">
                                <i class="icon-plus"></i> <?php echo e(trans('general.new_brand')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('backend.admin.color.create')); ?>">
                                <i class="icon-plus"></i> <?php echo e(trans('general.new_color')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('backend.admin.size.create')); ?>">
                                <i class="icon-plus"></i> <?php echo e(trans('general.new_size')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('backend.admin.survey.create')); ?>">
                                <i class="icon-plus"></i> <?php echo e(trans('general.new_survey')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('backend.admin.questionnaire.create')); ?>">
                                <i class="icon-plus"></i> <?php echo e(trans('general.new_questionnaire')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('backend.admin.newsletter.create')); ?>">
                                <i class="icon-plus"></i> <?php echo e(trans('general.new_newsletter')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('backend.admin.faq.create')); ?>">
                                <i class="icon-plus"></i> <?php echo e(trans('general.new_faq')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('backend.admin.commercial.create')); ?>">
                                <i class="icon-plus"></i> <?php echo e(trans('general.new_commercial')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('backend.admin.notification.create')); ?>">
                                <i class="icon-plus"></i> <?php echo e(trans('general.new_notification')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('backend.admin.policy.create')); ?>">
                                <i class="icon-plus"></i> <?php echo e(trans('general.new_policy')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('backend.admin.answer.create')); ?>">
                                <i class="icon-plus"></i> <?php echo e(trans('general.new_answer')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('backend.admin.role.create')); ?>">
                                <i class="icon-plus"></i> <?php echo e(trans('general.role_answer')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('backend.admin.term.create')); ?>">
                                <i class="icon-plus"></i> <?php echo e(trans('general.new_term')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('backend.admin.package.create')); ?>">
                                <i class="icon-plus"></i> <?php echo e(trans('general.new_package')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('backend.admin.privilege.create')); ?>">
                                <i class="icon-plus"></i> <?php echo e(trans('general.new_privilege')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('backend.admin.day.create')); ?>">
                                <i class="icon-plus"></i> <?php echo e(trans('general.new_day')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('backend.admin.timing.create')); ?>">
                                <i class="icon-plus"></i> <?php echo e(trans('general.new_timing')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('backend.admin.page.create')); ?>">
                                <i class="icon-plus"></i> <?php echo e(trans('general.new_page')); ?></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo e(route('backend.admin.slide.create')); ?>">
                                <i class="icon-plus"></i> <?php echo e(trans('general.new_slider')); ?></a>
                        </li>
                        <li class="divider"></li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo e(route('backend.admin.service.create')); ?>">
                                <i class="icon-handbag"></i> <?php echo e(trans('general.create_service')); ?></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo e(route('backend.admin.category.create')); ?>">
                                <i class="icon-layers"></i> <?php echo e(trans('general.create_category')); ?></a>
                        </li>
                        <li class="divider"></li>
                    <?php elseif (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isCompany')): ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product.create')): ?>
                            <li>
                                <a href="<?php echo e(route('backend.product.create')); ?>">
                                    <i class="icon-plus"></i> <?php echo e(trans('general.new_product')); ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <!-- END PAGE ACTIONS -->
        <!-- BEGIN PAGE TOP -->
        <div class="page-top">
            <!-- BEGIN HEADER SEARCH BOX -->
            <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
        
        
        
        
        
        
        
        
        
        
        <!-- END HEADER SEARCH BOX -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <li class="dropdown dropdown-language"
                        style="background-color: <?php echo e(app()->isLocale('ar') ? 'white' : 'transparent'); ?>; padding-right: 20px; padding-left: 20px; ">
                        <a href="<?php echo e(route('backend.language.change','ar')); ?>" class="dropdown-toggle"
                           data-close-others="true">
                            
                            <span class="langname"><i class="fa fa-fw fa-language"></i>&nbsp; <?php echo e(trans('general.arabic')); ?> </span>
                        </a>
                    </li>
                    <li class="dropdown dropdown-language"
                        style="background-color: <?php echo e(app()->isLocale('en') ? 'white' : 'transparent'); ?>; padding-right: 20px; padding-left: 20px; ">
                        <a href="<?php echo e(route('backend.language.change','en')); ?>" class="dropdown-toggle"
                           data-close-others="true">
                            
                            <span class="langname"><i class="fa fa-fw fa-language"></i>&nbsp; <?php echo e(trans('general.english')); ?> </span>
                        </a>
                    </li>

                    <!-- END LANGUAGE BAR -->
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('onlyAdmin')): ?>
                        <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                               data-close-others="true">
                                <i class="icon-bell"></i>
                                <span class="badge badge-default"> <?php echo e($totalActiveClientOnProgressOrders->count()); ?> </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="external">
                                    <a href="<?php echo e(route('backend.admin.order.index',['is_complete' => false])); ?>"><?php echo e(trans('general.active_paid_on_progress_orders')); ?></a>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height: 275px;"
                                        data-handle-color="#637283">
                                        <?php $__currentLoopData = $totalActiveClientOnProgressOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <a href="<?php echo e(route('backend.order.show',$element->id)); ?>">
                                            <span class="photo">
                                                <?php if($element->images->isNotEmpty()): ?>
                                                    <img src="<?php echo e(asset(env('THUMBNAIL').$element->images->first()->image)); ?>"
                                                         class="img-circle" alt="">
                                                <?php else: ?>
                                                    <img src="<?php echo e(asset(env('THUMBNAIL').$settings->logo)); ?>"
                                                         class="img-circle" alt="">
                                                <?php endif; ?>
                                            </span>
                                                    <span class="subject">
                                                <span class="from"> <?php echo e(str_limit($element->title,30)); ?> </span>
                                                <span class="time"><?php echo e($element->created_at->diffForHumans()); ?> </span>
                                            </span>
                                                    <span class="message"> <?php echo e(str_limit($element->name,20)); ?> </span>
                                                </a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                <!-- END TODO DROPDOWN -->
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <?php if(auth()->user()->isClientOrAbove): ?>
                        <li class="dropdown dropdown-user"
                            style="background-color: white; padding-left: 10px; padding-right: 10px;">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                               data-close-others="true">
                            <span class="username username-hide-on-mobile"> <?php echo e(trans('general.balance')); ?>

                                : <?php echo e(auth()->user()->balance->points); ?> <?php echo e(trans('general.points')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <img alt="" class="img-xs" src="<?php echo e(auth()->user()->imageThumbLink); ?>"/>
                            <i class="fa fa-angle-down"></i>
                            <span class="username username-hide-on-mobile"> <?php echo e(str_limit(auth()->user()->name,30)); ?></span><br>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="#">
                                    <span class="username username-hide-on-mobile"><i
                                                class="fa fa-fw fa-university"></i><?php echo e(trans('general.role')); ?>

                                        : <?php echo e(auth()->user()->role->name); ?> : </span>
                                    <span class="username username-hide-on-mobile"> <?php echo e(str_limit(auth()->user()->name,5)); ?></span><br>
                                </a>
                            </li>
                            <?php if(auth()->user()->balance && auth()->user()->isClientOrAbove): ?>
                                <li>
                                    <a href="#">
                                    <span class="username username-hide-on-mobile"> <i class="fa fa-fw fa-list-ol"></i><?php echo e(trans('general.balance')); ?>

                                        : <?php echo e(auth()->user()->balance->points); ?> <?php echo e(trans('general.points')); ?></span>
                                    </a>
                                </li>
                                <li class="divider"></li>
                            <?php endif; ?>
                            <li>
                                <a href="<?php echo e(route('frontend.home')); ?>">
                                    <i class="icon-home"></i><?php echo e(trans('general.home')); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('backend.index')); ?>">
                                    <i class="icon-pencil"></i><?php echo e(trans('general.dashboard')); ?></a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo e(route('backend.language.change',app()->isLocale('ar') ? 'en' : 'ar')); ?>">
                                    <i class="fa fa-fw fa-language"></i><?php echo e(trans('general.switch_lang')); ?>

                                </a>
                            </li>
                            <li class="divider"></li>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isSuper')): ?>
                                <li>
                                    <a href="<?php echo e(route('backend.admin.setting.index')); ?>">
                                        <i class="icon-settings"></i> <?php echo e(trans('general.app_settings')); ?> </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('backend/admin/translations')); ?>">
                                        <i class="fa fa-fw fa-language"></i> <?php echo e(trans('general.translation_manager')); ?>

                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('backend.admin.export.translation')); ?>">
                                        <i class="icon-envelope-letter"></i> <?php echo e(trans('general.export_translations')); ?>

                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('admin/env')); ?>">
                                        <i class="fa fa-fw fa-bug"></i> <?php echo e(trans('general.edit_env_file')); ?>

                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('backend/admin/telescope')); ?>">
                                        <i class="fa fa-fw fa-bug"></i> Telescope Debug Mode
                                    </a>
                                </li>
                                <li class="divider"></li>
                            <?php endif; ?>
                            <?php if(auth()->user()): ?>
                                <li>
                                    <a href="<?php echo e(route('backend.reset.password',['email' => auth()->user()->email])); ?>">
                                        <i class="fa fa-fw fa-edit"></i> <?php echo e(trans('general.reset_password')); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('backend.user.show',auth()->id())); ?>">
                                        <i class="fa fa-fw fa-user-circle"></i> <?php echo e(trans('general.my_profile')); ?></a>
                                </li>
                            <?php endif; ?>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo e(url('/logout')); ?>"
                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="icon-key"></i> <?php echo e(trans('general.logout')); ?> </a>
                            </li>
                        </ul>
                    </li>
                    <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                    <!-- END USER LOGIN DROPDOWN -->
                    <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                    <li class="dropdown dropdown-user">
                        <a href="<?php echo e(url('/logout')); ?>" class="dropdown-toggle"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="icon-logout"></i>
                        </a>
                    </li>
                    <!-- END QUICK SIDEBAR TOGGLER -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>