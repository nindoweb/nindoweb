<section id="section7" class="customContainer">
    <div class="BlogTitle">
        <h1>
            Nindo <span style="color: red;margin-left: -14px;">B</span>log
        </h1>
        <!-- <h3>
            You better know what’s going on!
        </h3> -->
        <p class="mt-2">
            You better know what’s going on!
        </p>
    </div>
    <div class="BlogItem customContainer d-flex flex-wrap justify-content-between">
        @foreach($posts as $post)
            <div class="posts">
                <img class="img" src="/storage/{{ $post->image }}" alt="{{ $post->title }}">
                <h4>
                    {{ $post->title }}
                </h4>
                <p class="heightPost" >
                    {{ strip_tags(\Illuminate\Support\Str::limit($post->content, 250)) }}
                </p>
                <a class="btn from-center" href="{{ route('posts.detail', [$post->code, $post->slug]) }}">
                    {{__('Read more')}}
                </a>
                <div id="IndexBlogSection3" class="d-flex align-items-center justify-content-between">
                    <span>
                        <img class="mx-2" src="{{ asset('front/images/Pen.svg') }}" alt="{{ $post->user->name }}">
                        {{ $post->user->name }}
                    </span>
                    <span>{{ $post->published_at }}</span>
                </div>
            </div>
        @endforeach
    </div>
</section>
