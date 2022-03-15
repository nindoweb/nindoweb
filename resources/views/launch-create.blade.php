@extends('partials.app')

@section('title', __('Title'))

@section('content')
    <main>
        <div class="container d-flex flex-column justify-content-between">
            <section id="teamHeader" class="d-flex flex-column">
                <h1>
                    Nindo <span class="singleLeter">L</span>unch
                </h1>
                <h3>
                </h3>
                <p>
                    Get to know the pros you work with.
                </p>
            </section>

            <div>
                @include('messages.message')
                @include('messages.errors')
            </div>

            <section id="LunchSection-1">
                <div class="parentLunch d-flex justify-content-between flex-column ">
                    <form action="{{ route('launch.store') }}" method="post" class="d-flex justify-content-between flex-column" >
                        @csrf
                        <input type="hidden" name="honeypot" value="">
                        <div class="d-flex flex-lg-row flex-column">
                            <fieldset class="d-flex mr-5" style="position: relative;">
                                <legend>
                                    E-Mail
                                </legend>
                                <input tabindex="1000000000" type="email" name="email">
                            </fieldset>
                            <fieldset class="d-flex " style="position: relative;">
                                <legend id=''>
                                    Your name (or company)
                                </legend>
                                <input onchange="upload()" type="text" name="company" id="">
                            </fieldset>
                        </div>
                        <div class="textAria d-flex">
                            <p>
                                Explanation
                            </p>
                            <textarea name="description" id="textAria"></textarea>
                        </div>
                        <div class="LunchPrice w-100 d-flex flex-wrap justify-content-between align-items-center">
                            <!-- https://dribbble.com/shots/10128438-Tailwind-Exploration-Status-Filter -->
                            <label class="item justify-content-center d-flex align-items-center active"><input class="d-none" type="radio" name="estimated_price" value="5,000 - 15,000 $" checked><span>5,000 - 15,000 $</span></label>
                            <label class="item justify-content-center d-flex align-items-center"><input class="d-none" type="radio" name="estimated_price" value="15,000 - 50,000 $"><span>15,000 - 50,000 $</span></label>
                            <label class="item justify-content-center d-flex align-items-center"><input class="d-none" type="radio" name="estimated_price" value="50,000 - 150,000 $"><span>50,000 - 150,000 $</span></label>
                            <label class="item justify-content-center d-flex align-items-center"><input class="d-none" type="radio" name="estimated_price" value="More than 150,000 $"><span>More than 150,000 $</span></label>
                            <!-- <input class="item text-center d-flex align-items-center active" value='5,000 - 15,000 $' readonly> -->
                            <!-- <input class="item text-center d-flex align-items-center" value='15,000 - 50,000 $' readonly> -->
                            <!-- <input class="item text-center d-flex align-items-center" value='50,000 - 150,000 $' readonly> -->
                            <!-- <input class="item text-center d-flex align-items-center" value='More than 150,000 $' readonly > -->
                        </div>
                        <div class="lunchSubmmitBtn d-flex justify-content-end">
                            <button class="d-block" type="submit">Submit</button>
                        </div>
                    </form>


                </div>

            </section>
        </div>
    </main>
@endsection
