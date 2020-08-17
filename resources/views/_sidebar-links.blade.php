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
            href="/explore"
        >
            Explore
        </a>
    </li>

    @auth
        <li>
{{--            <a--}}
{{--                class="font-bold text-lg mb-4 block"--}}
{{--                href="{{ auth()->user()->path() }}"--}}
{{--            >--}}
{{--                Profile--}}
{{--            </a>--}}
        </li>

        <li>
            <form method="POST" action="/logout">
                @csrf

                <button class="btn btn-outline-primary btn-sm">Logout</button>
            </form>
        </li>
    @endauth
</ul>
