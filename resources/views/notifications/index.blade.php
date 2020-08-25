<x-app>
    <h2 class="font-bold text-lg">Notifications</h2>
    <ul class="list-unstyled">
        @forelse( $notifications as $notification )
            <li class="p-3 border border-primary rounded {{ $loop->last ? '' : 'border-bottom-0' }}">
                @switch($notification->type)
                    @case('App\Notifications\UserMentioned')
                    <a href="{{ route('tweets.show', $notification->data['id'] ) }}">
                        You were mentioned in Tweet:
                        <blockquote class="font-italic text-secondary">{{ $notification->data['body'] }}</blockquote>
                    </a>
                    @break

                    @case('App\Notifications\UserFollowed')
                    <a href="{{ route('profiles.show', $notification->data['username'] ) }}">
                        You were followed by {{ '@' . $notification->data['username'] }}
                    </a>
                    <span class="text-secondary">
                        &#32;-&nbsp;{{$notification->created_at->diffForHumans()}}
                    </span>
                    @break
                @endswitch
            </li>
        @empty
            <li>No Notifications</li>
        @endforelse
    </ul>
    {{ $notifications->links() }}
</x-app>
