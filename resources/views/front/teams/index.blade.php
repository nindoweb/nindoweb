@extends('front.layouts.app')
@section('title', __('Team'))

@section('content')

    @include('front.layouts.path', [
        'redText' => 'T',
        'regularText' => 'eam',
        'description' => 'Get to know the pros you work with.',
        //'subDescription' => 'Design, develop, test, launch just in a snap.'
    ])

    <section id="teamSection1">
        <div class="d-flex justify-content-between align-items-center">
            @foreach($users as $user)
                <div class="item">
                <div class="person1" style="background-image: url({{ '/storage/'.$user->avatar }});">
                </div>
                <p class="name mt-3 mb-1">
                    {{ $user->name }}
                </p>
                <p class="title">
                    {{ $user->team->name }}
                </p>
            </div>
            @endforeach
        </div>
    </section>


    <section id="teamSection1">
        <div class="d-flex flex-lg-row flex-column justify-content-between align-items-center">
            <div class="item">
                <div class="person1">

                </div>
                <p class="name mt-3 mb-1">
                    khashayar toubi
                </p>
                <div class="d-flex">
                        <span class="title">
                            Front-End Developer
                        </span>
                    <a href="/"><img class="mx-3" src="./images/LinkedIn.svg" height="20" width="20" alt=""></a>
                </div>

            </div>
            <div class="item">
                <div class="person2">

                </div>
                <p class="name mt-3 mb-1">
                    mohsen bagheri
                </p>
                <div class="d-flex">
                        <span class="title">
                            Front-End Developer
                        </span>
                    <a href="/"><img class="mx-3" src="./images/LinkedIn.svg" height="20" width="20" alt=""></a>
                </div>
            </div>
            <div class="item">
                <div class="person3">

                </div>
                <p class="name mt-3 mb-1">
                    mohammad ahmadi
                </p>
                <div class="d-flex">
                        <span class="title">
                            Front-End Developer
                        </span>
                    <a href="/"><img class="mx-3" src="./images/LinkedIn.svg" height="20" width="20" alt=""></a>
                </div>
            </div>
        </div>
    </section>

@endsection
