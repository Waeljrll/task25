@extends('layouts.app')

@section('content')
    <div class="container mt-5">

        @foreach ($posts as $post)
            <x-post-card :url="'#'" :image="'https://via.placeholder.com/600x400'" :category="'General'" :title="$post['title']" :
                :views="$post['views']" :excerpt="$post['content']" />
        @endforeach

    </div>
@endsection
