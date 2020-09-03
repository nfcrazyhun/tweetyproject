<x-app>
    <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label class="text-uppercase font-weight-bold"
                   for="name"
            >
                Name
            </label>

            <input class="form-control @error('name') is-invalid @enderror"
                   type="text"
                   name="name"
                   id="name"
                   value="{{ old('name',$user->name) }}"
            >

            @error('name')
                <p class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </p>
            @enderror
        </div>

        <div class="form-group">
            <label class="text-uppercase font-weight-bold"
                   for="username"
            >
                Username
            </label>

            <input class="form-control @error('username') is-invalid @enderror"
                   type="text"
                   name="username"
                   id="username"
                   value="{{ old('username',$user->username) }}"
            >

            @error('username')
            <p class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </p>
            @enderror
        </div>

        <div class="form-group">
            <label class="text-uppercase font-weight-bold"
                   for="description"
            >
                Description
            </label>

            <textarea
                class="form-control @error('description') is-invalid @enderror"
                name="description"
                id="description"
                rows="5"
            >{{ old('description',$user->description) }}</textarea>

            @error('description')
            <p class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </p>
            @enderror
        </div>

        <div class="form-group">
            <label class="text-uppercase font-weight-bold"
                   for="avatar"
            >
                Avatar
            </label>

            <div>
                <img src="{{ $user->avatar }}"
                     alt="your avatar"
                     width="150"
                     class="img-thumbnail"
                >
            </div>

            <div class="form-group mt-2">
                <input class="form-control-file"
                       type="file"
                       name="avatar"
                       id="avatar"
                       accept="image/*"
                >
            </div>

            @error('avatar')
            <p class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </p>
            @enderror
        </div>


        <div class="form-group">
            <label class="text-uppercase font-weight-bold"
                   for="banner"
            >
                Banner
            </label>

            <div class="form-group">
                <img src="{{ $user->banner }}"
                     alt="your banner"
                     class="img-thumbnail"
                     style="max-height:250px;max-width:100%"
                >
            </div>

            <input class="form-control-file"
                   type="file"
                   name="banner"
                   id="banner"
                   accept="image/*"
            >

            @error('banner')
            <p class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </p>
            @enderror
        </div>


        <div class="form-group">
            <label class="text-uppercase font-weight-bold"
                   for="email"
            >
                Email
            </label>

            <input class="form-control @error('email') is-invalid @enderror"
                   type="email"
                   name="email"
                   id="email"
                   value="{{ old('email',$user->email) }}"
            >

            @error('email')
            <p class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </p>
            @enderror
        </div>

        <div class="form-group">
            <label class="text-uppercase font-weight-bold"
                   for="password"
            >
                Password
            </label>

            <input class="form-control @error('password') is-invalid @enderror"
                   type="password"
                   name="password"
                   id="password"
            >

            @error('password')
            <p class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </p>
            @enderror
        </div>

        <div class="form-group">
            <label class="text-uppercase font-weight-bold"
                   for="password_confirmation"
            >
                Password Confirmation
            </label>

            <input class="form-control @error('password') is-invalid @enderror"
                   type="password"
                   name="password_confirmation"
                   id="password_confirmation"
            >
        </div>



        <div class="form-group d-flex justify-content-between">
            <button type="submit"
                    name="submit"
                    value="edit"
                    class="btn btn-primary"
            >
                Submit
            </button>

            <a href="{{ $user->path() }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</x-app>
