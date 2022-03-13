@extends('partials.app')
@section('title', __('Team'))

@section('content')
    <main>
        <div class="container d-flex flex-column justify-content-between align-items-center">
            <section id="teamHeader" class="d-flex flex-column">
                <h1>
                    Nindo <span style="color: red;margin-left: -20px;">T</span>eam
                </h1>
                <h3 class="mt-1 mb-3">
                    <!-- You better know what’s going on! -->
                </h3>
                <p class="mt-2">
                    Get to know the pros you work with.
                </p>
            </section>
            <section id="teamSection1">
                <div class="d-flex flex-lg-row flex-column justify-content-between align-items-center">
                    @foreach($users as $user)
                        <div class="item">
                        <div class="person1">
                            <img src="/storage/{{ $user->avatar }}" alt="{{ $user->name }}">
                        </div>
                        <p class="name mt-3 mb-1">
                            {{ $user->name }}
                        </p>
                        <div class="d-flex">
                            <span class="title">
                                {{ $user->team->name }}
                            </span>
                            <a href="{{ $user->linkedin }}">
                                <img class="mx-3" src="{{ asset('front/images/LinkedIn.svg') }}" height="20" width="20" alt="{{ $user->name }}">
                            </a>
                        </div>

                    </div>
                    @endforeach
                </div>
            </section>
        </div>
    </main>
@endsection
