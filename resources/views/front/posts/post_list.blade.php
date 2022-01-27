@extends('front.layouts.app')

@section('title', __('Post List'))

@section('content')
    @include('front.layouts.path', [
        'redText' => 'B',
        'regularText' => 'log',
        'description' => 'You better know what’s going on!',
        //'subDescription' => 'Design, develop, test, launch just in a snap.'
    ])

    <section id="section2Blog">
        <div class="d-flex flex-md-row flex-wrap justify-content-md-between justify-content-center">
            @foreach($posts as $post)
                <div class="blog1 d-flex flex-column">
                    <div class="item1">
                        <img class="post-card" src="/storage/{{ $post->image }}">
                    </div>
                    <div class="item2 d-flex flex-column justify-content-end">
                        <div>
                            <span style="font-size: 30px;font-weight: bold;">
                                {{ $post->title }}
                            </span>
                        </div>
                        <div class="post-short-content">
                            {!! \Illuminate\Support\Str::words($post->content, 150) !!}
                        </div>
                        <div>
                            <a class="read-more" href="{{ route('posts.detail', [$post->code, $post->slug]) }}">
                                {{ __('Read more') }}
                            </a>
                        </div>
                        <div class="lastChild d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="avatar-minimal" src="/storage/{{ $post->user->avatar }}" width="10" height="10" alt="">
                                <span style="font-size: 14px;font-weight: bold;">{{ $post->user->name }}</span>
                            </div>
                            <div>
                                <span style="font-size: 14px;font-weight: bold;">
                                    {{ $post->published_at }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
