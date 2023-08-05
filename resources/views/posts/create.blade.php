<x-layout>
    <div class="container card p-4">
        <form action={{ route('posts.store') }} method="POST" enctype="multipart/form-data">
            @csrf
          <div class="mb-3">
            <label for="title" class="form-label">Enter Title</label>
            <input
              type="text"
              name="title"
              class="form-control"
              id="title"
              placeholder="Enter title of your post"
              value="{{old('title')}}"
            />
            @error('title')
                <small class="text-danger">{{$message}}</small>
            @enderror
          </div>
          <div class="mb-3">
            <label for="tags" class="form-label">Enter tags</label>
            <input
              type="text"
              class="form-control"
              name="tags"
              id="tags"
              placeholder="Enter tags (comma separated) e.g. cars,trip..."
              value="{{old('tags')}}"
            />
            @error('tags')
            <small class="text-danger">{{$message}}</small>
            @enderror
          </div>
          <div class="mb-3">
            <label for="body" class="form-label">Enter post</label>
            <textarea
              class="form-control"
              placeholder="Enter your post here"
              id="body"
              name="body"
              rows="5"
              maxlength="500"
            >{{old('body')}}
            </textarea>
            @error('body')
            <small class="text-danger">{{$message}}</small>
            @enderror
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Choose file</label>
            <input
              type="file"
              class="form-control"
              name="image"
              id="image"
            />
            @error('image')
            <small class="text-danger">{{$message}}</small>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
</x-layout>