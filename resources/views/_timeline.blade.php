<div class="mt-4 border border-secondary rounded-lg">
    @forelse ($tweets as $tweet)
        @include('_tweet')
    @empty
        <p class="m-4">No tweets yet.</p>
    @endforelse

    <div class="d-flex justify-content-center">
        {{ $tweets->links() }}
    </div>
</div>
