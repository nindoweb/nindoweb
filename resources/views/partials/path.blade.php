<section id="teamHeader" class="container d-flex flex-column">
    <h1>
        {{__('Nindo')}} <span style="color: red;margin-left: -20px;">{{$redText ?? ''}}</span>{{$regularText ?? ''}}
    </h1>
    <h3 class="mt-1 mb-5">
        {{ $description ?? '' }}
    </h3>
    <p>
        {{ $subDescription ?? '' }}
    </p>
</section>
