@extends('partials.app')

@section('title', __('Title'))

@section('content')

    <main>

        <div class="container d-flex flex-column justify-content-between">
            <section id="teamHeader" class="d-flex flex-column">
                <h1>
                    You are about to <span style="color: red;margin-left: -5px;">L</span>AUNCH
                </h1>
                <h3 class="mt-1 mb-3">
                    <!-- You better know what’s going on! -->
                </h3>
                <p class="mt-2">
                    Get to know the pros you work with.
                </p>
            </section>
            <div class="container">
                @include('messages.message')
                @include('messages.errors')
            </div>
            <section id="LunchSection-1">



                <div class="parentLunch d-flex justify-content-between flex-column ">
                    <form action="{{ route('launch.store') }}" method="post">
                        @csrf
                        <div class="d-flex justify-content-between flex-column flex-lg-row">
                            <fieldset class="d-flex  mr-5" style="position: relative;">
                                <legend>
                                    {{__('E-Mail')}}
                                </legend>
                                <input  type="email" name="email" value="{{ old('email') }}" id="">
                            </fieldset>
                            <fieldset class="d-flex mt-5 mt-lg-0 justify-content-end" style="position: relative;">
                                <legend id='userName'>
                                    {{__('Your name (or company)')}}
                                </legend>
                                <input  type="text" name="company" value="{{ old('company') }}" id="">
                            </fieldset>
                        </div>
                        <input name="honeypot" value="{{null}}" type="hidden">
                        <div class="textAria d-flex justify-content-end">
                            <p>
                                {{__('Your name (or company)')}}
                            </p>
                            <textarea name="description">{{ old('description') }}</textarea>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="d-block py-2" type="submit">{{__('Submit')}}</button>
                        </div>
                    </form>
                </div>

            </section>
        </div>

    </main>
@endsection
