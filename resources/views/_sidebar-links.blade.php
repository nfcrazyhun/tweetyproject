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
                @php ($notif_count = auth()->user()->unreadNotifications()->count())
                @if( $notif_count > 0)
                    <span class="btn btn-outline-primary">
                    {{ $notif_count }}
                    </span>
                @endif
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
