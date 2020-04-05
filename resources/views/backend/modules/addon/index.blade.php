@extends('backend.layouts.app')
@section('breadcrumbs')
    {{ Breadcrumbs::render('backend.admin.addon.index') }}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light ">
                @include('backend.partials.forms.form_title',['title' => trans('general.index_addon')])
                <div class="portlet-body">
                    @include('backend.partials._admin_instructions',['title' => trans('general.addons') ,'message' => trans('message.index_addon')])
                    <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0">
                        <thead>
                        <tr>
                            <th>{{ trans('general.id') }}</th>
                            <th>{{ trans('general.name_ar') }}</th>
                            <th>{{ trans('general.name_en') }}</th>
                            <th>{{ trans('general.image') }}</th>
                            <th>{{ trans('general.active') }}</th>
                            <th>{{ trans('general.actions') }}</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>{{ trans('general.id') }}</th>
                            <th>{{ trans('general.name_ar') }}</th>
                            <th>{{ trans('general.name_en') }}</th>
                            <th>{{ trans('general.image') }}</th>
                            <th>{{ trans('general.active') }}</th>
                            <th>{{ trans('general.actions') }}</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($elements as $element)
                            <tr>
                                <td> {{$element->id}}</td>
                                <td> {{$element->name_ar }}
                                    @can('index','item')
                                        @if($element->items->isNotEmpty())
                                            <ul>
                                                <h6 class="text-center text-danger">{{ trans('general.items') .' '. trans('general.services')}}</h6>
                                                <hr>
                                                @foreach($element->items as $item)
                                                    <li>{{ $item->name }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    @endif
                                </td>
                                <td> {{$element->name_en }} </td>
                                <td>
                                    <img class="img-xs" src="{{ $element->imageThumbLink }}" alt="">
                                </td>
                                <td>
                                    <span class="label {{ activeLabel($element->active) }}">{{ activeText($element->active) }}</span>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn green btn-xs btn-outline dropdown-toggle"
                                                data-toggle="dropdown"> {{ trans('general.actions') }}
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        @if(!$element->trashed())
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li>
                                                    <a href="{{ route('backend.admin.addon.edit',$element->id) }}">
                                                        <i class="fa fa-fw fa-edit"></i> {{ trans('general.edit') }}</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('backend.activate',['model' => 'addon','id' => $element->id]) }}">
                                                        <i class="fa fa-fw fa-check-circle"></i> {{ trans('general.toggle_active') }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-toggle="modal" href="#" data-target="#basic"
                                                       data-title="Delete"
                                                       data-content="Are you sure you want to delete day {{ $element->name }}? "
                                                       data-form_id="delete-{{ $element->id }}">
                                                        <i class="fa fa-fw fa-recycle"></i> {{ trans('general.delete') }}
                                                    </a>
                                                    <form method="post" id="delete-{{ $element->id }}"
                                                          action="{{ route('backend.admin.addon.destroy',$element->id) }}">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="delete"/>
                                                        <button type="submit" class="btn btn-del hidden">
                                                            <i class="fa fa-fw fa-times-circle"></i> {{ trans('general.delete') }}
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        @else
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li>
                                                    <a href="{{ route('backend.admin.addon.restore',$element->id) }}">
                                                        <i class="fa fa-fw fa-edit"></i> {{ trans('general.restore') }}
                                                    </a>
                                                </li>
                                            </ul>
                                        @endif
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
