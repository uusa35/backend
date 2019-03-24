<div class="page-bar">
    <ul class="page-breadcrumb">
        @section('breadcrumbs')
            @if(Breadcrumbs::exists(request()->route()->getName()))
                @if(!isset($element))
                    {{--{{ Breadcrumbs::render(request()->route()->getName()) }}--}}
                {{--@elseif(isset($elements))--}}
                    {{--{{ Breadcrumbs::render(request()->route()->getName()) }}--}}
                {{--@elseif(isset($element))--}}
                    {{--{{ Breadcrumbs::render(request()->route()->getName(), $element) }}--}}
                @endif
            @endif
        @endsection
    </ul>
    <div class="page-toolbar">
        <div class="btn-group pull-right">
            <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown"
                    data-hover="dropdown" data-delay="1000" data-close-others="true"> Actions
                <i class="fa fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
                <li>
                    <a href="{{ route('backend.home') }}">
                        <i class="icon-user-following"></i> Dashbaord</a>
                </li>
                <li>
                    <a href="{{ route('frontend.home') }}">
                        <i class="icon-home"></i> Home</a>
                </li>
                <li class="divider"></li>
                @can('isSuper')
                    <li>
                        <a href="{{ route('backend.super.setting.edit',1) }}">
                            <i class="icon-settings"></i> Edit Settings</a>
                    </li>
                    <li>
                        <a href="{{ route('backend.super.setting.index') }}">
                            <i class="icon-settings"></i> Settings</a>
                    </li>
                @endcan
            </ul>
        </div>
    </div>
</div>
<!-- END PAGE HEADER-->