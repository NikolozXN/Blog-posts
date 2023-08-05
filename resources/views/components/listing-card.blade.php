@props(['post'])
<div class="col mb-3">
    <div class="card" style="width: 18rem">
      <img
        src="{{$post->image ? asset('storage/' . $post->image) : asset('storage/images/no-image-icon-6.png')}}"
        class="card-img-top"
        alt="..."
      />
      <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
        <p class="card-text">            
               {{$post->body}}
        </p> 
        <a href={{route('posts.show', $post->id)}} class="btn btn-outline-success">Read more &rarr;</a>
        <x-tags :tagsCsv="$post->tags"/>
      </div>
    </div>
  </div>
