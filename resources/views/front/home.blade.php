@extends('front.layouts.app')

@section('title', __('Nindo web'))

@section('content')
    @include('front.layouts.path', [
        'redText' => 'W',
        'regularText' => 'eb',
        'description' => 'means you are in good hands!',
        'subDescription' => 'Design, develop, test, launch just in a snap.'
    ])

    @include('front.layouts.components.services')
    @include('front.layouts.components.technologies')
    @include('front.layouts.components.ordering_proccess')
    @include('front.layouts.components.blog')

@endsection
