<x-users-layout>
        <form action={{ route('users.authenicate')}} method="POST">
            @csrf
          <div class="form-label mb-3">
              <label for="email">Enter Email</label>
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  id="email"
                  value="{{old('email')}}"
                  placeholder="Enter email"
                />
                @error('email')
                    <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
              <div class="form-label ">
                  <label for="password">Enter Password</label>
                    <input
                      type="password"
                      class="form-control"
                      name="password"
                      id="password"
                      placeholder="Enter password"
                    />
                @error('password')
                <small class="text-danger">{{$message}}</small>
                @enderror
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <p class="mt-3">Don't have an account?<a class="link-primary" href={{route('users.create')}}>Register</a></p>
                </form>
      
</x-users-layout>