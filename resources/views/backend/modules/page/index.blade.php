@extends('backend.layouts.app')
@section('breadcrumbs')
    {{ Breadcrumbs::render('backend.admin.page.index') }}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                @include('backend.partials.forms.form_title',['title' => trans('general.index_page')])
                <div class="portlet-body">
                    @include('backend.partials._admin_instructions',['title' => trans('general.pages') ,'message' => trans('message.index_page')])
                    <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="all">{{ trans('general.id') }}</th>
                            <th>{{ trans('general.title_ar') }}</th>
                            <th>{{ trans('general.title_en') }}</th>
                            <th>{{ trans('general.slug_ar') }}</th>
                            <th>{{ trans('general.slug_en') }}</th>
                            <th>{{ trans('general.image') }}</th>
                            <th>{{ trans('general.url') }}</th>
                            <th>{{ trans('general.order') }}</th>
                            <th>{{ trans('general.active') }}</th>
                            <th class="none">{{ trans('general.on_menu_desktop') }}</th>
                            <th class="none">{{ trans('general.on_menu_mobile') }}</th>
                            <th class="none">{{ trans('general.on_footer') }}</th>
                            <th class="none">{{ trans('general.created_at') }}</th>
                            <th>{{ trans('general.actions') }}</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th class="all">{{ trans('general.id') }}</th>
                            <th>{{ trans('general.title_ar') }}</th>
                            <th>{{ trans('general.title_en') }}</th>
                            <th>{{ trans('general.slug_ar') }}</th>
                            <th>{{ trans('general.slug_en') }}</th>
                            <th>{{ trans('general.image') }}</th>
                            <th>{{ trans('general.url') }}</th>
                            <th>{{ trans('general.order') }}</th>
                            <th>{{ trans('general.active') }}</th>
                            <th class="none">{{ trans('general.on_menu_desktop') }}</th>
                            <th class="none">{{ trans('general.on_menu_mobile') }}</th>
                            <th class="none">{{ trans('general.on_footer') }}</th>
                            <th class="none">{{ trans('general.created_at') }}</th>
                            <th>{{ trans('general.actions') }}</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($elements as $element)
                            <tr>
                                <td> {{$element->id}}</td>
                                <td> {{$element->title_ar}} </td>
                                <td> {{$element->title_en}} </td>
                                <td> {{$element->slug_ar}} </td>
                                <td> {{$element->slug_en}} </td>
                                <td><img src="{{ $element->getCurrentImageAttribute() }}" alt="" class="img-xs"></td>
                                <td><a href="{{ $element->url }}" class="btn btn-default">{{ $element->title_en }}</a>
                                </td>
                                <td>{{ $element->order }}</td>
                                <td>
                                    <span class="label {{ activeLabel($element->active) }}">{{ activeText($element->active) }}</span>
                                </td>
                                <td>
                                    <span class="label {{ activeLabel($element->on_menu_desktop) }}">{{ activeText($element->on_menu_desktop,'Desktop') }}</span>
                                </td>
                                <td>
                                    <span class="label {{ activeLabel($element->on_menu_mobile) }}">{{ activeText($element->on_menu_mobile,'Mobile') }}</span>
                                </td>
                                <td>
                                    <span class="label {{ activeLabel($element->on_footer) }}">{{ activeText($element->on_footer,'Footer') }}</span>
                                </td>
                                <td>
                                    {{ $element->created_at->diffForHumans() }}
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn green btn-xs btn-outline dropdown-toggle"
                                                data-toggle="dropdown"> {{ trans('general.actions') }}
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li>
                                                <a href="{{ route('backend.admin.page.edit',$element->id) }}">
                                                    <i class="fa fa-fw fa-edit"></i> {{ trans('general.edit') }}</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('backend.activate',['model' => 'page','id' => $element->id]) }}">
                                                    <i class="fa fa-fw fa-check-circle"></i> {{ trans('general.toggle_active') }}
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="modal" href="#" data-target="#basic" data-title="Delete"
                                                   data-content="Are you sure you want to delete page {{ $element->title_ar }}? "
                                                   data-form_id="delete-{{ $element->id }}">
                                                    <i class="fa fa-fw fa-recycle"></i> {{ trans('general.delete') }}
                                                </a>
                                                <form method="post" id="delete-{{ $element->id }}"
                                                      action="{{ route('backend.admin.page.destroy',$element->id) }}">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="delete"/>
                                                    <button type="submit" class="btn btn-del hidden">
                                                        <i class="fa fa-fw fa-times-circle"></i> {{ trans('general.delete') }}
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
