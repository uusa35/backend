<table>
    @if($element->categories->isNotEmpty())
        <tr>
            <td class="title">{{ trans('general.categories') }}:</td>
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
            <td class="title">{{ trans("general.tags") }}:</td>
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
            <td class="title">{{ trans("general.brands") }}:</td>
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