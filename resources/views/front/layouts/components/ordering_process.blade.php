<section id="homesection6">
    <div class="item-bg co d-lg-flex d-none flex-column justify-content-between">
        <div class="item1 container-custom d-flex align-items-center justify-content-start mb-5">
            <div class="mx-3 my-4">
                <img src="{{ asset('front/images/Maze.svg') }}"  alt="{{ __('Ordering process') }}" title="{{ __('Ordering process') }}">
            </div>
            <div>
                <span>
                    {{ __('What are you going to be through?') }}
                </span>
            </div>
        </div>
        <div class="item2 container-custom d-flex align-items-center justify-content-between">
            <div><div class="ball-bg"></div><span>{{__('Fill the form')}}</span></div>
            <div><div class="ball-bg"></div><span>{{__('Contact you')}}</span></div>
            <div><div class="ball-bg"></div><span>{{__('Design & Development')}}</span></div>
            <div style="position: relative;overflow: hidden;" class="d-flex justify-content-end">
                <img style="position: absolute;right: 0;bottom: -5px;z-index: 100000000;" src="{{ asset('front/images/Rocket.svg') }}" width="40px" height="40px" alt="Rocket" title="Rocket">
                <a class="btn" href="{{ route('launch.show') }}">{{__('Launch your project')}}</a>
            </div>

        </div>
    </div>
    <div class="item-bg container-custom d-flex d-lg-none flex-column justify-content-between">
        <div class="item1 mb-5 d-flex align-items-center justify-content-lg-start justify-content-between">
            <div>
                <span>
                    {{__('What are you going to be through?')}}
                </span>
            </div>
            <div class="mx-0 my-4"><img src="{{ asset('front/images/Maze.svg') }}" width="90px" height="90px" alt="Python" title="Python"></div>

        </div>
        <div class="item2 d-flex align-items-start justify-content-between flex-column">
            <div><div class="ball-bg"></div><span>{{__('Fill the form')}}</span></div>
            <div><div class="ball-bg"></div><span>{{__('Contact you')}}</span></div>
            <div><div class="ball-bg"></div><span>{{__('Design & Development')}}</span></div>
            <div style="position: relative;overflow: hidden;" class="d-flex justify-content-end align-items-center w-100">
                <img style="position: absolute;right: 0;bottom: -5px;right: 0;z-index:  1000;" src="{{ asset('front/images/Rocket.svg') }}" width="40px" height="40px" alt="{{__('Launch your project')}}" title="{{__('Launch your project')}}">
                <a class="btn" href="{{ route('launch.show') }}">{{__('Launch your project')}}</a>
            </div>

        </div>
    </div>
</section>
