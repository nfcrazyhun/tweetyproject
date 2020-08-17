<div class="p-3 border border-primary rounded-lg">
    <form method="POST" action="/tweets">
        @csrf

        <textarea
            name="body"
            class="w-100"
            placeholder="What's up doc?"
            autofocus
        ></textarea>

        <hr class="my-2">

        <footer class="pt-2 d-flex justify-content-end">
{{--            <img--}}
{{--                src="{{ auth()->user()->avatar }}"--}}
{{--                alt="your avatar"--}}
{{--                class="rounded-full mr-2"--}}
{{--                width="50"--}}
{{--                height="50"--}}
{{--            >--}}

            <button
                type="submit"
                class="btn btn-primary"
            >
                Tweet-it!
            </button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
