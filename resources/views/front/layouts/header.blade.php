<header class="container-custom d-flex justify-content-center">
    <nav id="navBar" class="d-flex justify-content-between align-items-center col-12">
        <div class="navBarLeftBox d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <a href="{{ route('home') }}" class="mx-md-3 mx-2 mb-3 navItem">
                    <img src="{{ asset('front/images/NindoWebLogo.svg') }}" width="50" height="50" alt="{{ config('app.name') }}">
                </a>
                <a href="{{ route('home') }}" class="mx-md-3 mx-2 navItem @if(\Illuminate\Support\Facades\Request::route()->getName() == 'home') active @endif">{{__('Home')}}</a>
                <a href="{{ route('teams.index') }}" class="mx-md-3 mx-2 navItem @if(\Illuminate\Support\Facades\Request::route()->getName() == 'teams.index') active @endif">{{__('Team')}}</a>
                <a href="{{ route('posts.list') }}" class="mx-md-3 mx-2 navItem @if(\Illuminate\Support\Facades\Request::route()->getName() == 'posts.list') active @endif">{{__('Blog')}}</a>
            </div>
            <div style="position: relative;overflow: hidden;">
                <img style="position: absolute;right: 0;bottom: -5px;right: 0;" src="{{ asset('front/images/Rocket.svg') }}" width="40px" height="40px" alt="{{__('Launch your project')}}" title="Rocket">
                <a href="{{ route('launch.show') }}" onclick="changeUrl($(this).text())" class="navBarLunchBtn d-lg-none d-flex align-items-center px-1 w-100">
                    {{__('Launch your project')}}
                </a>
            </div>
        </div>
        <div>
            <a href="{{ route('launch.show') }}" onclick='goToLucnh()' style="position: relative;overflow: hidden;" type="btn" class="navBarLunchBtn d-none d-lg-flex align-items-center px-2">
                <img style="position: absolute;right: 0;bottom: -5px;right: 0;" src="{{ asset('front/images/Rocket.svg') }}" width="40px" height="40px" alt="Rocket" title="{{__('Launch your project')}}">
                {{__('Launch your project')}}
            </a>
        </div>
    </nav>
</header>
