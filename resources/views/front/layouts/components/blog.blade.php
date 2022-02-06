<section id="homesection7" class="container-custom">
    <div class="BlogTitle">
        <h1>
            {{__('Nindo')}} <span style="color: red;margin-left: -14px;">B</span>log
        </h1>
        <!-- <h3>
            You better know what’s going on!
        </h3> -->
        <p class="mt-2">
            {{ __('You better know what’s going on!') }}
        </p>
    </div>
    <div class="BlogItem d-flex flex-md-row flex-column align-items-md-start align-items-center justify-content-between">
        @foreach($posts as $post)
            <div class="posts">
            <img class="img" src="/storage/{{ $post->image }}" alt="{{ $post->title }}">
            <h4>
                {{ $post->title }}
            </h4>
            <p class="heightPost">
                {{ strip_tags(\Illuminate\Support\Str::words($post->content)) }}
            </p>
            <a  class="btn from-left mt-4 mb-3" href="{{ route('posts.detail',[$post->code, $post->slug]) }}">
                {{ __('Read more') }}
            </a>
            <div id="IndexBlogSection3" class="d-flex align-items-center justify-content-between">
                <span>
                    <img class="mx-2" src="{{ asset('front/images/Pen.svg') }}" width="15px" height="15px" alt="{{ $post->user->name }}">
                    {{ $post->user->name }}
                </span>
                <span>{{ $post->published_at }}</span>
            </div>
        </div>
        @endforeach
    </div>
</section>
