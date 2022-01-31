<header class="d-flex justify-content-center">
    <nav id="navBar" class="d-flex  justify-content-between align-items-center col-12">
        <div class="navBarLeftBox d-flex justify-content-between justify-content-lg-start align-items-center">
            <div class="d-flex align-items-center">
                <a href="/" class="mx-md-3 mx-1 mb-3 navItem"><img src="{{ asset('front/images/NindoWeb-Logo-Whitebackground.svg') }}" width="50" height="50" alt="NindoWeb"></a>
                <a href="{{ route('home') }}" class="mx-md-3 mx-1 navItem @if(\Illuminate\Support\Facades\Request::route()->getName() == 'home') active @endif" onclick="changeUrl($(this).text())">{{__('Home')}}</a>
                <a href="{{ route('teams.index') }}" class="mx-md-3 mx-1 navItem @if(\Illuminate\Support\Facades\Request::route()->getName() == 'teams.index') active @endif" onclick="changeUrl($(this).text())">{{__('Team')}}</a>
                <a href="{{ route('posts.list') }}" class="mx-md-3 mx-1 navItem @if(\Illuminate\Support\Facades\Request::route()->getName() == 'posts.list') active @endif" onclick="changeUrl($(this).text())">{{__('Blog')}}</a>
            </div>
            <div style="position: relative;overflow: hidden;">
                <img style="position: absolute;right: 0;bottom: -5px;right: 0;" src="{{ asset('front/images/Rocket.svg') }}" width="40px" height="40px" alt="Rocket" title="Rocket">
                <a href="{{ route('launch.show') }}" onclick="changeUrl($(this).text())" class="navBarLunchBtn d-lg-none d-flex align-items-center px-2 w-100">
                    {{ __('Launch your project') }}
                </a>
            </div>
        </div>
        <a href="{{ route('launch.show') }}" onclick='goToLucnh()' style="position: relative;overflow: hidden;" type="btn" class="navBarLunchBtn d-none d-lg-flex align-items-center px-2">
            <img style="position: absolute;right: 0;bottom: -5px;right: 0;" src="{{ asset('front/images/Rocket.svg') }}" width="40px" height="40px" alt="Rocket" title="Rocket">
            {{ __('Launch your project') }}
        </a>
    </nav>
</header>
