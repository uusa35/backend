<div class="navigation-wrapper">
    <div class="container">
        <!-- Navigation -->
        <nav class="navigation closed clearfix">
            <a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>
            <ul class="nav sf-menu">
                <li><a href="{{ route('frontend.home') }}">{{ trans('general.home') }}</a></li>
                @if(!$categories->isEmpty())
                    @foreach($categories->where('is_home', true)->sortBy('order') as $category)
                        <li class="megamenu">
                            <a href="{{ route('frontend.product.search',['category_id' => $category->id ]) }}">{{ $category->name }}</a>
                            @if(!$category->children->where('is_home', true)->isEmpty())
                                <ul>
                                    <li class="row">
                                        @foreach($category->children->where('is_home',true)->sortBy('order') as $child)
                                            <div class="col-md-2">
                                                <h4 class="block-title"><span><a
                                                                href="{{ route('frontend.product.search', ['category_id' => $child->id]) }}"><strong>{{ $child->name }}</strong></a></span>
                                                </h4>
                                                @if(!$child->children->where('is_home', true)->isEmpty())
                                                    <ul class="active">
                                                        @foreach($child->children->where('is_home', true) as $subChild)
                                                            <li>
                                                                <a href="{{ route('frontend.product.search', ['category_id' => $subChild->id]) }}">{{ $subChild->name }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </div>
                                        @endforeach
                                    </li>
                                </ul>
                            @endif
                        </li>
                    @endforeach
                @endif
                @if(!$pages->where('on_menu_desktop', true)->isEmpty())
                    @foreach($pages->where('on_menu_desktop', true) as $page)
                        <li><a href="{{ $page->url }}">{{ $page->slug }}</a></li>
                    @endforeach
                @endif
                <li class="visible-sm">
                    <a class="no-child"
                       href="https://api.whatsapp.com/send?phone={{ $settings->whatsapp  }}">{{ trans('general.whatsapp') }}</a>
                </li>
                <li class="visible-sm">
                    <a class="no-child"
                       href="tel:{{ $settings->mobile }}">{{ trans('general.mobile') }}</a>
                </li>
                <li class="visible-sm">
                    <a href="{{ route('frontend.language.change',['locale' => 'ar']) }}">
                        {{ trans('general.arabic') }}
                    </a>
                </li>
                <li class="visible-sm">
                    <a href="{{ route('frontend.language.change',['locale' => 'en']) }}">
                        {{ trans('general.english') }}
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /Navigation -->
    </div>
</div>