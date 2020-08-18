<div class="p-3 border border-info rounded-lg">
    <h3 class="font-bold text-xl mb-4">Following</h3>

    <ul class="list-unstyled">
        @forelse (auth()->user()->follows as $user)
            <li class="{{ $loop->last ? '' : 'mb-3' }}">
                <div>
                    <a href="{{ $user->path() }}" class="flex items-center text-sm">
                        <img
                            src="{{ $user->avatar }}"
                            alt=""
                            class="mr-1 rounded-circle"
                            width="40"
                            height="40"
                        >

                        {{ $user->name }}
                    </a>
                </div>
            </li>
        @empty
        <li class="my-4">No friends yet!</li>
        @endforelse
    </ul>
</div>
