<x-users-layout>
    <form action= {{ route('users.store') }} method="POST">
        @csrf
        <div class="form-label mb-3">
        <label for="name">Enter Username</label>
          <input
            type="text"
            class="form-control"
            name="name"
            id="name"
            value="{{old('name')}}"
            placeholder="Enter username"
          />
          @error('name')
              <small class="text-danger">{{$message}}</small>
          @enderror
        </div>
        <div class="form-label mb-3">
            <label for="email">Enter Email</label>
              <input
                type="email"
                class="form-control"
                name="email"
                id="email"
                value="{{old('email')}}"
                placeholder="Enter Email"
              />
              @error('email')
              <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="form-label">
                <label for="password">Enter Password</label>
                  <input
                    type="password"
                    class="form-control"
                    name="password"
                    id="password"
                    placeholder="Enter password"
                  />
                </div>
                @error('password')
                  <small class="text-danger">{{$message}}</small>
                @enderror
                <button type="submit" class="btn btn-primary">Submit</button>
                <p class="mt-3">Already have an account?<a class="link-primary" href={{ route('users.login') }}>Login</a></p>
            </form>
</x-users-layout>