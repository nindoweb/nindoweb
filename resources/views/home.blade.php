@extends('partials.app')

@section('title', config('app.name'))

@section('content')

    <main>
        <section id="teamHeader" class="d-flex flex-column container">
            <h1>
                Nindo <span style="color: red;margin-left: -20px;">W</span>eb
            </h1>
            <h3 class="mt-1 mb-3">
                Web development services agency
            </h3>
            <p class="mt-2">
                Design, develope, test, launch just in a snap.
            </p>
        </section>

        <!--Services-->
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



        <!--Order processing-->
        <section id="homesection6">
            <div class="item-bg d-lg-flex d-none flex-column justify-content-between">
                <div class="item1 container d-flex align-items-center justify-content-start mb-5">
                    <div class="mx-0 my-4 col-2"><img src="{{ asset('front/images/Maze.svg') }}"  alt="NindoWeb" title="NindoWeb"></div>
                    <div>
                <span>
                    What are you going to be through :
                </span>
                    </div>
                </div>
                <div class="item2 container d-flex align-items-center justify-content-between">
                    <div><div class="ball-bg"></div><span>Fill the form</span></div>
                    <div><div class="ball-bg"></div><span>Contact you</span></div>
                    <div><div class="ball-bg"></div><span>Design & Development</span></div>
                    <div style="position: relative;overflow: hidden;" class="d-flex justify-content-end align-items-center">
                        <img style="position: absolute;right: 0;bottom: -5px;z-index: 100000000;" src="{{ asset('front/images/Rocket.svg') }}" width="45px" height="45px" alt="NindoWeb" title="NindoWeb">
                        <a class="btn py-0 d-flex align-items-center" href="{{ route('launch.create') }}">Launch your project</a>
                    </div>

                </div>
            </div>
            <div class="item-bg  d-flex d-lg-none flex-column justify-content-between">
                <div class="item1 container mb-5 d-flex align-items-center justify-content-lg-start justify-content-between">
                    <div>
                <span>
                    What are you going to be through?
                </span>
                    </div>
                    <div class="mx-0 my-4"><img src="{{ asset('front/images/Maze.svg') }}" width="90px" height="90px" alt="NindoWeb" title="NindoWeb"></div>

                </div>
                <div class="item2 container d-flex align-items-start justify-content-between flex-column">
                    <div><div class="ball-bg"></div><span>Fill the form</span></div>
                    <div><div class="ball-bg"></div><span>Contact you</span></div>
                    <div><div class="ball-bg"></div><span>Design & Development</span></div>
                    <div style="position: relative;overflow: hidden;" class="d-flex justify-content-end align-items-center">
                        <img style="position: absolute;right: 0;bottom: -5px;right: 0;z-index:  1000;" src="{{ asset('front/images/Rocket.svg') }}" width="80px" height="80px" alt="NindoWeb" title="NindoWeb">
                        <a class="btn" href="/">Launch your project</a>
                    </div>

                </div>
            </div>
        </section>


        <!--Blog-->
        <section id="homesection7" class="container">
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

    </main>
@endsection
