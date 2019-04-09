@extends('backend.layouts.app')


@section('breadcrumbs')
{{ Breadcrumbs::render('backend.admin.newsletter.index') }}
@endsection

@show
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-body">
                <table id="dataTable" class="table table-striped table-bordered table-hover table-checkable order-column" id="contactusTable">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>status</th>
                            <th>created_at</th>
                            <th>actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($subscribers as $element)
                        <tr class="odd gradeX">
                            <td>{{ $element->id }}</td>
                            <td>{{ $element->name }}</td>
                            <td>{{ $element->email }}</td>
                            <td><label class="label label-sm {{ ($element->active) ? 'label-success' : 'label-danger'}}">{{ ($element->active) ? 'active' : 'active'}}</label></td>
                            <td>{{ $element->created_at->format('Y-m-d') }}</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{ route('backend.admin.newsletter.edit',$element->id) }}">
                                                <i class="fa fa-eye"></i> edit subscirber</a>
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
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
@endsection