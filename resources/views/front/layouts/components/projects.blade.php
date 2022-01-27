<section id="section5" class="px-0">
    <div class="card d-flex flex-lg-row flex-column justify-content-lg-around justify-content-center">
        @foreach($projects as $project)
            <div class="card-1 d-flex justify-content-between px-2 py-1 flex-column my-2">
                <div class="d-flex flex-row justify-content-between">
                    <div class="d-flex flex-column align-items-start px-2" style="width: 30%;">
                        <h3>{{ $project->name }}</h3>
                        <p>{{ $project->url }}</p>
                    </div>
                    <div class="d-flex justify-content-center" style="width: 30%;">
                        <img style="width: 30%;" src="/storage/{{ $project->logo }}" />
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-between px-2" style="font-size: 14px;">
                    <p>
                        {{ $project->content }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</section>
