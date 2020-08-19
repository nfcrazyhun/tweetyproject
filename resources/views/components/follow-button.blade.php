@auth
    @unless (auth()->user()->is($user))
        <form method="POST"
              action="{{ route('follow', $user->username) }}"
        >
            @csrf

            <button type="submit"
                    class="btn btn-primary"
            >
                {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
            </button>
        </form>
    @endunless
@endauth
