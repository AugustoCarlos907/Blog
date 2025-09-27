<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            POSTS
        </h2>
    </x-slot>

    <div class="py-12">

        {{-- create post --}}
        @empty($posts->count())
        <div class="max-w-7xl mx-auto mb-8 px-8 text-center">
            <p class="text-gray-400 mb-5">No post found</p>

            @can('post.create')
            <div class="max-w-7xl mx-auto mb-8 px-8">
                <a href="{{route('post.create')}}"class="bg-blue-700 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Create Post</a>
            </div>
            @endcan

        @else
        @can('post.create')
        <div class="max-w-7xl mx-auto mb-8 px-8">
            <a href="{{route('post.create')}}"class="bg-blue-700 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Create Post</a>
        </div>
        @endcan


        @endempty

        @foreach ($posts as $post)
            <x-post-component :post="$post" />
        @endforeach
    </div>

</x-app-layout>