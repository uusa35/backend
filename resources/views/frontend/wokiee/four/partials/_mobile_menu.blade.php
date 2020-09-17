<nav class="panel-menu mobile-main-menu {{ app()->isLocale('ar') ? 'mm-right' : null }}">
    <ul>
        <li><a href="{{ route('frontend.home') }}">{{ trans('general.home') }}</a></li>
        <li>
            @if(isset($categories) && $categories->isNotEmpty())
                @if(env('EVENTKM'))
                    @foreach($categories->where('is_parent', true) as $cat)
                        <a href="{{ route('frontend.service.search',['service_category_id' => $cat->id]) }}">{{ $cat->name }}</a>
                        @if($cat->children->isNotEmpty())
                            <ul>
                                @foreach($cat->children as $sub)
                                    <li>
                                        <a href="{{ route('frontend.service.search',['service_category_id' => $sub->id]) }}">{{ $sub->name }}</a>
                                        @if($sub->children->isNotEmpty())
                                            <ul>
                                                @foreach($cat->children as $sub)
                                                    <li>
                                                        <a href="{{ route('frontend.service.search',['service_category_id' => $sub->id]) }}">{{ $sub->name }}
                                                            @if($sub->on_new)
                                                                <span class="tt-badge tt-fatured">{{ trans('genera.new') }}</span>
                                                            @endif
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    @endforeach
                @elseif(env('MALLR'))
                    @foreach($categories->where('is_product',true)->where('is_parent', true)->where('on_home', true) as $cat)
                        <a href="{{ route('frontend.product.search',['product_category_id' => $cat->id]) }}">{{ $cat->name }}</a>
                        @if($cat->children->isNotEmpty())
                            <ul>
                                @foreach($cat->children as $sub)
                                    <li>
                                        <a href="{{ route('frontend.product.search',['product_category_id' => $sub->id]) }}">{{ $sub->name }}</a>
                                        @if($sub->children->isNotEmpty())
                                            <ul>
                                                @foreach($sub->children as $child)
                                                    <li>
                                                        <a href="{{ route('frontend.product.search',['product_category_id' => $child->id]) }}">{{ $child->name }}
                                                            @if($child->on_new)
                                                                <span class="tt-badge tt-fatured">{{ trans('general.new') }}</span>
                                                            @endif
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    @endforeach
                @else
                    @foreach($categories->where('is_product',true)->where('is_parent', true)->where('on_home', true) as $cat)
                        @if($cat->children->isNotEmpty())
                            <h1>test has children</h1>
                            <a href="{{ route('frontend.product.search',['product_category_id' => $cat->id]) }}">{{ $cat->name }}</a>
                            <ul>
                                @foreach($cat->children as $sub)
                                    <li>
                                        <a href="{{ route('frontend.product.search',['product_category_id' => $sub->id]) }}">{{ $sub->name }}</a>
                                        @if($sub->children->isNotEmpty())
                                            <ul>
                                                @foreach($sub->children as $child)
                                                    <li>
                                                        <a href="{{ route('frontend.product.search',['product_category_id' => $child->id]) }}">{{ $child->name }}
                                                            @if($child->on_new)
                                                                <span class="tt-badge tt-fatured">{{ trans('general.new') }}</span>
                                                            @endif
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <h1>test does not</h1>
                            <a href="{{ route('frontend.product.search',['product_category_id' => $cat->id]) }}">{{ $cat->name }}</a>
                        @endif
                    @endforeach
                @endif
            @endif
        </li>
        <li>
            <a href="{{ route('frontend.cart.index') }}">{{ trans('general.cart') }}</a>
        </li>
        @if($pages->isNotEmpty())
            <li>
                @foreach($pages as $page)
                    <a href="{{ $page->url ? $page->url : route('frontend.page.show.name',['id' => $page->id,'name' => $page->title]) }}">{{ $page->title }}</a>
                @endforeach
            </li>
        @endif
        <li><a href="{{ route('frontend.language.change',['locale' => 'ar']) }}">{{ trans('general.arabic') }}</a></li>
        <li><a href="{{ route('frontend.language.change',['locale' => 'en']) }}">{{ trans('general.english') }}</a></li>
    </ul>
    <div class="mm-navbtn-names">
        <div class="mm-closebtn">{{ trans('general.close') }}</div>
        <div class="mm-backbtn">{{ trans('general.back') }}</div>
    </div>
</nav>
