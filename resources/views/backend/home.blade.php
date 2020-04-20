@extends('backend.layouts.app')

@section('breadcrumbs')
    {{ Breadcrumbs::render('backend.home') }}
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="portlet box text-center">
                <div class="tiles padding-tb-20">
                    @can('index','product')
                        <a href="{{ route('backend.service.index') }}">
                            <div class="tile bg-blue-steel bg-font-blue-steel tooltips"
                                 data-container="body" data-placement="bottom"
                                 data-original-title="{{ trans('message.service') }}"
                            >
                                <div class="tile-body">
                                    <i class="fa fa-product-hunt"></i>
                                </div>
                                <div class="tile-object text-center">
                                    {{ trans('general.products') }}
                                </div>
                            </div>
                        </a>
                        @can('isAdminOrAbove')
                            @can('index','color')
                                <a href="{{ route('backend.admin.color.index') }}">
                                    <div class="tile bg-green-meadow tooltips"
                                         data-container="body" data-placement="bottom"
                                         data-original-title="{{ trans('message.index_color') }}"
                                    >
                                        <div class="tile-body">
                                            <i class="fa fa-paint-brush"></i>
                                        </div>
                                        <div class="tile-object text-center">
                                            {{ trans('general.colors') }}
                                        </div>
                                    </div>
                                </a>
                            @endcan
                            @can('index','size')
                                <a href="{{ route('backend.admin.size.index') }}">
                                    <div class="tile bg-grey-cascade tooltips"
                                         data-container="body" data-placement="bottom"
                                         data-original-title="{{ trans('message.index_size') }}"
                                    >
                                        <div class="tile-body">
                                            <i class="fa fa-shirtsinbulk"></i>
                                        </div>
                                        <div class="tile-object text-center">
                                            {{ trans('general.sizes') }}
                                        </div>
                                    </div>
                                </a>
                            @endcan
                            @can('index','collection')
                                <a href="{{ route('backend.collection.index') }}">
                                    <div class="tile bg-blue-hoki bg-font-blue-hoki tooltips"
                                         data-container="body" data-placement="bottom"
                                         data-original-title="{{ trans('message.index_collection') }}"
                                    >
                                        <div class="tile-body">
                                            <i class="fa fa-product-hunt"></i>
                                        </div>
                                        <div class="tile-object text-center">
                                            {{ trans('general.collections') }}
                                        </div>
                                    </div>
                                </a>
                            @endcan
                        @endcan
                    @endcan
                    @can('index','service')
                        <a href="{{ route('backend.service.index') }}">
                            <div class="tile bg-yellow-lemon tooltips"
                                 data-container="body" data-placement="bottom"
                                 data-original-title="{{ trans('message.index_service') }}"
                            >
                                <div class="tile-body">
                                    <i class="fa fa-table"></i>
                                </div>
                                <div class="tile-object text-center">
                                    {{ trans('general.services') }}
                                </div>
                            </div>
                        </a>
                        @can('isAdminOrAbove')
                            @can('index','addon')
                                <a href="{{ route('backend.admin.addon.index') }}">
                                    <div class="tile bg-purple-soft bg-font-purple-soft tooltips"
                                         data-container="body" data-placement="bottom"
                                         data-original-title="{{ trans('message.index_addon') }}"
                                    >
                                        <div class="tile-body">
                                            <i class="fa fa-table"></i>
                                        </div>
                                        <div class="tile-object text-center">
                                            {{ trans('general.addons') }}
                                        </div>
                                    </div>
                                </a>
                            @endcan
                            @can('index','item')
                                <a href="{{ route('backend.admin.item.index') }}">
                                    <div class="tile bg-yellow bg-font-yellow tooltips"
                                         data-container="body" data-placement="bottom"
                                         data-original-title="{{ trans('message.index_item') }}"
                                    >
                                        <div class="tile-body">
                                            <i class="fa fa-table"></i>
                                        </div>
                                        <div class="tile-object text-center">
                                            {{ trans('general.items') }}
                                        </div>
                                    </div>
                                </a>
                            @endcan
                        @endcan
                    @endcan
                    @can('index','classified')
                        <a href="{{ route('backend.classified.index') }}">
                            <div class="tile bg-purple-studio tooltips"
                                 data-container="body" data-placement="bottom"
                                 data-original-title="{{ trans('message.index_classified') }}"
                            >
                                <div class="tile-body">
                                    <i class="fa fa-gift"></i>
                                </div>
                                <div class="tile-object text-center">
                                    {{ trans('general.classifieds') }}
                                </div>
                            </div>
                        </a>
                    @endcan
                    @can('isAdminOrAbove')
                        @can('index', 'user')
                            <a href="{{ route('backend.user.index') }}">
                                <div class="tile bg-red-sunglo tooltips"
                                     data-container="body" data-placement="bottom"
                                     data-original-title="{{ trans('message.index_user') }}"
                                >
                                    <div class="tile-body">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="tile-object text-center">
                                        {{ trans('general.users') }}
                                    </div>
                                </div>
                            </a>
                        @endcan
                        @can('index', 'category')
                            <a href="{{ route('backend.admin.category.index') }}">
                                <div class="tile bg-blue-madison tooltips"
                                     data-container="body" data-placement="bottom"
                                     data-original-title="{{ trans('message.index_category') }}"
                                >
                                    <div class="tile-body">
                                        <i class="fa fa-list-ol"></i>
                                    </div>
                                    <div class="tile-object text-center">
                                        {{ trans('general.categories') }}
                                    </div>
                                </div>
                            </a>
                            @can('index','classified')
                                <a href="{{ route('backend.admin.group.index') }}">
                                    <div class="tile bg-grey-silver bg-font-grey-silver tooltips"
                                         data-container="body" data-placement="bottom"
                                         data-original-title="{{ trans('message.index_group') }}"
                                    >
                                        <div class="tile-body">
                                            <i class="fa fa-list-ol"></i>
                                        </div>
                                        <div class="tile-object text-center">
                                            {{ trans('general.category_group') }}
                                        </div>
                                    </div>
                                </a>
                                <a href="{{ route('backend.admin.property.index') }}">
                                    <div class="tile bg-grey-gallery bg-font-grey-gallery tooltips"
                                         data-container="body" data-placement="bottom"
                                         data-original-title="{{ trans('message.index_property') }}"
                                    >
                                        <div class="tile-body">
                                            <i class="fa fa-list-ol"></i>
                                        </div>
                                        <div class="tile-object text-center">
                                            {{ trans('general.category_property') }}
                                        </div>
                                    </div>
                                </a>
                            @endcan
                        @endcan
                        @can('index','setting')
                            <a href="{{ route('backend.admin.setting.index') }}">
                                <div class="tile bg-green-seagreen bg-font-green-seagreen tooltips"
                                     data-container="body" data-placement="bottom"
                                     data-original-title="{{ trans('message.index_setting') }}"
                                >
                                    <div class="tile-body">
                                        <i class="fa fa-cogs"></i>
                                    </div>
                                    <div class="tile-object text-center">
                                        {{ trans('general.settings') }}
                                    </div>
                                </div>
                            </a>
                        @endcan
                        @can('index','brand')
                            <a href="{{ route('backend.admin.brand.index') }}">
                                <div class="tile btn-primary tooltips"
                                     data-container="body" data-placement="bottom"
                                     data-original-title="{{ trans('message.index_brand') }}"
                                >
                                    <div class="tile-body">
                                        <i class="fa fa-shopping-bag"></i>
                                    </div>
                                    <div class="tile-object text-center">
                                        {{ trans('general.brands') }}
                                    </div>
                                </div>
                            </a>
                        @endcan
                        @can('index','video')
                            <a href="{{ route('backend.video.index') }}">
                                <div class="tile bg-red-sunglo-opacity tooltips"
                                     data-container="body" data-placement="bottom"
                                     data-original-title="{{ trans('message.index_video') }}"
                                >
                                    <div class="tile-body">
                                        <i class="fa fa-video-camera"></i>
                                    </div>
                                    <div class="tile-object text-center">
                                        {{ trans('general.videos') }}
                                    </div>
                                </div>
                            </a>
                        @endcan
                        @can('index','tag')
                            <a href="{{ route('backend.admin.tag.index') }}">
                                <div class="tile bg-blue-hoki tooltips"
                                     data-container="body" data-placement="bottom"
                                     data-original-title="{{ trans('message.index_tag') }}"
                                >
                                    <div class="tile-body">
                                        <i class="fa fa-tag"></i>
                                    </div>
                                    <div class="tile-object text-center">
                                        {{ trans('general.tags') }}
                                    </div>
                                </div>
                            </a>
                        @endcan
                        @can('index','slide')
                            <a href="{{ route('backend.slide.index') }}">
                                <div class="tile bg-red-sunglo-opacity tooltips"
                                     data-container="body" data-placement="bottom"
                                     data-original-title="{{ trans('message.index_slide_for_home_page') }}"
                                >
                                    <div class="tile-body">
                                        <i class="fa fa-file-image-o"></i>
                                    </div>
                                    <div class="tile-object text-center">
                                        {{ trans('general.slides') }}
                                    </div>
                                </div>
                            </a>
                        @endcan
                        @can('index','page')
                            <a href="{{ route('backend.admin.page.index') }}">
                                <div class="tile bg-purple-studio tooltips"
                                     data-container="body" data-placement="bottom"
                                     data-original-title="{{ trans('message.index_page') }}"
                                >
                                    <div class="tile-body">
                                        <i class="fa fa-book"></i>
                                    </div>
                                    <div class="tile-object text-center">
                                        {{ trans('general.pages') }}
                                    </div>
                                </div>
                            </a>
                        @endcan
                        @can('index','commercial')
                            <a href="{{ route('backend.admin.commercial.index') }}">
                                <div class="tile  bg-grey-salt bg-font-grey-salt tooltips"
                                     data-container="body" data-placement="bottom"
                                     data-original-title="{{ trans('message.index_commercial') }}"
                                >
                                    <div class="tile-body">
                                        <i class="fa fa-gift"></i>
                                    </div>
                                    <div class="tile-object text-center">
                                        {{ trans('general.commercials') }}
                                    </div>
                                </div>
                            </a>
                        @endcan
                        @can('index','country')
                            <a href="{{ route('backend.admin.country.index') }}">
                                <div class="tile bg-green-turquoise tooltips"
                                     data-container="body" data-placement="bottom"
                                     data-original-title="{{ trans('message.index_country') }}"
                                >
                                    <div class="tile-body">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <div class="tile-object text-center">
                                        {{ trans('general.countries') }}
                                    </div>
                                </div>
                            </a>
                        @endcan
                        @can('index','currency')
                            <a href="{{ route('backend.admin.currency.index') }}">
                                <div class="tile bg-purple-studio tooltips"
                                     data-container="body" data-placement="bottom"
                                     data-original-title="{{ trans('message.index_currency') }}"
                                >
                                    <div class="tile-body">
                                        <i class="fa fa-money"></i>
                                    </div>
                                    <div class="tile-object text-center">
                                        {{ trans('general.currencies') }}
                                    </div>
                                </div>
                            </a>
                        @endcan
                        @can('index','order')
                            <a href="{{ route('backend.admin.order.index') }}">
                                <div class="tile bg-blue-hoki tooltips"
                                     data-container="body" data-placement="bottom"
                                     data-original-title="{{ trans('message.order') }}"
                                >
                                    <div class="tile-body">
                                        <i class="fa fa-motorcycle"></i>
                                    </div>
                                    <div class="tile-object text-center">
                                        {{ trans('general.orders') }}
                                    </div>
                                </div>
                            </a>
                        @endcan
                    @endcan
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="portlet box yellow-crusta">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>{{ trans('general.important_information') }}
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#portlet_tab_3" data-toggle="tab">{{ trans('general.videos_for_new_items') }} </a>
                        </li>
                        @can('isAdminOrAbove')
                            <li>
                                <a href="#portlet_tab_2"
                                   data-toggle="tab"> {{ trans('general.videos_for_new_items_for_super') }}</a>
                            </li>
                        @endcan
                        <li class="">
                            <a href="#portlet_tab_1" data-toggle="tab"> Tab 1 </a>
                        </li>
                    </ul>
                </div>
                <div class="portlet-body">
                    <div class="tab-content">
                        <div class="tab-pane" id="portlet_tab_1">
                            <div class="portlet-body">
                                <div class="scroller" style="height: 100%" data-rail-visible="1"
                                     data-rail-color="yellow" data-handle-color="#a1b2bd">
                                    tap 1

                                </div>
                            </div>
                        </div>
                        @can('isAdminOrAbove')
                            <div class="tab-pane" id="portlet_tab_2">
                                <div class="scroller" style="height:100%" data-rail-visible="1"
                                     data-rail-color="yellow"
                                     data-handle-color="#a1b2bd">
                                    @include('backend.partials._videos_for_super')
                                </div>
                            </div>
                        @endif
                        <div class="tab-pane active" id="portlet_tab_3">
                            <div class="scroller" data-rail-visible="1"
                                 data-rail-color="yellow" data-handle-color="#a1b2bd">
                                @include('backend.partials._videos_for_company')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
