@extends('layouts.app')

@section('title', $blog->title)

@push('styles')
<style>
    .blog-detail-hero {
        width: 100%;
        height: 500px;
        object-fit: cover;
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
        background: #f8f9fa;
        padding: 3rem 0;
        margin-top: 3rem;
    }
    
    .related-blogs-title {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 2rem;
    }
    
    .related-blog-card {
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        transition: transform 0.2s;
    }
    
    .related-blog-card:hover {
        transform: translateY(-5px);
    }
    
    .related-blog-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    
    .related-blog-content {
        padding: 1rem;
        white-space: pre-wrap;
        word-wrap: break-word;
    }
    
    .related-blog-title {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: #333;
    }
    
    .related-blog-date {
        font-size: 0.9rem;
        color: #666;
    }
    
    @media (max-width: 768px) {
        .blog-detail-hero {
            height: 300px;
        }
        
        .blog-detail-title {
            font-size: 1.8rem;
        }
    }
</style>
@endpush

@section('content')
<div class="blog-detail-hero-container">
    <img src="{{ $blog->cover_image }}" alt="{{ $blog->title }}" class="blog-detail-hero w-100">
</div>

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

<div class="related-blogs">
    <div class="container">
        <h2 class="related-blogs-title">Artikel Lainnya</h2>
        <div class="row">
            @foreach($relatedBlogs as $relatedBlog)
            <div class="col-md-4 mb-4">
                <a href="{{ route('blog.show', $relatedBlog->slug) }}" class="text-decoration-none">
                    <div class="related-blog-card">
                        <img src="{{ $relatedBlog->cover_image }}" alt="{{ $relatedBlog->title }}" class="related-blog-img">
                        <div class="related-blog-content">
                            <h3 class="related-blog-title">{{ $relatedBlog->title }}</h3>
                            <div class="related-blog-date">
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