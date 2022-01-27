<section id="section1" class="d-flex flex-column mt-5">
    <h1>
        {{__('Nindo')}}
        <span style="color: red;margin-left: -14px;">{{$redText ?? ''}}</span>{{$regularText ?? ''}}
    </h1>
    <h3>
        {{ $description ?? '' }}
    </h3>
    <p class="mt-2">
        {{ $subDescription ?? '' }}
    </p>
</section>
