<nav class="panel-menu mobile-main-menu {{ app()->isLocale('ar') ? 'mm-right' : null }}">
    <ul>
        <li><a href="{{ route('frontend.home') }}">{{ trans('general.home') }}</a></li>
        <li>
            @if(isset($categories) && $categories->isNotEmpty())
                @if($categories->isNotEmpty())
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
                @endif
            @endif
        </li>
        <li>
            <a href="{{ route('frontend.cart.index') }}">{{ trans('general.cart') }}</a>
        </li>
        @if($pages->isNotEmpty())
            <li>
                @foreach($pages as $page)
                    <a href="{{ $page->url }}">{{ $page->title }}</a>
                @endforeach
            </li>
        @endif
        <li><a href="{{ route('frontend.language.change',['locale' => 'ar']) }}">RTL</a></li>
        <li><a href="{{ route('frontend.language.change',['locale' => 'en']) }}">En</a></li>
    </ul>
    <div class="mm-navbtn-names">
        <div class="mm-closebtn">Close</div>
        <div class="mm-backbtn">Back</div>
    </div>
</nav>