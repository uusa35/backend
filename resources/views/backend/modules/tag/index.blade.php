@extends('backend.layouts.app')
@section('breadcrumbs')
{{ Breadcrumbs::render('backend.admin.tag.index') }}
@endsection
@section('content')
<div class="portlet light ">
    @include('backend.partials.forms.form_title')
    <div class="portlet-body">
        <div class="m-heading-1 border-green m-bordered">
            <h3>Important Information</h3>
            <p>
                Roles are very important for the application.
            </p>
            <p> Some Information about roles.
                <a class="btn red btn-outline" href="http://datatables.net/" target="_blank">the official
                    documentation</a>
            </p>
        </div>
        <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0">
            <thead>
                <tr>
                    <th> {{ trans('general.id') }}</th>
                    <th>{{ trans('general.name') }}</th>
                    <th>{{ trans('general.slug_ar') }}</th>
                    <th>{{ trans('general.slug_en') }}</th>
                    <th>{{ trans('general.active') }}</th>
                    <th>{{ trans('general.actions') }}</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    < <th> {{ trans('general.id') }}</th>
                        <th>{{ trans('general.name') }}</th>
                        <th>{{ trans('general.slug_ar') }}</th>
                        <th>{{ trans('general.slug_en') }}</th>
                        <th>{{ trans('general.active') }}</th>
                        <th>{{ trans('general.actions') }}</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($elements as $element)
                <tr>
                    <td> {{$element->id}}</td>
                    <td> {{$element->name }} </td>
                    <td> {{$element->slug_ar}} </td>
                    <td> {{$element->slug_en}} </td>
                    <td>
                        <span class="label {{ activeLabel($element->active) }}">{{ activeText($element->active) }}</span>
                    </td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn green btn-xs btn-outline dropdown-toggle" data-toggle="dropdown"> {{ trans('general.actions') }}
                                <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li>
                                    <a href="{{ route('backend.tag.edit',$element->id) }}">
                                        <i class="fa fa-fw fa-edit"></i> {{ trans('general.edit') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('backend.activate',['model' => 'tag','id' => $element->id]) }}">
                                        <i class="fa fa-fw fa-check-circle"></i> {{ trans('general.toggle_active') }}</a>
                                </li>
                                <li>
                                    <a data-toggle="modal" href="#" data-target="#basic" data-title="Delete" data-content="Are you sure you want to delete tag {{ $element->name }}? " data-form_id="delete-{{ $element->id }}">
                                        <i class="fa fa-fw fa-recycle"></i> {{ trans('general.delete') }}</a>
                                    <form method="post" id="delete-{{ $element->id }}" action="{{ route('backend.tag.destroy',$element->id) }}">
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
@endsection