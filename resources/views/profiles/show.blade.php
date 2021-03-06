<x-app>
    <header class="mb-5">
        <div class="">
            <img src="{{ $user->banner }}"
                 alt=""
                 class="img-fluid rounded mb-2 "
            >

            <img src="{{ $user->avatar }}"
                 alt=""
                 class="rounded mr-2 position-absolute"
                 style="left: 25%; max-width: 150px"
            >
        </div>
        <div class="d-flex justify-content-between align-items-center mb-2">
            <div style="max-width: 270px">
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="d-flex">
                @can ('edit', $user)
                    <a href="{{ $user->path('edit') }}"
                       class="rounded-pill border border-gray-300 py-2 px-4 text-black text-xs mr-2"
                    >
                        Edit Profile
                    </a>
                @endcan

                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        @if( $user->description )
            <p class="text-sm">
                {{ $user->description }}
            </p>
        @endif


    </header>

    @include ('_timeline', [
        'tweets' => $tweets
    ])
</x-app>
