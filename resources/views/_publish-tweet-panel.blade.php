<div class="p-3 border border-primary rounded-lg">
    <form method="POST" action="{{route('tweets.store')}}">
        @csrf

        <textarea
            name="body"
            class="w-100 @error('body') is-invalid @enderror"
            placeholder="What's up doc?"
            autofocus
        ></textarea>

        <hr class="my-2">

        <footer class="d-flex justify-content-end">
            <img
                src="{{ asset(auth()->user()->avatar) }}"
                alt="your avatar"
                class="rounded-full mr-2"
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

    @error('body')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
