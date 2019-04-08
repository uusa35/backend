@extends('backend.layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
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
                            <th>id</th>
                            <th>day</th>
                            <th>day_name_ar</th>
                            <th>day_name_en</th>
                            <th>start</th>
                            <th>end</th>
                            <th>is_off</th>
                            <th>is_available</th>
                            <th>allow_multi_select</th>
                            <th>type</th>
                            <th>notes_ar</th>
                            <th>notes_en</th>
                            <th>week_start</th>
                            <th>day_no</th>
                            <th>user_id</th>
                            <th>service_id</th>
                            <th>day_id</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>id</th>
                            <th>day</th>
                            <th>day_name_ar</th>
                            <th>day_name_en</th>
                            <th>start</th>
                            <th>end</th>
                            <th>is_off</th>
                            <th>is_available</th>
                            <th>allow_multi_select</th>
                            <th>type</th>
                            <th>notes_ar</th>
                            <th>notes_en</th>
                            <th>week_start</th>
                            <th>day_no</th>
                            <th>user_id</th>
                            <th>service_id</th>
                            <th>day_id</th>
                            <th>action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($elements as $element)
                        <tr>
                            <td> {{$element->id}}</td>
                            <td> {{$element->day }} </td>
                            <td> {{$element->day_name_ar }} </td>
                            <td> {{$element->day_name_en }} </td>
                            <td> {{$element->start }} </td>
                            <td> {{$element->end }} </td>
                            <td> {{$element->is_off }} </td>
                            <td> {{$element->is_available }} </td>
                            <td> {{$element->allow_multi_select }} </td>
                            <td> {{$element->type }} </td>
                            <td> {{$element->notes_ar }} </td>
                            <td> {{$element->notes_en }} </td>
                            <td> {{$element->week_start }} </td>
                            <td> {{$element->day_no }} </td>
                            <td> {{$element->user_id }} </td>
                            <td> {{$element->day_id }} </td>
                            <td> {{$element->service_id }} </td>

                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn green btn-xs btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li>
                                            <a href="{{ route('backend.admin.day.edit',$element->id) }}">
                                                <i class="fa fa-fw fa-edit"></i> Edit</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('backend.activate',['model' => 'day','id' => $element->id]) }}">
                                                <i class="fa fa-fw fa-check-circle"></i> toggle active</a>
                                        </li>
                                        <li>
                                            <a data-toggle="modal" href="#" data-target="#basic" data-title="Delete" data-content="Are you sure you want to delete day {{ $element->name }}? " data-form_id="delete-{{ $element->id }}">
                                                <i class="fa fa-fw fa-recycle"></i> delete</a>
                                            <form method="post" id="delete-{{ $element->id }}" action="{{ route('backend.admin.day.destroy',$element->id) }}">
                                                @csrf
                                                <input type="hidden" name="_method" value="delete" />
                                                <button type="submit" class="btn btn-del hidden">
                                                    <i class="fa fa-fw fa-times-circle"></i> delete
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