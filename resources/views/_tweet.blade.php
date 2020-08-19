<div class="d-flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
    <div class="mr-2">
        <a href="{{ $tweet->user->path() }}">
            <img
                src="{{ $tweet->user->avatar }}"
                alt=""
                class="rounded-full mr-2"
                width="50"
                height="50"
            >
        </a>
    </div>

    <div>
        <div class="d-flex">

        <h5 class="font-bold mb-2">
            <a href="{{ $tweet->user->path() }}">
                {{ $tweet->user->name }}
            </a>
        </h5>
        <span class="text-secondary">
            &#32;-&nbsp;{{$tweet->created_at->diffForHumans()}}
        </span>
        </div>

        <p class="text-sm mb-3">
            {{ $tweet->body }}
        </p>

        @auth
            <x-like-buttons :tweet="$tweet" />
        @endauth
    </div>
</div>
