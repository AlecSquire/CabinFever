<x-layout>
    <x-slot name="heading">
        Blog
    </x-slot>

    @if ($blogs)

    @foreach ($blogs as $post)
    <div>
      <h4>Blog post</h4>  {{  $post['title'] }};
      <h4>Description</h4>   {{  $post['description'] }};
    </div>
    @else
    <p>No blog posts yet. Check back soon!</p>
    @endif


        @endforeach
    </x-layout>
