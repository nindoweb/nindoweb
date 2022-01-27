<header class="d-flex justify-content-center">
    <nav id="navBar" class="d-flex  justify-content-between align-items-center col-12">
        <div class="navBarLeftBox d-flex justify-content-between justify-content-lg-start align-items-center">
            <div class="d-flex align-items-center">
                <span class="mx-md-3 mx-1 navItem"><img src="{{ asset('front/images/logo.svg') }}" width="65" height="65" alt="Nindoweb logo"></span>
                <span class="mx-md-3 mx-1 navItem active" onclick="changeUrl($(this).text())">Home</span>
                <span class="mx-md-3 mx-1 navItem" onclick="changeUrl($(this).text())">Portfolio</span>
                <span class="mx-md-3 mx-1 navItem" onclick="changeUrl($(this).text())">Team</span>
                <span class="mx-md-3 mx-1 navItem" onclick="changeUrl($(this).text())">
                    <a class="navItem" href="{{ route('posts.list') }}">
                        {{ __('Blog') }}
                    </a>
                </span>
            </div>
            <div style="position: relative;overflow: hidden;">
                <img style="position: absolute;right: 0;bottom: -5px;right: 0;" src="{{ asset('front/images/Rocket.svg') }}" width="40px" height="40px" alt="Nindoweb logo" title="Nindoweb logo">
                <button onclick="changeUrl($(this).text())" class="navBarLunchBtn d-lg-none d-flex align-items-center px-2 w-100">
                    {{ __('Launch your project') }}
                </button>
            </div>
        </div>
        <button onclick='goToLucnh()' style="position: relative;overflow: hidden;" type="btn" class="navBarLunchBtn d-none d-lg-flex align-items-center px-2">
            <img style="position: absolute;right: 0;bottom: -5px;right: 0;" src="{{ asset('front/images/Rocket.svg') }}" width="40px" height="40px" alt="Nindoweb logo" title="Nindoweb logo">
            {{ __('Launch your project') }}
        </button>
    </nav>
</header>
