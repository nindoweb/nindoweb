<section id="section3" class="d-flex justify-content-center">
    <p class="col-11">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type.
    </p>
</section>
<section id="section4" class="d-flex flex-sm-row flex-column align-items-center justify-content-center my-5 logo">
    @foreach($technologies as $technology)
        <div class="mx-5 my-4"><img src="/storage/{{ $technology->image }}" width="70px" height="70px" alt="Python" title="Python"></div>
    @endforeach

</section>
