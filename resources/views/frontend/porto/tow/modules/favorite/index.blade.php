@extends('frontend.layouts.app')
@section('body')
    <!-- BREADCRUMBS -->
    <section class="page-section breadcrumbs">
        <div class="container">
            <div class="page-header">
                <h1>{{ trans('general.favorites') }}</h1>
            </div>
            @include('frontend.partials._breadcrumbs',['name' => trans('general.favorites')])
        </div>
    </section>
    <!-- /BREADCRUMBS -->

    <!-- PAGE -->
    <section class="page-section">
        <div class="container">
            <div class="col-lg-12">
                @foreach($elements as $element)
                    <div class="col-lg-3" style="margin-bottom: 15px;">
                        <div class="thumbnail bordered no-padding">
                            <div class="media">
                                <a class="media-link" data-gal="prettyPhoto"
                                   href="{{ asset(env('LARGE').$element->image) }}">
                                    <img src="{{ asset(env('THUMBNAIL').$element->image) }}"
                                         alt="{{ $element->name }}"/>
                                    <span class="icon-view">
                                    <strong><i class="fa fa-eye"></i></strong>
                                </span>
                                </a>
                            </div>
                            <div class="caption text-center">
                                <h4 class="caption-title"><a
                                            href="{{ route('frontend.product.show', $element->id) }}">{{ $element->name }}</a>
                                </h4>
                                <div class="price">
                                    @if($element->isOnSale)
                                        <ins>{{ $element->convertedSalePrice}} <span>{{ $currency->symbol }}</span>
                                        </ins>
                                        <del>{{ $element->convertedPrice }} <span>{{ $currency->symbol }}</span></del>
                                    @else
                                        <ins>{{ $element->convertedPrice }} <span>{{ $currency->symbol }}</span></ins>
                                    @endif
                                </div>
                                <div class="buttons">
                                    <a class="btn btn-theme btn-theme-transparent btn-wish-list"
                                       href="{{ route('frontend.favorite.remove', $element->id) }}"><i
                                                class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-lg-12">
                @include('frontend.partials.pagination')
            </div>
        </div>
    </section>
    <!-- /PAGE -->
@endsection


