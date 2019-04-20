@extends('backend.layouts.app')

@section('breadcrumbs')
{{ Breadcrumbs::render('backend.admin.category.index') }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light ">
            @include('backend.partials.forms.form_title')
            <div class="portlet-body">
                @include('backend.partials._admin_instructions',['title' => trans('general.categories') ,'message' => trans('message.index_category')])
                <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0">
                    <thead>
                        <tr>
                            <th>{{ trans('general.id') }}</th>
                            <th>{{ trans('general.name') }}</th>
                            <th>{{ trans('general.name_en') }}</th>
                            <th>{{ trans('general.name_ar') }}</th>
                            <th>{{ trans('general.active') }}</th>
                            <th>{{ trans('general.image') }}</th>
                            <th width="300">{{ trans('general.subcategories') }}</th>
                            <th>{{ trans('general.actions') }}</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>{{ trans('general.id') }}</th>
                            <th>{{ trans('general.name') }}</th>
                            <th>{{ trans('general.name_en') }}</th>
                            <th>{{ trans('general.name_ar') }}</th>
                            <th>{{ trans('general.active') }}</th>
                            <th>{{ trans('general.image') }}</th>
                            <th width="300">{{ trans('general.subcategories') }}</th>
                            <th>{{ trans('general.actions') }}</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($elements as $element)
                        <tr>
                            <td>{{ $element->id }}</td>
                            <td>{{ $element->name }}</td>
                            <td>
                                <span class="label label-lg {{ activeLabel($element->active) }} text-uppercase">{{ $element->name_en }}</span>
                            </td>
                            <td>
                                <span class="label label-lg {{ activeLabel($element->active) }} text-uppercase">{{ $element->name_ar }}</span>
                            </td>
                            <td>
                                <span class="label label-lg {{ activeLabel($element->active) }} text-uppercase">{{ activeText($element->active)}}</span>
                            </td>
                            <td>
                                <img src="{{ asset('storage/uploads/images/thumbnail/'.$element->image) }}" alt="" class="img-sm">
                            </td>
                            <td>
                                @if(!$element->children->isEmpty())
                                <ul>
                                    @foreach($element->children as $child)
                                    <li>
                                        <div class="btn-group">
                                            <button type="button" class="btn {{ $child->active ? 'green' : 'red' }}  dropdown-toggle" data-toggle="dropdown"> {{ $child->id }} - {{ $child->name }}
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li>
                                                    <a href="{{ route('backend.admin.category.create',['parent_id' => $child->id]) }}">
                                                        <i class="fa fa-fw fa-edit"></i> {{ trans('general.assign_child') }}</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('backend.admin.category.edit',$child->id) }}">
                                                        <i class="fa fa-fw fa-edit"></i> {{ trans('general.edit') }}</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('backend.activate',['model' => 'category','id' => $child->id]) }}">
                                                        <i class="fa fa-fw fa-check-circle"></i> {{ trans('general.toggle_active') }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-toggle="modal" href="#" data-target="#basic" data-title="Delete" data-content="Are you sure you want to delete {{ $child->name  }}? " data-form_id="delete-{{ $child->id }}">
                                                        <i class="fa fa-fw fa-recycle"></i> {{ trans('general.delete') }}</a>
                                                    <form method="post" id="delete-{{ $child->id }}" action="{{ route('backend.admin.category.destroy',$child->id) }}">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="delete" />
                                                        <button type="submit" class="btn btn-del hidden">
                                                            <i class="fa fa-fw fa-times-circle"></i> {{ trans('general.delete') }}
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                        <br>
                                        <br>
                                        @if(!$child->children->isEmpty())
                                        <ul>
                                            @foreach($child->children as $sub)
                                            <li>
                                                <div class="btn-group">
                                                    <button type="button" class="btn {{ $sub->active ? 'green' : 'red' }} btn-outline dropdown-toggle" data-toggle="dropdown"> {{ $sub->id }} - {{ $sub->name }}
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right" role="menu">
                                                        <li>
                                                            <a href="{{ route('backend.admin.category.edit',$sub->id) }}">
                                                                <i class="fa fa-fw fa-edit"></i>
                                                                {{ trans('general.edit') }}</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('backend.activate',['model' => 'category','id' => $sub->id]) }}">
                                                                <i class="fa fa-fw fa-check-circle"></i>
                                                                {{ trans('general.toggle_active') }}</a>
                                                        </li>
                                                        <li>
                                                            <a data-toggle="modal" href="#" data-target="#basic" data-title="Delete" data-content="Are you sure you want to delete {{ $sub->name  }}? " data-form_id="delete-{{ $sub->id }}">
                                                                <i class="fa fa-fw fa-recycle"></i>
                                                                {{ trans('general.delete') }}</a>
                                                            <form method="post" id="delete-{{ $sub->id }}" action="{{ route('backend.admin.category.destroy',$sub->id) }}">
                                                                @csrf
                                                                <input type="hidden" name="_method" value="delete" />
                                                                <button type="submit" class="btn btn-del hidden">
                                                                    <i class="fa fa-fw fa-times-circle"></i>
                                                                    {{ trans('general.delete') }}
                                                                </button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <br>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    @endforeach
                                </ul>
                                @else
                                <span class="label label-info">no sub categories</span>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn green btn-xs btn-outline dropdown-toggle" data-toggle="dropdown"> {{ trans('general.actions') }}
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li>
                                            <a href="{{ route('backend.admin.category.edit',$element->id) }}">
                                                <i class="fa fa-fw fa-edit"></i> {{ trans('general.edit') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('backend.admin.category.create',['parent_id' => $element->id]) }}">
                                                <i class="fa fa-fw fa-edit"></i> {{ trans('general.assign_child') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('backend.activate',['model' => 'product','id' => $element->id]) }}">
                                                <i class="fa fa-fw fa-check-circle"></i> {{ trans('general.toggle_active') }}</a>
                                        </li>
                                        <li>
                                            <a data-toggle="modal" href="#" data-target="#basic" data-title="Delete" data-content="Are you sure you want to delete {{ $element->name  }}? " data-form_id="delete-{{ $element->id }}">
                                                <i class="fa fa-fw fa-recycle"></i> {{ trans('general.delete') }}</a>
                                            <form method="post" id="delete-{{ $element->id }}" action="{{ route('backend.admin.category.destroy',$element->id) }}">
                                                @csrf
                                                <input type="hidden" name="_method" value="delete" />
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