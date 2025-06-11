@extends('layouts.app')

@section('title', 'Blog')

@push('styles')
<link rel="stylesheet" href="/css/blog.css">
<style>
.blog-hero {
    width: 100%;
    height: 300px;
    object-fit: cover;
    border-radius: 32px;
    margin-bottom: 2rem;
}
.blog-title {
    position: absolute;
    left: 50%;
    top: 60%;
    transform: translate(-50%, -50%);
    color: #fff;
    font-size: 2.5rem;
    font-weight: bold;
    text-shadow: 0 2px 16px rgba(0,0,0,0.3);
}
.blog-hero-container {
    position: relative;
    margin-bottom: 2rem;
}
.blog-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 2rem;
}
.blog-card {
    background: #FAF6F0;
    border-radius: 20px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    padding: 1rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    transition: box-shadow 0.2s;
    overflow: hidden;
}
.blog-card:hover {
    box-shadow: 0 8px 24px rgba(0,0,0,0.08);
}
.blog-card-img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-radius: 16px;
    margin-bottom: 1rem;
}
.blog-card-title {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
    text-align: left;
    width: 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.blog-card-desc {
    font-size: 0.95rem;
    color: #7A7A7A;
    text-align: left;
    width: 100%;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    word-wrap: break-word;
}
@media (max-width: 600px) {
    .blog-hero {
        height: 180px;
        border-radius: 16px;
    }
    .blog-title {
        font-size: 1.5rem;
    }
}
</style>
@endpush

@section('content')
<div class="position-relative blog-hero-container">
    <img src="/images/contact-hero.jpg" alt="Blog Hero" class="blog-hero w-100">
    <div class="position-absolute bottom-0 start-50 translate-middle-x text-white text-center w-100 mb-5">
        <h1 class="display-5 fw-bold" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);">
            Blog
        </h1>
    </div>
</div>

<div class="blog-cards">
    @foreach ($blogs as $blog)
    <a href="{{ route('blog.show', $blog->slug) }}" class="text-decoration-none">
        <div class="blog-card">
            <img src="{{ $blog->cover_image }}" alt="Blog Post" class="blog-card-img">
            <div class="blog-card-title">{{ $blog->title }}</div>
            <div class="blog-card-desc">{{ Str::limit(strip_tags($blog->content), 120) }}</div>
        </div>
    </a>
    @endforeach
</div>
@endsection 