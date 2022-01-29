<dropdown-trigger class="h-9 flex items-center">
    @isset($user->email)
        <img
        @if(is_null($user->avatar))
            src="https://secure.gravatar.com/avatar/{{ md5(\Illuminate\Support\Str::lower($user->email)) }}?size=512"
        @else
            src="/storage/{{ $user->avatar }}"
        @endif
            class="rounded-full w-8 h-8 mr-3"
        />
    @endisset

    <span class="text-90">
        {{ $user->name ?? $user->email ?? __('Nova User') }}
    </span>
</dropdown-trigger>

<dropdown-menu slot="menu" width="200" direction="rtl">
    <ul class="list-reset">
        <li>
            <a href="{{ route('nova.logout') }}" class="block no-underline text-90 hover:bg-30 p-3">
                {{ __('Logout') }}
            </a>
        </li>
    </ul>
</dropdown-menu>
