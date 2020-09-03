<div class="p-3 border border-primary rounded-lg">
    <form method="POST" action="{{route('tweets.store',[],false)}}">
        @csrf

        <header>
            <textarea
                name="body"
                class="w-100"
                rows="3"
                placeholder="What's up doc?"
                autofocus
            ></textarea>

            @error('body')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </header>

        <hr class="my-2 @error('body') border border-danger @enderror">

        <footer class="d-flex justify-content-end">
            <img
                src="{{ asset(auth()->user()->avatar) }}"
                alt="{{ auth()->user()->username }}"
                class="rounded-circle mr-3"
                width="50"
                height="50"
            >

            <button
                type="submit"
                class="btn btn-primary"
            >
                Tweet-it!
            </button>
        </footer>
    </form>
</div>
