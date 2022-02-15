<section id="homesection2" class="my-5">
    <div class="nav nav-tabs container box d-flex flex-lg-row flex-column justify-content-between align-items-center h-100" id="nav-tab" role="tablist">
        @foreach($services as $service)
            <div onclick="srviceScrollOnMobile()" class="nav-link item d-flex justify-content-end flex-column @if($services->first()->id == $service->id ) active @endif"
                 id="nav-{{$service->code}}-tab" data-bs-toggle="tab" data-bs-target="#nav-{{$service->code}}" type="button" role="tab"
                 aria-controls="nav-{{$service->code}}" aria-selected="true">
                <img src="/storage/{{ $service->image }}" alt="{{ $service->name }}">
                <p class="abov1">{{ $service->name }}</p>
                <p class="abov2">{{$service->sub_name}}</p>
            </div>
        @endforeach
    </div>
</section>

<section id="homesection3" class="container servicesPost d-flex justify-content-center">
    <div class="tab-content" id="nav-tabContent">
        @foreach($services as $service)
            <div class="tab-pane fade @if($services->first()->id == $service->id ) show active @endif" id="nav-{{$service->code}}" role="tabpanel" aria-labelledby="nav-{{$service->code}}-tab">
            <p>
                {{ strip_tags($service->content) }}
                <span class="homeServiseBackground">
                    {{__('Technologies we use for ')}}{{ $service->fullName . ':'}}
                </span>
            </p>
            <div class="d-flex justify-content-center flex-md-row flex-column align-items-center container flex-wrap">
                @foreach($service->technologies as $technology)
                    <div class="mx-5 my-4">
                        <img src="/storage/{{$technology->image}}" width="70px" height="70px"
                             alt="{{ $technology->name }}" title="{{ $technology->name }}">
                    </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</section>
