{{-- HomePage Modal--}}
<div class="modal  fade" id="Modalnewsletter" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true"
     data-pause=2000>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                            class="icon icon-clear"></span></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header">
                        {{ trans('general.search_your_occasion') }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ trans('general.sub_title_your_occasion') }}</h5>
                        <p class="card-text">
                            {{ trans('message.search_your_occasion') }}
                        </p>
                        <br>
                        @include('frontend.wokiee.four.partials._search_form')
                        @if(env('APP_CASE') === 'evento')
                            <div class="row">
                                <div class="tt-offset-35 container-indent element-padding-bottom">
                                    <div class="container">
                                        <div class="row tt-services-listing">
                                            @foreach($categoriesList as $category)
                                                <div class="col-xs-12 col-md-6 col-lg-4">
                                                    <a href="{!! request()->fullUrlWithQuery(['service_category_id' => $category->id]) !!}"
                                                       class="tt-services-block">
                                                        {{--<div class="badge-light">--}}
                                                            {{--<i class="fa fa-fw fa-dot-circle-o"></i>--}}
                                                        {{--</div>--}}
                                                        <div class="tt-col-description">
                                                            <h4 class="tt-title {{ request('service_category_id') == $category->id ? 'text-warning' : null }}">{{ $category->name }}</h4>
                                                            <h5>{{ trans('general.services_count') }} : {{ $category->services->count() }} </h5>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>