@extends('layouts.app')

@section('title', $blog->title)

@push('styles')
<style>
    .blog-detail-hero {
        width: 100%;
        object-fit: cover;
        border-radius: 16px;
    }

    .blog-detail-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 2rem 1rem;
    }

    .blog-detail-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        line-height: 1.2;
    }

    .blog-detail-meta {
        color: #666;
        margin-bottom: 2rem;
        font-size: 0.9rem;
    }

    .blog-detail-content {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #333;
        white-space: pre-wrap;
        word-wrap: break-word;
    }

    .blog-detail-content p {
        margin-bottom: 1.5rem;
    }

    .blog-detail-content img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin: 1.5rem 0;
    }

    .related-blogs {
        padding: 3rem 0;
        margin-top: 4rem;
    }

    .related-blogs-title {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 2rem;
        text-align: center;
    }

    .related-blog-card {
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .related-blog-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 16px rgba(0,0,0,0.12);
    }

    .related-blog-img {
        width: 100%;
        aspect-ratio: 16/9;
        object-fit: cover;
    }

    .related-blog-content {
        padding: 1rem;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .related-blog-title {
        font-size: 1.1rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 0.5rem;
        flex-grow: 1;
    }

    .related-blog-date {
        font-size: 0.9rem;
        color: #888;
    }

    @media (max-width: 768px) {
        .blog-detail-title {
            font-size: 1.8rem;
        }
    }
</style>
@endpush

@section('content')
<!-- Hero Section -->
<div class="container px-0 mb-4">
    <div class="position-relative w-100 overflow-hidden rounded-4 mx-auto" 
         style="aspect-ratio: 16/9; max-width: 1200px;">
        <img src="{{ asset('storage/' . $blog->cover_image) }}"
             alt="{{ $blog->title }}"
             class="w-100 h-100"
             style="object-fit: cover;">
    </div>
</div>

<!-- Blog Content -->
<div class="blog-detail-container">
    <h1 class="blog-detail-title">{{ $blog->title }}</h1>

    <div class="blog-detail-meta">
        <span class="me-3">
            <i class="fas fa-calendar-alt me-1"></i>
            {{ $blog->created_at->format('d M Y') }}
        </span>
        <span class="me-3">
            <i class="fas fa-user me-1"></i>
            {{ $blog->author }}
        </span>
        <span>
            <i class="fas fa-folder me-1"></i>
            {{ $blog->category }}
        </span>
    </div>

    <div class="blog-detail-content">
        {!! $blog->content !!}
    </div>
</div>

<!-- Related Blogs -->
<div class="related-blogs">
    <div class="container">
        <h2 class="related-blogs-title">Artikel Lainnya</h2>
        <div class="row">
            @foreach($relatedBlogs as $relatedBlog)
            <div class="col-md-4 mb-4">
                <a href="{{ route('blog.show', $relatedBlog->slug) }}" class="text-decoration-none h-100 d-flex">
                    <div class="related-blog-card w-100">
                        <img src="{{ asset('storage/' . $relatedBlog->cover_image) }}" 
                             alt="{{ $relatedBlog->title }}" 
                             class="related-blog-img">
                        <div class="related-blog-content">
                            <div class="related-blog-title">{{ $relatedBlog->title }}</div>
                            <div class="related-blog-date">
                                <i class="fas fa-calendar-alt me-1"></i>
                                {{ $relatedBlog->created_at->format('d M Y') }}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
