<x-layout>
    <div class="w-100 container">
        <div
          class="mt-5 d-flex gap-3 flex-column justify-content-center align-items-center"
        >
          <img class="w-25" src="{{asset('storage/' . $post->image)}}" alt="" />
          <h2 class="text-secondary">{{$post->title}}</h2>
          <p>
            {{$post->body}}
          </p>
        </div>
      </div>
</x-layout>