@if(isset($services) && $services->isNotEmpty())
    <div class="row">
        @foreach($services as $service)
            <div class="col-lg-4 col-md-6 tt-col-item">
                @include('frontend.wokiee.four.partials._service_widget',['element' => $service])
            </div>
        @endforeach
    </div>
@endif