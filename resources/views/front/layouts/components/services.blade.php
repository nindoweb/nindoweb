<section id="section2" class=" my-5">
    <div class="box d-flex flex-md-row flex-column justify-content-between align-items-center h-100">
        @foreach($services as $service)
            <div
                style="background-image: url('{{ '/storage/'. $service->image }}');"
                class="item @if($services->first()->id == $service->id) active @endif d-flex justify-content-end px-2 flex-column">
                <h3>{{ $service->name }}</h3>
{{--                <h4>{{ $service-> }}</h4>--}}
            </div>
        @endforeach
    </div>
</section>

