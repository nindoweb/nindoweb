<section id="section4" class="d-flex flex-sm-row flex-column align-items-center justify-content-center my-5 logo">
    @foreach($technologies as $technology)
        <div class="mx-5 my-4">
            <img src="/storage/{{ $technology->image }}" width="70px" height="70px" alt="{{ $technology->name }}" title="{{ $technology->name }}">
        </div>
    @endforeach
</section>
