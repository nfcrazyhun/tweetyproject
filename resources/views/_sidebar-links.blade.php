<ul class="list-unstyled h4 font-weight-bold">
    <li class="mb-3">
        <a
            class="text-decoration-none text-dark"
            href="{{ route('tweets.index') }}"
        >
            Home
        </a>
    </li>

    <li class="mb-3">
        <a
            class="text-decoration-none text-dark"
            href="{{ route('explore') }}"
        >
            Explore
        </a>
    </li>

    @auth
        <li class="mb-3">
            <a
                class="text-decoration-none text-dark"
                href="{{ auth()->user()->path() }}"
            >
                Profile
            </a>
        </li>

        <li class="mb-3">
            <a
                class="text-decoration-none text-dark"
                href="{{ auth()->user()->path('notifications') }}"
            >
                Notifications
{{--                @if(auth()->user()->unreadNotifications()->count())--}}
{{--                    <span style="width:25px" class="btn btn btn-outline-success">--}}
{{--                    {{ auth()->user()->unreadNotifications()->count() }}--}}
{{--                    </span>--}}
{{--                @endif--}}
            </a>
        </li>

        <li>
            <form method="POST" action="/logout">
                @csrf

                <button class="btn btn-outline-primary btn-sm">Logout</button>
            </form>
        </li>
    @endauth
</ul>
