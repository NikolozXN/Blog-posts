<x-layout>
    <x-card class="mb-3">

        
            
    @unless (count($posts) == 0) 
    @foreach ($posts as $post)
        <x-listing-card :post="$post"/> 
    @endforeach  
    @else 
    <p>No posts found!</p>
    @endunless  
    </x-card>
</x-layout>