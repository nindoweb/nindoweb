@extends('front.layouts.app')

@section('title', config('app.name'))

@section('content')

    <main>
        @include('front.layouts.path', [
            'redText' => 'W',
            'regularText' => 'eb',
            'description' => 'means you are in good hands!',
            'subDescription' => 'Design, develop, test, launch just in a snap.'
        ])
        @include('front.layouts.components.services')
        @include('front.layouts.components.ordering_process')
        @include('front.layouts.components.blog')
    </main>
@endsection
