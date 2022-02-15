@extends('front.layouts.app')

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
        @include('front.layouts.components.services')
        @include('front.layouts.components.ordering_process')
        @include('front.layouts.components.blog')
    </main>
@endsection
