@if(isset($services) && $services->isNotEmpty())
    <div class="row">
        @foreach($services as $service)
            <div class="col-6 col-md-4 col-lg-3 tt-col-item">
                @include('frontend.wokiee.four.partials._service_widget',['element' => $service])
            </div>
        @endforeach
    </div>
@endif