@if($categories->isNotEmpty())
    @if($categories->isNotEmpty())
        @foreach($categories->where('is_parent', true) as $cat)
            <li class="dropdown megamenu">
                <a href="{{ route('frontend.search',['category_id']) }}">{{ str_limit($cat->name,20) }}</a>
                @if($cat->children->isNotEmpty())
                    <div class="dropdown-menu">
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="row tt-col-list">
                                    @foreach($cat->children as $sub)
                                        <div class="col-sm-4">
                                            <a href="listing-right-column.html" class="tt-title-submenu">
                                                @if($sub->imageLargeLink)
                                                    {{ $sub->name }}
                                                    <img class="img-menu-category img-responsive"
                                                         src="{{ $sub->imageLargeLink }}"
                                                         data-src="{{ $sub->imageLargeLink }}"
                                                         alt="{{ $sub->name }}">
                                                @endif
                                            </a>
                                            @if($sub->children->isNotEmpty())
                                                <ul class="tt-megamenu-submenu">
                                                    @foreach($sub->children as $child)
                                                        <li>
                                                            <a href="{{ route('frontend.search',['category_id']) }}">{{ $child->name }}
                                                                @if($child->on_new)
                                                                    <span class="tt-badge tt-new">{{ trans('general.new') }}</span>
                                                                @endif
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            @if($cat->imageLargeLink)
                                <div class="col-sm-3">
                                    <div class="tt-offset-7">
                                        <a href="{{ route('frontend.search',['category_id']) }}" class="tt-promo-02">
                                            <img class="img-category img-responsive" src="{{ $cat->imageLargeLink }}"
                                                 data-src="{{ $cat->imageLargeLink }}"
                                                 alt="{{ $cat->name }}">
                                            <div class="tt-description tt-point-h-l tt-point-v-t">
                                                <div class="tt-description-wrapper">
                                                    <div class="tt-title-small tt-white-color">{{ $cat->name }}</div>
                                                    @if($cat->caption)
                                                        <div class="tt-title-xlarge tt-white-color">{{ $cat->caption }}</div>
                                                    @endif
                                                    @if($cat->description)
                                                        <p class="tt-white-color">{{ $cat->description }}</p>
                                                        <span class="btn-underline tt-obj-bottom tt-white-color">{{ trans('general.shop_now') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                @endif
            </li>
        @endforeach
    @endif
@endif