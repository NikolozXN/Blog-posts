<x-layout>
    <div class="container card p-4">
        <form action={{ route('posts.update', $post->id) }} method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label for="title" class="form-label">Enter Title</label>
            <input
              type="text"
              name="title"
              class="form-control"
              id="title"
              placeholder="Enter title of your post"
              value="{{$post->title}}"
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
              value="{{$post->tags}}"
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
            >{{$post->title}}
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
            <div class="d-flex justify-content-center mt-2"><img class="w-25" src="{{asset('storage/' . $post->image)}}" alt="">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            
            @error('image')
            <small class="text-danger">{{$message}}</small>
            @enderror
          </div>
          
        </form>
      </div>
</x-layout>