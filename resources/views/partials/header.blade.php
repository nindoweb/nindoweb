<header class="navMain container d-flex justify-content-center px-lg-0 px-1">
    <nav id="navBar" class="d-flex justify-content-between align-items-center col-12">
        <div class="item1 d-flex justify-content-xl-start justify-content-between align-items-center px-0">
            <div className="d-flex col-6 align-items-center">
                <img src="{{ asset('front/images/NindoWebLogo-WBG.svg') }}" height="50px" width="50px" alt="NindoWeb">
                <a class="mx-1 mx-lg-2 @if(\Illuminate\Support\Facades\Request::route()->getName() == 'home') active @endif" href="{{ route('home') }}">{{__('Home')}}</a>
                <a class="mx-1 mx-lg-2 @if(\Illuminate\Support\Facades\Request::route()->getName() == 'teams.index') active @endif" href="{{ route('teams.index') }}">{{__('Team')}}</a>
                <a class="mx-1 mx-lg-2 @if(\Illuminate\Support\Facades\Request::route()->getName() == 'posts.list') active @endif" href="{{ route('posts.list') }}">{{__('Blog')}}</a>
              <a class="mx-1 mx-lg-2 @if(\Illuminate\Support\Facades\Request::route()->getName() == 'hiring.create') active @endif" href="{{ route('hiring.create') }}">{{__('Hiring')}}</a>
            </div>
            <div class="item2 d-xl-none d-flex align-items-center px-3">
                <img src="{{ asset('front/images/Rocket.svg') }}" height="40px" width="40px" alt="NindoWeb">
                <a href="{{ route('launch.create') }}">{{__('Launch project')}}</a>
            </div>
        </div>
        <div class="item2 d-xl-flex d-none align-items-center px-3">
            <img src="{{ asset('front/images/Rocket.svg') }}" height="42px" width="42px" alt="NindoWeb">
            <a href="{{ route('launch.create') }}">{{__('Launch your project')}}</a>
        </div>
    </nav>
</header>
