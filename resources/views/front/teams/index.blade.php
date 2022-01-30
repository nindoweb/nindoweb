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
@endsection
