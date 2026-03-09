@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        @forelse ($posts as $post)
            <x-post-card
                :url="route('posts.show', $post->id)"
                :image="$post->image_url"
                :category="$post->category->name ?? 'General'"
                :title="$post->title"
                :views="0"
                :excerpt="$post->excerpt"
            />
        @empty
            <p class="text-center">No posts found.</p>
        @endforelse
    </div>
@endsection
