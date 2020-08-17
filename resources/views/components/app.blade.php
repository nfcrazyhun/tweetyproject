<x-master>
    <section class="app">
        <main class="mx-0">
            <div class="d-flex justify-content-between">
                <div class="col-2 px-0">
                    @include ('_sidebar-links')
                </div>

                <div class="col">
                    {{ $slot }}
                </div>

                @auth
                    <div class="col-3 px-0">
                        @include ('_friends-list')
                    </div>
                @endauth
            </div>
        </main>
    </section>
</x-master>
