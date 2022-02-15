<footer>
    <section id="footer">
        <div class="footer-bg d-flex justify-content-center align-items-center">
            <div class="d-flex flex-column">
                <div>
                    <span style="font-size: 35px;font-weight: bold;">
                        {{__('Let’s')}}
                    </span>
                </div>
                <div style="position: relative;overflow: hidden;" class="foterLunch d-flex justify-content-start">
                    <img style="position: absolute;right: 0;bottom: -5px;right: 0;" src="{{ asset('front/images/Rocket2.svg') }}" width="60px" height="50px" alt="{{ __('Launch your project') }}" title="{{ __('Launch your project') }}">
                    <a class="btn" href="{{ route('launch.create') }}">{{__('Launch your project')}}</a>
                </div>
                <div>
                    <span style="font-size: 18px;font-weight: bold;">
                        {{ __('We’ll be with you until the END.') }}
                    </span>
                </div>
            </div>
        </div>
    </section>

</footer>
