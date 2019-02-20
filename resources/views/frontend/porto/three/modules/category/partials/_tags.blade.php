@if(isset($tags) && !$tags->isEmpty())
    <div class="layout-title bottom-tag">
        <h4>{{ trans('general.tags') }}</h4>
        <div class="shop-layout">
            <div class="popular-tag">
                <div class="tag-list">
                    <ul>
                        @foreach($tags as $key => $value)
                            {{--<li><a href="{{ route('product.tags',[$tag->name]) }}"--}}
                            {{--style="font-size: {!!rand(6,20)!!}px !important;">{{ $tag->name }}</a></li>--}}
                            <li>
                                <a style="color: green;" href="{{ route('frontend.product.search',['tag_id' => $key]) }}" >
                                    {{ $value }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div><!-- End Shop Layout -->
    </div>
@else
    <div class="alert alert-warning">
        <i class="fa fa-exclamation-triangle"></i>
        {{ trans('general.message.warning.no_tags') }}
    </div>
@endif
