@extends('layouts.app')

@section('title', $category->name)

@section('content')
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <h2 class="lg-title">{{ $category->name }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        @forelse ($posts as $post)
                            <div class="col-lg-6 col-md-6">
                                <article class="post-grid mb-5">
                                    <div class="post-thumb mb-4">
                                        <img src="{{ asset('images/news/f1.jpg') }}" class="img-fluid w-100">
                                    </div>
                                    <span class="cat-name text-color text-uppercase font-sm font-extra text-300">
                                        {{ $category->name }}
                                    </span>
                                    <h3 class="post-title mt-1">
                                        <a href="#">{{ $post->title }}</a>
                                    </h3>
                                    <span
                                        class="text-muted text-capitalize">{{ $post->created_at->format('M d, Y') }}</span>
                                </article>
                            </div>
                        @empty
                            <div class="col-12">
                                <p>No posts found.</p>
                            </div>
                        @endforelse
                    </div>

                    <div class="pagination-wrapper mt-5">
                        {{ $posts->links() }}
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="sidebar sidebar-right">
                        <div class="sidebar-wrap mt-5 mt-lg-0">
                            <!-- Sidebar content can go here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
