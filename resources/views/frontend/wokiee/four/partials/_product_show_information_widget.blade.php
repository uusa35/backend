<div class="tt-add-info">
    <div class="tt-table-responsive">
        <table class="tt-table-shop-01">
            <tr>
                <td class="td-fixed-element"><i class="icon-f-02 fa fa-fw fa-lg"></i><span class="ml-1"></span><span>{{ trans('general.sku') }} : </span>
                    <span class="ml-2"></span></td>
                <td>
                    {{ $element->sku }}
                </td>
            </tr>
            @if(!is_null($element->user))
                <tr>
                    <td class="td-fixed-element">
                    <span style="min-width: 130px;"><i class="fa fa-fw fa-building-o fa-lg"></i> <span
                                class="ml-2"></span> {{ trans('general.company_name') }}:</span>
                    </td>
                    <td>
                        <a class="theme-color"
                           href="{{ route('frontend.user.show',['id' => $element->user_id,'name' => $element->user->name]) }}">{{ $element->user->name }}</a>
                    </td>
                </tr>
            @endif
            @if($element->user->country)
                <tr>
                    <td class="td-fixed-element">
                    <span style="min-width: 130px;"><i class="fa fa-fw fa-building-o fa-lg"></i> <span
                                class="ml-2"></span> {{ trans('general.country') }}:</span>
                    </td>
                    <td>
                        {{ $element->user->country->slug  }}</li>
                    </td>
                </tr>
            @endif
            @if(!is_null($element->duration))
                <tr>
                    <td class="td-fixed-element"><span><i class="fa fa-fw fa-clock-o fa-lg"></i> <span
                                    class="ml-2"></span> {{ trans('general.duration') }}:</span>
                    </td>
                    <td>
                        {{ $element->duration }} {{ trans("general.hours") }}</li>
                    </td>
                </tr>
            @endif
            @if(!is_null($element->setup_time))
                <tr>
                    <td class="td-fixed-element">
                <span><i class="fa fa-fw fa-calendar-times-o fa-lg"></i> <span class="ml-2"></span>{{ trans('general.setup_time') }}
                        :</span>
                    </td>
                    <td>
                        {{ $element->setup_time }} {{ trans('general.hours') }}
                    </td>
                </tr>
            @endif
            @if(!is_null($element->individuals))
                <tr>
                    <td class="td-fixed-element">
                        <span><i class="fa fa-fw fa-lg icon-f-95"></i> <span class="ml-2"></span>{{ trans('general.individuals_count') }}: </span>
                    </td>
                    <td>
                        {{ $element->individuals }}
                    </td>
                </tr>
            @endif
            @if(!is_null($element->user->mobile))
                <tr>
                    <td class="td-fixed-element">
                        <span><i class="fa fa-fw fa-lg icon-f-93"></i> <span class="ml-2"></span>{{ trans('general.mobile') }}:</span>
                    </td>
                    <td>
                        {{ $element->user->mobile }}
                    </td>
                </tr>
            @endif
            @if(!is_null($element->product_attributes))
                <tr>
                    <td class="td-fixed-element">
                        <span><i class="fa fa-fw fa-lg icon-e-74"></i> <span class="ml-2"></span>{{ trans('general.available_items') }}:</span>
                    </td>
                    <td>
                        {{ $element->availableQty }} {{ trans('general.item') }}
                    </td>
                </tr>
            @endif
            @if(!is_null($element->user->phone))
                <tr>
                    <td class="td-fixed-element">
                        <span><i class="fa fa-fw fa-lg icon-h-35"></i> <span class="ml-2"></span>{{ trans('general.phone') }}:</span>
                    </td>
                    <td>
                        {{ $element->user->phone }}
                    </td>
                </tr>
            @endif
            @if($element->categories->isNotEmpty())
                <tr>
                    <td class="td-fixed-element"><span><i class="fa fa-fw fa-filter fa-lg"></i><span
                                    class="ml-2"></span></span>{{ trans('general.categories') }}:
                    </td>
                    <td>
                        @foreach($element->categories as $cat)
                            <a class="theme-color"
                               href="{{ route('frontend.product.search',['category_id' => $cat->id]) }}">
                                {{ $cat->name }},
                            </a>
                        @endforeach
                    </td>
                </tr>
            @endif
            @if($element->tags->isNotEmpty())
                <tr>
                    <td class="td-fixed-element"><i class="icon-f-07 fa fa-fw fa-lg"></i><span
                                class="ml-1"></span>{{ trans("general.tags") }}
                        :
                    </td>
                    <td>
                        @foreach($element->tags as $tag)
                            <a class="theme-color" href="{{ route('frontend.product.search',['tag_id' => $tag->id]) }}">
                                {{ $tag->slug }},
                            </a>
                        @endforeach
                    </td>
                </tr>
            @endif
            @if(!is_null($element->brands) && $element->brands->isNotEmpty())
                <tr>
                    <td class="td-fixed-element"><i class="icon-f-07 fa fa-fw fa-lg"></i>{{ trans("general.brands") }}:</td>
                    <td>
                        @foreach($element->brands as $brand)
                            <a class="theme-color"
                               href="{{ route('frontend.product.search',['brand_id' => $brand->id]) }}">
                                {{ $brand->slug }},
                            </a>
                        @endforeach
                    </td>
                </tr>
            @endif
            @if($element->has_attributes)
                @if($element->colors->isNotEmpty())
                    <tr>
                        <td><i class="icon-e-87 fa fa-fw fa-lg"></i>{{ trans('general.colors') }} :</td>
                        <td>
                            @foreach($element->colors as $col)
                                {!! $col->name !!},
                            @endforeach
                        </td>
                    </tr>
                @endif
                @if($element->sizes->isNotEmpty())
                    <tr>
                        <td><i class="icon-e-69 fa fa-fw fa-lg"></i>{{ trans('general.sizes') }} :</td>
                        <td>
                            @foreach($element->sizes as $size)
                                {!! $size->name !!},
                            @endforeach
                        </td>
                    </tr>
                @endif
            @endif
            @if($element->notes)
                <tr>
                    <td class="td-fixed-element"><i class="icon-f-07 fa fa-fw fa-lg"></i><span
                                class="ml-1"></span><span>{{ trans('general.notes') }} : </span>
                        <span class="ml-2"></span></td>
                    <td>
                        {{ $element->notes }}
                    </td>
                </tr>
            @endif
        </table>
    </div>
</div>

<div class="tt-wrapper">
    <ul class="tt-list-btn">
        <li><a class="btn-link" href="#">
                <i class="fa fa-fw fa-heart fa-lg"></i>
                <span class="ml-2"></span>
                {{ trans('general.add_to_wish_list') }}
            </a>
        </li>
        {{--<li><a class="btn-link" href="#"><i class="icon-n-08"></i>ADD TO COMPARE</a></li>--}}
    </ul>
</div>