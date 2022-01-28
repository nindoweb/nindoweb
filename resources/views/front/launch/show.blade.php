@extends('front.layouts.app')

@section('title', __('Title'))

@section('content')
    <section id="section1" class="d-flex flex-column px-5">
        <h1 class="maniTitle d-flex">
            <div class="colorTitle">{{__('You are about to')}} <span style="color: red;">{{__('LAUNCH')}}</span></div>
        </h1>
        <h3>
            {{ __('means you are in good hands!') }}
        </h3>
        <p class="mt-2">
            {{ __('Design, develop, test, launch just in a snap.') }}
        </p>
    </section>

    <div class="col-sm-8">
        @include('messages.message')
        @include('messages.errors')
    </div>

    <section id="LunchSection-1" class="px-5">

        <div class="d-flex justify-content-between flex-column">
            <form action="{{ route('launch.store') }}" method="post">
                @csrf
                <div class="d-flex justify-content-between flex-column flex-lg-row" >
                    <div>
                        <fieldset class="d-flex mr-5" style="position: relative;">
                            <legend>
                                {{ __('E-Mail') }}
                            </legend>
                            <input  type="email" name="email">

                        </fieldset>
                    </div>

                    <div>
                        <fieldset class="d-flex " style="position: relative;">
                            <legend>
                                {{ __('Your name (or company)') }}
                            </legend>
                            <input  type="text" name="company">
                        </fieldset>
                    </div>
                </div>

                <div class="textAria d-flex justify-content-end">
                    <p>
                        {{ __('Description') }}
                    </p>
                    <textarea name="description"></textarea>
                </div>
                <input type="hidden" name="honeypot" value="{{null}}">
                <div class="d-flex justify-content-end">
                    <button class="d-block py-2" type="submit">{{ __('Submit') }}</button>
                </div>
            </form>
        </div>

    </section>
@endsection
