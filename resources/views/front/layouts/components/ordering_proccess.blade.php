<section id="section6" class="d-flex px-0">
    <div class="item-bg d-lg-flex d-none flex-column justify-content-between">
        <div class="customContainer item1 d-flex align-items-center justify-content-start">
            <div class="mx-3 my-4"><img src="{{ asset('front/images/Maze.svg') }}" width="90px" height="90px" alt="Python" title="Python"></div>
            <div>
                <span>
                    {{ __('What are you going to be through?') }}
                </span>
            </div>
        </div>
        <div class="customContainer item2 d-flex align-items-center justify-content-between">
            <div><div class="ball-bg"></div><span>{{__('Fill the form')}}</span></div>
            <div><div class="ball-bg"></div><span>{{__('Contact you')}}</span></div>
            <div><div class="ball-bg"></div><span>{{__('Design & Development')}}</span></div>
            <div style="position: relative;overflow: hidden;" class="d-flex justify-content-end">
                <img style="position: absolute;right: 0;bottom: -5px;z-index: 100000000;" src="{{ asset('front/images/Rocket.svg') }}" width="40px" height="40px" alt="Rocket" title="Rocket">
                <a class="btn" href="{{ route('launch.show') }}">{{__('Launch your project')}}</a>
            </div>

        </div>
    </div>
    <div class="item-bg d-flex d-lg-none flex-column justify-content-between">
        <div class="item1 d-flex align-items-center justify-content-start">
            <div>
                <span>
                    {{__('What are you going to be through?')}}
                </span>
            </div>
            <div class="mx-3 my-4"><img src="{{ asset('front/images/Maze.svg') }}" width="90px" height="90px" alt="Python" title="Python"></div>

        </div>
        <div class="item2 d-flex align-items-start justify-content-between flex-column">
            <div><div class="ball-bg"></div><span>Fill the form</span></div>
            <div><div class="ball-bg"></div><span>Contact you</span></div>
            <div><div class="ball-bg"></div><span>Design & Development</span></div>
            <div style="position: relative;overflow: hidden;" class="d-flex justify-content-end w-100">
                <img style="position: absolute;right: 0;bottom: -5px;right: 0;" src="{{ asset('front/images/Rocket.svg') }}" width="40px" height="40px" alt="Rocket" title="Rocket">
                <a class="btn" href="/">{{ __('Launch your project') }}</a>
            </div>

        </div>
    </div>
</section>
