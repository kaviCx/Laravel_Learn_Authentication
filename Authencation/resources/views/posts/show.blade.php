<!-- resources/views/posts/show.blade.php -->

<x-layout>
    <h1>All Posts</h1>

    <ul>
        @foreach ($posts as $post)
            <li>
                {{ $post->id }} - {{ $post->title }}
            </li>
        @endforeach
    </ul>
</x-layout>
