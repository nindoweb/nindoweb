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
    @include('front.layouts.components.projects')
    <section id="section6" class="d-flex px-0">
        <div class="item-bg d-flex flex-column justify-content-between">
            <div class="item1 d-flex align-items-center justify-content-start">
                <div class="mx-5 my-4"><img src="./images/python.svg" width="90px" height="90px" alt="Python" title="Python"></div>
                <div>
                        <span>
                            What are you going to be through?
                        </span>
                </div>
            </div>
            <div class="item2 d-flex align-items-center justify-content-between">
                <div><div class="ball-bg"></div><span>Fill the form</span></div>
                <div><div class="ball-bg"></div><span>Contact you</span></div>
                <div><div class="ball-bg"></div><span>Design & Development</span></div>
                <div style="position: relative;overflow: hidden;" class="d-flex justify-content-end">
                    <img style="position: absolute;right: 0;bottom: -5px;right: 0;" src="./images/Rocket.svg" width="40px" height="40px" alt="Rocket" title="Rocket">
                    <a class="btn" href="/">Launch your project</a>
                </div>

            </div>
        </div>
    </section>

@endsection
