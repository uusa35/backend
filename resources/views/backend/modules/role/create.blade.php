@extends('backend.layouts.app')
@section('content')
<<<<<<< HEAD
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light ">
{{--                @include('backend.partials.form_title')--}}
                <div class="portlet box blue">
{{--                    @include('backend.partials.forms.form_title')--}}
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <h3 class="form-section">{{ trans('general.create_role') }}</h3>
                        <form action="{{ route('backend.admin.role.store') }}" class="horizontal-form">
                            @csrf
                            <input type="hidden" name="_method" value="patch">
                            <div class="form-body">
                                <h3 class="form-section">Create New Role</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Name</label>
                                            <input type="text" id="name" class="form-control" placeholder="Usama Ahmed" value="{{ old('name_ar') }}"
                                                   required>
                                            <span class="help-block"> Role Name must be unique </span>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Slug Arabic</label>
                                            <input type="text" id="slug_ar" name="slug_ar" class="form-control" value="{{ old('slug_ar') }}"
                                                   placeholder="slug ar" required>
                                            {{--<span class="help-block"> This field has error. </span>--}}
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Slug Arabic</label>
                                    <input type="text" id="slug_ar" name="slug_ar" class="form-control" value="{{ old('slug_ar') }}" placeholder="slug ar" required>
                                    {{--<span class="help-block"> This field has error. </span>--}}
                                </div>
                            </div>
                            <!--/span-->
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Slug English</label>
                                    <input type="text" id="slug_en" name="slug_en" class="form-control" value="{{ old('slug_en') }}" placeholder="slug en" required>
                                    {{--<span class="help-block"> This field has error. </span>--}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Icon</label>
                                    <select class="form-control" name="icon" required>
                                        @foreach($icons as $k => $v)
                                        <option value="{{ $v }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                    <span class="help-block"> <a target="_blank" href="https://fontawesome.com/cheatsheet" class="">Check Visual Icons </a></span>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label sbold">Is Active</label>
                                        <div class="radio-list">
                                            <label class="radio-inline">
                                                <input type="radio" name="active" id="optionsRadios1" value="1" checked> Active </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="active" id="optionsRadios2" value="0">
                                                Not Active</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label sbold">Is Admin</label>
                                    <div class="radio-list">
                                        <label class="radio-inline">
                                            <input type="radio" name="is_admin" id="optionsRadios3" value="1">
                                            Admin Attributes</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_admin" id="optionsRadios4" value="0" checked> No Admin Attributes</label>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label sbold">Is Visible</label>
                                        <div class="radio-list">
                                            <label class="radio-inline">
                                                <input type="radio" name="visible" id="optionsRadios5" value="1" checked> Visible </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="visible" id="optionsRadios6" value="0"> Not Visible</label>
                                        </div>
                                        <span class="help-block"> Visible Means that this role shall appear on Application (ex. admin is invisible)</span>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label sbold">Is Company</label>
                                    <div class="radio-list">
                                        <label class="radio-inline">
                                            <input type="radio" name="is_company" id="optionsRadios7" value="1">
                                            Company Attributes</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_company" id="optionsRadios8" value="0" checked> No Company Attributes</label>
                                    </div>
                                    <span class="help-block"> Role that has companies attributes (ex. branches) </span>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label>Caption</label>
                                    <input type="text" name="caption" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-actions right">
                            <button type="button" class="btn default">Cancel</button>
                            <button type="submit" class="btn blue">
                                <i class="fa fa-check"></i> Save
                            </button>
                        </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
    </div>
</div>
</div>
@endsection 