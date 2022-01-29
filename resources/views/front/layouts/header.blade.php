<header class="d-flex justify-content-center">
    <nav id="navBar" class="d-flex  justify-content-between align-items-center col-12">
        <div class="navBarLeftBox d-flex justify-content-between justify-content-lg-start align-items-center">
            <div class="d-flex align-items-center">
                <span class="mx-md-3 mx-1 navItem"><img src="{{ asset('front/images/logo.svg') }}" width="65" height="65" alt="Nindoweb logo"></span>
                <span class="mx-md-3 mx-1 navItem @if(\Illuminate\Support\Facades\Request::route()->getName() == 'home') active @endif " onclick="changeUrl($(this).text())">
                    <a class="navItem" href="/">
                        {{__('Home')}}
                    </a>
                </span>
                <span class="mx-md-3 mx-1 navItem @if(\Illuminate\Support\Facades\Request::route()->getName() == 'teams.index') active @endif" onclick="changeUrl($(this).text())">
                    {{ __('Team') }}
                </span>
                <span class="mx-md-3 mx-1 navItem @if(\Illuminate\Support\Facades\Request::route()->getName() == 'posts.list') active @endif onclick="changeUrl($(this).text())">
                    <a class="navItem" href="{{ route('posts.list') }}">
                        {{ __('Blog') }}
                    </a>
                </span>
            </div>
            <div style="position: relative;overflow: hidden;">
                <img style="position: absolute;right: 0;bottom: -5px;right: 0;" src="{{ asset('front/images/Rocket.svg') }}" width="40px" height="40px" alt="Nindoweb logo" title="Nindoweb logo">
                <a href="{{ route('launch.show') }}" class="navBarLunchBtn d-lg-none d-flex align-items-center px-2 w-100">
                    {{ __('Launch your project') }}
                </a>
            </div>
        </div>
        <a href='{{ route('launch.show') }}' style="position: relative;overflow: hidden;" class="navBarLunchBtn d-none d-lg-flex align-items-center px-2">
            <img style="position: absolute;right: 0;bottom: -5px;right: 0;" src="{{ asset('front/images/Rocket.svg') }}" width="40px" height="40px" alt="Nindoweb logo" title="Nindoweb logo">
            {{ __('Launch your project') }}
        </a>
    </nav>
</header>
