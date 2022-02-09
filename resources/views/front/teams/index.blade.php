@extends('front.layouts.app')
@section('title', __('Team'))

@section('content')

    <div class="container-custom d-flex  flex-column justify-content-between align-items-center">
        @include('front.layouts.path', [
            'redText' => 'T',
            'regularText' => 'eam',
            'description' => 'Get to know the pros you work with.',
            //'subDescription' => 'Design, develop, test, launch just in a snap.'
        ])

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

@endsection
