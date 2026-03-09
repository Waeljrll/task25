@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <h2 class="lg-title">{{ $post->title }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <img src="{{ asset('image/' . $post->image_url) }}" class="card-img-top" alt="{{ $post->title }}" style="max-height: 420px; object-fit: cover;">

                        <div class="card-body">
                            <p class="text-muted mb-2">
                                Category: <strong>{{ $post->category->name ?? '-' }}</strong>
                            </p>

                            <h5 class="card-title">Excerpt</h5>
                            <p class="card-text">{{ $post->excerpt }}</p>

                            <h5 class="card-title mt-4">Content</h5>
                            <p class="card-text">{{ $post->content }}</p>

                            <div class="mt-4">
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
