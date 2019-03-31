@extends('backend.layouts.app')

@section('content')

<div class="col-lg-12">
    <div class="panel panel-info">
        <div class="panel-heading">
            create new page
        </div>
        <div class="panel-body">

            <!-- Text input http://getbootstrap.com/css/#forms -->
            <form class="horizontal-form" role="form" method="POST" action="{{ route('backend.admin.newsletter.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-5">
                            <label for="name" class="control-label">{{ trans('general.name') }}</label>
                            <input type="text" class="form-control" name="name" placeholder="{{ trans('general.name') }}" required="">
                        </div>
                        <div class="col-sm-5">
                            <label for="email" class="control-label">{{ trans('general.email') }}</label>
                            <input type="text" class="form-control" name="email" placeholder="{{ trans('general.email') }}" required="">
                        </div>
                        <div class="col-sm-2">
                            <label for="menu" class="control-label">{{ trans('general.active') }}</label><br>
                            <input type="radio" name="active" value="1" checked> {{ trans('general.active') }}<br>
                            <input type="radio" name="active" value="0"> {{ trans('general.not_active') }}<br>
                        </div>
                    </div>
                    <!-- Button http://getbootstrap.com/css/#buttons -->
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    {{ trans('general.submit') }}
                                </button>

                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection 