<div class="tt-wrapper">
    <div class="tt-add-info">
        <ul>
            @if(!is_null($element->duration))
                <li><span><i class="fa fa-fw fa-clock-o"></i> <span class="ml-2"></span> {{ trans('general.duration') }}
                        :</span> {{ $element->duration }} {{ trans("general.hours") }}</li>
            @endif
            @if(!is_null($element->setup_time))
                <li><span><i class="fa fa-fw fa-calendar-times-o"></i>  <span class="ml-2"></span>{{ trans('general.setup_time') }}
                        :</span> {{ $element->setup_time }} {{ trans('general.hours') }}</li>
            @endif
            @if(!is_null($element->individuals))
                <li><span><i class="fa fa-fw fa-users"></i> <span class="ml-2"></span>{{ trans('general.individuals_count') }}
                        : </span> {{ $element->individuals }} {{ trans('general.individual') }}</li>
            @endif
        </ul>
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
{{--<div class="tt-add-info">--}}
<table>
    <tr>
        <td class="td-fixed-element"><i class="icon-woman"></i><span class="ml-1"></span><span>{{ trans('general.sku') }} : </span>
            <span class="ml-2"></span></td>
        <td>
            {{ $element->sku }}
        </td>
    </tr>
    <tr>
        <td class="td-fixed-element"><i class="icon-pencil"></i><span class="ml-1"></span><span>{{ trans('general.notes') }} : </span>
            <span class="ml-2"></span></td>
        <td>
            {{ $element->notes }}
        </td>
    </tr>
</table>
{{--</div>--}}
<table>
    @if($element->categories->isNotEmpty())
        <tr>
            <td class="td-fixed-element">{{ trans('general.categories') }}:</td>
            <td>
                @foreach($element->categories as $cat)
                    <a href="{{ route('frontend.product.search',['category_id' => $cat->id]) }}">
                        {{ $cat->name }},
                    </a>
                @endforeach
            </td>
        </tr>
    @endif
    @if($element->tags->isNotEmpty())
        <tr>
            <td class="td-fixed-element"><i class="icon-women"></i><span class="ml-1"></span>{{ trans("general.tags") }}
                :
            </td>
            <td>
                @foreach($element->tags as $tag)
                    <a href="{{ route('frontend.product.search',['tag_id' => $tag->id]) }}">
                        {{ $tag->slug }},
                    </a>
                @endforeach
            </td>
        </tr>
    @endif
    @if(!is_null($element->brands) && $element->brands->isNotEmpty())
        <tr>
            <td class="td-fixed-element">{{ trans("general.brands") }}:</td>
            <td>
                @foreach($element->brands as $brand)
                    <a href="{{ route('frontend.product.search',['brand_id' => $brand->id]) }}">
                        {{ $brand->slug }},
                    </a>
                @endforeach
            </td>
        </tr>
    @endif
</table>