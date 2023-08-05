@props(['tagsCsv'])
    
    @php
        $tags = explode(',', $tagsCsv);
    @endphp
        <ul class="d-flex list-unstyled flex-row-reverse mt-3 mb-0">
@foreach ($tags as $tag)
@php
    $tag = trim($tag);
@endphp
    <li class="col mb-2">
    <a href="/?tag={{$tag}}" class="badge bg-success" style="text-decoration: none">{{$tag}}</a>
    </li>
@endforeach
</ul>

