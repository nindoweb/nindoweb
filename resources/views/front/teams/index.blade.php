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
            <div class="item">
                <div class="person1">

                </div>
                <p class="name mt-3 mb-1">
                    khashayar toubi
                </p>
                <p class="title">
                    Front-End Developer
                </p>
            </div>
            <div class="item">
                <div class="person2">

                </div>
                <p class="name mt-3 mb-1">
                    mohsen bagheri
                </p>
                <p class="title">
                    Back-End Developer
                </p>
            </div>
            <div class="item">
                <div class="person3">

                </div>
                <p class="name mt-3 mb-1">
                    mohammad ahmadi
                </p>
                <p class="title">
                    UX/UI Designer
                </p>
            </div>
        </div>
    </section>
@endsection
