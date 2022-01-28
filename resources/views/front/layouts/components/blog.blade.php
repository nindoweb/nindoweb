<section id="section7">
    <div class="BlogTitle">
        <h1>
            {{__('Nindo')}} <span style="color: red;margin-left: -14px;">B</span>log
        </h1>
        <p class="mt-2">
            {{ __('You better know what’s going on!') }}
        </p>
    </div>
    <div class="BlogItem">
        @foreach($posts as $post)
            <div class="posts">
                <img src="/storage/{{ $post->image }}" alt="{{ $post->title }}">
                <h4>
                    {{ $post->title }}
                </h4>
                <div class="heightPost">
                    {!! \Illuminate\Support\Str::words($post->content, 200) !!}
                </div>
                <a href="{{ route('posts.detail', [$post->code, $post->slug]) }}">
                    {{ __('Read more') }}
                </a>
            </div>
        @endforeach
    </div>
</section>
